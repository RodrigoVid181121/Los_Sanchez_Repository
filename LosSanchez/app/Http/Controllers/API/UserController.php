<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PersonalAccessToken;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
USE Illuminate\Support\Carbon;

class UserController extends Controller
{
    //
    public function register(Request $request){

        
        $validator=Validator::make($request->all(),[
            'name'=>'required|string|min:2|max:100',
            'phone' => [
              'required',
              'string',
              'regex:/^[0-9]{8}$/', // Patrón para un número de teléfono de 10 dígitos
          ],
            'email'=>'required|string|email|max:100|unique:users',
            'password'=>'required|string|min:6|confirmed'


        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        #Creamos un token Random
        $token_registro=Str::random(40);

        #Creamos un registro en la base de datos
        $user=User::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'remember_token'=>$token_registro,
            'user_type'=>'cliente'
       ]);
       return response()->json([
        'success'=>true,
        'data'=>$user,
        'msg'=>'Usuario Ingresado exitosamente',
        'errors'=>'',
        'rows'=>1

     ]);
       
    }

    public function login(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'email'=>'required|string|email',
            'password'=>'required|string|min:6',
         ]);
 
        #$credentials = request(['email', 'password']);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        if(!$token = auth()->attempt($validator->validated())){
          return response()->json(['success'=>false,'msg'=>'Correo electronico o contraseña invalidas']);
        }
        //Obtener el id del usuario autenticado
        $userId=auth()->user()->id;
        
       return  $this->respondWithToken($token,$userId);
    }
    protected function respondWithToken($token,$userId)
    {    
      #Creamos un objeto de la clase Carbon
      $currrentDateTime=Carbon::now();
      $currentDateTime_Now=$currrentDateTime->toDateTimeString();

      #Fecha de expiracion
      $expiresIn =auth()->factory()->getTTL(); #Obtiene el timepo de vida predeterminado de los tokens
      $expirationDateTime=$currrentDateTime->addMinutes($expiresIn); # Calcula la fecha y hora exacta en el que el token expirara, pero en minutos
      $expirationDate_out=$expirationDateTime->toDateTimeString();#Convertimos la fecha y la hora en cadena de texto
      
      
      //Esto se tiene que configurar
      if($currentDateTime_Now  < $expirationDate_out){
        $state=1;
      }
      else{
        $state=0;
      }
      
       $ResultadoPersonal=PersonalAccessToken::create([
          'users_id'=>$userId,
          'state'=>$state,
          'last_used_at'=>$expirationDate_out, #Este campo se necesita configurar
          'expires_at' =>$expirationDate_out,
          'created_at'=>$currentDateTime_Now
        ]);

      return response()->json([
          'success'=>true,
          'users_id'=>$userId,
          'access_token' => $token,
          'state'=>$state,
          'last_used_at'=>$expirationDate_out, #Este campo se necesita configurar
          'expires_at' =>$expirationDate_out,
          'created_at'=>$currentDateTime_Now
      ]);
    }



    public function logout(){

      try {
        auth()->logout();
        return response()->json(['success'=>true,'msg'=>'User logged out']);

      } catch (\Exception $e) {
        return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
      }
    }
}

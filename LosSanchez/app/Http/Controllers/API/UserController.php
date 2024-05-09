<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
    
    public function login(Request $request){
     $request->validate([
        'email'=>'required',
        'password'=>'required'
     ]);

     $user=User::where('email',$request->email)->first();

     if(!$user|| !Hash::check($request->password,$user->password)){
        return response([
          'message'=>'The provided credentials are incorrect'
        ]);
     }
     $token=$user->createToken('auth_token')->accessToken;
     return response([
       'token'=>$token
     ]);

    }

    public function logout(Request $request){
      $request->user()->token()->revoke();

      return response([
         'message'=>'Logged out successfully'
      ]);
 
    }
}

<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//Controlador para realizarl la carga de los clientes, busqueda por medio de telefono y el eliminado de clientes

class GetUsersController extends Controller{
    public function getUsers() {

        $users = DB::table('users')->orderBy('id', 'asc')->cursorPaginate(10);

        return view('Vistas.Clientes.Clientes', ['user'=> $users]);
    }

    public function searchUsers(Request $request) {

        $phone = $request->input('inputSearch');
        

        if($phone != ""){
            $users = DB::select('select * from users where phone='.$phone.'');
        }else{
            $users = null;
        }

        return view('Vistas.Clientes.clientesBusqueda', ['user'=> $users]);

        
    }

    public function deleteUser(Request $request) {

        $id = $request->input('inputDelete');

        DB::table('personal_access_token')->where('users_id', $id)->delete();
        DB::table('users')->where('id', $id)->delete();

        $users = DB::table('users')->orderBy('id', 'asc')->cursorPaginate(10);

        return view('Vistas.Clientes.Clientes', ['user'=> $users]);

        
    }
    
}
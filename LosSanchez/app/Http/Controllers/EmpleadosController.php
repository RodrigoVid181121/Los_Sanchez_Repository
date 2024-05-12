<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleados = User::all()->where ('user_type','=','empleado');
        return response()->json(['response'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            $user = new User;
            $name=$request->input('inputNames');
            $surname=$request->input('inputSurNames');
            $user->name=$name.' '.$surname;
            $user->email=$request->input('inputEmail');    
            $user->phone=$request->input('inputPhone'); 
            $user->password=$request->input('inputPass'); 
            $user->user_type=$request->input('cargo'); 
            $user->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $mail, Request $request)
    {
        //
           
            $nam=$request->input('inputNames');
            $surname=$request->input('inputSurNames');
            $names=$nam.' '.$surname;   
            $phone=$request->input('inputPhone'); 
            $password=$request->input('inputPass'); 
            $user_type=$request->input('cargo'); 
            
            $updateTable = DB::update('UPDATE users SET name=?, phone=?, password=?, user_type=? WHERE email=?',[$names,$phone,$password,$user_type,$mail]);
            
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $mail)
    {
        //
        $deleteUser = DB::update('DELETE FROM users WHERE email=?',[$mail]);
    }
}

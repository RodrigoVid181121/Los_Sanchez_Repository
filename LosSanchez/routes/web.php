<?php

use App\Http\Controllers\GetUsersController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Vistas.Home');
});

Route::get('/empleados', function () {
    return view('Vistas.Empleados.Empleados');
});

Route::get('/clientes', function () {
    return view('Vistas.Clientes.Clientes');
});
Route::get('/clientesBusqueda', function () {
    return view('Vistas.Clientes.ClientesBusqueda');
});
Route::get('/registro', function () {
    return view('Vistas.Clientes.Registro');
});

Route::prefix('reservaciones')->group(function(){
    Route::get('/clientes', function () {
        return view('Vistas.Reservaciones.ReservacionesClientes');
    });
    Route::get('/empleados', function () {
        return view('Vistas.Reservaciones.ReservacionesEmpleado');
    });
});


//Rutas utilizadas para la cartera de clientes
Route::get('/user',[GetUsersController::class, 'getUsers']);
Route::get('/findUser',[GetUsersController::class, 'searchUsers']);
Route::get('/User',[GetUsersController::class, 'deleteUser']);
<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Vistas.Home');
});

Route::get('/empleados', function () {
    return view('Vistas.Empleados.Empleados');
});

Route::get('/login', function () {
    return view('Vistas.InicioSesion');
});

Route::get('/clientes', function () {
    return view('Vistas.Clientes.Clientes');
});
Route::get('/registro', function () {
    return view('Vistas.Clientes.Registro');
});

Route::get('/Vistas/Clientes/Registro', function () {
    return view('registro');
});

Route::resource('Vistas/Reservaciones',ReservationController::class);
Route::resource('Vistas/Menu', 'MenuController');


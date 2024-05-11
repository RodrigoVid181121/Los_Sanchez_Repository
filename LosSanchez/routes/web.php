<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Vistas.InicioSesion');
});

Route::get('/empleados', function () {
    return view('Vistas.Empleados.Empleados');
});

Route::get('/clientes', function () {
    return view('Vistas.Clientes.Clientes');
});
Route::get('/registro', function () {
    return view('Vistas.Clientes.Registro');
});

<<<<<<< HEAD
Route::resource('Vistas/Categorias','CategoriaController');
Route::resource('Vistas/Menu', 'MenuController');
=======
Route::get('/Vistas/Clientes/Registro', function () {
    return view('registro');
});

Route::resource('Vistas/Reservaciones',ReservationController::class);
Route::resource('Vistas/Menu', 'MenuController');
>>>>>>> b094444514cf7208f194d4fb1f3658c245d6e0dc

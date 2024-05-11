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

<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::resource('Vistas/Categorias','CategoriaController');
Route::resource('Vistas/Menu', 'MenuController');
=======
>>>>>>> bc190505fa1c5f18449f4a518e0f47630fce12b5
Route::get('/Vistas/Clientes/Registro', function () {
    return view('registro');
});

Route::resource('Vistas/Reservaciones',ReservationController::class);
Route::resource('Vistas/Menu', 'MenuController');
<<<<<<< HEAD

=======
>>>>>>> b094444514cf7208f194d4fb1f3658c245d6e0dc
>>>>>>> bc190505fa1c5f18449f4a518e0f47630fce12b5

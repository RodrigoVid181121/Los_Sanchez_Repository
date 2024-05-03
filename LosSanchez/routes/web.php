<?php

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

Route::resource('Vistas/Categorias','CategoriaController');
Route::resource('Vistas/Menu', 'MenuController');

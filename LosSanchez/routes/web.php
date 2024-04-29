<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Vistas.InicioSesion');
});

Route::resource('Vistas/Categorias','CategoriaController');
Route::resource('Vistas/Menu', 'MenuController');
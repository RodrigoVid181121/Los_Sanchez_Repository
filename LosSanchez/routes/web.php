<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Vistas.Home');
});

Route::resource('Vistas/Categorias','CategoriaController');
Route::resource('Vistas/Menu', 'MenuController');
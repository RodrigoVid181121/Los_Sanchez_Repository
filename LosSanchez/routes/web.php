<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Vistas/Categorias','CategoriaController');
Route::resource('Vistas/Menu', 'MenuController');
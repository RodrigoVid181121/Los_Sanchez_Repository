<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicioSesion', function () {
    return view('inicioSesion');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/controlEmpleados', function () {
    return view('controlEmpleados');
});


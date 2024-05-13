<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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


/*
    Route::resource('Vistas/Categorias','CategoriaController');
    Route::resource('Vistas/Menu', 'MenuController');


    Route::get('/Vistas/Clientes/Registro', function () {
        return view('registro');
    });

    Route::resource('Vistas/Reservaciones',ReservationController::class);
    Route::resource('Vistas/Menu', 'MenuController');

*/

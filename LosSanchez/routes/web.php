<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Vistas.Home');
});

Route::get('/aboutUs', function () {
    return view('Vistas.Nosotros');
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

Route::get('/empleados', function () {
    return view('Vistas.Empleados.Empleados');
});

Route::get('/clientes', function () {
    return view('Vistas.Clientes.Clientes');
});
Route::get('/registro', function () {
    return view('Vistas.Clientes.Registro');
});

Route::prefix('/reservaciones')->group(function(){
    Route::get('/clientes', function () {
        return view('Vistas.Reservaciones.ReservacionesClientes');
    });
    Route::get('/empleados', function () {
        return view('Vistas.Reservaciones.ReservacionesEmpleado');
    });
});

Route::get('/menuclients',function(){
    return view('Vistas.Menu.Index');
});

Route::get('/menuemployee',function(){
    return view('Vistas.Menu.IndexEmplo');
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

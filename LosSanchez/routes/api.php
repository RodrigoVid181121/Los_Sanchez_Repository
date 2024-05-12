<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservationEmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/v1/clients')->group(function(){
    //Rutas para reservaciones
    Route::get('/getReserve',[ReservationController::class, 'index']);
    Route::get('/getReservations',[ReservationController::class,'show']);
    Route::post('/reserve', [ReservationController::class,'store']);
    Route::put('/cancelReservation/{id}/{id2}',[ReservationController::class,'cancelReservation']);

    //rutas para menú
});

Route::prefix('/v1/employee')->group(function(){
    //Rutas para reservaciones
    Route::get('/getReserve',[ReservationEmployeeController::class,'index']);
    Route::get('/getReservations',[ReservationEmployeeController::class,'show']);
    Route::post('/reserve',[ReservationEmployeeController::class,'store']);
    Route::put('/cancelReservation/{id}/{id2}',[ReservationEmployeeController::class,'cancelReservation']);
    Route::get('/search/{encrypt}',[ReservationEmployeeController::class,'searchReservation']);

    //rutas para menú
    Route::get('/getMenu',[MenuController::class,'GetMenu']);
});

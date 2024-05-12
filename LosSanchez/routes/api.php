<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/v1/clients')->group(function(){
    Route::get('/getReserve',[ReservationController::class, 'index']);
    Route::get('/getReservations',[ReservationController::class,'show']);
    Route::post('/reserve', [ReservationController::class,'store']);
    Route::put('/cancelReservation/{id}/{id2}',[ReservationController::class,'cancelReservation']);
});

Route::prefix('/Empleados')->group(function(){
    Route::get('/getEmpleados',[ReservationController::class, 'index']);
    Route::post('/logEmpleados', [ReservationController::class,'store']);
    Route::put('/editEmpleados/{mail}',[ReservationController::class,'edit']);
    Route::delete('/deleteEmpleados/{mail}',[ReservationController::class,'destroy']);
});
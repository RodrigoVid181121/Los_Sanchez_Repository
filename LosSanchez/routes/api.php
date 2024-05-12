<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\API\GetUserController;
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
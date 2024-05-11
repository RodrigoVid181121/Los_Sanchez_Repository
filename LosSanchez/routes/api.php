<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;


/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
*/

Route::group(['middleware'=>'api'],function($routes){

    Route::post('/register',[UserController::class,'register']);
    Route::post('/login',[UserController::class,'login']);
    Route::get('/logout',[userController::class,'logout']);
});

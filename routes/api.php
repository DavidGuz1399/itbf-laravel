<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

//Route api para obtener crear actualizar y eliminar
Route::apiResource('hotels', HotelController::class);
//Ruta para crear el tipo de habitacion al hotel
Route::post('room',[HotelController::class,'createTypeRoom']);
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
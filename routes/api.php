<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

Route::apiResource('hotels', HotelController::class);
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
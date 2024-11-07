<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('/doctor', [DoctorController::class, 'index']);
Route::get('/doctor/network-aggregates/{id}', [DoctorController::class, 'networkAggregates']);

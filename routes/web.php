<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;

Route::get('/', function () {
    return view('welcome',['name' => 'Mariana']);
});
Route::get('/suma', [OperacionesController::class,'suma']);
Route::get('/resta', [OperacionesController::class,'resta']);
Route::get('/multiplicacion', [OperacionesController::class,'multiplicacion']);
Route::get('/division', [OperacionesController::class,'division']);


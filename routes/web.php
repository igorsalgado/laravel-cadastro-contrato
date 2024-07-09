<?php

use App\Http\Controllers\ContratoController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ContratoController::class, 'index']);



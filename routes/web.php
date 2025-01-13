<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/calcs/{i1}/{operator}/{i2}', [CalcController::class, 'calcs']);

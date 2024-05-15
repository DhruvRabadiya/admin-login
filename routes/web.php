<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfileController;
Route::get('/', function () {
    return view('login');
});


Route::get('/profile', [loginController::class, 'login']);
Route::get('/profile', [ProfileController::class, 'profile']);


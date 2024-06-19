<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth.login', [AuthController::class, 'login'])->name('auth.login');
Route::post('auth.login', [AuthController::class, 'doLogin']);
Route::delete('auth.logout', [AuthController::class, 'logout'])->name('auth.logout');;

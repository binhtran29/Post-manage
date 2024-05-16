<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [DashboardController::class,'login'])->name('login');
Route::get('/logout', [DashboardController::class,'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class,'dashboard']);

Route::resource('/user', UserController::class);
<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');

Route::get('/register', [MainController::class, 'register'])->name('register');

Route::get('/login', [MainController::class, 'login'])->name('login');

Route::post('/to_register', [MainController::class, 'to_register'])->name('to_register');

Route::post('/to_login', [MainController::class, 'to_login'])->name('to_login');

Route::get('/user', [MainController::class, 'user_room'])->name('user.room');

Route::post('/logout', [MainController::class, 'logout'])->name('logout');

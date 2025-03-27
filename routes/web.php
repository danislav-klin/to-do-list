<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');

Route::get('/register', [MainController::class, 'register'])->name('register');

Route::get('/login', [MainController::class, 'login'])->name('login');


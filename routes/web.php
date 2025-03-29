<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');

Route::get('/register', [MainController::class, 'register'])->name('register');

Route::get('/login', [MainController::class, 'login'])->name('login');

Route::post('/to_register', [MainController::class, 'to_register'])->name('to_register');

Route::post('/to_login', [MainController::class, 'to_login'])->name('to_login');

Route::get('/user', [MainController::class, 'user_room'])->name('user.room');

Route::post('/logout', [MainController::class, 'logout'])->name('logout');

// CRUD
Route::get('/user/{id}/add', [UserController::class, 'addTask'])->name('addTask');

Route::post('user/{id}/adding', [UserController::class, 'store'])->name('user.store');

Route::get('/user/{id}/show/{list}', [UserController::class, 'show'])->name('user.show');

Route::put('/user/{id}/show/{list}/update', [UserController::class, 'update'])->name('user.update');

Route::delete('/user/{id}/show/{list}/delete', [UserController::class, 'delete'])->name('user.delete');





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [LoginController::class, 'view'])->name('rota.renderLogin');
Route::post('/auth', [LoginController::class, 'login'])->name('rota.login');
Route::get('/register', [RegisterController::class, 'view'])->name('route.register.view');
Route::post('/register', [RegisterController::class, 'register'])->name('route.register.register');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'index'])->name('rota.renderLogin');
Route::post('/login', [LoginController::class], 'login')->name('rota.login');

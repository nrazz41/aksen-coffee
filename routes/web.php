<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/home', [HomeController::class, 'index'])->name('halaman-home');

Route::get('/', [LoginController::class, 'index'])->name('halaman-login');

Route::post('/auth/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('halaman-regis');

Route::post('/register/login', [RegisterController::class, 'regis'])->name('regis');

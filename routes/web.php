<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('iniciar-sesion');

Route::post('/login', [LoginController::class, 'login'])->name('login-post');

Route::get('/register', function () {
    return view('pages.auth.register');
})->name('registro');

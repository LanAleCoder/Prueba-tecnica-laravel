<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('iniciar-sesion');

Route::get('/register', function () {
    return view('pages.auth.register');
})->name('registro');

<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [LoginController::class, 'authentication'])->name('login.auth');

Route::resource('siswa', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});
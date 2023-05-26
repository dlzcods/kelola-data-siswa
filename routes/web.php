<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authentication'])->name('login.auth');

Route::group(['middleware' => 'auth.siswa'], function() {
    Route::resource('siswa', SiswaController::class);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});
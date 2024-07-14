<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])
     ->name('auth.showLogin');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'doLogin'])
     ->name('auth.doLogin');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegisterForm'])
     ->name('auth.showRegister');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'doRegister'])
     ->name('auth.doRegister');
Route::view('/register/verify', 'auth.verify-email')
     ->middleware('auth')
     ->name('verification.notice');

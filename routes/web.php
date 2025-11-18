<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('landingPage');
});

Route::middleware('guest')->group(function (){
    Route::get('/login', [loginController::class, 'login'])->name('login');
    Route::post('/login', [loginController::class, 'verif'])->name('verifLogin');

    Route::get('/register', [loginController::class, 'showRegis'])->name('showRegister');
    Route::post('/register', [loginController::class, 'regis'])->name('sendRegister');
});

Route::middleware('auth')->group(function () {
    Route::get('/Dashboard', [dashboardController::class, 'showDB'])->name('dashboard');
});
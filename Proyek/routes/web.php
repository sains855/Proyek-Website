<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['login'=> false, 'register'=> false]);

Route::middleware('guest')->group(function(){
    Route::get('/login',Login::class)->name('login');
    Route::get('/register',Register::class)->name('register');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

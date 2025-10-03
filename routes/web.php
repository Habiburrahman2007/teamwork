<?php

use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\HomePage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');

Route::get('/dashboard', HomePage::class)
    ->name('dashboard')
    ->middleware('auth');

    
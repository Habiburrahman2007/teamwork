<?php

use App\Livewire\AddPortofolio;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\HomePage;

Route::get('/', LandingPage::class);

Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');

Route::get('/dashboard', HomePage::class)
    ->name('dashboard')
    ->middleware('auth');

Route::get('/add-portfolio', AddPortofolio::class);

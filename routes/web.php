<?php

use App\Livewire\HomePage;
use App\Livewire\Auth\Login;
use App\Livewire\LandingPage;
use App\Livewire\AddPortfolio;
use App\Livewire\Auth\Register;
use App\Livewire\EditPortfolio;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class);

Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', HomePage::class)->name('dashboard');
    Route::get('/add-portfolio', AddPortfolio::class)->name('add-portfolio'); 
    Route::get('/portfolio/{id}/edit', EditPortfolio::class)->name('portfolio.edit');
});


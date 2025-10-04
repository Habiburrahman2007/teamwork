<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Livewire\HomePage;
use App\Livewire\AddPortfolio; // pastikan ini ada dan hanya sekali

Route::get('/', fn () => view('welcome'));

Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', HomePage::class)->name('dashboard');
    Route::get('/add-portfolio', AddPortfolio::class)->name('add-portfolio'); // <-- benar: Class langsung, tanpa []
});

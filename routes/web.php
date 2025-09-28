<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Livewire\Auth\Login;

Route::get('/login', Login::class)->name('login');
Route::get('/home', function () {
    return "User Dashboard";
})->name('home')->middleware('auth:web');

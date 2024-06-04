<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HeroController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HeroController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
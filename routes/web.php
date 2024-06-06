<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/heroes/{hero}', [HeroController::class, 'show'])->name('heroes.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');


// Contact form for users
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin view for messages
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/messages', [ContactController::class, 'index'])->middleware('can:viewAny,App\Models\ContactMessage')->name('admin.messages');
    Route::delete('/admin/messages/{message}', [ContactController::class, 'destroy'])->middleware('can:delete,App\Models\ContactMessage')->name('contact.destroy');
});

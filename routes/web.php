<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

// Route Halaman Utama (Home)
Route::get('/home', [HalamanController::class, 'home'])->name('home');

// Route Halaman About
Route::get('/about', [HalamanController::class, 'about'])->name('about');

// Route Halaman Work (Projects)
Route::get('/projects', [HalamanController::class, 'projects'])->name('projects');

// Route Halaman Contact
Route::get('/contact', [HalamanController::class, 'contact'])->name('contact');

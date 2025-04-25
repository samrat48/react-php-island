<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [PageController::class, 'home'])->name('home');

// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
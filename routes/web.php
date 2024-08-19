<?php

use App\Http\Controllers\PageCotroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageCotroller:: class, 'home'])->name('home');
Route::get('/about', [PageCotroller:: class, 'about'])->name('about');
Route::get('/contact', [PageCotroller:: class, 'contact'])->name('contact');

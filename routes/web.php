<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::view('newsletter', 'newsletter')->name('newsletter');
Route::get('article/{post}', [PostController::class, 'show'])->name('article');
Route::view('about', 'about')->name('about');
Route::view('welcome', 'welcome')->name('welcome');


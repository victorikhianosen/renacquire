<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');

Route::get('services', [PagesController::class, 'services'])->name('services');
Route::get('team', [PagesController::class, 'team'])->name('team');
Route::get('about', [PagesController::class, 'about'])->name('about');


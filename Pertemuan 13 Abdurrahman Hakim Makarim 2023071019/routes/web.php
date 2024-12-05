<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;


Route::get('/baru/home', [HalamanController::class, 'home'])->name('topmenu1');
Route::get('/baru/about', [HalamanController::class, 'about'])->name('topmenu2');
Route::get('/baru/contact', [HalamanController::class, 'contact'])->name('topmenu3');


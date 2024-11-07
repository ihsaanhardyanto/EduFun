<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/detail/{slug}', [DetailController::class, 'show'])->name('detail.show');
Route::get('/writers', [WriterController::class, 'index'])->name('writers');
Route::get('/writers/{slug}', [WriterController::class, 'show'])->name('writers.show');
Route::get('/about', [AboutController::class, 'index'])->name('about');

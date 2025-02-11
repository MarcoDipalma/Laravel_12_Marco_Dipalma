<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/product', [ProductController::class, 'form'])->name('form');

Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/all', [ProductController::class, 'index'])->name('index');

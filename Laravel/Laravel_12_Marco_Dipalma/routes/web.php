<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');

Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');

Route::delete('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

// Tag

Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');

Route::post('/tag/store', [TagController::class, 'store'])->name('tag.store');

Route::get('/tag/index', [TagController::class, 'index'])->name('tag.index');

Route::get('/tag/show/{tag}', [TagController::class, 'show'])->name('tag.show');


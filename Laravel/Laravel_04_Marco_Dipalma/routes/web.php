<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/article', [ArticleController::class, 'article'])->name('indice');

Route::get('/article/detail/{subject}', [ArticleController::class, 'articleDetail'])->name('dettaglioArticolo');



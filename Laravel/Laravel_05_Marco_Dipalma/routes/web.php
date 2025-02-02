<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/contact-us', [PublicController::class, 'contactUs'])->name('contattaci');

Route::post('/contact-us/submit', [PublicController::class, 'submit'])->name('contactSubmit');

<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/about-us', [PublicController::class, 'chiSiamo'])->name('chiSiamo');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');

Route::get('/servizi/dettaglio/{name}', [PublicController::class, 'dettaglio'])->name('dettaglioServizio');

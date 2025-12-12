<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'accueil']);
Route::get('/a-propos', [PageController::class, 'apropos']);

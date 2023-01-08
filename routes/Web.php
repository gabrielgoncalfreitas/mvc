<?php

use App\Http\Route;
use App\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
Route::post('/post', [WelcomeController::class, 'post']);

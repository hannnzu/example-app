<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/landing', [LandingPageController::class, 'landing']);

Route::get('/products', [ProductController::class, 'index']);

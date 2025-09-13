<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/landing', [LandingPageController::class, 'landing']); {
    return view('landing');
}

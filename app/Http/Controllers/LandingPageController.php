<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landing() {
    $data = [
        'message' => 'Selamat datang!'
    ];
    return view('landing', $data);
}
}
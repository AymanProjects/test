<?php

use App\Http\Controllers\SolutionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/ENOA', 'pages.enoa');
Route::view('/AR-Studio', 'pages.ar-studio');
Route::view('/Unity', 'pages.unity');
Route::view('/Digital-Helmet', 'pages.digital-helmet');

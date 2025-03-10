<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api-weather', function () {
    return view('api-weather');
});

Route::get('/photoshop', function () {
    return view('photoshop');
});
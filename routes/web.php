<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('testing');
});

Route::get('/about', function () {
    return view('about');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/buku', function () {
    return view('buku');
});
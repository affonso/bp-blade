<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

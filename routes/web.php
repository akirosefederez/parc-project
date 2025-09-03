<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// New route for original.blade.php
Route::get('/home', function () {
    return view('original');
})->name('home');


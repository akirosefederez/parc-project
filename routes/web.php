<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Welcome Page
Route::get('/welcome', function () {
    return view('welcome'); // resources/views/welcome.blade.php
})->name('welcome');

// New route for original.blade.php
Route::get('/home', function () {
    return view('original');
})->name('home');

// Simple route returning a view
Route::get('/donate', function () {
    return view('donate'); // make sure donate.blade.php exists in resources/views
})->name('donate');

// Simple route returning a view
Route::get('/adopt', function () {
    return view('adopt'); // make sure adopt.blade.php exists in resources/views
})->name('adopt');

// Simple route returning a view
Route::get('/donateform', function () {
    return view('donateform'); // make sure donateform.blade.php exists in resources/views
})->name('donateform');

// Simple route returning a view
Route::get('/adoptform', function () {
    return view('adoptform'); // make sure adoptform.blade.php exists in resources/views
})->name('adoptform');

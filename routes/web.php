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
Route::get('/contacts', function () {
    return view('contacts'); // make sure contacts.blade.php exists in resources/views
})->name('contacts');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/about', function () {
    return view('about'); 
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user', function () {
    $username = request()->input('username', 'Guest');
    
    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }

    return view('user', ['username' => $username]);
});

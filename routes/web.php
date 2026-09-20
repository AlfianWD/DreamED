<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('homepage');
});

Route::get('/coming-soon', function() {
    return Inertia::render('announcement/coming-soon');
});

Route::get('/login', function() {
    return Inertia::render('auth/login');
});

Route::get('/register', function() {
    return Inertia::render('auth/register');
});

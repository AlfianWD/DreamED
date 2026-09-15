<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('homepage');
});

Route::get('/coming-soon', function() {
    return Inertia::render('coming-soon');
});

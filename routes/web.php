<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});

// Route::get(uri: '/', action: function (): Response {
//     return Inertia::render('Login');
// });
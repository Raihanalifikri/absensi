<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('pages.dashboard');
})-> name('home');



// Routenya pindah ke Provider > Fortify

// Route::get('login', function () {
//     return view('pages.auth.login');
// });

// Route::get('register', function () {
//     return view('pages.auth.register');
// });
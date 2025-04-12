<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/auth/login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/form', function () {
        return view('form');
    });
    Route::get('/view_post', function () {
        return view('/post/viewPost');
    });
});



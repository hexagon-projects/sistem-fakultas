<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Profile\ProfileController;

Route::get('/login', function () {
    return view('/auth/login');
})->name('login');

Route::get('/', function () {
    return redirect()->route('login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
    Route::put('/profile/update/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/form', function () {
        return view('form');
    });

    // POST
    Route::get('/view_post', function () {
        return view('blog_post/post/viewPost');
    });
    Route::get('/create_post', function () {
        return view('blog_post/post/createPost');
    });
    Route::post('/upload_post', [PostController::class, 'store'])->name('posts.store');


    Route::get('/view_agenda', function () {
        return view('blog_post/agenda/viewAgenda');
    });

   
});



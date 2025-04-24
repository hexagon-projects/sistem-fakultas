<?php

use App\Models\User;
use App\Models\Slider;
use App\Models\Ourteam;
use App\Models\Category;
use App\Models\Identity;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Profile\AboutController;
use App\Http\Controllers\Profile\OurteamController;
use App\Http\Controllers\Profile\PartnerController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Setting_menu\MetaController;
use App\Http\Controllers\Setting_menu\SliderController;
use App\Http\Controllers\Setting_menu\IdentityController;
use App\Http\Controllers\Setting_menu\SideBannerController;
use App\Models\Partner;

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
    
    Route::get('/view_post', [PostController::class, 'index'])->name('posts.index');
      
    Route::get('/create_post', function () {
        return view('blog_post/post/createPost');
    });
    Route::post('/upload_post', [PostController::class, 'store'])->name('posts.store');
    
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::get('/post/{id}/delete', [PostController::class, 'destroy'])->name('post.delete');

    // Categories
    Route::get('/view_category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create_category', function () {
        return view('blog_post/category/createCategory');
    });
    Route::post('/upload_category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/{id}/delete', [CategoryController::class, 'destroy'])->name('category.delete');




    // Menu Setting
    // Identity
    Route::get('/identity', [IdentityController::class, 'index'])->name('identity.index');
    Route::put('/identity', [IdentityController::class, 'update'])->name('identity.update');

    // Side Banner 
    Route::get('/side_banner', [SideBannerController::class, 'index'])->name('sideBanner.index');
    Route::put('/side_banner', [SideBannerController::class, 'update'])->name('sideBanner.update');

    // Sliders
    Route::get('/view_slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/create_slider', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/upload_slider', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
    Route::put('/slider/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/{id}/delete', [SliderController::class, 'destroy'])->name('slider.delete');


    // Meta
    Route::get('/view_meta', [MetaController::class, 'index'])->name('meta.index');
    Route::put('/meta', [MetaController::class, 'update'])->name('meta.update');

    Route::get('/view_google', [MetaController::class, 'google'])->name('google.index');
    Route::put('/google', [MetaController::class, 'googleUpdate'])->name('google.update');

    Route::get('/view_chat', [MetaController::class, 'chat'])->name('chat.index');
    Route::put('/chat', [MetaController::class, 'chatUpdate'])->name('chat.update');


    // Menu Profile
    // About Us
    Route::get('/view_ourteam', [OurteamController::class, 'index'])->name('ourteam.index');
    Route::get('/create_ourteam', [OurteamController::class, 'create'])->name('ourteam.create');
    Route::post('/upload_ourteam', [OurteamController::class, 'store'])->name('ourteam.store');
    Route::get('/ourteam/{id}/edit', [OurteamController::class, 'edit'])->name('ourteam.edit');
    Route::put('/ourteam/{id}', [OurteamController::class, 'update'])->name('ourteam.update');
    Route::get('/ourteam/{id}/delete', [OurteamController::class, 'destroy'])->name('ourteam.delete');

    // Partners
    Route::get('/view_partner', [PartnerController::class, 'index'])->name('partner.index');
    Route::get('/create_partner', [PartnerController::class, 'create'])->name('partner.create');
    Route::post('/upload_partner', [PartnerController::class, 'store'])->name('partner.store');
    Route::get('/partner/{id}/edit', [PartnerController::class, 'edit'])->name('partner.edit');
    Route::put('/partner/{id}', [PartnerController::class, 'update'])->name('partner.update');
    Route::get('/partner/{id}/delete', [PartnerController::class, 'destroy'])->name('partner.delete');













    




    Route::get('/view_agenda', function () {
        return view('blog_post/agenda/viewAgenda');
    });
});



<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('hi', function () {
    return sayHi();
});

Route::get('/' , [HomeController::class , "get_home"] );

Route::get('/about', [AboutController::class , "get_about"] );

Route::prefix("/products")->group(function(){
    Route::get('/', [ProductController::class, "all_products"]);

    Route::middleware(['isAdmin'])->group(function(){

        Route::get('/create', [ProductController::class, "create_product"]);

        Route::post('/insert', [ProductController::class, "insert"]);

        Route::get('/delete/{id}', [ProductController::class, "delete"]);
    
    });

    Route::get('/{id}', [ProductController::class, "show_details"]);

    Route::get('/edit/{id}', [ProductController::class, "edit"]);

    Route::put('/update/{product}', [ProductController::class, "update"])->name('product.update');
});

// Authentication

Route::get('/register' , [RegisterController::class, "register"])->name('register');

Route::post('/register', [RegisterController::class, "handle_register"])->name('register');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'handle_login'])->name('login');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

// naming my route 
// Route::get('/admin/product/insert/test', [HomeController::class , "category"])->name("category");

Route::get('/userposts', function (){
    return Auth::user()->posts;
});

Route::get('/allposts/{id}', function ($id){
    $post = POST::findorfail($id);
    // return $post->user->fname . " " . $post->user->lname;
    return $post->user;
});
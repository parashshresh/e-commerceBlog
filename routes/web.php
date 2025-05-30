<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

// START for vite react frontend and laravel backend
use App\Models\Product;
// END for vite react frontend and laravel backend
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pricing', function () {
    return view('pricing');
});
//START for blog
Route::resource('posts', PostController::class);
Route::get('/blog', [PostController::class, 'index'])->name('blog');

// END for blog

Route::resource('products', ProductController::class);
// for single product page
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');


Route::resource('categories', CategoryController::class);


// for vite react frontend and laravel backend
Route::get('/api/products', function () {
    return Product::all();
});
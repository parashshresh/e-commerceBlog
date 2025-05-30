<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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
Route::resource('products', ProductController::class);
// for single product page
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// for vite react frontend and laravel backend
Route::get('/api/products', function () {
    return Product::all();
});
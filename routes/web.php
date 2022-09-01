<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;


// Routing

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/detail', [ProductController::class, 'detail']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/gallery', [HomeController::class, 'gallery']);

// Routing Admin
Route::get('/admin-dashboard', [AdminController::class, 'index']);
Route::resource('admin-product', AdminProductController::class);

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Routing

// Home Route
Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [HomeController::class, 'product']);
Route::get('/products/detail', [HomeController::class, 'productDetail']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
<<<<<<< HEAD
Route::get('/gallery', [HomeController::class, 'gallery']);
=======

// Auth Route
Route::get('/login', [AuthController::class, 'indexLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
>>>>>>> 086ce9b (re dz 3)

// Routing Admin
Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', [AdminController::class, 'index']);
  Route::resource('/dashboard/products', ProductController::class);
});


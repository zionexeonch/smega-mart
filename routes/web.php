<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;

// Routing

// Home Route
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login'])->middleware('guest')->name('login');
Route::get('/products', [HomeController::class, 'product']);
Route::get('/products/detail', [HomeController::class, 'productDetail']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

// Routing Admin
// Route::get('/admin-dashboard', [ProductController::class, 'index']);
// Route::resource('admin-product', AdminProductController::class);

Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', [AdminController::class, 'index']);
  Route::resource('/dashboard/products', ProductController::class);
});


// Auth Route
Route::post('/login', [AuthController::class, 'login']);

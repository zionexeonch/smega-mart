<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Routing

// Home Route
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login'])->middleware('guest')->name('login');
Route::get('/products', [HomeController::class, 'product']);
Route::get('/products/detail', [HomeController::class, 'productDetail']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/contact', [HomeController::class, 'contact']);

// Auth Route
Route::post('/login', [AuthController::class, 'login']);

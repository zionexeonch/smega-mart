<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

// Routing

// Home Route
Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [HomeController::class, 'product']);
Route::get('/products/{product:slug}', [HomeController::class, 'productDetail']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/gallery', [HomeController::class, 'gallery']);

// Auth Route
Route::get('/login', [AuthController::class, 'indexLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Routing Admin
Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', [AdminController::class, 'index']);
  Route::resource('/dashboard/products', ProductController::class);
  Route::resource('storage', StorageController::class);

  // //Route Gudang
  // Route::get('/stock-store/{id}', [StorageController::class, 'store']);
  // Route::post('stock-store/{id}', [StorageController::class, 'updateStore']);
  // Route::get('/stock-storage/{id}', [StorageController::class, 'storage']);

  //Route suplier
  Route::resource('suplier', SuplierController::class);
  Route::resource('unit', UnitController::class);

  //Route Order
  Route::get('/orders', [OrderController::class, 'index']);

  //Route kasir
  Route::resource('kasir', KasirController::class);
  Route::resource('laporan', LaporanController::class);
});

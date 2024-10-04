<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;  



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('sales', SaleController::class);
    Route::resource('purchases', PurchaseController::class);
    Route::resource('products', ProductController::class);
});

Route::middleware(['auth', 'role:sales_manager'])->group(function () {
    Route::resource('sales', SaleController::class)->only(['index', 'create', 'store']);
});

Route::middleware(['auth', 'role:purchase_manager'])->group(function () {
    Route::resource('purchases', PurchaseController::class)->only(['index', 'create', 'store']);
});

require __DIR__.'/auth.php';
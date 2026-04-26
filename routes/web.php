<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CheckoutController;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/productgrid', [ProductsController::class, 'index'])->name('product.index');
Route::get('/productdetails/{id}', [ProductsController::class, 'productDetails'])->name('product.show');
Route::get('productdetails/{id}/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;




// Route::get('/', function () {
//     return view('index');
// })->name('home');

// Show login page
Route::get('/login', function () {
    return view('Auth.login');
})->name('login');

// Handle login
Route::post('/login', [AuthController::class, 'login']);

// Show register page
Route::get('/register', function () {
    return view('Auth.register');
})->name('register');

// Handle register
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//Contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
//our story
Route::get('/our-story', [HomeController::class, 'ourStory'])->name('ourstory');

//collection  category
Route::get('/collection', function () {
    return view('collection');
})->name('collection');

Route::get('/collection/all-products', [ProductsController::class, 'filterByCategoryAllProducts'])
    ->name('collection.all_products');

Route::get('/collection/baby-clothes', [ProductsController::class, 'filterByCategoryBabyClothes'])
    ->name('collection.baby_clothes');

Route::get('/collection/embroidery', [ProductsController::class, 'filterByCategoryEmbroidery'])
    ->name('collection.embroidery');

Route::get('/collection/gifts', [ProductsController::class, 'filterByCategoryGifts'])
    ->name('collection.gifts');

Route::get('/collection/custom-orders', [ProductsController::class, 'filterByCategoryCustomOrders'])
    ->name('collection.custom_orders');

Route::get('/productgrid', [ProductsController::class, 'index'])->name('product.index');
Route::get('/productdetails/{id}', [ProductsController::class, 'productDetails'])->name('product.show');
Route::get('productdetails/{id}/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\AccountController;

// Auth
Route::get('/login', function () {
    return view('Auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('Auth.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Our Story
Route::get('/our-story', [HomeController::class, 'ourStory'])->name('ourstory');

// Collection
Route::get('/collection', function () {
    return view('collection');
})->name('collection');

Route::get('/collection/baby-clothes', [ProductsController::class, 'filterByCategoryBabyClothes'])->name('collection.baby_clothes');
Route::get('/collection/embroidery', [ProductsController::class, 'filterByCategoryEmbroidery'])->name('collection.embroidery');
Route::get('/collection/gifts', [ProductsController::class, 'filterByCategoryGifts'])->name('collection.gifts');
Route::get('/collection/custom-orders', [ProductsController::class, 'filterByCategoryCustomOrders'])->name('collection.custom_orders');

Route::get('/collection/baby-clothes/{id}', [ProductsController::class, 'showBabyClothesProduct'])->name('collection.baby_clothes.show');
Route::get('/collection/embroidery/{id}', [ProductsController::class, 'showEmbroideryProduct'])->name('collection.embroidery.show');
Route::get('/collection/gifts/{id}', [ProductsController::class, 'showGiftProduct'])->name('collection.gifts.show');

// Products
Route::get('/productgrid', [ProductsController::class, 'index'])->name('product.index');
Route::get('/productdetails/{id}', [ProductsController::class, 'productDetails'])->name('product.show');

// Auth Required
Route::middleware('auth')->group(function () {
    // Cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    Route::get('/my-orders', [CheckoutController::class, 'myOrders'])->name('orders.index');
    // Checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/activity-logs', [ActivityLogController::class, 'index'])->name('dashboard.activity_logs');
    Route::get('/dashboard/account', [AccountController::class, 'index'])->name('dashboard.account');
    Route::post('/dashboard/account', [AccountController::class, 'update'])->name('dashboard.account.update');

    // Add Product
    Route::get('/dashboard/products/create', [ProductsController::class, 'create'])->name('dashboard.products.create');
    Route::post('/dashboard/products', [ProductsController::class, 'store'])->name('dashboard.products.store');

    // ✅ ضيف الأسطر دي
    Route::get('/dashboard/products', [ProductsController::class, 'adminIndex'])->name('dashboard.products.index');
    Route::get('/dashboard/products/{type}/{id}/edit', [ProductsController::class, 'edit'])->name('dashboard.products.edit');
    Route::put('/dashboard/products/{type}/{id}', [ProductsController::class, 'update'])->name('dashboard.products.update');
    Route::delete('/dashboard/products/{type}/{id}', [ProductsController::class, 'destroy'])->name('dashboard.products.destroy');
});

// Users
Route::get('/dashboard/users', [DashboardController::class, 'usersIndex'])->name('dashboard.users.index');
Route::delete('/dashboard/users/{id}', [DashboardController::class, 'destroyUser'])->name('dashboard.users.destroy');

// Contact
Route::get('/dashboard/contacts', [DashboardController::class, 'contactsIndex'])->name('dashboard.contacts.index');

Route::get('/dashboard/orders/{id}', [DashboardController::class, 'showOrder'])->name('dashboard.order.show');
Route::post('/dashboard/orders/{id}/status', [DashboardController::class, 'updateStatus'])->name('dashboard.order.status');
use Laravel\Socialite\Facades\Socialite;

Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

// Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/activity-logs', [ActivityLogController::class, 'index'])->name('dashboard.activity_logs');
    Route::get('/dashboard/account', [AccountController::class, 'index'])->name('dashboard.account');
    Route::post('/dashboard/account', [AccountController::class, 'update'])->name('dashboard.account.update');

    // ✅ Add Product
    Route::get('/dashboard/products/create', [ProductsController::class, 'create'])->name('dashboard.products.create');
    Route::post('/dashboard/products', [ProductsController::class, 'store'])->name('dashboard.products.store');
});
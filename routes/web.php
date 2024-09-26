<?php

// routes/web.php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

// Route to display the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Routes for user authentication
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Routes for products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products/add', [ProductController::class, 'addProduct'])->name('products.add');

// Routes for cart functionality
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');



// Route to display the index page
Route::get('/', [ProductController::class, 'index'])->name('index');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TrackingController;
// use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
// Auth
Auth::routes();
// Language
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('cur/{cur}', ['as' => 'cur.switch', 'uses' => 'App\Http\Controllers\CurrencyController@switchCur']);

// Route::get('/', function () {
//     return view('Home.index');
// });
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
// Categories
Route::get('/categories', function () {
    return view('categories.index');
});
// Logout
Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
})->name('logout');

Route::get('/product_one', function () {
    return view('products.layout_v_one');
});
Route::get('/product_two', function () {
    return view('products.layout_v_two');
});
// Tracking
Route::get('/order-status', [TrackingController::class, 'index'])->name('tracking');
Route::get('/order-status/{id}', [TrackingController::class, 'trackingstatus'])->name('tracking.show');

// Product
Route::get('/product-page/{name}', [HomeController::class, 'product_tone'])->name('product.tone');

// Checkout
Route::get('/checkout-cart', [CheckoutController::class, 'checkout_cart'])->name('checkout.cart');
Route::get('/checkout-details', [CheckoutController::class, 'checkout_details'])->name('checkout.details');
Route::get('/checkout-shipping', [CheckoutController::class, 'checkout_shipping'])->name('checkout.shipping');
Route::get('/checkout-payment', [CheckoutController::class, 'checkout_payment'])->name('checkout.payment');
Route::get('/checkout-review', [CheckoutController::class, 'checkout_review'])->name('checkout.review');
Route::get('/checkout-complete', [CheckoutController::class, 'checkout_complete'])->name('checkout.complete');

// Account
Route::get('/account', [AccountController::class, 'index'])->name('account')->middleware(['auth']);
Route::get('/account-orders', [AccountController::class, 'account_orders'])->name('account.orders')->middleware(['auth']);
Route::get('/account-address', [AccountController::class, 'account_address'])->name('account.address')->middleware(['auth']);
Route::post('/account-address', [AccountController::class, 'account_address_create'])->name('account.address.store')->middleware(['auth']);
Route::post('/account', [AccountController::class, 'update'])->name('account.update')->middleware(['auth']);
Route::post('/account-address/destroy', [AccountController::class, 'account_address_destroy'])->name('account.address.destroy')->middleware(['auth']);
Route::get('/account-address/edit', [AccountController::class, 'account_address_edit'])->name('account.address.edit')->middleware(['auth']);
Route::get('/account-payment', [AccountController::class, 'account_payment'])->name('account.payment')->middleware(['auth']);
Route::get('/account-wishlist', [AccountController::class, 'account_wishlist'])->name('account.wishlist')->middleware(['auth']);

// Shop
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

// Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard --admin panel
Route::name('dashboard.')->prefix('admin')->group(function () {
    // -- Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home')->middleware(['auth']);
    // -- Categories
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories')->middleware(['auth']);
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create')->middleware(['auth']);
    Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit')->middleware(['auth']);
    Route::post('/categories/create', [CategoriesController::class, 'story'])->name('categories.story')->middleware(['auth']);
    Route::post('/categories/{id}/edit', [CategoriesController::class, 'update'])->name('categories.update')->middleware(['auth']);
    Route::post('/categories/{id}/destroy', [CategoriesController::class, 'destroy'])->name('categories.destroy')->middleware(['auth']);
    // -- Products
    Route::get('/products', [ProductController::class, 'index'])->name('products')->middleware(['auth']);
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware(['auth']);
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware(['auth']);
    Route::post('/products/create', [ProductController::class, 'story'])->name('products.story')->middleware(['auth']);
    Route::post('/products/{id}/edit', [ProductController::class, 'update'])->name('products.update')->middleware(['auth']);
    Route::post('/products/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy')->middleware(['auth']);
    // -- Brand
    Route::get('/brand', [ProductController::class, 'brand_index'])->name('brand')->middleware(['auth']);
    // Route::get('/brand/{id}/edit', [ProductController::class, 'brand_edit'])->name('brand.edit')->middleware(['auth']);
    Route::get('/brand/create', [ProductController::class, 'brand_create'])->name('brand.create')->middleware(['auth']);
    Route::post('/brand/create', [ProductController::class, 'brand_story'])->name('brand.story')->middleware(['auth']);
    // Route::post('/brand/{id}/edit', [ProductController::class, 'brand_update'])->name('brand.update')->middleware(['auth']);
    // Route::post('/brand/{id}/destroy', [ProductController::class, 'brand_destroy'])->name('brand.destroy')->middleware(['auth']);


    
    // -- Settings
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings')->middleware(['auth']);
    Route::post('/settings', [DashboardController::class, 'settings_update'])->name('settings.update')->middleware(['auth']);
    // // -- Pages
    // Route::get('/pages', [PagesController::class, 'index'])->name('pages')->middleware(['auth']);
    // Route::get('/pages/{id}/edit', [PagesController::class, 'update'])->name('pages.edit')->middleware(['auth']);
    // Route::get('/pages/create', [PagesController::class, 'page_create'])->name('pages.create')->middleware(['auth']);
    // Route::post('/pages/create', [PagesController::class, 'store'])->name('pages.store')->middleware(['auth']);
    // Route::post('/pages/{id}/edit', [PagesController::class, 'page_update'])->name('pages.update')->middleware(['auth']);
    // Route::post('/pages/{id}/destroy', [PagesController::class, 'destroy'])->name('pages.destroy')->middleware(['auth']);
    // // -- Apps
    // Route::get('/extensions', [ExtensionsController::class, 'index'])->name('extensions')->middleware(['auth']);
    // // -- Customers
    // Route::get('/customers', [CustomersController::class, 'index'])->name('customers')->middleware(['auth']);
    // Route::get('/customers/{id}/edit', [CustomersController::class, 'edit'])->name('customers.edit')->middleware(['auth']);
    // Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create')->middleware(['auth']);
    // Route::post('/customers/create', [CustomersController::class, 'story'])->name('customers.story')->middleware(['auth']);
    // Route::post('/customers/{id}/edit', [CustomersController::class, 'update'])->name('customers.update')->middleware(['auth']);
    // Route::post('/customers/{id}/destroy', [CustomersController::class, 'destroy'])->name('customers.destroy')->middleware(['auth']);
    // // -- Orders
    // Route::get('/orders', [OrdersController::class, 'index'])->name('orders')->middleware(['auth']);
    // Route::get('/orders/{id}/edit', [OrdersController::class, 'edit'])->name('orders.edit')->middleware(['auth']);
    // Route::get('/orders/create', [OrdersController::class, 'create'])->name('orders.create')->middleware(['auth']);
    // Route::get('/orders/{id}', [OrdersController::class, 'show'])->name('orders.show')->middleware(['auth']);
    // Route::post('/orders/create', [OrdersController::class, 'story'])->name('orders.story')->middleware(['auth']);
    // Route::post('/orders/{id}/edit', [OrdersController::class, 'update'])->name('orders.update')->middleware(['auth']);
    // Route::post('/orders/{id}/destroy', [OrdersController::class, 'destroy'])->name('orders.destroy')->middleware(['auth']);

});
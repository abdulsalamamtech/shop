<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});



// SHOP HOME PAGE
Route::get('/', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});



// ADMIN DIRECTORY
Route::prefix('admin')->group(function (){

    // Admin Dashboard
    Route::get('/', function(){
        return view('admin.index');
    });


    // Admin Brands Route
    Route::prefix('brands')->group(function (){
        Route::get('/', function(){
            return view('admin.brands.brand');
        });
        Route::get('/add', function(){
            return view('admin.brands.brand-add');
        });
        Route::get('/info', function(){
            return view('admin.brands.brand-info');
        });
    });


    // Admin Categories Route
    Route::prefix('categories')->group(function (){

        Route::get('/', function(){
            return view('admin.categories.category');
        });
        Route::get('/add', function(){
            return view('admin.categories.category-add');
        });
        Route::get('/info', function(){
            return view('admin.categories.category-detail');
        });
        Route::get('/detail', function(){
            return view('admin.categories.category-detail');
        });
        Route::get('/edit', function(){
            return view('admin.categories.category-edit');
        });

    });

    // Admin Sub category Route
    Route::prefix('sub-category')->group(function (){

        Route::get('/', function(){
            return view('admin.categories.sub-category');
        });
        Route::get('/add', function(){
            return view('admin.categories.sub-category-add');
        });
    });

    // Admin Customers Route
    Route::prefix('customers')->group(function (){
        Route::get('/', function(){
            return view('admin.customers.customer');
        });
        Route::get('/grid', function(){
            return view('admin.customers.customer-grid');
        });
        Route::get('/info', function(){
            return view('admin.customers.customer-info');
        });
        Route::get('/detail', function(){
            return view('admin.customers.customer-info');
        });
    });


    // Admin Orders Route
    Route::prefix('orders')->group(function (){

        Route::get('/', function(){
            return view('admin.orders.order-history');
        });
        // Use info instead of detail or usr the id and method
        Route::get('/info', function(){
            return view('admin.orders.order-detail');
        });
        Route::get('/detail', function(){
            return view('admin.orders.order-detail');
        });
        Route::get('/history', function(){
            return view('admin.orders.order-history');
        });
        Route::get('/invoice', function(){
            return view('admin.orders.order-invoice');
        });
        Route::get('/new', function(){
            return view('admin.orders.order-new');
        });
        Route::get('/return', function(){
            return view('admin.orders.order-return');
        });
        Route::get('/track', function(){
            return view('admin.orders.order-track');
        });

    });

    // Admin Categories Route
    Route::prefix('products')->group(function (){

        Route::get('/', function(){
            return view('admin.products.product');
        });
        Route::get('/add', function(){
            return view('admin.products.product-add');
        });
        Route::get('/info', function(){
            return view('admin.products.product-detail');
        });
        Route::get('/detail', function(){
            return view('admin.products.product-detail');
        });
        Route::get('/edit', function(){
            return view('admin.products.product-edit');
        });
        Route::get('/grid', function(){
            return view('admin.products.product-grid');
        });

    });

});


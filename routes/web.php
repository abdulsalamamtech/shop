<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
})->name('home');

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



    // Auth users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');



    Route::get('/passsword-reset', function(){
        return request()->all();
    })->name('auth.password-reset');


    // Start Authenticating the User
    // Display the login form
    Route::get('/login', function(){
        return view('auth.login');
    })->name('auth.show');


    // Display the registration form
    Route::get('/register', function(){
        return view('auth.register');
    })->name('auth.create');


    // Register and store new user
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    // Login user
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    // Logout user
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    // End Authenticating the User



    Route::get('/email-comfirmation', function(){
        return request()->all();
    })->name('auth.email-comfirmation');




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
        })->name('admin.brands.index');
        Route::get('/add', function(){
            return view('admin.brands.brand-add');
        })->name('admin.brands.create');
        Route::get('/info', function(){
            return view('admin.brands.brand-info');
        })->name('admin.brands.show');
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
        })->name('customers.index');
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

    // Admin Mail Route
    Route::prefix('mails')->group(function (){

        Route::get('/', function(){
            return view('admin.mails.mail');
        });

        Route::get('/send', function(){
            return view('admin.mails.mail-send');
        });

        Route::get('/content', function(){
            return view('admin.mails.mail-content');
        });

    });

    // Admin Settings Route
    Route::prefix('settings')->group(function (){

        Route::get('/', function(){
            return view('admin.settings.setting-admin');
        });

        Route::get('/admin', function(){
            return view('admin.settings.setting-admin');
        });

        Route::get('/website', function(){
            return view('admin.settings.setting-website');
        });

    });

    // Admin Auth Route
    Route::prefix('auth')->group(function (){

        Route::get('/login', function(){
            return view('admin.auth.login');
        });

        Route::get('/register', function(){
            return view('admin.auth.register');
        });

    });

    // Admin Notifications Route
    Route::get('/notifications', function(){
        return view('admin.notifications');
    });

    // Admin Reviews Route
    Route::get('/reviews', function(){
        return view('admin.reviews');
    });

});

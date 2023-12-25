<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

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



    // Users
    // Get all users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Show the form for creating a new resource.
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    // Save new resource information to database
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    // Show the information of a resource
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    // Show the form to edit a resource
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    // Update the resource
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    // Delete the resource
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');



    Route::prefix('admin')->group(function(){

        // Admin
        Route::get('/', function(){
            return view('admin.index');
        })->name('admin');

        // Customers and Users that aren't admin
        Route::prefix('customers')->group(function(){
            // Get all Customers
            Route::get('/', [UserController::class, 'index'])->name('customers.index');
            Route::get('/grid', [UserController::class, 'index'])->name('customers.index.grid');
            // Route::get('/', [BrandController::class, 'index'])->name('brands.index');
            // Show the form for creating a new resource.
            // Route::get('/create', [BrandController::class, 'create'])->name('brands.create');
            // Save new resource information to database
            // Route::post('/', [BrandController::class, 'store'])->name('brands.store');
            // Show the information of a resource
            Route::get('/{customer}', [UserController::class, 'show'])->name('customers.show');
            // Show the form to edit a resource
            Route::get('/{customer}/edit', [UserController::class, 'edit'])->name('customers.edit');
            // Update the resource
            Route::put('/{customer}', [UserController::class, 'update'])->name('customers.update');
            // Delete the resource
            Route::delete('/{customer}', [UserController::class, 'destroy'])->name('customers.destroy');
            // Activate the resource
            Route::post('/{customer}/activate', [UserController::class, 'activate'])->name('customers.activate');
            // Deactivate the resource
            Route::post('/{customer}/deactivate', [UserController::class, 'deactivate'])->name('customers.deactivate');

        });

        // Brands
        Route::prefix('brands')->group(function(){
            // Get all Brands
            Route::get('/', [BrandController::class, 'index'])->name('brands.index');
            // Show the form for creating a new resource.
            Route::get('/create', [BrandController::class, 'create'])->name('brands.create');
            // Save new resource information to database
            Route::post('/', [BrandController::class, 'store'])->name('brands.store');
            // Show the information of a resource
            Route::get('/{brand}', [BrandController::class, 'show'])->name('brands.show');
            // Show the form to edit a resource
            Route::get('/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');
            // Update the resource
            Route::put('/{brand}', [BrandController::class, 'update'])->name('brands.update');
            // Delete the resource
            Route::delete('/{brand}', [BrandController::class, 'destroy'])->name('brands.destroy');
            // Activate the resource
            Route::post('/{brand}/activate', [BrandController::class, 'activate'])->name('brands.activate');
            // Deactivate the resource
            Route::post('/{brand}/deactivate', [BrandController::class, 'deactivate'])->name('brands.deactivate');

        });

        // Categories
        Route::prefix('categories')->group(function(){
            // Get all categories
            Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
            // Show the form for creating a new resource.
            Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
            // Save new resource information to database
            Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
            // Show the information of a resource
            Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
            // Show the form to edit a resource
            Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
            // Update the resource
            Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
            // Delete the resource
            Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
            // Activate the resource
            Route::post('/{category}/activate', [CategoryController::class, 'activate'])->name('categories.activate');
            // Deactivate the resource
            Route::post('/{category}/deactivate', [CategoryController::class, 'deactivate'])->name('categories.deactivate');

        });

        // Sub Categories
        Route::prefix('sub-categories')->group(function(){

            // Get all categories
            Route::get('/', [SubCategoryController::class, 'index'])->name('categories.sub.index');
            // Show the form for creating a new resource.
            Route::get('/create', [SubCategoryController::class, 'create'])->name('categories.sub.create');
            // Save new resource information to database
            Route::post('/', [SubCategoryController::class, 'store'])->name('categories.sub.store');
            // Show the information of a resource
            Route::get('/{sub_category}', [SubCategoryController::class, 'show'])->name('categories.sub.show');
            // Show the form to edit a resource
            Route::get('/{sub_category}/edit', [SubCategoryController::class, 'edit'])->name('categories.sub.edit');
            // Update the resource
            Route::put('/{sub_category}', [SubCategoryController::class, 'update'])->name('categories.sub.update');
            // Delete the resource
            Route::delete('/{sub_category}', [SubCategoryController::class, 'destroy'])->name('categories.sub.destroy');
            // Activate the resource
            Route::post('/{sub_category}/activate', [SubCategoryController::class, 'activate'])->name('categories.sub.activate');
            // Deactivate the resource
            Route::post('/{sub_category}/deactivate', [SubCategoryController::class, 'deactivate'])->name('categories.sub.deactivate');

        });

        // Products
        Route::prefix('products')->group(function(){
            // Get all categories
            Route::get('/', [ProductController::class, 'index'])->name('products.index');
            // Show the form for creating a new resource.
            Route::get('/create', [ProductController::class, 'create'])->name('products.create');
            // Save new resource information to database
            Route::post('/', [ProductController::class, 'store'])->name('products.store');
            // Show the information of a resource
            Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
            // Show the form to edit a resource
            Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
            // Update the resource
            Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
            // Delete the resource
            Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
            // Activate the resource
            Route::post('/{product}/activate', [ProductController::class, 'activate'])->name('products.activate');
            // Deactivate the resource
            Route::post('/{product}/deactivate', [ProductController::class, 'deactivate'])->name('products.deactivate');

        });
    });



    Route::get('/password-reset', function(){
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
    // Route::get('/', function(){
    //     return view('admin.index');
    // });


    // Admin Brands Route
    // Route::prefix('brands')->group(function (){
        // Route::get('/', function(){
        //     return view('admin.brands.brand');
        // })->name('admin.brands.index');
        // Route::get('/add', function(){
        //     return view('admin.brands.brand-add');
        // })->name('admin.brands.create');
        // Route::get('/info', function(){
        //     return view('admin.brands.brand-info');
        // })->name('admin.brands.show');
    // });


    // Admin Customers Route
    // Route::prefix('customers')->group(function (){
    //     Route::get('/', function(){
    //         return view('admin.customers.customer');
    //     })->name('customers.index');
    //     Route::get('/grid', function(){
    //         return view('admin.customers.customer-grid');
    //     });
    //     Route::get('/info', function(){
    //         return view('admin.customers.customer-info');
    //     });
    //     Route::get('/detail', function(){
    //         return view('admin.customers.customer-info');
    //     });
    // });


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
    // Route::prefix('products')->group(function (){

    //     Route::get('/', function(){
    //         return view('admin.products.product');
    //     });
    //     Route::get('/add', function(){
    //         return view('admin.products.product-add');
    //     });
    //     Route::get('/info', function(){
    //         return view('admin.products.product-detail');
    //     });
    //     Route::get('/detail', function(){
    //         return view('admin.products.product-detail');
    //     });
    //     Route::get('/edit', function(){
    //         return view('admin.products.product-edit');
    //     });
    //     Route::get('/grid', function(){
    //         return view('admin.products.product-grid');
    //     });

    // });

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

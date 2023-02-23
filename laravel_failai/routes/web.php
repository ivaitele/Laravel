<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentTypeController;
use App\Http\Controllers\Admin\PersonsController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\ProductsController;

use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\IsPersonnel;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::group(['middleware' => SetLocale::class], function () {
    Route::get('/', HomeController::class)->name('home');;

//    Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

    Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('product/add', [CartController::class, 'create'])->name('product.add_to_cart');
    Route::get('cart', [CartController::class, 'show'])->name('cart.show');
    Route::put('cart/{product}', [CartController::class, 'update'])->name('cart.update-product');
    Route::delete('cart/{product:id}', [CartController::class, 'destroy'])->name('cart.remove-product');

    Route::resources([
        'products' => ProductsController::class,
    ]);

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', IsPersonnel::class]], function () {
        Route::get('/', DashBoardController::class)->name('dashboard');
        Route::delete('/product/file/{file}', [ProductsController::class, 'destroyFile'])->name('product.destroy-file');

        Route::get('/products', [AdminProductsController::class, 'index'])->name('hello-products.index');

        Route::resources([
            'admin-products'     => AdminProductsController::class,
            'categories'   => CategoriesController::class,
            'orders'       => OrderController::class,
            'statuses'     => StatusController::class,
            'addresses'    => AddressController::class,
            'users'        => UsersController::class,
            'persons'      => PersonsController::class,
            'paymentTypes' => PaymentTypeController::class,
        ]);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

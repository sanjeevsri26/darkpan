<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\AuthController;

//frontend
use App\Http\Controllers\Frontend\indexController;


//admin
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\productsController;
use App\Http\Controllers\Admin\blogsController;
use App\Http\Controllers\Admin\categoryController;
// web.php


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// frontend
Route::get('/', [indexController::class, 'index']);




//admin
Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/blogs', [blogsController::class, 'index']);
Route::get('/category', [categoryController::class, 'index']);
Route::get('/products', [productsController::class, 'index']);


// Route::namespace('Admin')->group(function () {
//     Route::resource('product', 'ProductController');
// });

Route::group(['middleware' => ['auth']], function() {
    Route::resource('products', ProductsController::class)->names([
        'index' => 'Admin.products.index',
        'create' => 'Admin.products.create',
        'store' => 'Admin.products.store',
        'show' => 'Admin.products.show',
        'edit' => 'Admin.products.edit',
        'update' => 'Admin.products.update',
        'destroy' => 'Admin.products.destroy',
    ]);

    Route::resource('category', categoryController::class)->names([
        'index' => 'category.index',
        'create' => 'category.create',
        'store' => 'category.store',
        'show' => 'category.show',
        'edit' => 'category.edit',
        'update' => 'category.update',
        'destroy' => 'category.destroy'
        
    ]);


    Route::resource('blogs', blogsController::class)->names([
        'index' => 'Admin.blogs.index',
        'create' => 'Admin.blogs.create',
        'store' => 'Admin.blogs.store',
        'show' => 'Admin.blogs.show',
        'edit' => 'Admin.blogs.edit',
        'update' => 'Admin.blogs.update',
        'destroy' => 'Admin.blogs.destroy',
    ]);
});

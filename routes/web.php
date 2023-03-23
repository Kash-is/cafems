<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->middleware('auth')->group(function () { //can't go in with out logging in because of we have give middleware[''auth]
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/customer', [App\Http\Controllers\Admin\CustomerController::class,'index']);
    Route::get('/addCustomer', [App\Http\Controllers\Admin\CustomerController::class,'create']);
    Route::post('addCustomer', [App\Http\Controllers\Admin\CustomerController::class,'store'])->name('customer.add');
    Route::get('editCustomer/{customer_id}', [App\Http\Controllers\Admin\CustomerController::class,'edit'])->name('customer.edit');
    Route::put('update-customer/{customer_id}', [App\Http\Controllers\Admin\CustomerController::class,'update']);
    Route::get('deleteCustomer/{customer_id}', [App\Http\Controllers\Admin\CustomerController::class,'delete']);

    Route::get('/menu', [App\Http\Controllers\Admin\MenuController::class, 'index']);
    Route::get('/order', [App\Http\Controllers\Admin\OrderController::class, 'index']);
    Route::get('/kitchen', [App\Http\Controllers\Admin\KitchenController::class, 'index']);

    Route::get('/staff', [App\Http\Controllers\Admin\StaffController::class, 'index']);
    Route::get('/addStaff', [App\Http\Controllers\Admin\StaffController::class, 'create']);
    Route::post('/addStaff', [App\Http\Controllers\Admin\StaffController::class,'store']);

    Route::get('/pos', [App\Http\Controllers\Admin\POSController::class, 'index']);
    Route::get('/products/{category}', [App\Http\Controllers\Admin\POSController::class, 'getProductsByCategory'])->name('getProductsByCategory');



    // Route::get('/pos', function () {
    //     return view('admin/pos/index');
    // });

    Route::get('/booking', [App\Http\Controllers\Admin\BookingController::class, 'index']);
    Route::get('/addBooking', [App\Http\Controllers\Admin\BookingController::class, 'create']);
    Route::post('/addBooking', [App\Http\Controllers\Admin\BookingController::class, 'store']);
    Route::get('edit-booking/{booking-id}', [App\Http\Controllers\BookingController::class, 'edit']);
    // Route::put('update-booking/{booking_id}', [App\Http\Controllers\CategoryController::class, 'update']);
    // Route::get('/delete-booking/{booking_id}', [App\Http\Controllers\CategoryController::class, 'destroy']);

    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::post('/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('edit-category/{category_id}', [App\Http\Controllers\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\CategoryController::class, 'update']);
    Route::get('/delete-category/{category_id}', [App\Http\Controllers\CategoryController::class, 'destroy']);

    Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);
    Route::get('/addProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::post('/addProduct', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('edit-product/{product_id}', [App\Http\Controllers\ProductController::class, 'edit']);
    Route::put('update-product/{product_id}', [App\Http\Controllers\ProductController::class, 'update']);
    Route::get('/delete-product/{product_id}', [App\Http\Controllers\ProductController::class, 'destroy']);



});



require __DIR__.'/auth.php';
// ->middleware(['auth'])

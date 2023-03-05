<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\StaffController;
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


Route::prefix('admin')->group(function () { //can't go in with out logging in because of we have give middleware[''auth]
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

    Route::get('/pos', function () {
        return view('admin/pos/index');
    });

    Route::get('/booking', function () {
        return view('admin/booking/index');
    });

});



require __DIR__.'/auth.php';
// ->middleware(['auth'])

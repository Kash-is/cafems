<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
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
    return view('welcome');
});

Route::get('/admin/menu', function () {
    return view('menu');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->middleware(['auth'])->group(function () { //can't go in with out logging in because of we have give middleware[''auth]
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/customer', [App\Http\Controllers\Admin\CustomerController::class,'index']);
    Route::get('/addCustomer', [App\Http\Controllers\Admin\CustomerController::class,'create']);
    Route::post('addCustomer', [App\Http\Controllers\Admin\CustomerController::class,'store']);
    Route::get('editCustomer/{customer_id}', [App\Http\Controllers\Admin\CustomerController::class,'edit']);
    Route::put('update-customer/{customer_id}', [App\Http\Controllers\Admin\CustomerController::class,'update']);
    
});



require __DIR__.'/auth.php';
// ->middleware(['auth'])
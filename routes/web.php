<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function() {
    return view('dashboard');
})->name('dashboard');

// Auth Route for Both
Route::group(['middleware' => ['auth']], function(){
    
    Route::get('/', [MainController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'user'], function(){
        Route::get('/settings', [UserController::class, 'settings'])->name('settings');
        Route::get('/search', [UserController::class, 'search'])->name('search');
        Route::get('/cart', [UserController::class, 'cart'])->name('cart');
    });

    Route::group(['prefix' => 'admin'],function() {
        Route::get('/products', [AdminController::class, 'products'])->name('products');
        Route::get('/transactions', [AdminController::class, 'transactions'])->name('transactions');
    });

});

require __DIR__.'/auth.php';

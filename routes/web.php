<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    
    Route::get('/dashboard', [MainController::class, 'index'])->name('dashboard');

});

require __DIR__.'/auth.php';
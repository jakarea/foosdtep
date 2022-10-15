<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BackendController;

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
 

Auth::routes();



// front end controller
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/products', 'products')->name('products');
});


// back end controller
Route::controller(BackendController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard'); 
    Route::get('/categories', 'categories')->name('dashboard.categories'); 
});
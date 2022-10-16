<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\BackendDesignController;

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


// back end design controller
Route::controller(BackendDesignController::class)->group(function () {
    //user route start
    Route::get('static/users', 'users')->name('dashboard.users');  
    Route::get('static/users/add', 'user_add')->name('dashboard.users.add');  
    Route::get('static/users/edit', 'user_edit')->name('dashboard.users.edit');  
    Route::get('static/users/profile', 'user_view')->name('dashboard.users.view');  

    // discount route start
    Route::get('static/discount', 'discount')->name('dashboard.discount');
    Route::get('static/discount/add', 'discount_add')->name('dashboard.discount.add');
    Route::get('static/discount/view', 'discount_view')->name('dashboard.discount.view');
    Route::get('static/discount/edit', 'discount_edit')->name('dashboard.discount.edit');
});
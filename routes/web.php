<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
 

/*
|--------------------------------------------------------------------------
| Frotend Route Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// front end controller
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/products', 'products')->name('products');
});


/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::middleware(['verified'])->group(function () {
    Route::group(['prefix' => 'auth'], function(){
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/dashboard', 'App\Http\Controllers\Backend\DashboardController@index')->name('admin.dashboard');

            // Category request
            Route::group(['prefix' => 'categories'], function() {
                Route::resource('category', 'App\Http\Controllers\Backend\CategoryController');
            });
        });
    });
});

Route::controller(BackendController::class)->group(function () {
    Route::get('/categories', 'categories')->name('dashboard.categories'); 
});
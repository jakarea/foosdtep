<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
    // home static blade route
    Route::get('/', 'index')->name('home');

    // about static blade route
    Route::get('/about', 'about')->name('about');
    Route::get('/profile', 'profile')->name('profile');

    // product static blade route
    Route::get('/products', 'products')->name('products');
    Route::get('/products/view', 'products_view')->name('products.view');
    Route::get('products/cart', 'cart')->name('products.cart');
    Route::get('products/checkout', 'checkout')->name('products.checkout');

    // contact static blade route
    Route::get('contact', 'contact')->name('products.contact');

    // auth static blade route
    Route::get('frontend/login', 'login')->name('frontend.login');
    Route::get('frontend/register', 'register')->name('frontend.register'); 
    Route::get('frontend/invoice', 'invoice')->name('frontend.invoice'); 
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

            // Category management
            Route::group(['prefix' => 'categories'], function() {
                Route::resource('category', 'App\Http\Controllers\Backend\CategoryController');
            });
            // Brand management
            Route::group(['prefix' => 'brands'], function() {
                Route::resource('brand', 'App\Http\Controllers\Backend\BrandController');
            });
            // Product Group management
            Route::group(['prefix' => 'productsgrpup'], function() {
                Route::resource('productgroup', 'App\Http\Controllers\Backend\ProductGroupController');
            });
            // Faith management
            Route::group(['prefix' => 'faiths'], function() {
                Route::resource('faith', 'App\Http\Controllers\Backend\FaithController');
            });
            // Line management
            Route::group(['prefix' => 'lines'], function() {
                Route::resource('line', 'App\Http\Controllers\Backend\LineController');
            });
            // Content management
            Route::group(['prefix' => 'contents'], function() {
                Route::resource('content', 'App\Http\Controllers\Backend\ContentController');
            });
            // AllergensDP management
            Route::group(['prefix' => 'AllergensDPs'], function() {
                Route::resource('AllergensDP', 'App\Http\Controllers\Backend\AllergensDPController');
            });
            // Manage User
            Route::group(['prefix' => 'users'], function() {
                Route::resource('user', 'App\Http\Controllers\Backend\UserController');
            });
        });
    });
});

Route::controller(BackendController::class)->group(function () {
    Route::get('/categories', 'categories')->name('dashboard.categories'); 
});

// back end design controller
Route::controller(BackendDesignController::class)->group(function () {
    // user static route start
    Route::get('static/users', 'users')->name('dashboard.users');  
    Route::get('static/users/add', 'user_add')->name('dashboard.users.add');  
    Route::get('static/users/edit', 'user_edit')->name('dashboard.users.edit');  
    Route::get('static/users/profile', 'user_view')->name('dashboard.users.view');  

    // discount static route start
    Route::get('static/discount', 'discount')->name('dashboard.discount');
    Route::get('static/discount/add', 'discount_add')->name('dashboard.discount.add');
    Route::get('static/discount/view', 'discount_view')->name('dashboard.discount.view');
    Route::get('static/discount/edit', 'discount_edit')->name('dashboard.discount.edit');

    // invoice static route start
    Route::get('static/invoice', 'invoice')->name('dashboard.invoice');

    // order static route start
    Route::get('static/orders', 'orders')->name('dashboard.orders');

    // product static route start
    Route::get('static/products', 'products')->name('dashboard.products');
    Route::get('static/products/add', 'products_add')->name('dashboard.products.add');
});
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\BackendDesignController;
use App\Http\Controllers\Backend\DiscountCodeController;

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
    // home blade route
    Route::get('/', 'index')->name('home');

    // about blade route
    Route::get('/about', 'about')->name('about');
    Route::post('/subscribe','subscribe')->name('subscribe');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{slug}', 'single_blog')->name('single_blog');
    // product route
    Route::get('/products', 'App\Http\Controllers\Frontend\ProductController@index')->name('products');
    Route::post('/products', 'App\Http\Controllers\Frontend\ProductController@autocompleteSearch')->name('autocompleteSearch');
    Route::get('/products/{slug}', 'App\Http\Controllers\Frontend\ProductController@show')->name('show.product');
    Route::get('/products/category/{slug}', 'App\Http\Controllers\Frontend\ProductController@category')->name('show.category');

    // Product cart routes
    Route::get('/cart', 'App\Http\Controllers\Frontend\ProductController@cart')->middleware(['auth'])->name('product.cart');
    Route::get('/add-to-cart/{id}', 'App\Http\Controllers\Frontend\ProductController@addToCart')->name('add.to.cart');
    Route::patch('/update-cart', 'App\Http\Controllers\Frontend\ProductController@update')->name('update.cart');
    Route::delete('/remove-from-cart', 'App\Http\Controllers\Frontend\ProductController@remove' )->name('remove.from.cart');

    // Checkout page
    Route::get('/checkout', 'App\Http\Controllers\Frontend\ProductController@checkout')->name('checkout.cart');
    Route::get('/filter/attributes', 'App\Http\Controllers\Frontend\ProductController@filter')->name('filter.attribute');
    Route::post('/search/query', 'App\Http\Controllers\Frontend\ProductController@searchComplete')->name('searchComplete');
    
    // contact blade route
    Route::get('contact', 'contact')->name('products.contact');
    Route::post('contact', 'contact_store')->name('products.contact_store');

    // Admin Login Form
    Route::get('admin/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::get('admin/login', 'App\Http\Controllers\Auth\LoginController@adminloginform')->name('admin.login');

    // Customer Login Form
    Route::get('/login', function () {
        return redirect(route('customer.loginform'));
    });


    // Customer Login and Registration
    Route::get('customer/login', 'App\Http\Controllers\Auth\LoginController@showloginform')->name('customer.loginform');
    Route::get('customer/register', 'App\Http\Controllers\Auth\LoginController@showregisterform')->name('customer.registerform');
    
    // Customer Registration and verification
    Route::post('customer/register', 'App\Http\Controllers\Auth\RegisterController@CustomerRegistration')->name('customer.registration');
    Route::post('customer/login', 'App\Http\Controllers\Auth\LoginController@logincustomer')->name('customer.login');

    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


    Route::group(['prefix' => 'customers'], function(){
        Route::group(['middleware' => 'customer'], function () {
            Route::get('/dashboard','App\Http\Controllers\Frontend\DashboardController@index')->name('customer.dashboard');
            Route::get('/invoice/{id}','App\Http\Controllers\Frontend\DashboardController@show')->name('customer.invoice');
            Route::get('/recart/{id}','App\Http\Controllers\Frontend\DashboardController@recart')->name('customer.recart');
            Route::get('/reorder/{id}','App\Http\Controllers\Frontend\DashboardController@reorder')->name('customer.reorder');
            Route::post('/customer/{id}','App\Http\Controllers\Frontend\DashboardController@update')->name('customer.update');
            Route::resource('order', 'App\Http\Controllers\Backend\OrderController');
        });
    });
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
        Route::group(['middleware' => 'admin'], function () {
            Route::get('/dashboard', 'App\Http\Controllers\Backend\DashboardController@index')->name('admin.dashboard');

            Route::get('/mark-as-read/{id}', 'App\Http\Controllers\Backend\DashboardController@markNotification')->name('markNotification');

            // Category management
            Route::group(['prefix' => 'categories'], function() {
                Route::resource('category', 'App\Http\Controllers\Backend\CategoryController');
            });

            // Blog management
            Route::group(['prefix' => 'blogs'], function() {
                Route::resource('blog', 'App\Http\Controllers\Backend\BlogController');
            });

            // Contact management
            Route::group(['prefix' => 'contacts'], function() {
                Route::resource('contact', 'App\Http\Controllers\Backend\ContactController');
            });

            // Blog management
            Route::group(['prefix' => 'sliders'], function() {
                Route::resource('slider', 'App\Http\Controllers\Backend\SliderController');
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
            // Manage Discount

            Route::resource('discounts', 'App\Http\Controllers\Backend\DiscountController');

            // discount custom route
            Route::controller(DiscountCodeController::class)->group(function () {
                Route::get('by-products/discounts', 'index')->name('discounts.by-product'); 
                Route::get('by-products/discounts/create', 'create')->name('discounts.by-product.create'); 
            });
            // Manage Multi Discount
            Route::group(['prefix' => 'multidiscounts'], function() {
                Route::resource('multidiscount', 'App\Http\Controllers\Backend\MultipleDiscountController');
            });
            // Manage Products
            Route::group(['prefix' => 'products'], function() {
                Route::resource('product', 'App\Http\Controllers\Backend\ProductController');
            });
            // Manage Order
            Route::group(['prefix' => 'orderviews'], function() {
                Route::resource('orders', 'App\Http\Controllers\Backend\OrderRecievedController');
            });
            Route::post('orders/{id}/status', 'App\Http\Controllers\Backend\OrderController@changeOrderStatus');
            // Setting Setup
            Route::group(['prefix' => 'settings'], function() {
                Route::resource('setting', 'App\Http\Controllers\Backend\SettingController');
            });
        });
    });
});

// Route::controller(BackendController::class)->group(function () {
//     Route::get('/categories', 'categories')->name('dashboard.categories'); 
// });
 
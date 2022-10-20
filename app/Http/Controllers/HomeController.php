<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //  $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend/index');
    }
    public function about()
    {
        return view('frontend/about');
    }
    public function products()
    {
        return view('frontend/products');
    }
    public function products_view()
    {
        return view('frontend/products-view');
    }

    // crat checkout method start
    public function cart()
    {
        return view('frontend/cart');
    }
    public function checkout()
    {
        return view('frontend/checkout');
    }

    // contact method start
    public function contact()
    {
        return view('frontend/contact');
    }

    // auth method start
    public function login()
    {
        return view('frontend/login');
    }
    public function register()
    {
        return view('frontend/register');
    }

    // order method start
    public function invoice()
    {
        return view('frontend/invoice');
    }
    
    // profile method start
    public function profile()
    {
        return view('frontend/profile');
    }
}

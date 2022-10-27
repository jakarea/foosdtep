<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Backend\Category;
use App\Models\Backend\ProductGroup;
use App\Models\Backend\Faith;
use App\Models\Backend\Line;
use App\Models\Backend\Content;
use App\Models\Backend\AllergensDP;
use App\Models\Backend\Brand;
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
        $categories = Category::orderby('name', 'asc')->get();
        return view('frontend/index',compact('categories'));
    }
    public function about()
    {
        return view('frontend/about');
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

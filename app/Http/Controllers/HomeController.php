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

    // crat checkout method start
    public function checkout()
    {
        return view('frontend/checkout');
    }

    // contact method start
    public function contact()
    {
        return view('frontend/contact');
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

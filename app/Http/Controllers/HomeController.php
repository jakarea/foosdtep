<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Backend\Blog;
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::where('parent_cat', 0)->orderby('name', 'asc')->get();
        
        $prodcutCat = Category::where('parent_cat', 0)->with('products')->take(3)->get();

        $products = Product::where('status', 'active')->take('12')->get();

        $blogs = Blog::where('status', 'active')->orderby('id', 'desc')->take('12')->get(); 

        return view('frontend/index',compact('products', 'prodcutCat', 'categories','blogs'));
    }
    public function about()
    {
        return view('frontend/about');
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

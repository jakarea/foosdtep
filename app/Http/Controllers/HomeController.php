<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Backend\Blog;
use App\Models\Contact;
use App\Models\Backend\Slider;
use App\Models\Backend\Category;
use App\Models\Backend\ProductGroup;
use App\Models\Backend\Faith;
use App\Models\Backend\Line;
use App\Models\Backend\Content;
use App\Models\Backend\AllergensDP;
use App\Models\Backend\Brand;
use App\Models\Backend\Subscribe;

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
        
        $prodcutCat = Category::where('parent_cat', 0)->with('products')->get();

        $products = Product::where('status', 'active')->take('8')->get();

        $blogs = Blog::where('status', 'active')->orderby('id', 'desc')->take('2')->get(); 

        $sliders = Slider::where('status', 'active')->orderby('id', 'desc')->take('3')->get(); 

        return view('frontend/index',compact('products', 'prodcutCat', 'categories','blogs','sliders'));
    }
    public function about()
    {
        return view('frontend/about');
    }

    public function blog()
    {
        $blogs = Blog::where('status', 'active')->orderby('id', 'desc')->take('12')->get(); 
        return view('frontend/blog',compact('blogs'));
    }

    public function single_blog($slug)
    {
        $blogs = Blog::where('status', 'active')->orderby('id', 'desc')->take('12')->get(); 
        $blog = Blog::where('slug', $slug)->first();
        return view('frontend/blog_single',compact('blog','blogs'));
    }

    public function subscribe(Request $request){
        $request->validate([
            'email'      =>  ['required', 'string', 'max:255']
        ]);

        $subscribe = new Subscribe;
        $subscribe->email        =   $request->email;
        $subscribe->save();

        $notification = session()->flash("success", __("messages.subscribe_success"));

        return redirect()->route('home')->with($notification);
    }
    // contact method start
    public function contact()
    { 
        return view('frontend/contact');
    }

    public function contact_store(Request $request)
    {  
        $request->validate([
            'name'      =>  ['required', 'string', 'max:255'], 
            'email'      =>  ['required', 'string', 'max:255'], 
            'subject'      =>  ['required', 'string', 'max:255'], 
            'message'    =>  ['required','string'], 
        ]);

        $contact = new Contact;

        $contact->name        =   $request->name;
        $contact->email        =   $request->email;
        $contact->subject        =   $request->subject;
        $contact->message        =   $request->message;

        $contact->save();

        $notification = session()->flash("success", __("messages.contact_send_success"));

        return redirect()->route('products.contact')->with($notification);
    }

      
}

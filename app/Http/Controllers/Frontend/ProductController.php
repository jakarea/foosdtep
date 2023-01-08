<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Backend\Category;
use App\Models\Backend\ProductGroup;
use App\Models\Backend\Faith;
use App\Models\Backend\Line;
use App\Models\Backend\Content;
use App\Models\Backend\AllergensDP;
use App\Models\Backend\Brand;
use Image;
use Str;
use File;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::where('parent_cat', 0)->get();
        $brands = Brand::where('parent_id',0)->get();

        if($request->ajax() || $request->isaj == 'sli'){
            $product = Product::query();

            // Category filter data
            if(isset($request->cat_id)) {
                $ids = $request->cat_id;
                $product
                ->where(function($query) use($ids) {
                    foreach($ids as $id) {
                        $query->orWhere('cat_id', 'like', "%$id%");
                    };
                });
                
            }
    
            // Brand Filter Data
            if(isset($request->brand_id)) {
                $ids = $request->brand_id;
                $product
                ->where(function($query) use($ids) {
                    foreach($ids as $id) {
                        $query->orWhere('brand_id', 'like', "%$id%");
                    };
                });
            }
            $products = $product->where('status', 'active')->orderby('id', 'desc')->paginate(15);

            if($request->isaj == 'sdb'){
                $request->instance()->query->set('isaj', 'sli');
                return view('frontend/filter', compact('products'));
            }
            return view('frontend/products', compact('products',  'categories','brands'));
        }

        $query = isset($_GET['search']) ? $_GET['search'] : '';
        $cat = isset($_GET['cat']) ? $_GET['cat'] : '';
        $cat = Category::where('slug', $cat)->first();
        $catId = '';
        $condition ='';
        if(isset($_GET['cat'])){
            $cat = Category::where('slug', $_GET['cat'])->first();
            $catId = $cat->id;
        }
        
        $products = Product::where('name', 'LIKE', '%'. $query. '%')
            ->where('cat_id','like','%'.trim($catId).'%')
            ->where('status', 'active')
            ->orderby('id', 'desc')
            ->paginate(15);

        return view('frontend/products', compact('products',  'categories','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($slug)
    {
        $cat = Category::where('slug', $slug)->first();

        $catId = $cat->id;
        
        $products = Product::where('cat_id','like','%'.trim($catId).'%') 
        ->where('status', 'active')
        ->orderby('id', 'desc')
        ->paginate('15');
        $categories = Category::where('parent_cat', 0)->get();
        $brands = Brand::where('parent_id',0)->get();
        return view('frontend/products', compact('products',  'categories','brands'));
       // return view('frontend/Catproducts', compact('products', 'cat'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        //
        return view('frontend/cart');
    }

        /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->discount($product->id), //? : $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function checkout() 
    {
        return view('frontend/checkout');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        //
        $product = Product::query();

        // Category filter data
        if(isset($request->cat_id)) {
            $ids = $request->cat_id;
            $product
            ->where(function($query) use($ids) {
                foreach($ids as $id) {
                    $query->orWhere('cat_id', 'like', "%$id%");
                };
            });
            
        }

        // Brand Filter Data
        if(isset($request->brand_id)) {
            $ids = $request->brand_id;
            $product
            ->where(function($query) use($ids) {
                foreach($ids as $id) {
                    $query->orWhere('brand_id', 'like', "%$id%");
                };
            });
        }

        // // Product Group Filter Data
        // if(isset($request->pgroup_id)) {
        //     $product->orWhere('prodcut_group_id','like','%'.trim($request->pgroup_id).'%')
        //     ->where('status', 'active')
        //     ->orderby('id', 'asc')
        //     ->get();
        // }
        // // Faith Filter Data
        // if(isset($request->faith_id)) {
        //     $product->orWhere('faith_id','like','%'.trim($request->faith_id).'%')
        //     ->where('status', 'active')
        //     ->orderby('id', 'asc')
        //     ->get();
        // }

        // // Faith Filter Data
        // if(isset($request->line_id)) {
        //     $product->orWhere('line_id','like','%'.trim($request->line_id).'%')
        //     ->where('status', 'active')
        //     ->orderby('id', 'asc')
        //     ->get();
        // }

        // // Content Filter Data
        // if(isset($request->content_id)) {
        //     $product->orWhere('content_id','like','%'.trim($request->content_id).'%')
        //     ->where('status', 'active')
        //     ->orderby('id', 'asc')
        //     ->get();
        // }
        
        // Content allergens_id Data
        // if(isset($request->allergens_id)) {
        //     $product->orWhere('allergens_dp_id','like','%'.trim($request->allergens_id).'%')
        //     ->where('status', 'active')
        //     ->orderby('id', 'asc')
        //     ->get();
        // }

        $products = $product->where('status', 'active')->orderby('id', 'desc')->paginate(15);

        return view('frontend/filter', compact('products'));
    }


    // Custom search 
    public function searchComplete(Request $request)
    {
        if( !empty($request->inputdata ) ) {
            $result = Product::where("name","LIKE","%{$request->inputdata}%")->take(10)->get();
            return response()->json($result);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $product = Product::where('slug', $slug)->first();
        $categoies = Category::where('parent_cat',0)->get();
        $productgroups = ProductGroup::where('parent_id',0)->get();
        $faiths = Faith::where('parent_id',0)->get();
        $lines = Line::where('parent_id',0)->get();
        $contents = Content::where('parent_id',0)->get();
        $allergensDP = AllergensDP::where('parent_id',0)->get();
        $brands = Brand::where('parent_id',0)->get();

        $relatedProducts = Product::where('cat_id', [$product->cat_id])->where('id', '!=', $product->id)->get();
        
        if( $product ) {            
            return view('frontend/products-view', compact('product', 'categoies', 'productgroups', 'faiths', 'lines', 'contents', 'allergensDP', 'brands', 'relatedProducts'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function autocompleteSearch(Request $request)
    {
        //
        $query = $request->get('search');
        $products = Product::where('name', 'LIKE', '%'. $query. '%')->where('status', 'active')->orderby('id', 'asc')->paginate('12');

        return view('frontend.search', compact('products', 'query'));
    }
}

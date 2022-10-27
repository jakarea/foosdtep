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
    public function index()
    {
        //
        $products = Product::where('status', 'active')->orderby('id', 'asc')->paginate('12');
        return view('frontend/products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Backend;

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
        $products = Product::orderby('name', 'asc')->get();
        return view('backend/pages/product/manage', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoies = Category::where('parent_cat',0)->get();
        $productgroups = ProductGroup::where('parent_id',0)->get();
        $faiths = Faith::where('parent_id',0)->get();
        $lines = Line::where('parent_id',0)->get();
        $contents = Content::where('parent_id',0)->get();
        $allergensDP = AllergensDP::where('parent_id',0)->get();
        $brands = Brand::where('parent_id',0)->get();
        return view('backend/pages/product/create', compact('categoies', 'productgroups', 'faiths', 'lines', 'contents', 'allergensDP', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        //
        $request->validate([
            'name'              =>  ['required', 'unique:products,name', 'max:255'],
            'status'            =>  ['required', 'not_in:0'],
            'price'             =>  ['required', 'min:1'],
            'cat'               =>  ['required'],
            'short_desc'        =>  ['required'],
            'description'       =>  ['required'],
            'specification'     =>  ['required'],
        ]);

        $product = new Product;

        $product->name                  =   $request->name;
        $product->price                 =   $request->price;
        $product->status                =   $request->status;
        $product->cat_id                =   $request->cat ? implode(',', $request->cat) : '';
        $product->brand_id              =   $request->brand ? implode(',', $request->brand) : '';
        $product->prodcut_group_id      =   $request->productgroup ? implode(',', $request->productgroup) : ''; 
        $product->faith_id              =   $request->faith ? implode(',', $request->faith) : ''; 
        $product->line_id               =   $request->line ? implode(',', $request->line) : ''; 
        $product->content_id            =   $request->line ? implode(',', $request->line) : '';
        $product->allergens_dp_id       =   $request->allergens ? implode(',', $request->allergens) : '';
        $product->user_id               =   Auth::user()->id;
        $product->sku_code              =   time();
        $product->short_description     =   $request->short_desc;
        $product->long_description      =   $request->description;
        $product->specific_description  =   $request->specification;

        if(!is_null($request->featureimage)){
            $feature = $request->file('featureimage');
            if( !is_null($feature) ){
                $img = time() . '.' . $feature->getClientOriginalExtension();
                $location = public_path('frontend/assets/img/product/' . $img);
                Image::make($feature)->save($location);
                $product->image = $img;
            }
        }

        $product->save();

        $notification = session()->flash("success", "Data Create Successfully");

        return redirect()->route('product.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

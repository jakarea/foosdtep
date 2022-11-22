<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Brand;
use Image;
use Str;
use File;
use Session;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brand = Brand::orderby('name', 'asc')->get();
        return view('backend/pages/brand/manage', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brands = Brand::where('parent_id',0)->get();
        return view('backend/pages/brand/create', compact('brands'));
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
        $request->validate([
            'name'      =>  ['required', 'string', 'unique:categories,name', 'max:255'],
            'status'    =>  ['required', 'not_in:0'],
            // 'image'     =>  ['required', 'mimes:jpg,jpeg,png,gif|max:1024'],
        ]);

        $brand = new Brand;

        $brand->name        =   $request->name;
        $brand->slug        =   Str::slug($brand->name);
        $brand->status      =   $request->status;
        $brand->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];
        $image = $request->file('image');
            if( !is_null($image) ){
                // Delete Existing Image
                if( File::exists('backend/assets/images/brands/' . $brand->image) ) {
                    File::delete('backend/assets/images/brands/' . $brand->image);
                }
                
                $img = rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/assets/images/brands/' . $img);

                Image::make($image)->save($location);
                $brand->image = $img;
            }


        $brand->save();

        $notification = session()->flash("success", __('b.data_created'));

        return redirect()->route('brand.index')->with($notification);
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
    public function edit($slug)
    {
        //
        $brands = Brand::where('parent_id',0)->get();
        $brand = Brand::where('slug', $slug)->first();
        return view('backend/pages/brand/edit', compact('brand', 'brands'));
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
        $brand = Brand::find($id);

        $brand->name        =   $request->name;
        $brand->slug        =   Str::slug($brand->name);
        $brand->status      =   $request->status;
        $brand->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];
        $image = $request->file('image');
            if( !is_null($image) ){
                // Delete Existing Image
                if( File::exists('backend/assets/images/brands/' . $brand->image) ) {
                    File::delete('backend/assets/images/brands/' . $brand->image);
                }
                
                $img = rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/assets/images/brands/' . $img);

                Image::make($image)->save($location);
                $brand->image = $img;
            }


        $brand->save();

        $notification = session()->flash("success", __('b.data_updated'));

        return redirect()->route('brand.index')->with($notification);
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
        $delete = Brand::where('id', $id)->delete();

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "Data Deleted Successfull!!!";
            
        } else {
            $success = true;
            $message = "Something is wrong!!!";
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}

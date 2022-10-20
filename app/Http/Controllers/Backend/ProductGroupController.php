<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductGroup;
use Image;
use Str;
use File;
use Session;

class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productgroup = ProductGroup::orderby('name', 'asc')->get();
        return view('backend/pages/productgroup/manage', compact('productgroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productgroups = ProductGroup::where('parent_id',0)->get();
        return view('backend/pages/productgroup/create', compact('productgroups'));
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
            'name'      =>  ['required', 'string', 'unique:product_groups,name', 'max:255'],
            'status'    =>  ['required', 'not_in:0'],
            // 'image'     =>  ['required', 'mimes:jpg,jpeg,png,gif|max:1024'],
        ]);

        $brand = new ProductGroup;

        $brand->name        =   $request->name;
        $brand->slug        =   Str::slug($brand->name);
        $brand->status      =   $request->status;
        $brand->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $brand->save();

        $notification = session()->flash("success", "Data Create Successfully");

        return redirect()->route('productgroup.index')->with($notification);
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
        $productgroup = ProductGroup::where('slug', $slug)->first();
        return view('backend/pages/productgroup/edit', compact('productgroup'));
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
        $productgroup = ProductGroup::find($id);

        $productgroup->name        =   $request->name;
        $productgroup->slug        =   Str::slug($productgroup->name);
        $productgroup->status      =   $request->status;
        $productgroup->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $productgroup->save();

        $notification = session()->flash("success", "Data Update Successfully");

        return redirect()->route('productgroup.index')->with($notification);
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
        $delete = ProductGroup::where('id', $id)->delete();

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

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use Image;
use Str;
use File;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoies = Category::orderby('name', 'asc')->get();
        return view('backend/pages/category/manage', compact('categoies'));
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
        return view('backend/pages/category/create', compact('categoies'));

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

        $category = new Category;

        $category->name        =   $request->name;
        $category->slug        =   Str::slug($category->name);
        $category->status      =   $request->status;
        $category->parent_cat  =   empty($request['parent_cat']) ? 0 : $request['parent_cat'];
        $image = $request->file('image');
            if( !is_null($image) ){
                // Delete Existing Image
                if( File::exists('backend/assets/images/category/' . $category->image) ) {
                    File::delete('backend/assets/images/category/' . $category->image);
                }
                
                $img = rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/assets/images/category/' . $img);

                Image::make($image)->save($location);
                $category->image = $img;
            }


        $category->save();

        $notification = session()->flash("success", __('b.data_created'));

        return redirect()->route('category.index')->with($notification);
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
        $categories = Category::where('parent_cat',0)->get();
        $category = Category::where('slug', $slug)->first();
        return view('backend/pages/category/edit', compact('category', 'categories'));

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
        $category = Category::find($id);

        $category->name        =   $request->name;
        $category->slug        =   Str::slug($category->name);
        $category->status      =   $request->status;

        $image = $request->file('image');
            if( !is_null($image) ){
                // Delete Existing Image
                if( File::exists('backend/assets/images/category/' . $category->image) ) {
                    File::delete('backend/assets/images/category/' . $category->image);
                }
                
                $img = rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/assets/images/category/' . $img);

                Image::make($image)->save($location);
                $category->image = $img;
            }


        $category->save();

        $notification = session()->flash("success", __('b.data_updated'));

        return redirect()->route('category.index')->with($notification);
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
        $subcat = Category::where('parent_cat', $id)->get();
        if(!empty($subcat)) {
            foreach($subcat as $cat) {
                if( File::exists('backend/assets/images/category/' . $cat->image) ) {
                    File::delete('backend/assets/images/category/' . $cat->image);
                }
                $cat->delete();
            }
        }

        $delete = Category::where('id', $id)->delete();

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "ডিলেট সম্পন্ন হয়েছে!!!";
            
        } else {
            $success = true;
            $message = "ডিলেটে ত্রুটি রয়েছে!!!";
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}

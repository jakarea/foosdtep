<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Blog;
use Image;
use Str;
use File;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::orderby('id', 'desc')->get();
        return view('backend/pages/blog/manage', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/pages/blog/create');

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

        $blog = new Blog;

        $blog->name        =   $request->name;
        $blog->slug        =   Str::slug($blog->name);
        $blog->status      =   $request->status;
        $blog->parent_cat  =   empty($request['parent_cat']) ? 0 : $request['parent_cat'];
        $image = $request->file('image');
            if( !is_null($image) ){
                // Delete Existing Image
                if( File::exists('backend/assets/images/blog/' . $blog->image) ) {
                    File::delete('backend/assets/images/blog/' . $blog->image);
                }
                
                $img = rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/assets/images/blog/' . $img);

                Image::make($image)->save($location);
                $blog->image = $img;
            }


        $blog->save();

        $notification = session()->flash("success", "blog Create Successfully");

        return redirect()->route('blog.index')->with($notification);
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
        $categories = Blog::where('parent_cat',0)->get();
        $blog = Blog::where('slug', $slug)->first();
        return view('backend/pages/blog/edit', compact('blog', 'categories'));

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
        $blog = Blog::find($id);

        $blog->name        =   $request->name;
        $blog->slug        =   Str::slug($blog->name);
        $blog->status      =   $request->status;

        $image = $request->file('image');
            if( !is_null($image) ){
                // Delete Existing Image
                if( File::exists('backend/assets/images/blog/' . $blog->image) ) {
                    File::delete('backend/assets/images/blog/' . $blog->image);
                }
                
                $img = rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/assets/images/blog/' . $img);

                Image::make($image)->save($location);
                $blog->image = $img;
            }


        $blog->save();

        $notification = session()->flash("success", "blog Update Successfully");

        return redirect()->route('blog.index')->with($notification);
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
        $subcat = Blog::where('parent_cat', $id)->get();
        if(!empty($subcat)) {
            foreach($subcat as $cat) {
                if( File::exists('backend/assets/images/blog/' . $cat->image) ) {
                    File::delete('backend/assets/images/blog/' . $cat->image);
                }
                $cat->delete();
            }
        }

        $delete = Blog::where('id', $id)->delete();

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

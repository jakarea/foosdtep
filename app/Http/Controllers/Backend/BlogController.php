<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Blog;
use Image;
use Str;
use Auth;
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
        
        $request->validate([
            'title'      =>  ['required', 'string', 'max:255'],
            'status'    =>  ['required', 'not_in:0'],
            'body'    =>  ['required','string'],
            'image'     =>  ['required', 'mimes:jpg,jpeg,png,gif|max:1024'],
        ]);

        $blog = new Blog;

        $blog->title        =   $request->title;
        $blog->slug        =   Str::slug($blog->title).'-'.time();
        $blog->status      =   $request->status;
        $blog->user_id      =  Auth::user()->id;

        $blog->body      =   $request->body;
 

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

        $notification = session()->flash("success", __('b.data_created'));

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
        $blog = Blog::where('slug', $slug)->first();
        return view('backend/pages/blog/edit', compact('blog'));

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

        $blog->title        =   $request->title;
        $blog->slug        =   Str::slug($blog->title).'-'.time();
        $blog->status      =   $request->status;
        $blog->body      =   $request->body;

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

        $notification = session()->flash("success", __('b.data_updated'));

        return redirect()->route('blog.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //  
        $blog = Blog::where('slug', $slug)->get();
        if(!empty($blog)) {
            foreach($blog as $cat) {
                if( File::exists('backend/assets/images/blog/' . $cat->image) ) {
                    File::delete('backend/assets/images/blog/' . $cat->image);
                }
                $cat->delete();
            }
        }

        $delete = Blog::where('slug', $slug)->delete();

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

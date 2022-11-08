<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Content;
use Image;
use Str;
use File;
use Session;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $content = Content::orderby('name', 'asc')->get();
        return view('backend/pages/content/manage', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $content = Content::where('parent_id',0)->get();
        return view('backend/pages/content/create', compact('content'));
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
            'name'      =>  ['required', 'string', 'unique:contents,name', 'max:255'],
            'status'    =>  ['required', 'not_in:0'],
            // 'image'     =>  ['required', 'mimes:jpg,jpeg,png,gif|max:1024'],
        ]);

        $content = new Content;

        $content->name        =   $request->name;
        $content->slug        =   Str::slug($content->name);
        $content->status      =   $request->status;
        $content->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $content->save();

        $notification = session()->flash("success",__('b.data_created'));

        return redirect()->route('content.index')->with($notification);
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
        $content = Content::where('slug', $slug)->first();
        return view('backend/pages/content/edit', compact('content'));
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
        $content = Content::find($id);

        $content->name        =   $request->name;
        $content->slug        =   Str::slug($content->name);
        $content->status      =   $request->status;
        $content->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $content->save();

        $notification = session()->flash("success",__('b.data_updated'));

        return redirect()->route('content.index')->with($notification);
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
        $delete = Content::where('id', $id)->delete();

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

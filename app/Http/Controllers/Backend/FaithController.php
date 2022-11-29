<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Faith;
use Image;
use Str;
use File;
use Session;

class FaithController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faith = Faith::orderby('name', 'asc')->get();
        return view('backend/pages/faith/manage', compact('faith'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $faith = Faith::where('parent_id',0)->get();
        return view('backend/pages/faith/create', compact('faith'));
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
            'name'      =>  ['required', 'string', 'unique:faiths,name', 'max:255'],
            'status'    =>  ['required', 'not_in:0'],
            // 'image'     =>  ['required', 'mimes:jpg,jpeg,png,gif|max:1024'],
        ]);

        $faith = new Faith;

        $faith->name        =   $request->name;
        $faith->slug        =   Str::slug($faith->name);
        $faith->status      =   $request->status;
        $faith->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $faith->save();

        $notification = session()->flash("success", __('b.data_created'));

        return redirect()->route('faith.index')->with($notification);
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
        $faith = Faith::where('slug', $slug)->first();
        return view('backend/pages/faith/edit', compact('faith'));
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
        $faith = Faith::find($id);

        $faith->name        =   $request->name;
        $faith->slug        =   Str::slug($faith->name);
        $faith->status      =   $request->status;
        $faith->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $faith->save();

        $notification = session()->flash("success", __('b.data_updated'));

        return redirect()->route('faith.index')->with($notification);
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
        $delete = Faith::where('id', $id)->delete();

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

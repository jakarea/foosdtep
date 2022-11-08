<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Line;
use Image;
use Str;
use File;
use Session;

class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $line = Line::orderby('name', 'asc')->get();
        return view('backend/pages/line/manage', compact('line'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $line = Line::where('parent_id',0)->get();
        return view('backend/pages/line/create', compact('line'));
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
            'name'      =>  ['required', 'string', 'unique:lines,name', 'max:255'],
            'status'    =>  ['required', 'not_in:0'],
            // 'image'     =>  ['required', 'mimes:jpg,jpeg,png,gif|max:1024'],
        ]);

        $line = new Line;

        $line->name        =   $request->name;
        $line->slug        =   Str::slug($line->name);
        $line->status      =   $request->status;
        $line->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $line->save();

        $notification = session()->flash("success", __('b.data_created'));

        return redirect()->route('line.index')->with($notification);
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
        $line = Line::where('slug', $slug)->first();
        return view('backend/pages/line/edit', compact('line'));
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
        $line = Line::find($id);

        $line->name        =   $request->name;
        $line->slug        =   Str::slug($line->name);
        $line->status      =   $request->status;
        $line->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $line->save();

        $notification = session()->flash("success", __('b.data_updated'));

        return redirect()->route('line.index')->with($notification);
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
        $delete = Line::where('id', $id)->delete();

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

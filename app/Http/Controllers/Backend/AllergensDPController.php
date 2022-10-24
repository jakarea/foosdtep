<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AllergensDP;
use Image;
use Str;
use File;
use Session;
class AllergensDPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allergensDP = AllergensDP::orderby('name', 'asc')->get();
        return view('backend/pages/allergensDP/manage', compact('allergensDP'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $allergensDP = AllergensDP::where('parent_id',0)->get();
        return view('backend/pages/allergensDP/create', compact('allergensDP'));
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
            'name'      =>  ['required', 'string', 'unique:allergens_d_p_s,name', 'max:255'],
            'status'    =>  ['required', 'not_in:0'],
            // 'image'     =>  ['required', 'mimes:jpg,jpeg,png,gif|max:1024'],
        ]);

        $allergensDP = new AllergensDP;

        $allergensDP->name        =   $request->name;
        $allergensDP->slug        =   Str::slug($allergensDP->name);
        $allergensDP->status      =   $request->status;
        $allergensDP->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $allergensDP->save();

        $notification = session()->flash("success", "Data Create Successfully");

        return redirect()->route('AllergensDP.index')->with($notification);
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
        $allergensDP = AllergensDP::where('slug', $slug)->first();
        return view('backend/pages/allergensDP/edit', compact('allergensDP'));
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
        $allergensDP = AllergensDP::find($id);

        $allergensDP->name        =   $request->name;
        $allergensDP->slug        =   Str::slug($allergensDP->name);
        $allergensDP->status      =   $request->status;
        $allergensDP->parent_id  =   empty($request['parent_id']) ? 0 : $request['parent_id'];

        $allergensDP->save();

        $notification = session()->flash("success", "Data Update Successfully");

        return redirect()->route('AllergensDP.index')->with($notification);
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
        $delete = AllergensDP::where('id', $id)->delete();

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

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Image;
use File;
use Hash;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontend.customer.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    //    dd($request->image('image'));
    //    exit();

        //
        $request->validate([
            'old_password'          => $request->old_password != null ?'sometimes|confirmed|min:8': '',
            'password'              => $request->password != null ?'sometimes|required|min:8': '',
            'password_confirmation' => $request->password_confirmation != null ?'sometimes|required|same:password': '',
            'image'                  => 'sometimes|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::find($id);

        
        $user->name             =   $request->name;
        if( !empty($request->password) ){
            $user->password         =   Hash::make($request->only('password'));
        }
        $user->email            =   $request->email;
        $user->phone            =   $request->phone;
        $user->officeaddress    =   $request->officeaddress;
        $user->homeaddress      =   $request->homeaddress;
        $user->zipcode          =   $request->zipcode;
        // $user->discount         =   $request->discount;
        $user->bio              =   $request->bio;
        $user->status           =   'active';

        if(!empty($request->image)){
            $avater = $request->file('image');
            if( !empty($avater) ){
                // Delete Existing Image
                if( File::exists('frontend/assets/img/user/' . $user->avater) ) {
                    File::delete('frontend/assets/img/user/' . $user->avater);
                }
                $img = time() . '.' . $avater->getClientOriginalExtension();
                $location = public_path('frontend/assets/img/user/' . $img);
                Image::make($avater)->save($location);
                $user->avater = $img;
            }
        }

        $user->save();

        $notification = session()->flash("success", "Data Update Successfully");

        return redirect()->route('customer.dashboard')->with($notification);
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

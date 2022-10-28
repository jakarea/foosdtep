<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Image;
use File;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::with('Userrole')->orderby('name', 'asc')->get();
        return view('backend/pages/users/manage', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend/pages/users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //inspiring-raman_043y8s0obdy9
        //1Gh9ORwl_0
        $request->validate([
            'name'          =>  ['required', 'string', 'unique:users,name', 'max:255'],
            'email'         =>  ['required', 'email', 'unique:users,email', 'max:255'],
            //'password'      =>  ['required', 'string', 'min:6'],
            'phone'         =>  ['required', 'min:6'],
            'homeaddress'   =>  ['required', 'max:255'],
            // 'password'      =>  ['required', 'string', 'min:6','regex:/[a-z]/','regex:/[A-Z]/','regex:/[0-9]/','regex:/[@$!%*#?&]/'],
            // 'phone'         =>  ['required', 'regex:/(01)[0-9]{9}/', 'min:6'],
            'status'        =>  ['required'],
            'file'          =>  ['image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
        ]);

        $user = new User;

        $user->name             =   $request->name;
        $user->password         =   Hash::make($request->password);
        $user->email            =   $request->email;
        $user->phone            =   $request->phone;
        $user->officeaddress    =   $request->addressoffice;
        $user->homeaddress      =   $request->homeaddress;
        $user->zipcode          =   $request->zipcode;
        // $user->discount         =   $request->discount;
        $user->bio              =   $request->bio;
        $user->status           =   $request->status;

        if(!is_null($request->image)){
            $avater = $request->file('image');
            if( !is_null($avater) ){
                $img = time() . '.' . $avater->getClientOriginalExtension();
                $location = public_path('frontend/assets/img/user/' . $img);
                Image::make($avater)->save($location);
                $user->avater = $img;
            }
        }

        $user->save();

        UserRole::create([
            'user_id'   =>  $user->id,
            'role_id'   =>  $request->auth_role,
        ]);

        $notification = session()->flash("success", "Data Create Successfully");

        return redirect()->route('user.index')->with($notification);

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
        $user = User::where('id', $id)->first();

        return view('backend/pages/users/show', compact('user'));


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
        $user = User::find($id);
        return view('backend/pages/users/edit', compact('user'));
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

        $request->validate([
            'name'          =>  ['required', 'string', 'max:255'],
            'email'         =>  ['required', 'email', 'max:255'],
            'phone'         =>  ['required', 'min:6'],
            'status'        =>  ['required'],
            //'file'          =>  ['required', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
        ]);

        $user = User::find($id);

        $user->name             =   $request->name;
        if( !empty($request->password) ){
            $user->password         =   Hash::make($request->only('password'));
        }
        $user->email            =   $request->email;
        $user->phone            =   $request->phone;
        $user->officeaddress    =   $request->addressoffice;
        $user->homeaddress      =   $request->addresshome;
        $user->zipcode          =   $request->zipcode;
        // $user->discount         =   $request->discount;
        $user->bio              =   $request->bio;
        $user->status           =   $request->status;

        if(!is_null($request->image)){
            $avater = $request->file('image');
            if( !is_null($avater) ){
                // Delete Existing Image
                if( File::exists('frontend/assets/img/user/' . $user->image) ) {
                    File::delete('frontend/assets/img/user/' . $user->image);
                }
                $img = time() . '.' . $avater->getClientOriginalExtension();
                $location = public_path('frontend/assets/img/user/' . $img);
                Image::make($avater)->save($location);
                $user->avater = $img;
            }
        }

        $user->save();

        UserRole::where('user_id', $user->id)->update([
            'user_id'   =>  $user->id,
            'role_id'   =>  $request->auth_role,
        ]);

        $notification = session()->flash("success", "Data Update Successfully");

        return redirect()->route('user.index')->with($notification);
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
        $roledelete = UserRole::where('user_id', $id)->delete();
        $delete = User::where('id', $id)->delete();

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

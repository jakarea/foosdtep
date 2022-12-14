<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Discount;
use App\Models\User;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $discount = Discount::orderby('id', 'DESC')->get();
        return view('backend/pages/discount/manage', compact('discount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        return view('backend/pages/discount/create', compact('users'));
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
            'discount'          =>  ['required','numeric'],
            'users'             =>  ['required', 'not_in:0'],
        ]);

        $usersId     =  $request->users;

        foreach( $usersId as $user ){
            $userExit = Discount::where('user_id', $user)->first();
            if( $userExit && $user == $userExit->user_id  )
            {
                Discount::where('user_id', $userExit->user_id)->update([
                    'value'         => $request->discount,
                    'type'          => 'percentage',
                    'status'        => $request->status,
                    'user_id'       => $user
                ]);
            }
            else
            {
                Discount::insert([
                    'value'         => $request->discount,
                    'type'          => 'percentage',
                    'status'        => $request->status,
                    'user_id'       => $user
                ]);
            }
        }

        $notification = session()->flash("success", __('b.data_created'));

        return redirect()->route('discounts.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('auth/discounts/'.$id.'/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function redirectToEdit($id){
        return redirect('/discounts/'.$id.'/edit');
    }
    public function edit($id)
    {
        //
        $discount = Discount::where('id', $id)->first();
        $users = User::all();
        return view('backend/pages/discount/edit', compact('discount', 'users'));
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

        $request->validate([
            'discount'  =>  ['required'],
            'users'     =>  ['required', 'not_in:0'],
            'status'    =>  ['required', 'not_in:0'],
            'discount_type' => ['required']
        ]);

        $discount = Discount::find($id);

        $discount->value    =   $request->discount;
        $discount->status      =   $request->status;
        $discount->user_id      =  $request->users;
        $discount->type      =  'percentage';

        $discount->save();

        $notification = session()->flash("success", __('b.data_updated'));

        return redirect()->route('discounts.index')->with($notification);
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
        $delete = Discount::where('id', $id)->delete();

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

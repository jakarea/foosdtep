<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\MultipleDiscount;
use App\Models\Backend\MultiDiscountType;
use App\Models\Backend\Product;
use App\Models\User;
class MultipleDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $multiplediscount = MultipleDiscount::orderby('id', 'DESC')->with('user')->with('typeItems')->get();
        // return $multiplediscount;
        return view('backend/pages/multiplediscount/manage', compact('multiplediscount'));
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
        $products = Product::where('status', 'active')->get();
        return view('backend/pages/multiplediscount/create', compact('users', 'products'));
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
        $data = new MultipleDiscount;
        $data->name         =   $request->name;
        $data->status       =   $request->status;
        $data->user_id      =   implode(",", $request->users);
        $data->save();
        
        
        $datatype = $request->discount;

        $dataTypeItem = [];

        if( isset($datatype) ){

            foreach($datatype as $key => $type_data) {

                $dataTypeItem[] = [
                    'product_id'            => $type_data['products'],
                    'value'                 => $type_data['value'],
                    'type'                  => $type_data['type'],
                    'multidiscount_id'      => $data->id,
                ];

            }

            MultiDiscountType::insert($dataTypeItem);
        }

        $notification = session()->flash("success", "Data Create Successfully");

        return redirect()->route('multidiscount.index')->with($notification);
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
        $multidiscount = MultipleDiscount::with('typeItems')->where('id', $id)->first();
        $users = User::all();
        $products = Product::where('status', 'active')->get();
        return view('backend/pages/multiplediscount/edit', compact('multidiscount', 'users', 'products'));
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
        $data = MultipleDiscount::find($id);
        $data->name         =   $request->name;
        $data->status       =   $request->status;
        $data->user_id      =   implode(",", $request->users);
        $data->save();
        
        
        $datatype = $request->discount;

        $dataTypeItem = [];

        if( isset($datatype) ){

            foreach($datatype as $key => $type_data) {

                MultiDiscountType::updateOrCreate(
                [
                    'id' => $type_data['item_type_id'] 
                ],
                [
                    'product_id'            => $type_data['products'],
                    'value'                 => $type_data['value'],
                    'type'                  => $type_data['type'],
                    'multidiscount_id'      => $data->id,
                ]);

            }

        }

        $notification = session()->flash("success", "Data Create Successfully");

        return redirect()->route('multidiscount.index')->with($notification);
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
        $delete = MultipleDiscount::where('id', $id)->delete();

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

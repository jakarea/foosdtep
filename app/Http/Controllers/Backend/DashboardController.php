<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Backend\Category;
use App\Models\Backend\ProductGroup;
use App\Models\Backend\Faith;
use App\Models\Backend\Line;
use App\Models\Backend\Content;
use App\Models\Backend\AllergensDP;
use App\Models\Backend\Brand;
use App\Models\Backend\OrderItem;
use App\Models\Backend\Order;
use App\Models\User;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $year = date('Y');

        $current = '';
        $previous = '';
        
        for ($i = 0; $i < 12; $i++) {
            $start_date = date("Y-m-d", strtotime( date( 'Y-01-01' )." $i months"));
            $end_date   = date("Y-m-t", strtotime($start_date));

            $currentData =  Order::getCountVisitor($start_date, $end_date);
            $current .= $currentData.',';

            $previous_start_date = date("Y-m-d", strtotime("-1 year", strtotime($start_date)));
            $previous_end_date = date("Y-m-t", strtotime($previous_start_date));


            $previousData =  Order::getCountVisitor($previous_start_date, $previous_end_date);
            $previous .= $previousData.',';

        }

        $data['current'] = rtrim($current,',');
        $data['previous'] = rtrim($previous,',');
        
        $orders = Order::with('items')->paginate('10');
        return view('backend/index', compact('orders'), $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function markNotification(Request $request, $id)
    {
        //
        $notification = auth()->user()->notifications()->find($id);

        if($notification) {
            $notification->markAsRead();
        }
        return response()->json(['success' =>true, 'message'=> 'mark as read!!!']);
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
        //
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

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\OrderAdminNotification;
use Illuminate\Support\Facades\Notification;
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
use Image;
use Str;
use File;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        
        $request->validate([
            'firstname'     => ['required', 'string', 'max:255'],
            'lastname'      => ['required', 'string', 'max:255'],
            'country'       => ['required', 'not_in:0'],
            'state'     => ['required', 'not_in:0'],
            'zipcode'       => ['required', 'max:8'],
            'phone'     => ['required', 'max:15'],
            'email'     => ['required', 'email', 'max:255'],
        ]);

        $order = Order::create([
            'order_number'      =>  'ORD-'.strtoupper(uniqid()),
            'user_id'           =>  auth()->user()->id,
            'status'            =>  'pending',
            'grand_total'       =>  $request->cart_subtotal,
            'item_count'        =>  count((array) session('cart')),
            'payment_status'    =>  0,
            'payment_method'    =>  null,
            'first_name'        =>  $request->firstname,
            'last_name'         =>  $request->lastname,
            'address'           =>  $request->address1,
            'city'              =>  $request->state,
            'country'           =>  $request->country,
            'post_code'         =>  $request->zipcode,
            'phone_number'      =>  $request->phone,
            'notes'             =>  $request->ordernote
        ]);

        if ($order) {

            $items = session('cart');
    
            foreach ($items as $item)
            {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('name', $item['name'])->first();
    
                $orderItem = new OrderItem([
                    'product_id'    =>  $product->id,
                    'quantity'      =>  $item['quantity'],
                    'price'         =>  $item['price'] * $item['quantity']
                ]);
    
                $order->items()->save($orderItem);

                
            }
        }
        $cart = session()->flush('cart');


        // Order Notification
        $adminEmail = User::where('id', 2)->get();
        Notification::send($adminEmail, new OrderAdminNotification($order));
    
        return redirect()->route('order.show', $order);

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
        
        $order = Order::find($id);
        if( $order->user_id == Auth::user()->id){
            return view('frontend/thankyou', compact('order'));
        }
        else {
            return back();
        }
        
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

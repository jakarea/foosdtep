<?php

namespace App\Http\Controllers\Frontend;

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
use App\Models\Role;
use App\Models\UserRole;
use Image;
use File;
use Hash;
use Auth;
use PDF;
use Mail;
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
        $data = Order::find($id);

        return view('frontend.customer.invoice', compact('data'));
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
            $user->password         =   Hash::make($request->password);
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

        $notification = session()->flash("success", __('b.data_updated'));

        return redirect()->route('customer.dashboard')->with($notification);
    }

    /**
     * Recart the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recart($id)
    {
        //
        $Order = Order::findOrFail($id);
        $items = OrderItem::where('order_id', $Order->id)->get();
        
        foreach ($items as $key => $value) {
            $cart = session()->get('cart', []);
  
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    "name" => $value->product->name,
                    "quantity" => 1,
                    "price" => $value->product->discount($value->product->id) ? : $value->product->price,
                    "image" => $value->product->image
                ];
            }
            
            session()->put('cart', $cart);

            return redirect()->route('product.cart')->with('success', 'Product added to cart successfully!');
        }

    }

    public function reorder($id)
    {

        $reorder = Order::findOrFail($id);
        $order = Order::create([
            'order_number'      =>  'ORD-'.strtoupper(uniqid()),
            'user_id'           =>  auth()->user()->id,
            'status'            =>  'pending',
            'grand_total'       =>  $reorder->grand_total,
            'item_count'        =>  count($reorder->items),
            'payment_status'    =>  0,
            'payment_method'    =>  null,
            'first_name'        =>  $reorder->first_name,
            'last_name'         =>  $reorder->last_name,
            'address_type'      =>  $reorder->address_type,
            'post_code'         =>  $reorder->post_code,
            'phone_number'      =>  $reorder->phone_number,
            'notes'             =>  $reorder->notes
        ]);

        if ($order) {

            $items = $reorder->items;
    
            foreach ($items as $item)
            {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('name', $item['name'])->first();
    
                $orderItem = new OrderItem([
                    'product_id'    =>  $item->product_id,
                    'quantity'      =>  $item['quantity'],
                    'price'         =>  $item['price'] * $item['quantity']
                ]);
    
                $order->items()->save($orderItem);

                
            }
        }
        $cart = session()->flush('cart');


        // Order Notification
        $data["email"] = ["admin@food-steps.nl", $reorder->user->email];
        $data["title"] = "From food-steps.nl";

        $data["order"] = $order;
  
        $pdf = PDF::loadView('emails.invoice', $data);
  
        Mail::send('emails.invoice', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "invoice.pdf");
        });
    
        return redirect()->route('order.show', $order);
    }
}

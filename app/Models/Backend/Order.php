<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\OrderItem;
use App\Models\User;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'order_number', 'user_id', 'status', 'grand_total', 'item_count', 'payment_status', 'payment_method',
        'first_name', 'last_name', 'address', 'city', 'country', 'post_code', 'phone_number', 'notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public static function customerOrderList($user_id)
    {
        $orders = Order::where('user_id', $user_id)->with('items')->get();

        return $orders;
    }

    public static function OrderCount()
    {
        $count = Order::where('created_at', Carbon::today())->count();
        return $count;
    }

}

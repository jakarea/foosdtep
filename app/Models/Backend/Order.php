<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\OrderItem;
use App\Models\User;
use Carbon\Carbon;
use DB;
class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'order_number', 'user_id', 'status', 'grand_total', 'item_count', 'address_type', 'payment_status', 'payment_method',
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

    public static function CustomerOrderCount($user_id)
    {
        $count = Order::where('user_id', $user_id)->count();
        return $count;
    }

    public static function CustomerSpendAmount($user_id)
    {
        $spendmoney = Order::where('user_id', $user_id)->sum('grand_total');

        return $spendmoney ? : '0';
    }

    public static function NewOrders()
    {        
        $date = Carbon::now()->subDays(7);
        $get_order = Order::where('created_at', '>=', $date)->count();

        return $get_order;
    }

    static public function getCountVisitor($start_date, $end_date)
    {
        $totalvisitors = self::select('orders.id');
        $totalvisitors = $totalvisitors->where(DB::raw("(DATE_FORMAT(orders.created_at,'%Y-%m-%d'))"), '>=' , $start_date);
        $totalvisitors = $totalvisitors->where(DB::raw("(DATE_FORMAT(orders.created_at,'%Y-%m-%d'))"), '<=' , $end_date);
        return $totalvisitors->count();
    }

}

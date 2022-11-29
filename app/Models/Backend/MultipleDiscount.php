<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\MultiDiscountType;
use App\Models\Backend\Product;
use App\Models\User;

class MultipleDiscount extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function typeItems()
    {
        return $this->hasMany(MultiDiscountType::class, 'multidiscount_id');
    }

    public function users($user_id)
    {
        $data = User::whereIn('id', [$user_id])->get();

        $result= '';
        foreach ($data as $key => $value) {
            $result = $value->name;
        }

        return $result;
    }

    public function products($product_id)
    {
        $data = Product::whereIn('id', [$product_id])->get();

        $result= '';
        foreach ($data as $key => $value) {
            $result = $value->name;
        }

        return $result;
    }
}

<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\MultipleDiscount;
use App\Models\Backend\Product;
class MultiDiscountType extends Model
{
    use HasFactory;

    protected $table = 'multi_discount_types';


    protected $fillable = ['product_id', 'value', 'type', 'multidiscount_id'];

    public function items()
    {
        return $this->hasMany(MultipleDiscount::class, 'id', 'multidiscount_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}

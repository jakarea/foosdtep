<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Brand;
use App\Models\Backend\Category;
use App\Models\Backend\Discount;
use App\Models\Backend\MultipleDiscount;
use App\Models\User;
use Auth;
use DB;
class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'cat_id',
        'price',
        'brand_id',
        'prodcut_group_id',
        'faith_id',
        'line_id',
        'content_id',
        'allergens_dp_id',
        'user_id',
        'sku_code',
        'short_description',
        'long_description',
        'status',
        'image',
    ];

    public function brandName($brandID)
    {
        $brand = Brand::whereIn('id', [$brandID])->get();
        $result= '';
        foreach ($brand as $key => $value) {
            $result = $value->name;
        }

        return $result;
    }

    // Category name
    public function categoryName($categoryID)
    {
        $categories = Category::whereIn('id', [$categoryID])->get();
        $result= '';
        foreach ($categories as $key => $category) {
            $result = $category->name;
        }
        return $result;
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function discount($p_id)
    {

        $p = Product::where('id', $p_id)->first();
        $discount = Discount::where('user_id', Auth::user()->id )->first();
        $p_price = $p->price;

        if(!is_numeric($p_price)){
            return 'ongeldig prijsformaat';
        }
        $user_disccout = 0;
        $product_disccout = 0;

        if($discount){
            $user_disccout = $p->price / 100 * $discount->value;
        }

        $multidiscount =  MultipleDiscount::where('user_id','like','%'.trim(Auth::user()->id).'%')->first();

        if($multidiscount){
            $mdvalue = MultiDiscountType::where('product_id', $p_id)->where('multidiscount_id', $multidiscount->id)->first();
            if($mdvalue)
                $product_disccout = $p->price / 100 * $mdvalue->value ;
        }
        return $user_disccout > $product_disccout ? $p_price - $user_disccout : $p_price - $product_disccout;

        // if( !is_null($multidiscount) && is_null($discount) ){
        //     $mdvalue = MultiDiscountType::where('product_id', $p_id)->where('multidiscount_id', $multidiscount->id)->first();

        //     if( !empty($mdvalue) ){
        //         if( $discount->value <= $mdvalue->value ){

        //             $p_val = $p->price / 100 * $mdvalue->value ;
        //             $p_price = $p->price - $p_val;
                    
        //         }else if($discount->value >= $mdvalue->value){
        //             if( $discount->type == 'percentage' ){
        //                 $p_val = $p->price / 100 * $discount->value;
        //                 $p_price = $p->price - $p_val;
        //             }
        //             else {
        //                 $p_val = $p->price - $discount->value;
        //                 $p_price = $p_val;
        //             }
        //         }

        //     } else {
        //         if( $discount->type == 'percentage' ){
        //             $p_val = $p->price / 100 * $discount->value;
        //             $p_price = $p->price - $p_val;
        //         }
        //         else {
        //             $p_val = $p->price - $discount->value;
        //             $p_price = $p_val;
        //         }
        //     }
        // }else if( !is_null($discount) ){
        //     if( $discount->type == 'percentage' ){
        //         $p_val = $p->price / 100 * $discount->value;
        //         $p_price = $p->price - $p_val;
        //     }
        //     else {
        //         $p_val = $p->price - $discount->value;
        //         $p_price = $p_val;
        //     }
        // }
        // else {
        //     $p_price = $p->price;
        // }

        // return $p_price;

    }

    public function DiscountValue()
    {
        $discounts = Discount:: // pivot table
        where('user_id', Auth::user()->id) // user id
        ->first();

        $discount = '';
        if( !is_null($discounts) ) {
            $discount = $discounts->value;
        }

        return $discount ? : '';

    }
}

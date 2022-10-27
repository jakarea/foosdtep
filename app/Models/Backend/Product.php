<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Brand;
use App\Models\Backend\Category;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
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
}

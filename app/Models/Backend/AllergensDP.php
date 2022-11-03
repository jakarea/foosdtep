<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Product;

class AllergensDP extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'parent_id',
        'status',
    ];

    // Count the number of product in this brand
    public function countProductByAllergensDP($adp_id)
    {
        return Product::where('allergens_dp_id','like','%'.trim($adp_id).'%')->count();
    }
}

<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Product;

class Content extends Model
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
    public function countProductByContent($c_id)
    {
        return Product::where('content_id','like','%'.trim($c_id).'%')->count();
    }
}

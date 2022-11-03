<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Product;

class ProductGroup extends Model
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
    public function countProductByPGroup($pgroup_id)
    {
        return Product::where('prodcut_group_id','like','%'.trim($pgroup_id).'%')->count();
    }
}

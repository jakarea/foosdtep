<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Product;

class Faith extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'parent_id',
        'status',
    ];

    // Count the number of product in this faith
    public function countProductByFaith($faith_id)
    {
        return Product::where('faith_id','like','%'.trim($faith_id).'%')->count();
    }
}

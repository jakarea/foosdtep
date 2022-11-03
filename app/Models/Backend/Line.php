<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Product;

class Line extends Model
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
    public function countProductByline($line_id)
    {
        return Product::where('line_id','like','%'.trim($line_id).'%')->count();
    }
}

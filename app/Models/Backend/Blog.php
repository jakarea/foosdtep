<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Product;

class Blog extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'slug',
        'body',
        'user_id',
        'image',
        'status',
    ];
}

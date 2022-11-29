<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Product;
use App\Models\User;

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

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
}

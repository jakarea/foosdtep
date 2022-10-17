<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'parent_id',
        'status',
    ];

    // Parent Category
    public function parent()
    {
        return $this->hasOne(Brand::class, 'parent_id','id');
    }

    // Sub Parent Category
    public function children()
    {
        return $this->hasMany(Brand::class, 'parent_id');
    }

    // Parent Name
    public function parentName() 
    {
        return $this->belongsTo(Brand::class, 'parent_id');
    }
}

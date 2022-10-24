<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'slug',
        'parent_cat',
        'image',
        'status',
    ];

    // Parent Category
    public function parent()
    {
        return $this->hasOne(Category::class, 'parent_cat','id');
    }

    // Sub Parent Category
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_cat');
    }

    // Parent Name
    public function parentName() 
    {
        return $this->belongsTo(Category::class, 'parent_cat');
    }

     // Count the number of product in this category
    public function countProductByCat($categoryID)
    {
        return Product::where('cat_id','like','%'.trim($categoryID).'%')->count();
    }
}

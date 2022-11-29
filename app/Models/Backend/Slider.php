<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'top_subtitle',
        'bottom_subtitle',
        'button_text',
        'button_link',
        'text_bg',
        'image',
        'status',
    ];
}

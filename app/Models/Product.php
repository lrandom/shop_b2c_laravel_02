<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'quantity',
        'category_id',
        'user_id',
        'short_desc',
        'tag_line',
        'content',
        'discount_id',
        'seo_keyword',
        'seo_description'
    ];

    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

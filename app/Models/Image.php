<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory,SoftDeletes;
    public $appends = ['full_image_path'];
    public function imageable()
    {
        return $this->morphTo();
    }


    public function getFullImagePathAttribute(){
        return asset($this->path);
    }
}

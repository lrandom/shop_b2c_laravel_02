<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantValue extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'variant_id'
    ];

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}

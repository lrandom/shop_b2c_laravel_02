<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'sub_total',
        'total',
        'tax',
        'note',
        'address',
        'phone',
        'name',
        'status'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping_cart extends Model
{
    use HasFactory;

    protected $fillable =[
        'product_id',
        'category_id',
        'user_id',
        'quantity',
        'created_at',
        'updated_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    use HasFactory;

    protected $fillable=[
        'customer_id',
        'category_id',
        'product_id',
        'quantity',
        'unit_price'
    ];
}

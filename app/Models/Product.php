<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    use HasFactory;

    protected $fillable=[
        'product_name',
        'description',
        'category_id',
        'image_url',
        'price',
        'created_at',
        'updated_at'
    ];
}

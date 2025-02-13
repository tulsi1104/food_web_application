<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_id',
        'date',
        'payment_method',
        'status',
        'deliverypartner_id',
        'amount',
        'created_at',
        'updated_at'
    ];
}

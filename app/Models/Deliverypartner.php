<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliverypartner extends Model
{
    use HasFactory;
    protected $fillable=[
        'namee',
        'phone_number',
        'profile_photo',
        'availability',
        'created_at',
        'updated_at'
    ];

}

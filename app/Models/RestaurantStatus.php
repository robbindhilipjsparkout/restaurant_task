<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantStatus extends Model
{
    use HasFactory;


     
    protected $table = 'restaurant_status';

    protected $fillable = [
        'status',
        
    ];

}



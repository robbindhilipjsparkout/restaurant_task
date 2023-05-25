<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryServiceType extends Model
{
    use HasFactory;


     
    protected $table = 'delivery__service__type';

    protected $fillable = [
        'service_type',
    ];


}

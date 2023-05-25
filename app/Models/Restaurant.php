<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Restaurant extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'new_restaurant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = [
        'delivery_service_type',
        'restaurant_name',
        'email',
        'mobile_number',
        'secondary_mobile_number',
        'restaurant_logo',
        'restaurant_description',
        'restaurant_website',
        'restaurant_address',
        'gst_number',
        'status',

    ];


}

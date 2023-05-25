<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_restaurant', function (Blueprint $table) {
            
            $table->id();

            $table->string('delivery_service_type');
            $table->string('restaurant_name');
            $table->string('email')->unique();
            $table->string('mobile_number',10);
            $table->string('secondary_mobile_number',10);
            $table->string('restaurant_logo',255);
            $table->string('restaurant_description', 255);
            $table->string('restaurant_website');
            $table->string('restaurant_address');
            $table->string('gst_number');
            $table->string('status');
            
            $table->softDeletes();
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_restaurant');   
    }
}

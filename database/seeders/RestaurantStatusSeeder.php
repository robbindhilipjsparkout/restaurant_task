<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RestaurantStatus;

class RestaurantStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        RestaurantStatus::create([

            'status' => 'active' ,

           
        ]);
            
        RestaurantStatus::create([

            'status' => 'inactive' ,

           
        ]);
}


}
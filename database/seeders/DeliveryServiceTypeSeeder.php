<?php

namespace Database\Seeders;

use App\Models\DeliveryServiceType;
use Illuminate\Database\Seeder;

class DeliveryServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DeliveryServiceType::create([

           'service_type' => 'Food',
        ]);
        DeliveryServiceType::create([

            'service_type' => 'Grocery',
         ]);
         DeliveryServiceType::create([

            'service_type' => 'Meat',
         ]);
         DeliveryServiceType::create([

            'service_type' => 'Daily Product',
         ]);
   


    }
}

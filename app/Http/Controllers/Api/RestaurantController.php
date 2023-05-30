<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\DeliveryServiceType;
use App\Models\RestaurantStatus;
use DB;

class RestaurantController extends Controller
{
    public function store(Request $request)
    {


        $imageName= '';
        if($request->hasFile('restaurant_logo')){

            $imageName = time().'.'.$request->restaurant_logo->getClientOriginalExtension();    
            //  dd($imageName);
            $request->restaurant_logo->move(public_path('images'), $imageName);

        }


        $restaurants= Restaurant::create([

            'delivery_service_type' =>($request->delivery_service_type), 
            'restaurant_name' =>($request->restaurant_name), 
            'email' =>($request->email), 
            'mobile_number' =>($request->mobile_number), 
            'secondary_mobile_number'=>($request->secondary_mobile_number),
            'restaurant_logo'=>$imageName,
            'restaurant_description'=>($request->restaurant_description),
            'restaurant_website'=>($request->restaurant_website),
            'restaurant_address'=>($request->restaurant_address),
            'gst_number'=>($request->gst_number),
            'status'=>($request->status),
            

        ]);

    } 
    
    public function show(Request $request)
    
    {
     

    $restaurantstatus=RestaurantStatus::get();
    
    $search = $request->query('search');

        $restaurants =Restaurant::where('restaurant_name', 'like', '%'.$search.'%')->paginate(5);

        // info($restaurants);

    return  response()->json(['success' => true,'data'=>$restaurants]);
    

}

}
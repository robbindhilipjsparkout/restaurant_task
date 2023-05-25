<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Event;
use App\Event\UserCreated;
use App\Models\Restaurant;
use App\Models\DeliveryServiceType;
use App\Models\RestaurantStatus;
use DB;
use App\Rules\CustomValidationRule;
use Auth;

class RestaurantController extends Controller
{
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deliverytypes=DeliveryServiceType::get();
        $restaurantstatus=RestaurantStatus::get();
     
        return view('restaurant.restaurant_create',  compact('deliverytypes','restaurantstatus'));
    }


    // public function messages()
    // {
    //     return [
    //         'restaurant_name.required' => 'Please enter your restaurant_name.',
    //         'email.required' => 'Please enter your email address.',
    //         'email.email' => 'Please enter a valid email address.',
    //         'restaurant_description.required' => 'Please enter a description.',
    //     ];
    // }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */


//      public function messages( Request $request)


// {
//     $validated = $request->validate([ 
   
//         'restaurant_name.required' => 'A restaurant_name is required',
//         // 'body.required' => 'A message is required',
//     ]);
//     return view('restaurant.restaurant_create',  compact('validated'));
// }

    public function store(Request $request)
    {
        // dd($request->all());
    
        $validated = $request->validate([
           
            'restaurant_name' => ['required','string','regex:/^[A-Za-z\s]+$/',new CustomValidationRule],
           
            'email' => 'required|email|max:255',
            'mobile_number' => 'required|numeric',
            'secondary_mobile_number'=>'required|numeric',
            'restaurant_logo'=>'required|file|mimes:jpeg,png,jpg|max:10000',
            'restaurant_description'=>'required|string|max:1000',
            'restaurant_website'=>'required|string|url',
            'restaurant_address'=>'required|string|regex:/^[a-zA-Z0-9\s\-]+$/',
            'gst_number'=>'required|string|regex:/^[A-Za-z0-9]+$/',
            'status'=>'required',
           

        ]);

        
   

        info($request);


   

$imageName= '';
if($request->hasFile('restaurant_logo')){

    $imageName = time().'.'.$request->restaurant_logo->getClientOriginalExtension();    
    //  dd($imageName);
     $request->restaurant_logo->move(public_path('images'), $imageName);

}




         $restaurants= Restaurant::create([

            'delivery_service_type' =>($request->delivery_service_type), 
            'restaurant_name' => $validated['restaurant_name'],
            'email'=>$validated['email'],
            'mobile_number'=>$validated['mobile_number'],
            'secondary_mobile_number'=>$validated['secondary_mobile_number'],
            'restaurant_logo' => $imageName,
            'restaurant_description' => $validated['restaurant_description'],
            'restaurant_website'=>$validated['restaurant_website'],
            'restaurant_address'=>$validated['restaurant_address'],
            'gst_number'=>$validated['gst_number'],
            'status'=>$validated['status'],



            // 'restaurant_name' =>($request->restaurant_name), 
            // 'email' =>($request->email), 
            // 'mobile_number' =>($request->mobile_number), 
            // 'secondary_mobile_number'=>($request->secondary_mobile_number),
            // 'restaurant_logo'=>$imageName,
            // 'restaurant_description'=>($request->restaurant_description),
            // 'restaurant_website'=>($request->restaurant_website),
            // 'restaurant_address'=>($request->restaurant_address),
            // 'gst_number'=>($request->gst_number),
            // 'status'=>($request->status),
            

        ]);





// dd($restaurants);
    
        //return redirect('restaurant')->with('message','restaurant Created successfully');
        return redirect()->route('restaurantshow')->with('message','Restaurant Created Successfully');
    }



    public function show(Request $request)
    
    {
     

    $restaurantstatus=RestaurantStatus::get();
    
    $search = $request->query('search');

        $restaurants =Restaurant::where('restaurant_name', 'like', '%'.$search.'%')->paginate(5);

        // info($restaurants);

        return view('restaurant.restaurant_show',  compact('restaurants', 'restaurantstatus', 'search'));
    }

    // public function index()
    // {
    //     $restaurants = Restaurant::paginate(5); // Adjust the pagination limit as needed

    //     return view('restaurants.restaurant_show', compact('restaurants'));
    // }


    // public function feedback()
    
    // {
     
    //     $restaurants = Restaurant::get();

    //     // info($restaurants);

    //     return view('layouts.service',  compact('restaurants'));
    // }


// public function logo(){


//     $imageName= '';
//     if($request->hasFile('restaurant_logo')){
    
//         $imageName = time().'.'.$request->restaurant_logo->getClientOriginalExtension();    
//         //  dd($imageName);
//          $request->restaurant_logo->move(public_path('images'), $imageName);
    
//     }

//     $restaurants = Restaurant::get();

//     //dd($imageName);

//     return view('layouts.spblock2',  compact('restaurants'));


// }


// public function toggleActive(Request $request, $id)
// {
//     $model = YourModel::findOrFail($id);
//     $model->active = !$model->active; // Toggle the active state
//     $model->save();
//     return view('restaurant.restaurant_show',  compact('restaurants'));
// }



    // public function edit($id)
    // {
    //     info($id);

    // $restaurants= Restaurant::where('id',$id)->first();

    // $restaurantstatus=RestaurantStatus::get();

    // return view('restaurant.restaurant_edit', compact('restaurants', 'restaurantstatus'));

    // }

    public function update($id,Request $request)
    {
    
        $imageName= '';
        if($request->hasFile('restaurant_logo')){
        
            $imageName = time().'.'.$request->restaurant_logo->getClientOriginalExtension();    
            //  dd($imageName);
             $request->restaurant_logo->move(public_path('images'), $imageName);
        
        }

        Restaurant::where('id',$id)->update(['restaurant_name'=>$request->restaurant_name,'restaurant_logo'=>$imageName, 'restaurant_description'=>$request->restaurant_description, 'status'=>$request->status]);
       
       // return redirect('restaurant')->with('message','restaurant Created successfully');
       return redirect()->route('restaurantshow')->with('message','Restaurant Updated Successfully');

    }


    public function destroy($id)
    {
        
        Restaurant::where('id',$id)->delete(); 
        
            //return redirect('restaurant')->with('message','restaurant Created successfully');
            return redirect()->route('restaurantshow')->with('message','Restaurant Deleted Successfully');
            
    }





}






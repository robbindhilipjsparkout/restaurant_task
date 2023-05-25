<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/restaurant', function(){
    return view('layouts.index');
});

Route::get('/contact', function(){
    return view('layouts.contact');
});



Route::controller(RestaurantController::class)->group(function(){
    
    Route::get('/restaurantshow', 'show')->name('restaurantshow');
    
    Route::get('/restaurantcreate', 'create')->name('restaurantcreate');
    Route::post('/restaurantstore', 'store')->name('restaurantstore');
    
     Route::get('/restaurantedit/{id}/edit','edit')->name('restaurantedit');
     Route::put('/restaurantupdate/{id}', 'update')->name('restaurantupdate');

     Route::delete('restaurantdelete/{id}',  'destroy')->name('restaurantdelete');

});

// Route::get('/restaurantcreate', [RestaurantController::class, 'create'])->name('restaurantcreate');
// Route::post('/restaurantstore', [RestaurantController::class, 'store'])->name('restaurantstore');

// Route::get('restaurantcreate','RestaurantController@create')
// Route::post('restaurantstore','RestaurantController@store')->name('restaurantstore');


Route::get('/', function(){
    return view('restaurant.restaurant_welcome');
});


Route::put('toggle/{id}', 'YourController@toggleActive')->name('toggle.active');

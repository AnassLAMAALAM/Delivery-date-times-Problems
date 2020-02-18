<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//POST /api/cities | body: name API endpoint to create cities
Route::post('cities','CitiesController@store')->name('city.store');

//POST /api/delivery-times| body: delivery_at API endpoint to create delivery times
Route::post('delivery-times','DeliveryTimesController@store');

//POST /api/cities/{city_id}/delivery-times | body: delivery_time(s) : attach cities to delivery time
Route::post('cities/{city_id}/delivery-times','AttachDeliveryTimeToCity');

//POST excludes a delivery time span on a certain date for a given city | body: delivery_time(s) - city : excludes a delivery time span on a certain date for a given city.
Route::post('dates/{date}/delivery-times','DetachDeliveryTimeToDateForCityController');

Route::get('cities/{city_id}/delivery-dates-times/{number_of_days}','DeliveryTimesController@availabledeliverytime');

?>
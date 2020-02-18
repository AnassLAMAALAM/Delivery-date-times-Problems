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


Route::post('cities','CitiesController@store')->name('city.store');
Route::post('delivery_times','DeliveryTimesController@store')->name('delivery.time.store');
Route::post('cities/{city_id}/delivery-times','AttachDeliveryTimeToCity');


Route::post('dates/{date}/delivery-time','DetachDeliveryTimeToDateForCityController');

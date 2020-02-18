<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class AttachDeliveryTimeToCity extends Controller
{
    public function __invoke(Request $request,$city_id)
    {
       City::findOrFail($city_id)->delivery_times()->attach($request->delivery_times);

       if (!$request->expectsJson())
        {
            return response()->json([
                'message' => "You attached cities to delivery time wiht success"
            ]);
        }
    }
}

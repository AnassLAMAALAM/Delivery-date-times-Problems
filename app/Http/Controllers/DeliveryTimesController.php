<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Delivery_time;
use App\City;
use App\Date;

class DeliveryTimesController extends Controller
{
    public function store(Request $request)
    {
        
        //if(Delivery_time::create(['delivery_at' => $request->delivery_at])) return $request;

        $delivery_time = Delivery_time::create(['delivery_at' => $request->delivery_at]);
        
        if (!$request->expectsJson())
        {
            return response()->json([
                'message' => "Your delivery_time(s) has been submitted successfully",
                'delivery_time' => $delivery_time
            ]);
        }
    }

    public function availabledeliverytime($city_id,$number_of_days)
    {

        return Date::with(['delivery_times.cities'])
        ->where('date','<', Carbon::now()
        ->addDays($number_of_days))->get();

        //$delivery_times =   City::find($city_id)->delivery_times;
        // $cities_id = $delivery_times->pluck('id');
        //$posts = Date::whereIN('user_id', $cities_id)->get();
        //with(['delivery_times.cities'])
        //->where('date','<', Carbon::now()
        //->addDays($number_of_days))->get();


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;
use App\City;
use App\Delivery_time;

class DetachDeliveryTimeToDateForCityController extends Controller
{
    public function __invoke(Date $date,Request $request)
    {
        //return Delivery_time::find($request->delivery_time)->cities;
        
       
        if(gettype($request->delivery_time) == "array"){
       
            foreach ($request->delivery_time as $key => $id) {
               
                $date->delivery_times()->detach
                ((Delivery_time::find($id))->cities()
                ->detach(City::find($request->city)));
                
            }
        }
        else{
            $date->delivery_times()->detach
            ((Delivery_time::find($request->delivery_time))->cities()
            ->detach(City::find($request->city)));
        }

       return response()->json([
        'message' => "Your delivery_time(s) has been excluded successfully"
       ]);
        
    }
}

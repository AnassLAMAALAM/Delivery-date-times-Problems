<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;
class DetachDeliveryTimeToDateForCityController extends Controller
{
    public function __invoke(Date $date,Request $request)
    {
        return $date->delivery_times()->attach($request->delivery_time);
    }
}

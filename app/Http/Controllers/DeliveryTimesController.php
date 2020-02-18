<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery_time;
class DeliveryTimesController extends Controller
{
    public function store(Request $request)
    {
        if(Delivery_time::create(['delivery_at' => $request->delivery_at])) return $request;
    }
}

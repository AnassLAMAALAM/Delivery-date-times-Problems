<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{
    public function store(Request $request)
    {

        $city = City::create(['name' => $request->name]);
        if (!$request->expectsJson())
        {
            return response()->json([
                'message' => "Your city has been submitted successfully",
                'city' => $city
            ]);
        }
    }
}

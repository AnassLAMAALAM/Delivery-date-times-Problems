<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{
    public function store(Request $request)
    {
        if(City::create(['name' => $request->name])) return $request;
    }
}

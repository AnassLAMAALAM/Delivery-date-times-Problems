<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_time extends Model
{
    
    protected $fillable = ['delivery_at'];

    public function cities()
    {
        return $this->belongsToMany(City::class,'city_delivery_time_date') ;
    }

    public function dates()
    {
        return $this->belongsToMany(Date::class,'city_delivery_time_date') ;
    }

}

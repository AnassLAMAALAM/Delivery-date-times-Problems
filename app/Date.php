<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillables = ['date'];

    public function delivery_times()
    {
        return $this->belongsToMany(Delivery_time::class,'city_delivery_time_date',);
    }

}

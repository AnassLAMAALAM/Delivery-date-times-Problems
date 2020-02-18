<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = ['name']; 


    public function partner()
    {
        return $this->hasOne(Partner::class);
    }

    public function delivery_times()
    {
        return $this->belongsToMany(Delivery_time::class,'city_delivery_time_date') ;
    }
}

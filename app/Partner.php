<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name']; 

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}

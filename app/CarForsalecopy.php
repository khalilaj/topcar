<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarForsale extends Model
{
    public function car_category()
    {
        return $this->belongsTo('App\CarCategory');
    }
}

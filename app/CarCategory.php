<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarCategory extends Model
{
    public function car_for_sale()
    {
        return $this->belongsTo('App\CarForSale');
    }
}

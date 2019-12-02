<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarForSale extends Model
{
    public function car_category()
    {
        return $this->belongsTo('App\CarCategory');
    }
}

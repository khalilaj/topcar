<?php

namespace App\Http\Controllers;
 
use App\CarCategory; 
use App\CarForSale;
use Illuminate\Http\Request;

class CarForSaleListController extends Controller
{

    public function index()
    { 
        $car_categories = CarCategory::all();
        $car_for_sales = CarForSale::all();
        return view('car_for_sale_list',compact('car_categories','car_for_sales'));
    }
}

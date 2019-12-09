<?php

namespace App\Http\Controllers;
 
use App\CarCategory; 
use App\CarForSale;
use Illuminate\Http\Request;

class CarForSaleDetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $car_for_sales = CarForSale::all();
        return view('car_for_sale_detail',compact('car_for_sales'));
    }
}

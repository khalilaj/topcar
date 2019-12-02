<?php

namespace App\Http\Controllers;
 
use App\CarCategory; 
use App\CarForSale;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $car_categories = CarCategory::all();
        $car_for_sales = CarForSale::all();
        return view('welcome',compact('car_categories','car_for_sales'));
    }
}

<?php

namespace App\Http\Controllers;
 
use App\CarCategory; 
use App\CarForSale;
use Illuminate\Http\Request;

class SparePartsForSaleListController extends Controller
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
        return view('spareparts_for_sale_list',compact('car_for_sales'));
    }
}

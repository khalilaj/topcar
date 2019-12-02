<?php

namespace App\Http\Controllers\Admin;

use App\CarCategory;
use App\CarForSale;
use Carbon\Carbon;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarForSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car_for_sales = CarForsale::all();
        return view('admin.car_for_sale.index',compact('car_for_sales'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_categories = CarCategory::all();
        return view('admin.car_for_sale.create',compact('car_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'car_category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'mileage' => 'required',
            'engine' => 'required',
            'discount' => 'required',
            'year' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/car_for_sale'))
            {
                mkdir('uploads/car_for_sale',0777,true);
            }
            $image->move('uploads/car_for_sale',$imagename);
        }else{
            $imagename = "default.png";
        }
        $car_for_sale = new CarForSale();
        $car_for_sale->car_category_id = $request->car_category_id;
        $car_for_sale->name = $request->name;
        $car_for_sale->description = $request->description;
        $car_for_sale->price = $request->price;
        $car_for_sale->mileage = $request->mileage;
        $car_for_sale->engine = $request->engine;
        $car_for_sale->discount = $request->discount;
        $car_for_sale->year = $request->year;
        
        $car_for_sale->image = $imagename;
        $car_for_sale->save();
        return redirect()->route('car_for_sale.index')->with('successMsg','Item Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car_for_sale = ItemC::find($id);
        $cars_for_sales = Category::all();
        return view('admin.car_for_sale.edit',compact('car_for_sale','cars_for_sales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $car_for_sale = Item::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/car_for_sale'))
            {
                mkdir('uploads/car_for_sale',0777,true);
            }
            unlink('uploads/car_for_sale/'.$car_for_sale->image);
            $image->move('uploads/car_for_sale',$imagename);
        }else{
            $imagename = $car_for_sale->image;
        }

        $car_for_sale->category_id = $request->category;
        $car_for_sale->name = $request->name;
        $car_for_sale->description = $request->description;
        $car_for_sale->price = $request->price;
        $car_for_sale->image = $imagename;
        $car_for_sale->save();
        return redirect()->route('car_for_sale.index')->with('successMsg','Item Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_for_sale = Item::find($id);
        if (file_exists('uploads/car_for_sale/'.$car_for_sale->image))
        {
            unlink('uploads/car_for_sale/'.$car_for_sale->image);
        }
        $car_for_sale->delete();
        return redirect()->back()->with('successMsg','Item successfully Deleted');
    }
}

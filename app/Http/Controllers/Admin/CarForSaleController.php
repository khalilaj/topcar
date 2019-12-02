<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CarForSale;
use App\CarCategory;

class CarForSaleController extends Controller
{
    public function index()
    {
        $car_for_sales = CarForSale::all();
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
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
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
        $car_for_sale = new car_for_sale();
        $car_for_sale->category_id = $request->category;
        $car_for_sale->name = $request->name;
        $car_for_sale->description = $request->description;
        $car_for_sale->price = $request->price;
        $car_for_sale->image = $imagename;
        $car_for_sale->save();
        return redirect()->route('car_for_sale.index')->with('successMsg','car_for_sale Successfully Saved');
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
        $car_for_sale = CarForSale::find($id);
        $car_categories = CarCategory::all();
        return view('admin.car_for_sale.edit',compact('car_for_sale','car_categories'));
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
        $car_for_sale = new car_for_sale();
        $car_for_sale->category_id = $request->category;
        $car_for_sale->name = $request->name;
        $car_for_sale->description = $request->description;
        $car_for_sale->price = $request->price;
        $car_for_sale->image = $imagename;
        $car_for_sale->save();
        return redirect()->route('car_for_sale.index')->with('successMsg','car_for_sale Successfully Saved');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_for_sale = car_for_sale::find($id);
        if (file_exists('uploads/car_for_sale/'.$car_for_sale->image))
        {
            unlink('uploads/car_for_sale/'.$car_for_sale->image);
        }
        $car_for_sale->delete();
        return redirect()->back()->with('successMsg','car_for_sale successfully Deleted');
    }
}

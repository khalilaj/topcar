<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\CarCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarCategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car_categories = CarCategory::all();
        return view('admin.car_category.index',compact('car_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car_category.create');
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
            'name' => 'required', 
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/car_category'))
            {
                mkdir('uploads/car_category',0777,true);
            }
            $image->move('uploads/car_category',$imagename);
        }else{
            $imagename = "default.png";
        }
        $item = new CarCategory(); 
        $item->name = $request->name; 
        $item->image = $imagename;
        $item->save();
        return redirect()->route('car_category.index')->with('successMsg','CarCategory Successfully Saved');
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
        $car_category = CarCategory::find($id);
        return view('admin.car_category.edit',compact('car_category'));
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
            'name' => 'required', 
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $car_category = CarCategory::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/car_category'))
            {
                mkdir('uploads/car_category',0777,true);
            }
            unlink('uploads/car_category/'.$car_category->image);
            $image->move('uploads/car_category',$imagename);
        }else{
            $imagename = $car_category->image;
        }
 
        $car_category->name = $request->name; 
        $car_category->image = $imagename;
        $car_category->save();
        return redirect()->route('car_category.index')->with('successMsg','Car Category Successfully Updated');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       CarCategory::find($id)->delete();
       return redirect()->back()->with('successMsg','CarCategory Successfully Delete');
    }
}
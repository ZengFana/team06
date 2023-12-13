<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;
use App\Models\Brand;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return type::all()->toArray();
        $types = Type::all();
        return view('types.index')->with('types',$types);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('types.create');
        $brands = Brand::orderBy('brands.id', 'asc')->pluck('brands.brands', 'brands.id');
        return view('types.create', ['brands' =>$brands, 'brandSelected' => null]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car_sample = $request->input('car_sample');
        $bid = $request->input('bid');
        $car_modle = $request->input('car_modle');
        $type = $request->input('type');
        $power_type = $request->input('power_type');
        $price = $request->input('price');
        $origin = $request->input('origin');
        $car_door = $request->input('car_door');
        $exhaust_volume = $request->input('exhaust_volume');

        $type = Type::create([
            'car_sample'=>$car_sample,
            'bid'=>$bid,
            'car_modle'=>$car_modle,
            'type'=>$type,
            'power_type'=>$power_type,
            'price'=>$price,
            'origin'=>$origin,
            'car_door'=>$car_door,
            'exhaust_volume'=>$exhaust_volume]);
        return redirect('types');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = Type::findOrFail($id);
        return view('types.show')->with('types',$types);

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
        $type = Type::findOrFail($id);
        $brands = Brand::orderBy('brands.brands','asc')->pluck('brands.brands','brands.id');
        $selected_tags = $type->brand->id;
        return view('types.edit',['type'=>$type,'brands'=>$brands,'brandSelected'=>$selected_tags]);
        //
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
        $type = Type::findOrFail($id);

        $type->car_sample = $request->input('car_sample');
        $type->bid = $request->input('bid');
        $type->car_modle = $request->input('car_modle');
        $type->type = $request->input('type');
        $type->power_type = $request->input('power_type');
        $type->price = $request->input('price');
        $type->origin = $request->input('origin');
        $type->car_door = $request->input('car_door');
        $type->exhaust_volume = $request->input('exhaust_volume');
        $type->save();


        return redirect('types');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();
        return redirect('types');
        ///
    }
}
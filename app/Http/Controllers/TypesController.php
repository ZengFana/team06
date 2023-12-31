<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/

use App\Models\Type;
use App\Models\Brand;
use App\Http\Requests\CreateTypeRequest;
use Illuminate\Http\Request;
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
        $types = Type::paginate(25);
        $origins = Type::allOrigins()->pluck('types.origin','types.origin');
        return view('types.index',['types'=> $types,'origins'=> $origins, 'selectedOrigin'=>null]);

    }

    public function cpvolume()
    {
        //
        $types = Type::cpvolume()->paginate(25);
        $origins = Type::allOrigins()->pluck('types.origin','types.origin');
        return view('types.index',['types'=> $types,'origins'=> $origins, 'selectedOrigin'=>null]);

    }
    public function origin(Request $request)
    {
        //
        $types = Type::origin($request->input('ori'))->paginate(25);
        $origins = Type::allOrigins()->pluck('types.origin','types.origin');
        $selectedOrigin = $request->input('ori');
        return view('types.index',['types'=> $types,'origins'=> $origins ,'selectedOrigin'=>$selectedOrigin]);

    }
    /**
     * Show thpos/orm for creating a new resource.
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
    public function store(CreateTypeRequest $request)
    {
        $car_sample = $request->input('car_sample');
        $bid = $request->input('bid');
        $car_modle = $request->input('car_modle');
        $type = $request->input('type');
        $power_type = $request->input('power_type');
        $price = $request->input('price');
        $origin = $request->input('origin');
        $door = $request->input('door');
        $exhaust_volume = $request->input('exhaust_volume');

        $type = Type::create([
            'car_sample'=>$car_sample,
            'bid'=>$bid,
            'car_modle'=>$car_modle,
            'type'=>$type,
            'power_type'=>$power_type,
            'price'=>$price,
            'origin'=>$origin,
            'door'=>$door,
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
        parent::edit($id);
        
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
    public function update(CreateTypeRequest $request, $id)
    {
        $type = Type::findOrFail($id);

        $type->car_sample = $request->input('car_sample');
        $type->bid = $request->input('bid');
        $type->car_modle = $request->input('car_modle');
        $type->type = $request->input('type');
        $type->power_type = $request->input('power_type');
        $type->price = $request->input('price');
        $type->origin = $request->input('origin');
        $type->door = $request->input('door');
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
        //
    }
}

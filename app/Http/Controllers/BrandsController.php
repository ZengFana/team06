<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\CreateBrandRequest;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return Brand::all()->toArray();
        $brands = Brand::all();
        return view('brands.index')->with('brands',$brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBrandRequest $request)
    {
        $brands = $request->input('brands');
        $headquarter = $request->input('headquarter');
        $area = $request->input('area');
        $year = $request->input('year');
        $html = $request->input('html');
        
        Brand::create([
            'brands'=>$brands,
            'headquarter'=>$headquarter,
            'area'=>$area,
            'year'=>$year,
            'html'=>$html]);

        return redirect('brands');
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
        $brand = Brand::findOrFail($id);
        $types = $brand->types;
        return view('brands.show',['brand'=>$brand,'types'=>$types]);
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
        //return Brand::findOrFail($id)->toArray();
        $brand = Brand::findOrFail($id);
        return view('brands.edit',['brand'=>$brand]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBrandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $brand->brands = $request->input('brands');
        $brand->headquarter = $request->input('headquarter');
        $brand->area = $request->input('area');
        $brand->year = $request->input('year');
        $brand->html = $request->input('html');
        $brand->save();

        return redirect('brands');
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
        //
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect('brands');
    }
}
<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\Brand;
// use illuminate\Http\Request;

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

    public function yearold()
    {
        $brands = Brand::yearold()->get();
        return view('brands.index')->with('brands',$brands);
    }
    public function yeyear()
    {
        $brands = Brand::yeyear()->get();
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
    public function store(Request $request)
    {
        $request->validate([
            'brands' => 'required|string|min:2|max:191',
            'headquarter' => 'required|string|min:2|max:191',
            'area' => 'required|string|min:2|max:191',
            'year' => 'required|numeric',
            'html' => 'required|string|min:2|max:255'
        ],[
            "brands.required" => "品牌 為必填",
            "brands.min" => "品牌 至少需要2個字",
            "headquarter.required" => "總部 為必填",
            "headquarter.min" => "總部 至少需要1個字",
            "area.required" => "行政區域 為必填",
            "area.min" => "行政區域 至少需要1個字",
            "year.required" => "成立時間 為必填",
            "year.numeric" => "成立時間 必須為數值",
            "html.required" => "官方網址 為必填",
            "html.min" => "官方網址 至少需要2個字"
        ]);

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
    public function update(Request $request, $id)
    {
        $request->validate([
            'brands' => 'required|string|min:2|max:191',
            'headquarter' => 'required|string|min:2|max:191',
            'area' => 'required|string|min:2|max:191',
            'year' => 'required|numeric',
            'html' => 'required|string|min:2|max:255'
        ],[
            "brands.required" => "品牌 為必填",
            "brands.min" => "品牌 至少需要2個字",
            "headquarter.required" => "總部 為必填",
            "headquarter.min" => "總部 至少需要1個字",
            "area.required" => "行政區域 為必填",
            "area.min" => "行政區域 至少需要1個字",
            "year.required" => "成立時間 為必填",
            "year.numeric" => "成立時間 必須為數值",
            "html.required" => "官方網址 為必填",
            "html.min" => "官方網址 至少需要2個字"
        ]);
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

@extends('app')

@section('title','顯示特定車型')

@section('car_theme','您所選取的型號資料')

@section('car_contents')
<h1>顯示單一車型</h1>
編號：{{$types->id}}<br/>
車型：{{$types->car_sample}}<br/>
品牌：{{$types->brand->brands}}<br/>
車款：{{$types->car_modle}}<br/>
型號：{{$types->type}}<br/>
種類：{{$types->power_type}}<br/>
價格：{{$types->price}}<br/>
產地：{{$types->origin}}<br/>
車門：{{$types->door}}<br/>
排氣量：{{$types->exhaust_volume}}<br/>
@endsection
@extends('app')

@section('title','汽車資料庫管理-列出所選車型')

@section('car_contents')
編號：{{$types->id}}<br/>
車型：{{$types->car_sample}}<br/>
品牌1：{{$types->brand->brands}}<br/>
車款：{{$types->car_modle}}<br/>
型號：{{$types->type}}<br/>
種類：{{$types->power_type}}<br/>
價格：{{$types->price}}<br/>
產地：{{$types->origin}}<br/>
車門：{{$types->car_door}}<br/>
排氣量：{{$types->exhaust_volume}}<br/>
@endsection
@extends('app')

@section('title','編輯特定品牌')

@section('car_theme')

@section('car_contents')
    {!! Form::model($brand,['method'=>'PATCH','action'=>['\App\Http\Controllers\BrandsController@update',$brand->id]])!!}
    @include('brands.form',['submitButtonText'=>"編輯車型品牌"])
    {!! Form::close() !!}
@endsection
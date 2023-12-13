@extends('app')

@section('title','建立品牌表單')

@section('car_theme','建立品牌的表單')

@section('car_contents')
    {!! Form::open(['url' => 'brands/store'])!!}
    @include('brands.form',['submitButtonText'=>"新增品牌資料"])
    {!! Form::close()!!}
@endsection
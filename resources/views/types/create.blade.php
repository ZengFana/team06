@extends('app')

@section('title','建立車型表單')

@section('car_theme','建立車型的表單')

@section('car_contents')
    @include('message.list')
    {!! Form::open(['url' => 'types/store'])!!}
    @include('types.form',['submitButtonText'=>"新增車型資料"])
    {!! Form::close()!!}
@endsection
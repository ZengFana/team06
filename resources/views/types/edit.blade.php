@extends('app')

@section('title','編輯特定車型')

@section('car_theme')

@section('car_contents')
    @include('message.list')
    {!! Form::model($type,['method'=>'PATCH','action'=>['\App\Http\Controllers\TypesController@update',$type->id]])!!}
    @include('types.form',['submitButtonText'=>"更新車型資料"])
    {!! Form::close() !!}
@endsection
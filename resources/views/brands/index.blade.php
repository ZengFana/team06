@extends('app')

@section('title',汽車資料庫管理-列出所有品牌')

@section('car_theme')

@section('car_contents')
        <h1>
            所有品牌
        </h1>
        <table>
            <tr>
                <th>編號</th>
                <th>品牌</th>
                <th>總部</th>
                <th>行政區域</th>
                <th>成立時間</th>
                <th>官方網址</th>
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
            </tr>


           @foreach ($brands as $brand)
                <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->brands}}</td>
            <td>{{$brand->headquarter}}</td>
            <td>{{$brand->area}}</td>
            <td>{{$brand->year}}</td>
            <td>{{$brand->html}}</td>
        <td><a href="{{route('brands.show',['id'=>$brand->id])}}">顯示</a></td>
        <td><a href="{{route('brands.edit',['id'=>$brand->id])}}">修改</a></td>
        <td>刪除</td>
                </tr>
        
        @endforeach
        </table>
    
@endsection
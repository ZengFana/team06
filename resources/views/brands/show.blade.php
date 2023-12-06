@extends('app')

@section('title','顯示特定品牌')

@section('car_theme','您所選取的品牌資料')

@section('car_contents')
<h1>顯示單一品牌</h1>
編號：{{$brand->id}}<br/>
品牌：{{$brand->brands}}<br/>
總部：{{$brand->headquarter}}<br/>
行政區域：{{$brand->area}}<br/>
成立時間：{{$brand->year}}<br/>
官方網址：{{$brand->html}}<br/>
<h1>{{$brand->brands}}所有型號</h1>
        <table>
            <tr>
                <th>編號</th>
                <th>車型</th>
                <th>品牌</th>
                <th>車款</th>
                <th>型號</th>
                <th>種類</th>
                <th>價格</th>
                <th>產地</th>
                <th>車門</th>
                <th>排氣量</th>          
            </tr>
        @foreach ($types as $type)
        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->car_sample}}</td>
            <td>{{$type->brand->brands}}</td>
            <td>{{$type->car_modle}}</td>
            <td>{{$type->type}}</td>
            <td>{{$type->power_type}}</td>
            <td>{{$type->price}}</td>
            <td>{{$type->origin}}</td>
            <td>{{$type->car_door}}</td>
            <td>{{$type->exhaust_volume}}</td>
        </tr>
        @endforeach
        </table>
@endsection
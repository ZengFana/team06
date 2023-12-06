@extends('app')

@section('title',汽車資料庫管理-列出所有型號')

@section('car_contents')

    <h1>列出所有型號</h1>
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
                
        @foreach ($types as $type)
      

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
            <td><a href="{{route('types.show',['id'=>$type->id])}}">顯示</a></td>
            <td><a href="{{route('types.edit',['id'=>$type->id])}}">修改</a></td>
            <td>刪除</td>
        </tr>
        @endforeach

   </table>
@endsection
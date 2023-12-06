@extends('app')

@section('title','汽車資料庫管理-列出所有型號')

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
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>                
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
            <td><a href="{{route('types.show',['id'=>$type->id])}}">顯示</a></td>
            <td><a href="{{route('types.edit',['id'=>$type->id])}}">修改</a></td>
            <td><form action="{{url('/types/delete',['id'=> $type->id])}}"method="post">
            <input class="btn btn-default" type="submit" value="刪除"/>
            @method('delete')
            @csrf
        </form></td>
        </tr>
        @endforeach
        </table>
@endsection
@extends('app')

@section('title','汽車資料庫管理-列出所有品牌')

@section('car_contents')
        <h1>列出所有品牌</h1>
        <table>
            <tr>
                <th>編號</th>
                <th>品牌</th>
                <th>總部</th>
                <th>行政區域</th>
                <th>成立時間</th>
                <th>官方網址</th>
            </tr>
        @for($i=0;$i<count($brands);$i++)
        <tr>
        <td>{{$brands[$i]['id']}}</td>
        <td>{{$brands[$i]['brands']}}</td>
        <td>{{$brands[$i]['headquarter']}}</td>
        <td>{{$brands[$i]['area']}}</td>
        <td>{{$brands[$i]['year']}}</td>
        <td>{{$brands[$i]['html']}}</td>
        <ta><a href="{{route(brands.show',['id'=>$brands[$i]['id']}}">顯示</a></td>
        <ta><a href="{{route(brands.edit',['id'=>$brands[$i]['id']}}">修改</a></td>
        <td>刪除</td>
    </tr>
    @endfor
</table>
@endsection
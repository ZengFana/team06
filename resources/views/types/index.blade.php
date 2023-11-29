@extends('app')

@section('title',汽車資料庫管理-列出所有型號')

@section('car_contents')

    <h1>列出所有型號</h1>
    <table>
        <tr>
            <th>編號</th>
                <th>車型</th>
                <th>品牌編號</th>
                <th>車款</th>
                <th>型號</th>
                <th>種類</th>
                <th>價格</th>
                <th>產地</th>
                <th>車門</th>
                <th>排氣量</th>
                
        @for($i=0;$i<count(types);$i++)
      

        <td>{{$brands[$i]['id']}}</td>
            <td>{{$types[$i]['car_sample']}}</td>
            <td>{{$types[$i]['bid']}}</td>
            <td>{{$types[$i]['car_modle']}}</td>
            <td>{{$types[$i]['type']}}</td>
            <td>{{$types[$i]['power_type']}}</td>
            <td>{{$types[$i]['price']}}</td>
            <td>{{$types[$i]['power_type']}}</td>
            <td>{{$types[$i][''origin']}}</td>
            <td>{{$types[$i]['car_door']}}</td>
            <td>{{$types[$i]['exhaust_volume']}}</td>
            <td><a href="{{route('brands.show',['id'=>$brands[$i]['id']]}}">顯示</a></td>
            <td><a href="{{route('brands.edit',['id'=>$brands[$i]['id']]}}">編輯</a></td>
            <td>刪除</td>
        </tr>
        @endfor

   </table>
@endsection
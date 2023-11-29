<html>
    <head>
        <title>列出所有品牌</title>
    </head>
    <body>
        <h1>列出所有品牌</h1>
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
        @for($i=0;$i<count($brands);$i++)
        <tr>            
            <td>{{$brands[$i]['id']}}</td>
            <td>{{$brands[$i]['brands']}}</td>
            <td>{{$brands[$i]['headquarter']}}</td>
            <td>{{$brands[$i]['area']}}</td>
            <td>{{$brands[$i]['year']}}</td>
            <td>{{$brands[$i]['html']}}</td>
            <td><a href="{{route('brands.show',['id'=>$brands[$i]['id']])}}">顯示</a></td>
            <td><a href="{{route('brands.edit',['id'=>$brands[$i]['id']])}}">修改</a></td>
            <td>刪除</td>
        </tr>
        
        @endfor
        </table>
    </body>
</html>
@extends('app')

@section('title','汽車資料庫管理-列出所有品牌')

@section('car_theme')

@section('car_contents')
        <h1>列出所有品牌</h1>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            @can('admin')
            <a href="{{ route('brands.create') }} ">新增品牌</a>
            @endcan
            <a href="{{ route('brands.index') }} ">所有品牌</a>
            <a href="{{ route('brands.yearold') }} ">老品牌</a>
            <a href="{{ route('brands.yeyear') }} ">近現代品牌</a>
        </div>
        <table>
            <tr>
                <th>編號</th>
                <th>品牌</th>
                <th>總部</th>
                <th>行政區域</th>
                <th>成立時間</th>
                <th>官方網址</th>
                <th>操作1</th>
                @can('admin')
                <th>操作2</th>
                <th>操作3</th>
                @elsecan('manager')
                <th>操作2</th>
                @endcan
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
        @can('admin')
        <td><a href="{{route('brands.edit',['id'=>$brand->id])}}">修改</a></td>
        <td><form action="{{url('/brands/delete',['id'=> $brand->id])}}"method="post">
        <input class="btn btn-default" type="submit" value="刪除"/>
        @method('delete')
        @csrf
        </form></td>
        @elsecan('manager')
        <td><a href="{{route('brands.edit',['id'=>$brand->id])}}">修改</a></td>
        @endcan
        </tr>
        @endforeach
        </table>
 @endsection
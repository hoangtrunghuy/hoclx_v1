@extends('layouts.app')

@section('content')
    <h1>Danh sách mẹo lái xe</h1>
    <a class="btn btn-primary" href="{{route('tips.create')}}">Thêm</a>
    <div class="clearfix"></div>
    <br>
    <table id="myTable" class="table table-hover">
        <thead>
        <th>title</th>
        <th>discription</th>
        <th>image</th>
        <th>content</th>
        <th>action</th>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->discription}}</td>
                <td>{{$item->image}}</td>
                <td>{{$item->content}}</td>
                <td>
                    <a href="{{route('tips.show', $item->id)}}"><i class="fa fa-eye"></i></a>
                    <a href="{{route('tips.edit', $item->id)}}"><i class="fa fa-pencil"></i></a>
                    <a href="{{route('tips.destroy', $item->id)}}"
                        onclick = "event.preventDefault();
                        flag = confirm('bạn có chác muốn xóa không!');
                        if(flag){
                            window.location = '{{route('tips.destroy', $item->id)}}';
                        }
                        "
                    ><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
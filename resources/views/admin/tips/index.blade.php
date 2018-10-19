@extends('layouts.app')

@section('content')

    <h1>Danh sách mẹo lái xe</h1>
    <a class="btn btn-primary" href="{{route('tips.create')}}">Thêm</a>
    <div class="clearfix"></div>
    <br>
    <table id="myTable" class="table table-hover">
        <thead>
        <th>Title</th>
        <th>Discription</th>
        <th>Image</th>
        <th>Content</th>
        <th>Action</th>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->discription}}</td>
                <td>{{$item->image}}</td>
                <td class="stringToHtml">{{$item->content}}</td>
                <td>
                    <a href="{{route('tips.show', $item->id)}}">{{--<i class="fa fa-eye"></i>--}}Show</a>
                    <a href="{{route('tips.edit', $item->id)}}">{{--<i class="fa fa-pencil"></i>--}}Edit</a>
                    <a href="{{route('tips.destroy', $item->id)}}"
                        onclick = "event.preventDefault();
                        flag = confirm('bạn có chác muốn xóa không!');
                        if(flag){
                            window.location = '{{route('tips.destroy', $item->id)}}';
                        }
                        "
                    >{{--<i class="fa fa-trash"></i>--}}Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--chuyen varchar sang HTML--}}
    <script>
        var str = document.getElementsByClassName('stringToHtml');
        for (var i = 0; i < str.length; i++) {
            str[i].innerHTML = str[i].innerText;
        }

    </script>
@endsection

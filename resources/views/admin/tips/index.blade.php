@extends('layouts.app-admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Mẹo lái xe</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <!-- DataTables Advanced Tables -->
                <div class="col-m-3">
                    <a href="{{ route('tips.create') }}" title=""><i class="fa fa-plus-square"></i> Thêm</a>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <th>STT</th>
                        <th>Title</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <!-- <th>Noi Dung</th> -->
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->discription}}</td>
                            <td><img width="100px"  src="{{$item->image}}"></td>
                            <!-- <td class="stringToHtml">{{$item->content}}</td>  -->
                            <td>
                                {{--<a href="{{route('tips.show', $item->id)}}">Show</a>--}}
                                <a href="{{route('tips.edit', $item->id)}}"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                <br>
                                <a href="{{route('tips.destroy', $item->id)}}"
                                    onclick = "event.preventDefault();
                                    flag = confirm('bạn có chác muốn xóa không!');
                                    if(flag){
                                        window.location = '{{route('tips.destroy', $item->id)}}';
                                    }
                                    "
                                    ><i class="glyphicon glyphicon-trash"></i>Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <script type="text/javascript" charset="utf-8" >
        if("{{ Session()->get('success') }}" != "")
            alert("{{ Session()->get('success') }}");
        if("{{ Session()->get('warning') }}" != "")
            alert("{{ Session()->get('warning') }}");
    </script>
    {{--chuyen varchar sang HTML--}}
    <script>
        var str = document.getElementsByClassName('stringToHtml');
        for (var i = 0; i < str.length; i++) {
            str[i].innerHTML = str[i].innerText;
        }
    </script>
    @endsection

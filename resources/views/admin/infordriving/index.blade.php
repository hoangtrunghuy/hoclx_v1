@extends('layouts.app-admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thông tin lái xe</h1>
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
                    <a href="{{ route('infordriving.create') }}" title=""><i class="fa fa-plus-square"></i> Thêm</a>
                    <button type="reset" style="margin-left: 50px;" class="btn btn-success" onclick="location.href='{{route('infordriving.autosave')}}'">Lấy bài tự động</button>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                            <td>{{$item->infor_drivings_title}}</td>
                            <td>{{$item->infor_drivings_discription}}</td>
                            <td><img width="100px"  src="{{$item->infor_drivings_image}}"></td>
                            <td class="stringToHtml">{{$item->infor_drivings_content}}</td>
                            <td>
                                <a href="{{route('infordriving.edit', $item->id)}}"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                <br>
                                <a href="{{route('infordriving.destroy', $item->id)}}"
                                    onclick = "event.preventDefault();
                                    flag = confirm('bạn có chác muốn xóa không!');
                                    if(flag){
                                        window.location = '{{route('infordriving.destroy', $item->id)}}';
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
    {{--chuyen varchar sang HTML--}}
    <script>
        var str = document.getElementsByClassName('stringToHtml');
        for (var i = 0; i < str.length; i++) {
            str[i].innerHTML = str[i].innerText;
        }
    </script>
    @endsection

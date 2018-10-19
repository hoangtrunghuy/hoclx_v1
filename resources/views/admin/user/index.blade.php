@extends('layouts.app')
@section('content')
    {{--<h1>Danh sách mẹo lái xe</h1>
    <a class="btn btn-primary" href="{{route('tips.create')}}">Thêm</a>
    <div class="clearfix"></div>
    <br>
    <table id="myTable" class="table table-hover">
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Level</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Birth</th>
        <th>Address</th>
        <th>Image</th>
        <th>Action</th>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item->user_name}}</td>
                <td>{{$item->user_email}}</td>
                <td>{{$item->user_password}}</td>
                <td>{{$item->user_level}}</td>
                <td>{{$item->user_firstName}}</td>
                <td>{{$item->user_lastName}}</td>
                <td>{{$item->user_birth}}</td>
                <td>{{$item->user_adress}}</td>
                <td><img src="{{ asset($item->user_img) }}" alt="" width="200"></td>
                <td>
                    <a href="{{route('tips.show', $item->id)}}"><i class="fa fa-eye"></i></a>
                    <a href="{{route('tips.edit', $item->id)}}"><i class="fa fa-pencil"></i></a>
                    <a href="{{route('tips.destroy', $item->id)}}"
                       onclick = "event.preventDefault();
                               flag = confirm('bạn có chắc muốn xóa không!');
                               if(flag){
                               window.location = '{{route('tips.destroy', $item->id)}}';
                               }
                               "
                    ><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>--}}
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User</h1>
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
                        <a href="{{ route('user.create') }}" title=""><i class="fa fa-plus-square"></i> Thêm User</a>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Birth</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->user_name}}</td>
                                <td>{{$item->user_email}}</td>
                                <td>{{$item->user_password}}</td>
                                <td>{{$item->user_level}}</td>
                                <td>{{$item->user_firstName}}</td>
                                <td>{{$item->user_lastName}}</td>
                                <td>{{$item->user_birth}}</td>
                                <td>{{$item->user_adress}}</td>
                                <td><img src="{{ asset($item->user_img) }}" alt="" width="200"></td>
                                <td>
                                    {{--<a href="{{route('tips.show', $item->id)}}"><i class="fa fa-eye"></i></a>--}}
                                    <a href="{{route('user.edit', $item->id)}}">Edit</a><br>
                                    <a href="{{route('user.destroy', $item->id)}}"
                                       onclick = "event.preventDefault();
                                               flag = confirm('bạn có chắc muốn xóa không!');
                                               if(flag){
                                               window.location = '{{route('user.destroy', $item->id)}}';
                                               }
                                               "
                                    >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection

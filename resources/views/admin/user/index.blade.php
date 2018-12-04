@extends('layouts.app-admin')
@section('content')
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
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <!-- <th>Name</th> -->
                            <th>Email</th>
                            {{--<th>Password</th>--}}
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
                                <td>{{ $item->id }}</td>
                                <!-- <td>{{$item->name}}</td> -->
                                <td>{{$item->email}}</td>
                                <td>@if ($item->user_level ==0) User @endif @if ($item->user_level ==1) Admin @endif</td>
                                <td>{{$item->user_firstName}}</td>
                                <td>{{$item->user_lastName}}</td>
                                <td>{{$item->user_birth}}</td>
                                <td>{{$item->user_adress}}</td>
                                <td><img src="{{ asset($item->user_img) }}"  width="50px" height="50px"></td>
                                <td>
                                    <a href="{{route('user.edit', $item->id)}}"><i class="glyphicon glyphicon-edit"></i>Edit</a><br>
                                    <a href="{{route('user.destroy', $item->id)}}"
                                       onclick = "event.preventDefault();
                                               flag = confirm('bạn có chắc muốn xóa không!');
                                               if(flag){
                                               window.location = '{{route('user.destroy', $item->id)}}';
                                               }
                                               "
                                    ><i class="glyphicon glyphicon-trash"></i>Delete</a>
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
    <script type="text/javascript" charset="utf-8" >
        if("{{ Session()->get('success') }}" != "")
            alert("{{ Session()->get('success') }}");
        if("{{ Session()->get('warning') }}" != "")
            alert("{{ Session()->get('warning') }}");
    </script>
@endsection

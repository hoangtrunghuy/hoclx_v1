@extends('layouts.app-admin')
    @section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Feedback</h1>
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
                            {{--them gi vao day--}}
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="myTable">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Full Name</th>
                                <th>Images</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr class="odd gradeX">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->user_firstName . ' ' . $item->user->user_lastName}}</td>
                                    <td>{{ $item->user->user_img}}</td>
                                    <td>{{ $item->feedback_content}}</td>
                                    <td class="center">
                                        <a href="{{route('feedback.destroy', $item->id)}}"
                                           onclick = "event.preventDefault();
                                                   flag = confirm('bạn có chác muốn xóa không!');
                                                   if(flag){
                                                   window.location = '{{route('feedback.destroy', $item->id)}}';
                                                   }
                                                   ">Delete</a>
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

@extends('layouts.app-admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">450 câu hỏi</h1>
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
                            <a href="{{ route('questions.create') }}" title=""><i class="fa fa-plus-square"></i> Thêm câu hỏi</a>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Nội dung câu hỏi</th>
                                <th>Hình ảnh</th>
                                <th>Đáp án</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr class="odd gradeX">
                                    <td>{{ $item->id}}</td>
                                <!-- <td>{{ $item->question_type}}</td> -->
                                    <td>{{ $item->question_content}}</td>
                                    <td><img width="100px" src="{{ $item->question_img}}"/></td>
                                    <td class="center">
                                        <ul>
                                            <li>{{ $item->question_ansA}}</li>
                                            <li>{{ $item->question_ansB}}</li>

                                            @if ($item->question_ansC != null)
                                            <li>{{ $item->question_ansC}}</li>
                                            @endif

                                            @if ($item->question_ansD != null)
                                            <li>{{ $item->question_ansD}}</li>
                                            @endif
                                        </ul>
                                    </td>
                                    <td class="center">
                                        <a href="{{ route('questions.edit',$item->id) }}" title="">Edit</a>

                                        <a href="{{ route('DeleteQuestion',$item->id) }}" 
                                            onclick = "event.preventDefault();

                                           flag = confirm('Bạn có chác muốn xóa không!');
                                           if(flag){
                                           window.location = '{{route('DeleteQuestion', $item->id)}}';
                                           }
                                           " title="">Delete</a>
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
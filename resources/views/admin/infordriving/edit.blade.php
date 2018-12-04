@extends('layouts.app-admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa thông tin lái xe</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    {{--@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif--}}
    @if(Session::has('success'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success') !!}</em></div>
    @endif
    @if(Session::has('warning'))
        <div class="alert alert-warning"><span class="glyphicon glyphicon-ok"></span><em> {!! session('warning') !!}</em></div>
    @endif
    <form action="{{route('infordriving.update',$model->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="infor_drivings_title" value="{{$model->infor_drivings_title}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Discription</label>
                    <input type="text" name="infor_drivings_discription" value="{{$model->infor_drivings_discription}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="infor_drivings_image" value="{{$model->infor_drivings_image}}"
                           class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Content</label>
                    <textarea id="content" name="infor_drivings_content" class="form-control" cols="30" rows="50">{!!$model->infor_drivings_content!!}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <a class="btn btn-default" href="{{route('infordriving.index')}}">Back to index</a>
    </form>
@endsection
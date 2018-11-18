@extends('layouts.app-admin')

@section('content')
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa user</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success') !!}</em></div>
    @endif
    @if(Session::has('warning'))
        <div class="alert alert-warning"><span class="glyphicon glyphicon-ok"></span><em> {!! session('warning') !!}</em></div>
    @endif
    <form action="{{route('user.update',$model->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>User name</label>
                    <input type="text" name="name" value="{{$model->name}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$model->email}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" value="{{$model->password}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Level</label>
                    <input type="number" name="user_level" value="{{$model->user_level}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>FirstName</label>
                    <input type="text" name="user_firstName" value="{{$model->user_firstName}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>LastName</label>
                    <input type="text" name="user_lastName" value="{{$model->user_lastName}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Birth</label>
                    <input type="text" name="user_birth" value="{{$model->user_birth}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Adress</label>
                    <input type="text" name="user_adress" value="{{$model->user_adress}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="user_img"  class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <a class="btn btn-default" href="{{route('user.index')}}">Back to index</a>
    </form>
@endsection
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
            <div class="col-md-8 col-md-offset-2">
                <!-- <div class="form-group">
                    <label>User name</label>
                    <input type="text" name="name" value="{{$model->name}}" class="form-control">
                </div> -->
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$model->email}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Chọn chức vụ</label>
                    <select class="form-control" name="user_level">
                        <option value="0" @if ($model->user_level ==0) selected @endif >User</option>
                        <option value="1" @if ($model->user_level ==1) selected @endif >Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-5">
                            <label>First Name:</label>
                            <input type="text" name="user_firstName" placeholder="First Name" value="{{$model->user_firstName}}" class="form-control" >
                        </div>
                        <div class="col-md-7">
                            <label>Last Name:</label>
                            <input type="text" name="user_lastName" placeholder="Last Name" value="{{$model->user_lastName}}" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Birth day</label>
                    <input type="date" name="user_birth" value="{{$model->user_birth}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Adress</label>
                    <input type="text" name="user_adress" value="{{$model->user_adress}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="user_img"  class="form-control">
                </div>
                <div class="form-group">
                    <img width="150" src="{{$model->user_img}}" alt="" class="mx-auto d-block img-circle rounded-circle">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a class="btn btn-danger" href="{{route('user.index')}}">Quay lại</a>
                </div>
            </div>
        </div>
        
    </form>
@endsection
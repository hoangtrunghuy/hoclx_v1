@extends('layouts.app-admin')

@section('content')
   {{-- <form --}}{{--action="{{ route('users.store') }}" method="post"--}}{{-- enctype="multipart/form-data">
        {{ @csrf_field() }}
        user_name
        <input type="text" name="user_name">
        user_email
        <input type="text" name="user_email">user_password
        <input type="text" name="user_password">user_level
        <input type="number" name="user_level">user_firstName
        <input type="text" name="user_firstName">user_lastName
        <input type="text" name="user_lastName">user_birth
        <input type="text" name="user_birth">user_adress
        <input type="text" name="user_adress">user_img
        <input type="file" name="user_img">

        <button type="submit">Submit</button>

    </form>--}}
   <h1>Thêm User</h1>
   <hr width="100%">
   @if(Session::has('success'))
       <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success') !!}</em></div>
   @endif
   @if(Session::has('warning'))
       <div class="alert alert-warning"><span class="glyphicon glyphicon-ok"></span><em> {!! session('warning') !!}</em></div>
   @endif
    {{--1 : de dang file
    2 : form phai de enctype="multipart/form-data"--}}
    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Chọn chức vụ</label>
                    <select class="form-control" name="user_level">
                        <option value="0" >User</option>
                        <option value="1" >Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-5">
                            <label>First Name:</label>
                            <input type="text" name="user_firstName" placeholder="First Name" class="form-control" >
                        </div>
                        <div class="col-md-7">
                            <label>Last Name:</label>
                            <input type="text" name="user_lastName" placeholder="Last Name" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Birth day</label>
                    <input type="date" name="user_birth" class="form-control">
                </div>
                <div class="form-group">
                    <label>Adress</label>
                    <input type="text" name="user_adress" class="form-control">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="user_img"  class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a class="btn btn-danger" href="{{route('user.index')}}">Quay lại</a>
                </div>
            </div>
            
        </div>
    </form>
    @endsection


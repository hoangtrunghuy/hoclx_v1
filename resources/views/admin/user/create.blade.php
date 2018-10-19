@extends('layouts.app')

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
    <form action="{{route('user.store')}}" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>User name</label>
                    <input type="text" name="user_name" value="{{old('user_name')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="user_email" value="{{old('user_email')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="user_password" value="{{old('user_password')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Level</label>
                    <input type="number" name="user_level" value="{{old('user_level')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>FirstName</label>
                    <input type="text" name="user_firstName" value="{{old('user_firstName')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>LastName</label>
                    <input type="text" name="user_lastName" value="{{old('user_lastName')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Birth</label>
                    <input type="text" name="user_birth" value="{{old('user_birth')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Adress</label>
                    <input type="text" name="user_adress" value="{{old('user_adress')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="user_img" {{--value="{{old('user_adress')}}"--}} class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <a class="btn btn-default" href="{{route('user.index')}}">Back to index</a>
    </form>
    @endsection


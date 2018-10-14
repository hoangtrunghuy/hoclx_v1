@extends('layouts.app-admin')

@section('content')
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
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

    </form>

    1 : de dang file
    2 : form phai de enctype="multipart/form-data"

    @endsection

@section('css')
    <style>
        input{
            border: none;
        }
    </style>
@endsection
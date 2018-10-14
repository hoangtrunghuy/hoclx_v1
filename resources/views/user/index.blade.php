@extends('layouts.app-admin')
@section('content')
    <table>
        <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        @foreach($data as $item)
            <tr>
                <td><img src="{{ asset($item->user_img) }}" alt="" width="200"></td>
                <td>Name</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
        @endforeach
    </table>
    @endsection

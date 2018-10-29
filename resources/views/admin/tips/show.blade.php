@extends('layouts.app-admin')

@section('content')
    <h1>chi tiết mẹo lái xe</h1>
    <table class="table">
        <thead>
            <th>tiêu đề</th>
            <th>nội dung</th>
        </thead>
        <tbody>
            <tr>
                <td>Title</td>
                <td>{{$model->title}}</td>
            </tr>
            <tr>
                <td>discription</td>
                <td>{{$model->discription}}</td>
            </tr>
            <tr>
                <td>image</td>
                <td>{{$model->image}}</td>
            </tr>
            <tr>
                <td>content</td>
                <td>{!!$model->content!!}</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <a class="btn btn-default" href="{{route('tips.index')}}">Back to index</a>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection
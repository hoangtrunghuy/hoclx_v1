@extends('layouts.app')

@section('content')
    <h1>Tạo mới 1 mẹo lái xe</h1>
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
    <form action="{{route('tips.store')}}" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Discription</label>
                    <input type="text" name="discription" value="{{old('discription')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" name="image" value="{{old('image')}}" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Content</label>
                    <textarea id="content" name="content" class="form-control" cols="30" rows="10">{{old('content')}}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <a class="btn btn-default" href="{{route('tips.index')}}">Back to index</a>
    </form>
@endsection
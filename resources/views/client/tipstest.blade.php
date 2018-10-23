@extends('layouts.client')
@section('content')
    @foreach($data as $item)
        <p class="stringToHtml">{{ $item->content }}</p>
    @endforeach

    <script>
        var str = document.getElementsByClassName('stringToHtml');
        for (var i = 0; i < str.length; i++) {
            str[i].innerHTML = str[i].innerText;
        }
    </script>
    @endsection
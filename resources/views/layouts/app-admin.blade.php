<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="client/images/icons/favicon.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{  'hoclaixe123.com' }}</title>
    <base href="{{ asset('') }}">

    @include('admin.css')
    @yield('css')

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    @include('admin.top')
    @include('admin.sidebar')
    </nav>
    <div id="page-wrapper">
        @yield('content')
    </div>

</div>
@include('admin.javascript')
@yield('javascript')
</body>

</html>

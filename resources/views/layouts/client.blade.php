<!DOCTYPE html>
<html lang="en">

<head>

    <title>Học Lái Xe Ôtô</title>
    <meta charset="UTF-8">
    <meta name="description" content="AuCreative theme tempalte">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="AuCreative theme template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{ asset('') }}">
    <!-- Latest compiled and minified CSS -->

    @include('client.effect.css')
    @yield('css')

</head>
<body class="animsition restyle-index">


<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        @include('client.topbar')
        @include('client.menu')
    </div>
</header>
@yield('content')
@include('client.footer')

@include('client.effect.javascript')

</body>
</html>
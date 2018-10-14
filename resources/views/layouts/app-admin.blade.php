<!doctype html>
<html class="no-js h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{ asset('') }}">
    {{--link css--}}
    @include('layouts.admin.style')
    @yield('css')
</head>
<body class="h-100">

<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
        @include('layouts.admin.aside')
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            @include('layouts.admin.navbar')
            <!-- / .main-navbar -->
            <div class="main-content-container container-fluid px-4">
              @yield('content')
            </div>
                @include('layouts.admin.footer')
        </main>
    </div>
</div>

@include('layouts.admin.script')
@yield('js')
</body>
</html>

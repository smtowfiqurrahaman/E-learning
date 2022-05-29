<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/sidenav.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/datatables-select.min.css') }}">
</head>
<body>
    <div id="app">
    <div id="main-wrapper">
        @if(Request::is('admin*'))
            @include('layouts.partial.topbar')
        @endif  

        @if(Request::is('admin*'))   
            @include('layouts.partial.sidebar')
        @endif

       
        <div class="page-wrapper">
            @yield('content')
        </div>
  </div>
        
<script src="{{ asset('backend/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/mdb.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('backend/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('backend/js/sticky-kit.min.js') }}"></script>
<script src="{{ asset('backend/js/custom.min-2.js') }}"></script>
<script src="{{ asset('backend/js/datatables.min.js') }}"></script>
<script src="{{ asset('backend/js/datatables-select.min.js') }}"></script>
<script src="{{ asset('backend/js/custom.js') }}"></script>
<script src="{{ asset('backend/js/axios.min.js') }}"></script>

@stack('script')

</body>
</html>

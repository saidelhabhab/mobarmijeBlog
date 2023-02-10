<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keyword" content="@yield('meta_keyword')">
    <meta name="author" content="Said ELHABHAB">

    @php
     $setting = App\Models\Settings::find(1);

    @endphp

    @if ($setting)
    <!-- Favicons -->
    <link href="{{ asset('Image/setting/'.$setting->favicon) }}" rel="shortcut icon" type="image/x-icon">
    @endif


    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />





</head>
<body>
    <div id="app">
        @include('layouts.inc.frontend-navbar')
        <div class="">
            @yield('content')
        </div>
        @include('layouts.inc.frontend-footer')
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" </script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" ></script>
    <script src="{{ asset('assets/js/scripts.js') }}" ></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>

    @yield('scripts')
</body>
</html>

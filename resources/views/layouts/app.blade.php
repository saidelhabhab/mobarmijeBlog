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


    <!-- Bootstrap core CSS -->
<link href="{{ asset('new/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{ asset('new/assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{ asset('new/assets/css/templatemo-onix-digital.css')}}">
<link rel="stylesheet" href="{{ asset('new/assets/css/animated.css')}}">
<link rel="stylesheet" href="{{ asset('new/assets/css/owl.css')}}">





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

    <!-- Scripts -->
<script src="{{ asset('new/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('new/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('new/assets/js/owl-carousel.js')}}"></script>
<script src="{{ asset('new/assets/js/animation.js')}}"></script>
<script src="{{ asset('new/assets/js/imagesloaded.js')}}"></script>
<script src="{{ asset('new/assets/js/custom.js')}}"></script>

<script>
// Acc
$(document).on("click", ".naccs .menu div", function() {
    var numberIndex = $(this).index();

    if (!$(this).is("active")) {
        $(".naccs .menu div").removeClass("active");
        $(".naccs ul li").removeClass("active");

        $(this).addClass("active");
        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

        var listItemHeight = $(".naccs ul")
        .find("li:eq(" + numberIndex + ")")
        .innerHeight();
        $(".naccs ul").height(listItemHeight + "px");
    }
});
</script>

    @yield('scripts')
</body>
</html>

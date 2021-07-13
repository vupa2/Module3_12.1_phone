<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}">
    <!-- favicon -->
    <link rel="icon" href="favicon.ico">
    <title>The Trickster | Shop</title>
</head>

<body>

    {{-- @include('frontend.partials.form-popup') --}}

    @include('frontend.partials.header')

    @include('frontend.partials.header-mobile')

    {{-- @include('frontend.partials.navigation') --}}

    {{-- @include('frontend.partials.navigation-mobile') --}}

    {{-- @include('frontend.partials.section-navigation') --}}

    <!-- SECTION WRAP -->
    <div class="section-wrap">
        @yield('content')
    </div>
    <!-- /SECTION WRAP -->

    {{-- @include('frontend.partials.footer') --}}

    @include('frontend.partials.svg')

    <!-- jQuery -->
    <script src="{{ asset('frontend/js/vendor/jquery-3.1.0.min.js') }}"></script>
    <!-- magnificPopup -->
    <script src="{{ asset('frontend/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <!-- imgLiquid -->
    <script src="{{ asset('frontend/js/vendor/imgLiquid-min.js') }}"></script>
    <!-- liquid -->
    <script src="{{ asset('frontend/js/liquid.js') }}"></script>
    <!-- dropdowns -->
    <script src="{{ asset('frontend/js/dropdowns.js') }}"></script>
    <!-- popups -->
    <script src="{{ asset('frontend/js/popups.js') }}"></script>
</body>

</html>

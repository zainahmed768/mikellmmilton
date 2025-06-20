<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.front.partials._headLinks')
</head>

<body>
    {{-- @include('layouts.front.partials._navBar') --}}
    @include('layouts.front.partials._header')
    @yield('breadcrumbs')

    {{-- loader --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="loading" style="display: none;">
                    <div style="position: fixed;z-index: 9999; left: 40%;top: 37% ;width: 100%">
                        <img width="200" src="{!! asset('assets/front/images/loader.gif') !!}">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Site Loader Start Here -->
    <div class="loader">
        <div class="ajax-loader">
            <div class="image-wrapper">
                <img src="{{ frontImage('logo.png') }}" alt="logo">
            </div>
        </div>
    </div>

    <!-- Site Loader End Here -->
    {{-- loader --}}

    <div class="ball"></div>

    {{-- back to top button  --}}
    <div class="wa-back-to-top" id="topScroll">
        <span class="wa-back-to-top-text">
            Top </span>
    </div>
    {{-- back to top button  --}}
    {{-- <main id="luxy"> --}}
        @yield('content')
        @include('layouts.front.partials._footer')
    {{-- </main> --}}
    @include('layouts.front.partials._footerLinks')

</body>

</html>

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
    {{-- loader --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="loading" style="display: none;">
                    <div style="position: fixed;z-index: 9999; left: 40%;top: 37% ;width: 100%">
                        <img width="200" src="{!! asset('assets/front/images/loader.gif') !!}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- loader --}}

    @yield('content')

    @include('layouts.front.partials._footer')
    @include('layouts.front.partials._footerLinks')

</body>

</html>

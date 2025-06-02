<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- Slick SLider -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<!-- Bootstrap CDN -->
<link href="{!! frontSass('main.css') !!}" rel="stylesheet">
<!-- Slick SLider -->
<link href="{!! frontSlick('slick.css') !!}" rel="stylesheet">
<link href="{!! frontSlick('slick-theme.css') !!}" rel="stylesheet">
<!-- Slick SLider -->
{{-- <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Font Awesome --> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Stylesheet -->
<link href="{!! frontCss('style.css') !!}" rel="stylesheet">
<!-- Stylesheet -->
<link rel="shortcut icon" href="{!! frontImage('logo.png') !!}" type="image/x-icon">
<meta name="csrf-token" content="{!! csrf_token() !!}">

@stack('css')

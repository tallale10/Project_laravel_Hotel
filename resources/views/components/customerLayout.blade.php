<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    favicon--}}
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_1.png')}}">
    {{--    jquery--}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    {{--    scroll reveal--}}
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    {{--    bootstrap css + js--}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{--    css mdb--}}
    <link rel="stylesheet" href="{{ asset('plugins/mdb/css/mdb.min.css') }}">
    {{--    font Inter--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    {{--    font Playfair Display--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
          rel="stylesheet">
    {{--    file css tuy chinh--}}
    <link rel="stylesheet" href="{{ asset('plugins/css/guest.css') }}" type="text/css">
    <title>Project 2 - Tam</title>
</head>
<body class="overflow-x-hidden overflow-y-auto h-100 body-custom">
@include('partials.customerNavbar')
{{$slot}}
@include('partials.customerFooter')
<script
    type="text/javascript"
    src="{{asset('plugins/js/script.js')}}"
></script>
<script
    type="text/javascript"
    src="{{asset('plugins/mdb/js/mdb.umd.min.js')}}"
></script>
<script
    type="text/javascript"
    src="{{asset('plugins/mdb/js/mdb.es.min.js/')}}"
></script>
</body>
</html>

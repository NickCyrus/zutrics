<!DOCTYPE html>
<html lang="es">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="@yield('meta-description')" />
    <meta name="keywords" content="@yield('meta-keywords')"/>
    <meta name="author" content="@yield('meta-author')"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-simbol.png') }}">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/paleta1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    

</head>


     <body>
        @yield('content')
        <!-- Required Js -->
        <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/tilt.js') }}"></script>
        @section('addFooter') @show
 </body>
 </html>




<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
        <meta name="author" content="CodedThemes"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
        <!-- fontawesome icon -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
        <!-- animation css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css') }}">
        <!-- jconfirm css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/jconfirm/css/jquery-confirm.css') }}">

        <!-- vendor css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- custom -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        @section('addHead') @show

    </head>
     <body>
        @yield('content')
        <!-- Required Js -->
        <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jconfirm/js/jquery-confirm.js') }}"></script>
        <script src="{{ asset('js/admin/js/function.js') }}"></script>
        @section('addFooter') @show
 </body>
 </html>




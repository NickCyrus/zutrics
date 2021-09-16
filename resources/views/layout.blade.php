<!DOCTYPE html>
    <html lang="en">
    <head>

        <title>@yield('title') - {{$nameApp->value }} - </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content=""/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
        <!-- fontawesome icon -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
        <!-- animation css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css') }}">
        <!-- jconfirm css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/jconfirm/css/jquery-confirm.css') }}">
        <!-- select 2 !-->
        <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.css') }}" />
        <!-- vendor css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- custom -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/paleta1.css') }}">
        
        @section('addHead') @show

    </head>
     <body>
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->
        @include('menu-left')
        @include('header-top')

        <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                    <div class="page-wrapper">
                                        @yield('content')
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Required Js -->
        <script>
            var urlHome = "{{ URL::to('/')}}";
        </script>
        <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jconfirm/js/jquery-confirm.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/js/select2.js') }}"></script>
        <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
        <script src="{{ asset('js/function.js') }}"></script>
        <script src="{{ asset('js/site.js') }}"></script>

        @section('addFooter') @show
 </body>
 </html>




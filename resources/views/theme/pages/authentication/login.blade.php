@php
    $title = 'Login Page';
    $description = 'Login Page'
@endphp
@extends('layout_full',[
'title'=>$title,
'description'=>$description
])
@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/auth.login.js') }}"></script>
@endsection

@section('content_left')
    <div class="min-h-100 d-flex align-items-center">
        <div class="w-100 w-lg-75 w-xxl-50">
            <div>
                <div class="mb-5">
                    <h1 class="display-3 text-white">Multiple Concepts</h1>
                    <h1 class="display-3 text-white">Ready for Your Project</h1>
                </div>
                <p class="h6 text-white lh-1-5 mb-5">
                    Dynamically target high-payoff intellectual capital for customized technologies. Objectively
                    integrate emerging core competencies before
                    process-centric communities...
                </p>
                <div class="mb-5">
                    <a class="btn btn-lg btn-outline-white" href="{{ url('/') }}">Learn More</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content_right')
    <div
        class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
            <div class="sh-11">
                <a href="{{ url('/') }}">
                    <div class="logo-default"></div>
                </a>
            </div>
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                <h2 class="cta-1 text-primary">let's get started!</h2>
            </div>
            <div class="mb-5">
                <p class="h6">Please use your credentials to login.</p>
                <p class="h6">
                    If you are not a member, please
                    <a href="{{ url('/Pages/Authentication/Register') }}">register</a>
                    .
                </p>
            </div>
            <div>
                <form id="loginForm" class="tooltip-end-bottom" novalidate>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-cs-icon="email"></i>
                        <input class="form-control" placeholder="Email" name="email"/>
                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-cs-icon="lock-off"></i>
                        <input class="form-control pe-7" name="password" type="password" placeholder="Password"/>
                        <a class="text-small position-absolute t-3 e-3"
                           href="{{ url('/Pages/Authentication/ForgotPassword') }}">Forgot?</a>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection

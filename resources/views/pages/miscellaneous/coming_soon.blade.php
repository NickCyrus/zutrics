@php
    $title = 'Coming Soon Page';
    $description = 'Coming Soon Page'
@endphp
@extends('layout_full',[
'title'=>$title,
'description'=>$description
])
@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/countdown.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/misc.comingsoon.js') }}"></script>
@endsection

@section('content_left')
@endsection

@section('content_right')
    <div
        class="sw-lg-80 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-60 px-5">
            <div class="sh-11">
                <a href="{{ url('/') }}">
                    <div class="logo-default"></div>
                </a>
            </div>
            <div class="mb-3">
                <h2 class="cta-1 mb-0 text-primary">Acorn will be available soon!</h2>
            </div>
            <div class="mb-5 sh-9">
                <div id="timer"></div>
            </div>
            <div class="mb-3">
                <p class="h6 lh-1-5">
                    To receive our newsletter please complete the form below. We take your privacy seriously and we will
                    not share your information with others.
                </p>
            </div>

            <div>
                <form>
                    <div class="mb-3 filled">
                        <i data-cs-icon="email"></i>
                        <input class="form-control" id="password" type="password" placeholder="Email"/>
                    </div>
                    <a href="{{ url('/') }}" class="btn btn-icon btn-icon-end btn-primary">
                        <span>Submit</span>
                        <i data-cs-icon="chevron-right"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection

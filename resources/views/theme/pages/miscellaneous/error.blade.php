@php
    $title = 'Error Page';
    $description = 'Error Page'
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
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Ooops, it looks like an error!</h2>
                <h2 class="display-2 text-primary">Error 404</h2>
            </div>
            <div class="mb-5">
                <p class="h6">It looks like the page you are looking for is not available.</p>
                <p class="h6">
                    If you think that is a mistake, please
                    <a href="{{ url('/') }}">contact</a>
                    us.
                </p>
            </div>
            <div>
                <a href="{{ url('/') }}" class="btn btn-icon btn-icon-start btn-primary">
                    <i data-cs-icon="arrow-left"></i>
                    <span>Back to Home</span>
                </a>
            </div>
        </div>
    </div>
@endsection

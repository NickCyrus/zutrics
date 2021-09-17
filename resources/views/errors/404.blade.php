@php
    $title = 'Error';
    $description = 'Error';
    $html_tag_data = array('placement'=>"vertical",
                           'behaviour'=>"pinned",
                           'layout'=>"fluid",
                           'radius'=>"rounded",
                           'color'=>"light-blue",
                           'navcolor'=>"default",
                           'show'=>"true",
                           'footer'=>"false"

      );
@endphp
@extends('layout_full',[
'title'=>$title,
'description'=>$description,
'html_tag_data'=>$html_tag_data
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
                    <div class="logo-default login"></div>
                </a>
            </div>
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Ooops!!!</h2>
                <h2 class="display-2 text-primary">Error 404</h2>
            </div>
            <div class="mb-5">
                <p class="h6">Lo sentimos, no encontramos la página a la que intentas acceder o no esta en funcionamiento.</p>
            </div>
            <div>
                <a href="{{ url('/') }}" class="btn btn-icon btn-icon-start btn-primary">
                    <i data-cs-icon="arrow-left"></i>
                    <span>Ir a la home</span>
                </a>
            </div>
        </div>
    </div>
@endsection

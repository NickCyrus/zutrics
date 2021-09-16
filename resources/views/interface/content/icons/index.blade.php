@php
    $html_tag_data = [];
    $title = 'Icons';
    $description = 'Images, icons and typography used throughout the project.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Content"=>"Content"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="card mb-2">
            <div class="card-body h-100">{{ $description }}</div>
        </div>
        <!-- Content End -->

        <!-- List Items Start -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-2">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="acorn" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Icons/CSLineIcons') }}"
                               class="heading stretched-link d-block">CS Line Icons</a>
                            <div class="text-muted">A cute line icon set crafted exclusively for Acorn.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="acorn" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Icons/CSLineInterfaceIcons') }}"
                               class="heading stretched-link d-block">CS Line Interface Icons</a>
                            <div class="text-muted">An essential and smaller version of CS Line icons in font format.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="bootstrap" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Icons/BootstrapIcons') }}"
                               class="heading stretched-link d-block">Bootstrap Icons</a>
                            <div class="text-muted">Free, high quality, open source icon library with over 1,300
                                icons.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

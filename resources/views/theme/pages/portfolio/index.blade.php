@php
    $html_tag_data = [];
    $title = 'Portfolio';
    $description = 'Collection of thumbnails and detail page to showcase work.';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages"]
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
                            <i data-cs-icon="suitcase" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Portfolio/Home') }}" class="heading stretched-link d-block">Home</a>
                            <div class="text-muted">A portfolio home page featuring user details, projects, friends and
                                collections.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="content" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Portfolio/Detail') }}"
                               class="heading stretched-link d-block">Detail</a>
                            <div class="text-muted">Project detail page with a carousel, comments and sidebar section.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

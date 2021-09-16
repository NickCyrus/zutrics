@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'Vertical Hidden Menu';
    $description = 'A vertical menu that newer shows larger pinned version and switches between mobile view and semi-hidden view.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Content"=>"Content","/Interface/Content/Menu"=>"Menu"];
    $custom_nav_data = ["vertical-unpinned"=>"10000","vertical-mobile"=>"600","disable-pinning"=>"true"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description,
'custom_nav_data'=>$custom_nav_data
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
    </div>
@endsection

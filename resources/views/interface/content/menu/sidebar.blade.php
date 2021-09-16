@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "horizontal" }}'];
    $title = 'Sidebar Menu';
    $description = 'A secondary in page menu that blends into the mobile menu for smaller screens. Can be used with both horizontal and vertical menu types.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Content"=>"Content","/Interface/Content/Menu"=>"Menu"]
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
        <div class="row">
        @include('_layout.nav_secondary')
        <!-- Page Content Start -->
            <div class="col">
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
                <div class="card mb-2">
                    <div class="card-body h-100">{{ $description }}</div>
                </div>
            </div>
            <!-- Page Content End -->
        </div>
    </div>
@endsection

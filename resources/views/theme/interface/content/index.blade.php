@php
    $html_tag_data = [];
    $title = 'Content';
    $description = 'Images, icons and typography used throughout the project.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface"]
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
                            <a href="{{ url('/Interface/Content/Icons') }}"
                               class="heading stretched-link d-block">Icons</a>
                            <div class="text-muted">Icons of the template.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="image" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Images') }}" class="heading stretched-link d-block">Images</a>
                            <div class="text-muted">Image usages with static sizes and responsive classes.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="layout-3" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Tables') }}" class="heading stretched-link d-block">Tables</a>
                            <div class="text-muted">Examples for opt-in styling of tables (given their prevalent use in
                                JavaScript plugins) with Bootstrap.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="text" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Typography') }}" class="heading stretched-link d-block">Typography</a>
                            <div class="text-muted">Examples for typography, including global settings, headings, body
                                text, lists, and more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="menu" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Menu') }}"
                               class="heading stretched-link d-block">Menu</a>
                            <div class="text-muted">Different menu types that can be configured further.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

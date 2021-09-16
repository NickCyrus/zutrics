@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Breadcrumb';
    $description = 'Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Components"=>"Components"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">{{ $title }}</h1>
                        @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                    </div>
                </section>
                <!-- Title End -->

                <!-- Content Start -->
                <div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <p class="mb-0">{{ $description }}</p>
                        </div>
                    </div>

                    <!-- Default Start -->
                    <section class="scroll-section" id="default">
                        <h2 class="small-title">Default</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h1 class="mb-1 pb-0 display-4">Page Title</h1>
                                <nav aria-label="breadcrumb">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home Page</a></li>
                                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                                        <li class="breadcrumb-item"><a href="#">Data</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Arrows Start -->
                    <section class="scroll-section" id="arrows">
                        <h2 class="small-title">Arrows</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h1 class="mb-1 pb-0 display-4">Page Title</h1>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="muted-link">
                                            <span class="text-small align-middle me-2">HOME PAGE</span>
                                            <i data-cs-icon="chevron-right" data-cs-size="13"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="muted-link">
                                            <span class="text-small align-middle me-2">LIBRARY</span>
                                            <i data-cs-icon="chevron-right" data-cs-size="13"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="muted-link">
                                            <span class="text-small align-middle me-2">DATA</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- Arrows End -->

                    <!-- Back Button Start -->
                    <section class="scroll-section" id="backButton">
                        <h2 class="small-title">Back Button</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="w-auto sw-md-30">
                                    <a href="#" class="muted-link pb-1 d-inline-block">
                                        <i data-cs-icon="chevron-left" data-cs-size="13"></i>
                                        <span class="text-small align-middle">Home</span>
                                    </a>
                                    <h1 class="mb-0 pb-0 display-4">Page Title</h1>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Back Button End -->
                </div>
                <!-- Content End -->
            </div>

            <!-- Scrollspy Start -->
            <div class="col-md-auto d-none d-lg-block" id="scrollSpyMenu">
                <ul class="nav flex-column">
                    <li>
                        <a class="nav-link" href="#title">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Title</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#default">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Default</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#arrows">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Arrows</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#backButton">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Back Button</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

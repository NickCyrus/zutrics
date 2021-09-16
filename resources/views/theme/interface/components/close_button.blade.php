@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Close Button';
    $description= 'A generic close button for dismissing content like modals and alerts.';
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
                                <button type="button" class="btn-close" aria-label="Close"></button>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Colors Start -->
                    <section class="scroll-section" id="colors">
                        <h2 class="small-title">Colors</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn-close text-primary" aria-label="Close"></button>
                                <button type="button" class="btn-close text-secondary" aria-label="Close"></button>
                                <button type="button" class="btn-close text-tertiary" aria-label="Close"></button>
                                <button type="button" class="btn-close text-quaternary" aria-label="Close"></button>
                                <button type="button" class="btn-close text-body" aria-label="Close"></button>
                                <button type="button" class="btn-close text-alternate" aria-label="Close"></button>
                                <button type="button" class="btn-close text-muted" aria-label="Close"></button>
                                <button type="button" class="btn-close text-separator" aria-label="Close"></button>
                            </div>
                        </div>
                    </section>
                    <!-- Colors End -->
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
                        <a class="nav-link" href="#colors">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Colors</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Tooltips';
    $description= 'Documentation and examples for adding custom Bootstrap tooltips with CSS and JavaScript using CSS3 for animations and data-attributes for local title storage.';
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

                    <!-- Directions Start -->
                    <section class="scroll-section" id="directions">
                        <h2 class="small-title">Directions</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Tooltip on top">
                                    Tooltip on top
                                </button>
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Tooltip on right">
                                    Tooltip on right
                                </button>
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Tooltip on bottom">
                                    Tooltip on bottom
                                </button>
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="Tooltip on left">
                                    Tooltip on left
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Directions End -->

                    <!-- Tooltip with Html Start -->
                    <section class="scroll-section" id="tooltipWithHtml">
                        <h2 class="small-title">Tooltip with Html</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                                    Tooltip with HTML
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Tooltip with Html End -->
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
                        <a class="nav-link" href="#directions">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Directions</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#tooltipWithHtml">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Tooltip with Html</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

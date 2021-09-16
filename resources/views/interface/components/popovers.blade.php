@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Popovers';
    $description= 'Examples for adding Bootstrap popovers, like those found in iOS.';
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
                        <h1 class="mb-0 pb-0 display-4">{{ $title }} </h1>
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
                                <a tabindex="0" class="btn btn-lg btn-outline-primary mb-1" role="button"
                                   data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover"
                                   data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Dismissible popover
                                </a>
                                <button type="button" class="btn btn-lg btn-outline-primary mb-1"
                                        data-bs-toggle="popover" title="Popover title"
                                        data-bs-content="And here's some amazing content. It's very engaging. Right?"
                                        data-bs-placement="bottom">
                                    Click to toggle popover
                                </button>
                                <div class="d-inline-block" data-bs-toggle="popover" data-bs-content="Disabled popover">
                                    <button class="btn btn-primary pe-none mb-1" type="button" disabled>Disabled button
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Directions Start -->
                    <section class="scroll-section" id="directions">
                        <h2 class="small-title">Directions</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-container="body"
                                        data-bs-toggle="popover" data-bs-placement="top"
                                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on top
                                </button>
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-container="body"
                                        data-bs-toggle="popover" data-bs-placement="right"
                                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on right
                                </button>
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-container="body"
                                        data-bs-toggle="popover" data-bs-placement="bottom"
                                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on bottom
                                </button>
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-container="body"
                                        data-bs-toggle="popover" data-bs-placement="left"
                                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on left
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Directions End -->
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
                        <a class="nav-link" href="#directions">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Directions</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Collapse';
    $description= 'Toggle the visibility of content across your project with a few classes and our JavaScript plugins.';
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
                                <a class="btn btn-primary mb-1" data-bs-toggle="collapse" href="#collapseExample"
                                   role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary mb-1" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                    Button with data-bs-target
                                </button>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body no-shadow border mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. Nihil anim keffiyeh helvetica, craft
                                        beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Multiple Targets Start -->
                    <section class="scroll-section" id="multipleTargets">
                        <h2 class="small-title">Multiple Targets</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <a class="btn btn-primary mb-1" data-bs-toggle="collapse" href="#multiCollapseExample1"
                                   role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    Toggle first element
                                </a>
                                <button class="btn btn-primary mb-1" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#multiCollapseExample2" aria-expanded="false"
                                        aria-controls="multiCollapseExample2">
                                    Toggle second element
                                </button>
                                <button class="btn btn-primary mb-1" type="button" data-bs-toggle="collapse"
                                        data-bs-target=".multi-collapse" aria-expanded="false"
                                        aria-controls="multiCollapseExample1 multiCollapseExample2">
                                    Toggle both elements
                                </button>
                                <div class="row">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card card-body mt-3 no-shadow border">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. Nihil anim keffiyeh helvetica,
                                                craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="card card-body mt-3 no-shadow border">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. Nihil anim keffiyeh helvetica,
                                                craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Multiple Targets End -->
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
                        <a class="nav-link" href="#multipleTargets">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Multiple Targets</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

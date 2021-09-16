@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Images';
    $description = 'Examples for opting images into responsive behavior (so they never become larger than their parent elements) and add lightweight styles to them—all via classes.';
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

                    <!-- Responsive Start -->
                    <section class="scroll-section" id="responsive">
                        <h2 class="small-title">Responsive</h2>
                        <div class="row">
                            <div class="col-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <img src="{{ asset('/img/product/large/cornbread.jpg') }}"
                                             class="img-fluid rounded" alt="Responsive image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Responsive End -->

                    <!-- Fixed Width Start -->
                    <section class="scroll-section" id="fixedWidth">
                        <h2 class="small-title">Fixed Width</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sw-6" alt="Responsive image"/>
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sw-9" alt="Responsive image"/>
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sw-13" alt="Responsive image"/>
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sw-19" alt="Responsive image"/>
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sw-35" alt="Responsive image"/>
                            </div>
                        </div>
                    </section>
                    <!-- Fixed Width End -->

                    <!-- Fixed Height Start -->
                    <section class="scroll-section" id="fixedHeight">
                        <h2 class="small-title">Fixed Height</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sh-6" alt="Responsive image"/>
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sh-9" alt="Responsive image"/>
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sh-13" alt="Responsive image"/>
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sh-19" alt="Responsive image"/>
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                     class="img-fluid rounded mb-1 me-1 sh-35" alt="Responsive image"/>
                            </div>
                        </div>
                    </section>
                    <!-- Fixed Height End -->

                    <!-- Aligning Start -->
                    <section class="scroll-section" id="aligning">
                        <h2 class="small-title">Aligning</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                     class="rounded mb-1 me-1 float-start sw-19" alt="card image"/>
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                     class="rounded mb-1 me-1 float-end sw-19" alt="card image"/>
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                     class="rounded mb-1 mx-auto d-block sw-19" alt="card image"/>
                            </div>
                        </div>
                    </section>
                    <!-- Aligning End -->
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
                        <a class="nav-link" href="#responsive">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Responsive</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#fixedWidth">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Fixed Width</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#fixedHeight">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Fixed Height</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#aligning">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Aligning</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Progress';
    $description= 'Responsive and slick progress bars with animated SVG paths.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins"]
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
    <script src="{{ asset('/js/vendor/progressbar.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/plugins/progressbars.js') }}"></script>
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

                    <!-- Line Start -->
                    <section class="scroll-section" id="line">
                        <h2 class="small-title">Line</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Basic</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-line"
                                                 id="progressLineBasic"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Animated</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-line"
                                                 id="progressLineAnimated"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Percent</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-line"
                                                 id="progressLinePercent"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Value</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-line"
                                                 id="progressLineValue"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Line End -->

                    <!-- Circle Start -->
                    <section class="scroll-section" id="circle">
                        <h2 class="small-title">Circle</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Basic</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-circle"
                                                 id="progressCircleBasic"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Animated</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-circle"
                                                 id="progressCircleAnimated"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Percent</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-circle"
                                                 id="progressCirclePercent"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Value</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-circle"
                                                 id="progressCircleValue"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Circle End -->

                    <!-- Semi Circle Start -->
                    <section class="scroll-section" id="semiCircle">
                        <h2 class="small-title">Semi Circle</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Basic</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-semi-circle"
                                                 id="progressSemiCircleBasic"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Animated</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-semi-circle"
                                                 id="progressSemiCircleAnimated"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Percent</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-semi-circle"
                                                 id="progressSemiCirclePercent"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Value</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-semi-circle"
                                                 id="progressSemiCircleValue"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Semi Circle End -->

                    <!-- Square Start -->
                    <section class="scroll-section" id="square">
                        <h2 class="small-title">Square</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Basic</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-square"
                                                 id="progressSquareBasic"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Animated</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-square"
                                                 id="progressSquareAnimated"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Percent</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-square"
                                                 id="progressSquarePercent"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Value</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-square"
                                                 id="progressSquareValue"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Square End -->

                    <!-- Colors Start -->
                    <section class="scroll-section" id="colors">
                        <h2 class="small-title">Colors</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Primary</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-semi-circle"
                                                 id="progressColorsPrimary"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Secondary</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-semi-circle"
                                                 id="progressColorsSecondary"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Tertiary</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-semi-circle"
                                                 id="progressColorsTertiary"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                        <label class="mb-3">Quaternary</label>
                                        <div class="sw-13">
                                            <div role="progressbar" class="progress-bar-semi-circle"
                                                 id="progressColorsQuaternary"></div>
                                        </div>
                                    </div>
                                </div>
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
                        <a class="nav-link" href="#line">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Line</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#circle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Circle</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#semiCircle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Semi Circle</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#square">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Square</span>
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

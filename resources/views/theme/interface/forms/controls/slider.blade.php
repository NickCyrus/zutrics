@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Slider';
    $description= 'Lightweight JavaScript range slider library with full multi-touch support.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms","/Interface/Forms/Controls"=>"Controls"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/nouislider.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/nouislider.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/controls.slider.js') }}"></script>
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

                    <!-- Horizontal Basic Start -->
                    <section class="scroll-section" id="horizontalBasic">
                        <h2 class="small-title">Horizontal Basic</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Slider</label>
                                        <div id="sliderHorizontalBasic"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Horizontal Basic End -->

                    <!-- Vertical Basic Start -->
                    <section class="scroll-section" id="verticalBasic">
                        <h2 class="small-title">Vertical Basic</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Slider</label>
                                        <div id="sliderVerticalBasic" class="sh-19"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Vertical Basic End -->

                    <!-- Tooltip Start -->
                    <section class="scroll-section" id="tooltip">
                        <h2 class="small-title">Tooltip</h2>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="card mb-5">
                                    <div class="card-body sh-25">
                                        <label class="form-label">Slider</label>
                                        <div id="sliderTooltip"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card mb-5">
                                    <div class="card-body sh-25">
                                        <label class="form-label">Slider</label>
                                        <div id="sliderTooltipVertical" class="sh-14"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Tooltip End -->

                    <!-- Steps Start -->
                    <section class="scroll-section" id="steps">
                        <h2 class="small-title">Steps</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Slider</label>
                                        <div id="sliderStep"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Steps End -->

                    <!-- Round Values Start -->
                    <section class="scroll-section" id="roundValues">
                        <h2 class="small-title">Round Values</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Slider</label>
                                        <div id="sliderRound"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Round Values End -->

                    <!-- Pips Start -->
                    <section class="scroll-section" id="pips">
                        <h2 class="small-title">Pips</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4 mb-6">
                                        <label class="form-label">Slider</label>
                                        <div id="sliderPips"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Pips End -->

                    <!-- Pips Vertical Start -->
                    <section class="scroll-section" id="pipsVertical">
                        <h2 class="small-title">Pips Vertical</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div id="sliderPipsVertical" class="sh-30"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Pips Vertical End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="top-label custom-control-container slider-container">
                                            <span>SLIDER</span>
                                            <div id="sliderHorizontalTopLabel"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Top Label End -->

                    <!-- Filled Start -->
                    <section class="scroll-section" id="filled">
                        <h2 class="small-title">Filled</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="filled custom-control-container slider-container">
                                            <i data-cs-icon="settings-2"></i>
                                            <div id="sliderHorizontalFilled"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Filled End -->

                    <!-- Floating Label Start -->
                    <section class="scroll-section" id="floatingLabel">
                        <h2 class="small-title">Floating Label</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="form-floating slider-container">
                                            <div id="sliderHorizontalFloatingLabel"></div>
                                            <label>Email</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Floating Label End -->
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
                        <a class="nav-link" href="#horizontalBasic">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal Basic</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#verticalBasic">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Vertical Basic</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#tooltip">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Tooltip</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#steps">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Steps</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#roundValues">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Round Values</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#pips">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Pips</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#pipsVertical">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Pips Vertical</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#topLabel">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Top Label</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#filled">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Filled</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#floatingLabel">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Floating Label</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

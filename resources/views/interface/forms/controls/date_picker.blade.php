@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Datepicker';
    $description= 'Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms","/Interface/Forms/Controls"=>"Controls"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap-datepicker3.standalone.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/controls.datepicker.js') }}"></script>
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

                    <!-- Basic Start -->
                    <section class="scroll-section" id="basic">
                        <h2 class="small-title">Basic</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control" id="datePickerBasic"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Basic End -->

                    <!-- Auto Close Start -->
                    <section class="scroll-section" id="autoClose">
                        <h2 class="small-title">Auto Close</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control" id="datePickerAutoClose"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Auto Close End -->

                    <!-- Orientation Start -->
                    <section class="scroll-section" id="orientation">
                        <h2 class="small-title">Orientation</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-xl-3">
                                        <div class="mb-3">
                                            <label class="form-label">Auto</label>
                                            <input type="text" class="form-control date-picker-orientation"
                                                   data-orientation=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-xl-3">
                                        <div class="mb-3">
                                            <label class="form-label">Top Auto</label>
                                            <input type="text" class="form-control date-picker-orientation"
                                                   data-orientation="top auto"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-xl-3">
                                        <div class="mb-3">
                                            <label class="form-label">Bottom Auto</label>
                                            <input type="text" class="form-control date-picker-orientation"
                                                   data-orientation="bottom auto"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-xl-3">
                                        <div class="mb-3">
                                            <label class="form-label">Auto Left</label>
                                            <input type="text" class="form-control date-picker-orientation"
                                                   data-orientation="auto left"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-xl-3">
                                        <div class="mb-3">
                                            <label class="form-label">Top Left</label>
                                            <input type="text" class="form-control date-picker-orientation"
                                                   data-orientation="top left"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-xl-3">
                                        <div class="mb-3">
                                            <label class="form-label">Bottom Left</label>
                                            <input type="text" class="form-control date-picker-orientation"
                                                   data-orientation="bottom left"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-xl-3">
                                        <div class="mb-3">
                                            <label class="form-label">Auto Right</label>
                                            <input type="text" class="form-control date-picker-orientation"
                                                   data-orientation="auto right"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-xl-3">
                                        <div class="mb-3">
                                            <label class="form-label">Top Right</label>
                                            <input type="text" class="form-control date-picker-orientation"
                                                   data-orientation="top right"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-xl-3">
                                        <div>
                                            <label class="form-label">Bottom Right</label>
                                            <input type="text" class="form-control date-picker-orientation"
                                                   data-orientation="bottom right"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Orientation End -->

                    <!-- Initial Value Start -->
                    <section class="scroll-section" id="initialValue">
                        <h2 class="small-title">Initial Value</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control" value="08/08/2020"
                                               id="datePickerValue"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Initial Value End -->

                    <!-- Format Start -->
                    <section class="scroll-section" id="format">
                        <h2 class="small-title">Format</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control" placeholder="dd.mm.yyyy"
                                               id="datePickerFormat"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Format End -->

                    <!-- Locale Start -->
                    <section class="scroll-section" id="locale">
                        <h2 class="small-title">Locale</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control" id="datePickerLocale"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Locale End -->

                    <!-- Input Group Start -->
                    <section class="scroll-section" id="inputGroup">
                        <h2 class="small-title">Input Group</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Date</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="datePickerInputGroup"/>
                                            <span class="input-group-text">
                      <i data-cs-icon="calendar" class="text-muted"></i>
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Input Group End -->

                    <!-- Range Start -->
                    <section class="scroll-section" id="range">
                        <h2 class="small-title">Range</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <label class="form-label">Date</label>
                                <div class="input-daterange input-group" id="datePickerRange">
                                    <input type="text" class="form-control" name="start" placeholder="Start"/>
                                    <span class="mx-2"></span>
                                    <input type="text" class="form-control" name="end" placeholder="End"/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Range End -->

                    <!-- Embed Start -->
                    <section class="scroll-section" id="embed">
                        <h2 class="small-title">Embed</h2>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-xl-4 col-xxl-3">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div id="datePickerEmbed"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Embed End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="top-label">
                                            <input type="text" class="form-control" id="datePickerTopLabel"/>
                                            <span>DATE</span>
                                        </label>
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
                                        <div class="filled">
                                            <i data-cs-icon="calendar"></i>
                                            <input type="text" class="form-control" placeholder="Date"
                                                   id="datePickerFilled"/>
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
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="Date"
                                                   id="datePickerFloatingLabel"/>
                                            <label>Date</label>
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
                        <a class="nav-link" href="#basic">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#autoClose">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Auto Close</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#orientation">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Orientation</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#initialValue">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Initial Value</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#format">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Format</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#locale">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Locale</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#inputGroup">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Input Group</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#range">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Range</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#embed">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Embed</span>
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

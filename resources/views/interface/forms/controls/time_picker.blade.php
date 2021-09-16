@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Time Picker';
    $description= 'A simple component that turns a form input into a time picker with the help of Select2.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms","/Interface/Forms/Controls"=>"Controls"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/timepicker.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/controls.timepicker.js') }}"></script>
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

                    <!-- 24Hours Start -->
                    <section class="scroll-section" id="hours24">
                        <h2 class="small-title">24 Hours</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="time-picker-container">
                                            <label class="form-label">Time</label>
                                            <input class="form-control time-picker" id="timePicker24"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- 24Hours End -->

                    <!-- 12Hours Start -->
                    <section class="scroll-section" id="hours12">
                        <h2 class="small-title">12 Hours</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="time-picker-container">
                                            <label class="form-label">Time</label>
                                            <input class="form-control time-picker" name="time" data-format="12"
                                                   id="timePicker12"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- 12Hours End -->

                    <!-- Initial Value Start -->
                    <section class="scroll-section" id="initialValue">
                        <h2 class="small-title">Initial Value</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="time-picker-container">
                                            <label class="form-label">Time</label>
                                            <input class="form-control time-picker" name="time" value="14:15"
                                                   id="timePickerInitialValue"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Initial Value End -->

                    <!-- Custom Hours and Minutes Start -->
                    <section class="scroll-section" id="custom">
                        <h2 class="small-title">Custom Hours and Minutes</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="time-picker-container">
                                            <label class="form-label">Work Hours</label>
                                            <input class="form-control time-picker" name="time" value="09:00"
                                                   data-hours24="9,10,11,12,13,14,15,16,17" id="timePickerWorkHours"
                                                   data-minutes="0,10,20,30,40,50"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Custom Hours and Minutes End -->

                    <!-- Update Event Start -->
                    <section class="scroll-section" id="updateEvent">
                        <h2 class="small-title">Update Event</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="time-picker-container">
                                            <label class="form-label">Time</label>
                                            <input class="form-control time-picker" id="timeUpdate"/>
                                            <small class="form-text text-muted d-block">Logs date value in the console
                                                with every fire of update event.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Update Event End -->

                    <!-- Output as Date Start -->
                    <section class="scroll-section" id="outputAsDate">
                        <h2 class="small-title">Output as Date</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="time-picker-container">
                                            <label class="form-label">Time</label>
                                            <input class="form-control time-picker" id="timeOutput" data-output="date"/>
                                            <small class="form-text text-muted d-block">Logs time as a date string in
                                                the console.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Output as Date End -->

                    <!-- Set Time Start -->
                    <section class="scroll-section" id="setTime">
                        <h2 class="small-title">Set Time</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="time-picker-container mb-3">
                                    <label class="form-label">Time</label>
                                    <div class="d-inline-block me-3">
                                        <input class="form-control time-picker" id="timeSet" data-classname="mb-1"/>
                                    </div>
                                    <div class="d-inline-block">
                                        <button class="btn btn-outline-primary time-set-button mb-1">09:00</button>
                                        <button class="btn btn-outline-primary time-set-button mb-1">21:00</button>
                                    </div>
                                </div>
                                <div class="time-picker-container">
                                    <label class="form-label">Time</label>
                                    <div class="d-inline-block me-3">
                                        <input class="form-control time-picker" id="timeSet12Hour" data-classname="mb-1"
                                               data-format="12"/>
                                    </div>
                                    <div class="d-inline-block">
                                        <button class="btn btn-outline-primary time-set-button-12Hour mb-1">09:00:AM
                                        </button>
                                        <button class="btn btn-outline-primary time-set-button-12Hour mb-1">09:00:PM
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Set Time End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="top-label custom-control-container time-picker-container">
                                            <input class="form-control time-picker" id="timePickerTopLabel"/>
                                            <span>TIME</span>
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
                                    <div class="col-12 col-sm-6">
                                        <div class="filled custom-control-container time-picker-container">
                                            <i data-cs-icon="alarm"></i>
                                            <input class="form-control time-picker" id="timePickerFilled"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Filled End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="floatingLabel">
                        <h2 class="small-title">Floating Label</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="top-label custom-control-container time-picker-container">
                                            <input class="form-control time-picker" id="timePickerFloatingLabel"/>
                                            <span>Time</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Top Label End -->
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
                        <a class="nav-link" href="#hours24">
                            <i data-cs-icon="chevron-right"></i>
                            <span>24 Hours</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#hours12">
                            <i data-cs-icon="chevron-right"></i>
                            <span>12 Hours</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#initialValue">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Initial Value</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#custom">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#updateEvent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Update Event</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#outputAsDate">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Output as Date</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#setTime">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Set Time</span>
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

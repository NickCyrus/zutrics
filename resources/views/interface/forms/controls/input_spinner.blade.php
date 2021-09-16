@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Input Spinner';
    $description= 'A number spinner that support keyboard operations and properties like max, min and step.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms","/Interface/Forms/Controls"=>"Controls"]
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
    <script src="{{ asset('/js/vendor/input-spinner.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/controls.spinner.js') }}"></script>
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

                    <!-- Quantity Start -->
                    <section class="scroll-section" id="quantity">
                        <h2 class="small-title">Quantity</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group spinner" id="spinnerQuantity">
                                    <input type="text" class="form-control text-center" value="1" data-rule="quantity"/>
                                    <div class="input-group-text">
                                        <button type="button" class="spin-up" data-spin="up">
                                            <span class="arrow"></span>
                                        </button>
                                        <button type="button" class="spin-down" data-spin="down">
                                            <span class="arrow"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Quantity End -->

                    <!-- Data Trigger Start -->
                    <section class="scroll-section" id="dataTrigger">
                        <h2 class="small-title">Data Trigger</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group spinner" data-trigger="spinner">
                                    <input type="text" class="form-control text-center" value="1" data-rule="quantity"/>
                                    <div class="input-group-text">
                                        <button type="button" class="spin-up" data-spin="up">
                                            <span class="arrow"></span>
                                        </button>
                                        <button type="button" class="spin-down" data-spin="down">
                                            <span class="arrow"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Data Trigger End -->

                    <!-- Currency Start -->
                    <section class="scroll-section" id="currency">
                        <h2 class="small-title">Currency</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group spinner" data-trigger="spinner">
                                    <input type="text" class="form-control text-center" value="1" data-rule="currency"/>
                                    <div class="input-group-text">
                                        <button type="button" class="spin-up" data-spin="up">
                                            <span class="arrow"></span>
                                        </button>
                                        <button type="button" class="spin-down" data-spin="down">
                                            <span class="arrow"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Currency End -->

                    <!-- Percent Start -->
                    <section class="scroll-section" id="percent">
                        <h2 class="small-title">Percent</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group spinner" data-trigger="spinner">
                                    <input type="text" class="form-control text-center" value="1" data-rule="percent"/>
                                    <div class="input-group-text">
                                        <button type="button" class="spin-up" data-spin="up">
                                            <span class="arrow"></span>
                                        </button>
                                        <button type="button" class="spin-down" data-spin="down">
                                            <span class="arrow"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Percent End -->

                    <!-- Month Start -->
                    <section class="scroll-section" id="month">
                        <h2 class="small-title">Month</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group spinner" data-trigger="spinner">
                                    <input type="text" class="form-control text-center" value="1" data-rule="month"/>
                                    <div class="input-group-text">
                                        <button type="button" class="spin-up" data-spin="up">
                                            <span class="arrow"></span>
                                        </button>
                                        <button type="button" class="spin-down" data-spin="down">
                                            <span class="arrow"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Month End -->

                    <!-- Hour Start -->
                    <section class="scroll-section" id="hour">
                        <h2 class="small-title">Hour</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group spinner" data-trigger="spinner">
                                    <input type="text" class="form-control text-center" value="1" data-rule="hour"/>
                                    <div class="input-group-text">
                                        <button type="button" class="spin-up" data-spin="up">
                                            <span class="arrow"></span>
                                        </button>
                                        <button type="button" class="spin-down" data-spin="down">
                                            <span class="arrow"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Hour End -->

                    <!-- Step, Max and Min Start -->
                    <section class="scroll-section" id="stepMaxAndMin">
                        <h2 class="small-title">Step, Max and Min</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group spinner" data-trigger="spinner">
                                    <input type="text" class="form-control text-center" value="0" data-max="50"
                                           data-min="-50" data-step="5"/>
                                    <div class="input-group-text">
                                        <button type="button" class="spin-up" data-spin="up">
                                            <span class="arrow"></span>
                                        </button>
                                        <button type="button" class="spin-down" data-spin="down">
                                            <span class="arrow"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step, Max and Min End -->

                    <!-- Separated Buttons Start -->
                    <section class="scroll-section" id="separatedButtons">
                        <h2 class="small-title">Separated Buttons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group spinner" data-trigger="spinner">
                                    <div class="input-group-text">
                                        <button type="button" class="spin-down single" data-spin="down">-</button>
                                    </div>
                                    <input type="text" class="form-control text-center" value="1" data-rule="quantity"/>
                                    <div class="input-group-text">
                                        <button type="button" class="spin-up single" data-spin="up">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Separated Buttons End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabelExample">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="top-label">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <input type="text" class="form-control" value="1" data-rule="quantity"/>
                                        <div class="input-group-text">
                                            <button type="button" class="spin-up" data-spin="up">
                                                <span class="arrow"></span>
                                            </button>
                                            <button type="button" class="spin-down" data-spin="down">
                                                <span class="arrow"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <span>QUANTITY</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Top Label End -->

                    <!-- Filled Start -->
                    <section class="scroll-section" id="filledExample">
                        <h2 class="small-title">Filled</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="filled">
                                    <i data-cs-icon="sort"></i>
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <input type="text" class="form-control" value="1" data-rule="quantity"/>
                                        <div class="input-group-text border-0">
                                            <button type="button" class="spin-up" data-spin="up">
                                                <span class="arrow"></span>
                                            </button>
                                            <button type="button" class="spin-down" data-spin="down">
                                                <span class="arrow"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Filled End -->

                    <!-- Floating Label Start -->
                    <section class="scroll-section" id="floatingLabelExample">
                        <h2 class="small-title">Floating Label</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-floating input-group spinner" data-trigger="spinner">
                                    <input type="text" class="form-control" value="1" data-rule="quantity"/>
                                    <label>Quantity</label>
                                    <div class="input-group-text">
                                        <button type="button" class="spin-up" data-spin="up">
                                            <span class="arrow"></span>
                                        </button>
                                        <button type="button" class="spin-down" data-spin="down">
                                            <span class="arrow"></span>
                                        </button>
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
                        <a class="nav-link" href="#quantity">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Quantity</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#dataTrigger">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Data Trigger</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#currency">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Currency</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#percent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Percent</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#month">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Month</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#hour">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Hour</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#stepMaxAndMin">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Step, Max and Min</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#separatedButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Separated Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#topLabelExample">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Top Label</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#filledExample">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Filled</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#floatingLabelExample">
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

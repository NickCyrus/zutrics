@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Autocomplete';
    $description= 'AutoComplete.js is a simple pure vanilla Javascript library.';
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
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/autocomplete.custom.js') }}"></script>
    <script src="{{ asset('/js/forms/controls.autocomplete.js') }}"></script>
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

                    <!-- Strict Array Start -->
                    <section class="scroll-section" id="strictArrayExample">
                        <h2 class="small-title">Strict Array</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="autocomplete-container">
                                            <label class="form-label">Search</label>
                                            <input type="text" id="strictArray" class="form-control"
                                                   autocomplete="off"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Strict Array End -->

                    <!-- Loose Array Start -->
                    <section class="scroll-section" id="looseArrayExample">
                        <h2 class="small-title">Loose Array</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="autocomplete-container">
                                            <label class="form-label">Search</label>
                                            <input type="text" id="looseArray" class="form-control" autocomplete="off"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Loose Array End -->

                    <!-- Array of Objects Start -->
                    <section class="scroll-section" id="arrayOfObjectsExample">
                        <h2 class="small-title">Array of Objects</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="autocomplete-container">
                                            <label class="form-label">Search</label>
                                            <input type="text" id="arrayOfObjects" class="form-control"
                                                   autocomplete="off"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Array of Objects End -->

                    <!-- Json Search Pages Start -->
                    <section class="scroll-section" id="jsonSearchPagesExample">
                        <h2 class="small-title">Json Search Pages</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="autocomplete-container">
                                            <label class="form-label">Search</label>
                                            <input type="text" id="jsonData" class="form-control" autocomplete="off"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Json Search Pages End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabelExample">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="top-label autocomplete-container">
                                            <input type="text" id="topLabelInput" class="form-control"
                                                   autocomplete="off"/>
                                            <span>SEARCH</span>
                                        </label>
                                    </div>
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
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="filled autocomplete-container">
                                            <i data-cs-icon="loaf"></i>
                                            <input type="text" id="filledInput" class="form-control"
                                                   autocomplete="off"/>
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
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="form-floating autocomplete-container">
                                            <input type="email" id="floatingLabelInput" class="form-control"
                                                   autocomplete="off"/>
                                            <label>Search</label>
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
                        <a class="nav-link" href="#strictArrayExample">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Strict Array</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#looseArrayExample">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Loose Array</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#arrayOfObjectsExample">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Array of Objects</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#jsonSearchPagesExample">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Json Search Pages</span>
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

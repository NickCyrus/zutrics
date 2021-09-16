@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Rating';
    $description= 'Rating Plugin works by transforming a standard select field into a rating widget. The rating widget can be flexibly styled with css.';
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
    <script src="{{ asset('/js/vendor/jquery.barrating.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/controls.rating.js') }}"></script>
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

                    <!-- CS Icon Start -->
                    <section class="scroll-section" id="cSIcon">
                        <h2 class="small-title">CS Icon</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Interactive</label>
                                            <div class="br-wrapper br-theme-cs-icon">
                                                <select name="rating" autocomplete="off" data-initial-rating="0"
                                                        id="ratingCSIconInteractive">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Readonly</label>
                                            <div class="br-wrapper br-theme-cs-icon">
                                                <select name="rating" autocomplete="off" data-readonly="true"
                                                        data-initial-rating="4" id="ratingCSIconReadonly">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- CS Icon End -->

                    <!-- Css Stars Start -->
                    <section class="scroll-section" id="cssStars">
                        <h2 class="small-title">Css Stars</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Interactive</label>
                                            <div class="br-wrapper br-theme-css-stars">
                                                <select name="rating" autocomplete="off" id="ratingCSSIconInteractive">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Readonly</label>
                                            <div class="br-wrapper br-theme-css-stars">
                                                <select name="rating" autocomplete="off" data-readonly="true"
                                                        id="ratingCSSIconReadonly">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Css Stars End -->

                    <!-- Ten Points Start -->
                    <section class="scroll-section" id="tenPoints">
                        <h2 class="small-title">Ten Points</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Interactive</label>
                                            <div class="br-wrapper br-theme-cs-icon">
                                                <select name="rating" autocomplete="off"
                                                        id="ratingTenPointsInteractive">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Readonly</label>
                                            <div class="br-wrapper br-theme-cs-icon">
                                                <select name="rating" autocomplete="off" data-readonly="true"
                                                        data-initial-rating="8" id="ratingTenPointsReadonly">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ten Points End -->

                    <!-- Bars Low Start -->
                    <section class="scroll-section" id="barsLow">
                        <h2 class="small-title">Bars Low</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Interactive</label>
                                            <div class="br-wrapper br-theme-bars-low">
                                                <select name="rating" autocomplete="off" id="barsLowInteractive">
                                                    <option value="Bad">Bad</option>
                                                    <option value="Mediocre">Mediocre</option>
                                                    <option value="Good">Good</option>
                                                    <option value="Awesome">Awesome</option>
                                                    <option value="Magnificent">Magnificent</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Readonly</label>
                                            <div class="br-wrapper br-theme-bars-low">
                                                <select name="rating" autocomplete="off" data-readonly="true"
                                                        data-initial-rating="Magnificent" id="barsLowReadonly">
                                                    <option value="Bad">Bad</option>
                                                    <option value="Mediocre">Mediocre</option>
                                                    <option value="Good" selected="selected">Good</option>
                                                    <option value="Awesome">Awesome</option>
                                                    <option value="Magnificent">Magnificent</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Bars Low End -->

                    <!-- Bars Tall Start -->
                    <section class="scroll-section" id="barsTall">
                        <h2 class="small-title">Bars Tall</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Interactive</label>
                                            <div class="br-wrapper br-theme-bars-tall">
                                                <select name="rating" autocomplete="off" id="barsTallInteractive">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Readonly</label>
                                            <div class="br-wrapper br-theme-bars-tall">
                                                <select name="rating" autocomplete="off" data-readonly="true"
                                                        id="barsTallReadonly">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Bars Tall End -->

                    <!-- Button Start -->
                    <section class="scroll-section" id="button">
                        <h2 class="small-title">Button</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Interactive</label>
                                            <div class="br-wrapper br-theme-button">
                                                <select name="rating" autocomplete="off" data-show-values="true"
                                                        data-show-selected-rating="false" id="ratingButtonInteractive">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-1">
                                            <label class="d-block form-label">Readonly</label>
                                            <div class="br-wrapper br-theme-button">
                                                <select name="rating" autocomplete="off"
                                                        data-show-selected-rating="false" data-show-values="true"
                                                        data-readonly="true" id="ratingButtonReadonly">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Button End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="top-label custom-control-container rating-container mb-0">
                                            <div class="br-wrapper br-theme-cs-icon">
                                                <select name="rating" autocomplete="off" id="ratingTopLabel">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <span>RATING</span>
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
                                        <div
                                            class="filled custom-control-container rating-container d-flex align-items-center mb-0">
                                            <i data-cs-icon="badge"></i>
                                            <div class="br-wrapper br-theme-cs-icon">
                                                <select name="rating" autocomplete="off" id="ratingFilled">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
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
                                    <div class="col-12 col-sm-6">
                                        <div class="rating-container form-floating">
                                            <div class="br-wrapper br-theme-cs-icon">
                                                <select name="rating" autocomplete="off" id="ratingFloatingLabel">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <label>Rating</label>
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
                        <a class="nav-link" href="#cSIcon">
                            <i data-cs-icon="chevron-right"></i>
                            <span>CS Icon</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#cssStars">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Css Stars</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#tenPoints">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Ten Points</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#barsLow">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Bars Low</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#barsTall">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Bars Tall</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#button">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Button</span>
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

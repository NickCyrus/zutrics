@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Spinners';
    $description= 'Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.';
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
    <script src="{{ asset('/js/components/spinners.js') }}"></script>
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

                    <!-- Overlay Spinner Start -->
                    <section class="scroll-section" id="overlaySpinner">
                        <h2 class="small-title">Overlay Spinner</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <p>Below button will add a border spinner as an overlay and it will be removed in 3
                                    seconds.</p>
                                <button class="btn btn-primary" id="addOverlaySpinner">Add Overlay Spinner</button>
                            </div>
                        </div>
                    </section>
                    <!-- Overlay Spinner End -->

                    <!-- Card Overlay Spinner Start -->
                    <section class="scroll-section" id="cardOverlaySpinner">
                        <h2 class="small-title">Card Overlay Spinner</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <p>Below button will add a border spinner as an overlay to the parent card and it will
                                    be removed in 3 seconds.</p>
                                <button class="btn btn-primary" id="addCardOverlaySpinner">Add Card Overlay Spinner
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Card Overlay Spinner End -->

                    <!-- Border Spinner Start -->
                    <section class="scroll-section" id="borderSpinner">
                        <h2 class="small-title">Border Spinner</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="spinner-border text-primary" role="status"></div>
                                <div class="spinner-border text-secondary" role="status"></div>
                                <div class="spinner-border text-tertiary" role="status"></div>
                                <div class="spinner-border text-quaternary" role="status"></div>
                                <div class="spinner-border text-success" role="status"></div>
                                <div class="spinner-border text-danger" role="status"></div>
                                <div class="spinner-border text-warning" role="status"></div>
                                <div class="spinner-border text-info" role="status"></div>
                                <div class="spinner-border text-light" role="status"></div>
                                <div class="spinner-border text-dark" role="status"></div>
                            </div>
                        </div>
                    </section>
                    <!-- Border Spinner End -->

                    <!-- Growing Spinner Start -->
                    <section class="scroll-section" id="growingSpinner">
                        <h2 class="small-title">Growing Spinner</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="spinner-grow text-primary" role="status"></div>
                                <div class="spinner-grow text-secondary" role="status"></div>
                                <div class="spinner-grow text-tertiary" role="status"></div>
                                <div class="spinner-grow text-quaternary" role="status"></div>
                                <div class="spinner-grow text-success" role="status"></div>
                                <div class="spinner-grow text-danger" role="status"></div>
                                <div class="spinner-grow text-warning" role="status"></div>
                                <div class="spinner-grow text-info" role="status"></div>
                                <div class="spinner-grow text-light" role="status"></div>
                                <div class="spinner-grow text-dark" role="status"></div>
                            </div>
                        </div>
                    </section>
                    <!-- Growing Spinner End -->

                    <!-- Size Start -->
                    <section class="scroll-section" id="size">
                        <h2 class="small-title">Size</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="spinner-border" style="width: 3rem; height: 3rem" role="status"></div>
                                <div class="spinner-grow" style="width: 3rem; height: 3rem" role="status"></div>
                                <div class="spinner-border" role="status"></div>
                                <div class="spinner-grow" role="status"></div>
                                <div class="spinner-border spinner-border-sm" role="status"></div>
                                <div class="spinner-grow spinner-grow-sm" role="status"></div>
                            </div>
                        </div>
                    </section>
                    <!-- Size End -->

                    <!-- Buttons Start -->
                    <section class="scroll-section" id="buttons">
                        <h2 class="small-title">Buttons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button class="btn btn-primary mb-1" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                          aria-hidden="true"></span>
                                </button>
                                <button class="btn btn-primary mb-1" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                          aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <button class="btn btn-primary mb-1" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                </button>
                                <button class="btn btn-primary mb-1" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Buttons End -->

                    <!-- Alignment Start -->
                    <section class="scroll-section" id="alignment">
                        <h2 class="small-title">Alignment</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate">Margin</h6>
                                <div class="spinner-border m-5" role="status"></div>
                                <h6 class="mb-3 text-alternate">Flex</h6>
                                <div class="d-flex justify-content-center mb-5">
                                    <div class="spinner-border" role="status"></div>
                                </div>
                                <h6 class="mb-3 text-alternate">Flex with Text</h6>
                                <div class="d-flex align-items-center mb-5">
                                    <strong>Loading...</strong>
                                    <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                                </div>
                                <h6 class="mb-3 text-alternate">Floats</h6>
                                <div class="clearfix">
                                    <div class="spinner-border float-start mb-5" role="status"></div>
                                </div>
                                <h6 class="mb-3 text-alternate">Text Align</h6>
                                <div class="text-center">
                                    <div class="spinner-border" role="status"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Alignment End -->
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
                        <a class="nav-link" href="#overlaySpinner">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Overlay Spinner</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#cardOverlaySpinner">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Card Overlay Spinner</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#borderSpinner">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Border Spinner</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#gropwingSpinner">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Gropwing Spinner</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#size">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Size</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#buttons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#alignment">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Alignment</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

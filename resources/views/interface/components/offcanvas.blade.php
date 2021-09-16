@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Offcanvas';
    $description= 'Build hidden sidebars into your project for navigation, shopping carts, and more with a few classes and our JavaScript plugin.';
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
                                <a class="btn btn-primary mb-1" data-bs-toggle="offcanvas" href="#offcanvasExample"
                                   role="button" aria-controls="offcanvasExample">
                                    Link with href
                                </a>
                                <button
                                    class="btn btn-primary mb-1"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasExample"
                                    aria-controls="offcanvasExample"
                                >
                                    Button with data-bs-target
                                </button>

                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                     aria-labelledby="offcanvasExampleLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div>Some text as placeholder. In real life you can have the elements you have
                                            chosen. Like, text, images, lists, etc.
                                        </div>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown">
                                                Dropdown button
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Placement Start -->
                    <section class="scroll-section" id="placementExample">
                        <h2 class="small-title">Placement</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button
                                    class="btn btn-primary mb-1"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight"
                                >
                                    Toggle right offcanvas
                                </button>
                                <button
                                    class="btn btn-primary mb-1"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasBottom"
                                    aria-controls="offcanvasBottom"
                                >
                                    Toggle bottom offcanvas
                                </button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    Toggle top offcanvas
                                </button>

                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                     aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">...</div>
                                </div>
                                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                                     aria-labelledby="offcanvasBottomLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body small">...</div>
                                </div>
                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                                     aria-labelledby="offcanvasTopLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasTopLabel">Offcanvas top</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">...</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Placement End -->

                    <!-- Backdrop Start -->
                    <section class="scroll-section" id="backdrop">
                        <h2 class="small-title">Backdrop</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button
                                    class="btn btn-primary mb-1"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasScrolling"
                                    aria-controls="offcanvasScrolling"
                                >
                                    Enable body scrolling
                                </button>
                                <button
                                    class="btn btn-primary mb-1"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBackdrop"
                                    aria-controls="offcanvasWithBackdrop"
                                >
                                    Enable backdrop (default)
                                </button>
                                <button
                                    class="btn btn-primary mb-1"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions"
                                    aria-controls="offcanvasWithBothOptions"
                                >
                                    Enable both scrolling & backdrop
                                </button>

                                <div
                                    class="offcanvas offcanvas-start"
                                    data-bs-scroll="true"
                                    data-bs-backdrop="false"
                                    tabindex="-1"
                                    id="offcanvasScrolling"
                                    aria-labelledby="offcanvasScrollingLabel"
                                >
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with
                                            scrolling</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <p>Try scrolling the rest of the page to see this option in action.</p>
                                    </div>
                                </div>
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
                                     aria-labelledby="offcanvasWithBackdropLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with
                                            backdrop</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <p>.....</p>
                                    </div>
                                </div>
                                <div
                                    class="offcanvas offcanvas-start"
                                    data-bs-scroll="true"
                                    tabindex="-1"
                                    id="offcanvasWithBothOptions"
                                    aria-labelledby="offcanvasWithBothOptionsLabel"
                                >
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with
                                            scrolling</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <p>Try scrolling the rest of the page to see this option in action.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Backdrop End -->
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
                        <a class="nav-link" href="#placementExample">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Placement</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#backdrop">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Backdrop</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

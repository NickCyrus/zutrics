@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Badge';
    $description = 'Examples for badges, our small count and labeling component.';
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
                    <!-- Sizes Start -->
                    <section class="scroll-section" id="sizes">
                        <h2 class="small-title">Sizes</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h1>
                                    Example heading
                                    <span class="badge bg-primary">New</span>
                                </h1>
                                <h2>
                                    Example heading
                                    <span class="badge bg-primary">New</span>
                                </h2>
                                <h3>
                                    Example heading
                                    <span class="badge bg-primary">New</span>
                                </h3>
                                <h4>
                                    Example heading
                                    <span class="badge bg-primary">New</span>
                                </h4>
                                <h5>
                                    Example heading
                                    <span class="badge bg-primary">New</span>
                                </h5>
                                <h6>
                                    Example heading
                                    <span class="badge bg-primary">New</span>
                                </h6>
                            </div>
                        </div>
                    </section>
                    <!-- Sizes End -->

                    <!-- Counter Start -->
                    <section class="scroll-section" id="counter">
                        <h2 class="small-title">Counter</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary">
                                    Notifications
                                    <span class="badge bg-secondary">4</span>
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Profile
                                    <span class="badge bg-secondary">9</span>
                                    <span class="visually-hidden">unread messages</span>
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Counter End -->

                    <!-- Contextual Variations Start -->
                    <section class="scroll-section" id="contextualVariations">
                        <h2 class="small-title">Contextual Variations</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <span class="badge bg-primary text-uppercase">Primary</span>
                                <span class="badge bg-secondary text-uppercase">Secondary</span>
                                <span class="badge bg-tertiary text-uppercase">Tertiary</span>
                                <span class="badge bg-quaternary text-uppercase">Quaternary</span>
                                <span class="badge bg-success text-uppercase">Success</span>
                                <span class="badge bg-danger text-uppercase">Danger</span>
                                <span class="badge bg-warning text-uppercase">Warning</span>
                                <span class="badge bg-info text-uppercase">Info</span>
                                <span class="badge bg-light text-uppercase">Light</span>
                                <span class="badge bg-dark text-uppercase">Dark</span>
                                <span class="badge bg-foreground text-uppercase">Foreground</span>
                                <span class="badge bg-background text-uppercase">Background</span>
                                <span class="badge bg-muted text-uppercase">Muted</span>
                                <span class="badge bg-separator text-uppercase">Separator</span>
                            </div>
                        </div>
                    </section>
                    <!-- Contextual Variations End -->

                    <!-- Pill Badges Start -->
                    <section class="scroll-section" id="pillBadges">
                        <h2 class="small-title">Pill Badges</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <span class="badge rounded-pill bg-primary">Primary</span>
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                                <span class="badge rounded-pill bg-tertiary">Tertiary</span>
                                <span class="badge rounded-pill bg-quaternary">Quaternary</span>
                                <span class="badge rounded-pill bg-success">Success</span>
                                <span class="badge rounded-pill bg-danger">Danger</span>
                                <span class="badge rounded-pill bg-warning">Warning</span>
                                <span class="badge rounded-pill bg-info">Info</span>
                                <span class="badge rounded-pill bg-light">Light</span>
                                <span class="badge rounded-pill bg-dark">Dark</span>
                                <span class="badge rounded-pill bg-foreground">Foreground</span>
                                <span class="badge rounded-pill bg-background">Background</span>
                                <span class="badge rounded-pill bg-muted">Muted</span>
                                <span class="badge rounded-pill bg-separator">Separator</span>
                            </div>
                        </div>
                    </section>
                    <!-- Pill Badges End -->

                    <!-- Links Start -->
                    <section class="scroll-section" id="outline">
                        <h2 class="small-title">Outline</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <span class="badge bg-outline-primary">Primary</span>
                                <span class="badge bg-outline-secondary">Secondary</span>
                                <span class="badge bg-outline-tertiary">Tertiary</span>
                                <span class="badge bg-outline-quaternary">Quaternary</span>
                                <span class="badge bg-outline-success">Success</span>
                                <span class="badge bg-outline-danger">Danger</span>
                                <span class="badge bg-outline-warning">Warning</span>
                                <span class="badge bg-outline-info">Info</span>
                                <span class="badge bg-outline-light">Light</span>
                                <span class="badge bg-outline-dark">Dark</span>
                                <span class="badge bg-outline-foreground">Foreground</span>
                                <span class="badge bg-outline-background">Background</span>
                                <span class="badge bg-outline-muted">Muted</span>
                                <span class="badge bg-outline-separator">Separator</span>
                            </div>
                        </div>
                    </section>
                    <!-- Links End -->

                    <!-- Links Start -->
                    <section class="scroll-section" id="links">
                        <h2 class="small-title">Links</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="#" class="badge bg-primary">Primary</a>
                                <a href="#" class="badge bg-secondary">Secondary</a>
                                <a href="#" class="badge bg-tertiary">Tertiary</a>
                                <a href="#" class="badge bg-quaternary">Quaternary</a>
                                <a href="#" class="badge bg-success">Success</a>
                                <a href="#" class="badge bg-danger">Danger</a>
                                <a href="#" class="badge bg-warning">Warning</a>
                                <a href="#" class="badge bg-info">Info</a>
                                <a href="#" class="badge bg-light">Light</a>
                                <a href="#" class="badge bg-dark">Dark</a>
                                <a href="#" class="badge bg-foreground">Foreground</a>
                                <a href="#" class="badge bg-background">Background</a>
                                <a href="#" class="badge bg-muted">Muted</a>
                                <a href="#" class="badge bg-separator">Separator</a>
                            </div>
                        </div>
                    </section>
                    <!-- Links End -->

                    <!-- Absolute Positioned Start -->
                    <section class="scroll-section" id="absolutePositioned">
                        <h2 class="small-title">Absolute Positioned</h2>
                        <div class="row g-4">
                            <div class="col-6 col-lg-3">
                                <div class="card h-100">
                                    <span
                                        class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1 t-1">SALE</span>
                                    <img src="{{ asset('/img/product/small/cornbread.jpg') }}"
                                         class="card-img-top sh-15" alt="card image"/>
                                    <div class="card-body">
                                        <h5 class="heading mb-0 d-flex">
                                            <a href="#" class="body-link d-block lh-1-5">Plain Baguette</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="card h-100">
                                    <span
                                        class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                                    <img src="{{ asset('/img/product/small/cornbread.jpg') }}"
                                         class="card-img-top sh-15" alt="card image"/>
                                    <div class="card-body">
                                        <h5 class="heading mb-0 d-flex">
                                            <a href="#" class="body-link d-block lh-1-5">Plain Baguette</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="card h-100">
                                    <span
                                        class="badge rounded-pill bg-primary me-1 position-absolute s-2 t-n2 z-index-1">SALE</span>
                                    <img src="{{ asset('/img/product/small/cornbread.jpg') }}"
                                         class="card-img-top sh-15" alt="card image"/>
                                    <div class="card-body">
                                        <h5 class="heading mb-0 d-flex">
                                            <a href="#" class="body-link d-block lh-1-5">Plain Baguette</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="card h-100">
                                    <span
                                        class="badge rounded-pill bg-primary me-1 position-absolute e-2 t-n2 z-index-1">SALE</span>
                                    <img src="{{ asset('/img/product/small/cornbread.jpg') }}"
                                         class="card-img-top sh-15" alt="card image"/>
                                    <div class="card-body">
                                        <h5 class="heading mb-0 d-flex">
                                            <a href="#" class="body-link d-block lh-1-5">Plain Baguette</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Absolute Positioned End -->
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
                        <a class="nav-link" href="#sizes">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sizes</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#counter">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Counter</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#contextualVariations">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Contextual Variations</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#pillBadges">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Pill Badges</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#outline">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Outline</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#links">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Links</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#absolutePositioned">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Absolute Positioned</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

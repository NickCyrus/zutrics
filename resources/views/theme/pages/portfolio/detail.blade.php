@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Portfolio Detail';
    $description = 'Portfolio Detail Page';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Portfolio"=>"Portfolio"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/glide.core.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/baguetteBox.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/glide.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/baguetteBox.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/glide.custom.js') }}"></script>
    <script src="{{ asset('/js/pages/portfolio.detail.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                    <!-- Like Button Start -->
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                        <i data-cs-icon="heart"></i>
                        <span>Like</span>
                    </button>
                    <!-- Like Button End -->

                    <!-- Dropdown Button Start -->
                    <div class="ms-1">
                        <button
                            type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-only"
                            data-bs-offset="0,3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            data-submenu
                        >
                            <i data-cs-icon="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item" type="button">Save</button>
                            <button class="dropdown-item" type="button">Report</button>
                        </div>
                    </div>
                    <!-- Dropdown Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <div class="col-12 col-xl-8 col-xxl-9 mb-5">
                <div class="card mb-5">
                    <!-- Carousel Start -->
                    <div class="card-body p-0">
                        <div class="glide glide-gallery" id="glidePortfolioDetail">
                            <!-- Large Images Start -->
                            <div class="glide glide-large">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides gallery-glide-custom">
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/cornbread.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/cornbread.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-35 sh-md-60 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-35 sh-md-60 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/bauernbrot.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/bauernbrot.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-35 sh-md-60 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/guernsey-gache.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/guernsey-gache.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-35 sh-md-60 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-35 sh-md-60 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/baguette.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/baguette.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-35 sh-md-60 w-100"
                                                />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Large Images End -->

                            <!-- Thumbs Start -->
                            <div class="glide glide-thumb mb-3">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <li class="glide__slide p-0">
                                            <img alt="thumb" src="{{ asset('/img/product/thumb/cornbread.jpg') }}"
                                                 class="responsive rounded-md img-fluid"/>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <img alt="thumb"
                                                 src="{{ asset('/img/product/thumb/pullman-loaf-thumb.jpg') }}"
                                                 class="responsive rounded-md img-fluid"/>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <img alt="thumb"
                                                 src="{{ asset('/img/product/thumb/bauernbrot-thumb.jpg') }}"
                                                 class="responsive rounded-md img-fluid"/>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <img alt="thumb"
                                                 src="{{ asset('/img/product/thumb/guernsey-gache-thumb.jpg') }}"
                                                 class="responsive rounded-md img-fluid"/>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <img alt="thumb"
                                                 src="{{ asset('/img/product/thumb/pain-de-campagne-thumb.jpg') }}"
                                                 class="responsive rounded-md img-fluid"/>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <img alt="thumb" src="{{ asset('/img/product/thumb/baguette-thumb.jpg') }}"
                                                 class="responsive rounded-md img-fluid"/>
                                        </li>
                                    </ul>
                                </div>
                                <div class="glide__arrows" data-glide-el="controls">
                                    <button class="btn btn-icon btn-icon-only btn-foreground hover-outline left-arrow"
                                            data-glide-dir="<">
                                        <i data-cs-icon="chevron-left"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-foreground hover-outline right-arrow"
                                            data-glide-dir=">">
                                        <i data-cs-icon="chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Thumbs End -->
                        </div>
                    </div>
                    <!-- Carousel End -->

                    <!-- Details Start -->
                    <div class="card-body pt-0">
                        <h4 class="mb-3">Carrot Cake Gingerbread</h4>
                        <div class="mb-4">
                            <p>
                                Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin liquorice chupa
                                chups soufflé bonbon. Liquorice gummi bears cake
                                donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream gummies dessert
                                muffin chocolate jelly. Danish brownie chocolate bar
                                lollipop cookie tootsie roll candy canes. Jujubes lollipop cheesecake gummi bears
                                cheesecake. Cake jujubes soufflé.
                            </p>
                        </div>
                        <div class="row align-items-center">
                            <!-- Comments and Likes Start -->
                            <div class="col-6 text-muted">
                                <div class="row g-3">
                                    <div class="col-auto">
                                        <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">421</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-cs-icon="heart" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">214</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-cs-icon="message" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">12</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comments and Likes End -->

                            <!-- Social Buttons Start -->
                            <div class="col-6">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1"
                                            type="button">
                                        <i data-cs-icon="facebook"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1"
                                            type="button">
                                        <i data-cs-icon="twitter"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Social Buttons End -->
                        </div>
                    </div>
                    <!-- Details End -->
                </div>

                <!-- Comments Start -->
                <h2 class="small-title">Comments</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl"
                                             alt="thumb"/>
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <a href="#">Cherish Kerr</a>
                                    <div class="text-muted text-small mb-2">2 days ago</div>
                                    <div class="text-medium text-alternate lh-1-25">Nice job!</div>
                                </div>
                                <div class="col-auto justify-self-end">
                                    <div>
                                        <span class="text-muted">4</span>
                                        <button class="btn btn-icon btn-icon-only btn-foreground hover-outline mb-1"
                                                type="button">
                                            <i data-cs-icon="heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-xl"
                                             alt="thumb"/>
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <a href="#">Olli Hawkins</a>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="text-medium text-alternate lh-1-25">Beautiful combination of colors!
                                    </div>
                                </div>
                                <div class="col-auto justify-self-end">
                                    <div>
                                        <span class="text-muted">8</span>
                                        <button class="btn btn-icon btn-icon-only btn-foreground hover-outline mb-1"
                                                type="button">
                                            <i data-cs-icon="heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                             class="img-fluid rounded-xl"
                                             alt="thumb"/>
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <a href="#">Kirby Peters</a>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="text-medium text-alternate lh-1-25">Nice, clear design.</div>
                                </div>
                                <div class="col-auto justify-self-end">
                                    <div>
                                        <span class="text-muted">15</span>
                                        <button class="btn btn-icon btn-icon-only btn-foreground hover-outline mb-1"
                                                type="button">
                                            <i data-cs-icon="heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                             class="img-fluid rounded-xl"
                                             alt="thumb"/>
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <a href="#">Zayn Hartley</a>
                                    <div class="text-muted text-small mb-2">1 week ago</div>
                                    <div class="text-medium text-alternate lh-1-25">Loved the typography!</div>
                                </div>
                                <div class="col-auto justify-self-end">
                                    <div>
                                        <span class="text-muted">6</span>
                                        <button class="btn btn-icon btn-icon-only btn-foreground hover-outline mb-1"
                                                type="button">
                                            <i data-cs-icon="heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mt-5">
                            <input type="text" class="form-control" placeholder="Add a comment"
                                   aria-label="Add a comment"/>
                            <button class="btn btn-icon btn-icon-end btn-outline-primary" type="button">
                                <span>Add</span>
                                <i data-cs-icon="send"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Comments End -->
            </div>

            <!-- Right Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <div class="row">
                    <!-- Hire Start -->
                    <div class="col-12">
                        <div class="card mb-5">
                            <div class="card-body row g-0">
                                <div class="col-12">
                                    <div class="cta-3">Like what you see?</div>
                                    <div class="mb-3 cta-3 text-primary">Hire us!</div>

                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                                 class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb"/>
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Cherish Kerr</div>
                                                    <div class="text-small text-muted">Available for freelance work
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Hire
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hire End -->

                    <!-- Tags Start -->
                    <div class="col-12 col-xl-12">
                        <h2 class="small-title">Tags</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Food (12)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Baking (3)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Sweet (1)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Molding (3)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Pastry (5)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Healthy (7)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Rye (3)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Simple (3)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Cake (2)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Recipe (6)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Bread (8)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-muted mb-1 me-1"
                                        type="button">
                                    <span>Wheat (2)</span>
                                </button>
                            </div>
                        </div>
                        <!-- Tags End -->
                    </div>

                    <!-- Smilar Works Start -->
                    <div class="col-12">
                        <h2 class="small-title">Smilar Works</h2>
                        <div class="mb-5">
                            <div class="row g-2">
                                <div class="col-12 col-sm-6 col-xl-12">
                                    <div class="card sh-25 hover-img-scale-up hover-reveal">
                                        <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                             class="card-img h-100 scale"
                                             alt="card image"/>
                                        <div
                                            class="card-img-overlay d-flex flex-column justify-content-between reveal-content">
                                            <div class="row g-0">
                                                <div class="col-auto pe-3">
                                                    <i data-cs-icon="eye" class="text-white me-1" data-cs-size="15"></i>
                                                    <span class="align-middle text-white">153</span>
                                                </div>
                                                <div class="col-auto pe-3">
                                                    <i data-cs-icon="message" class="text-white me-1"
                                                       data-cs-size="15"></i>
                                                    <span class="align-middle text-white">5</span>
                                                </div>
                                                <div class="col-auto">
                                                    <i data-cs-icon="like" class="text-white me-1"
                                                       data-cs-size="15"></i>
                                                    <span class="align-middle text-white">29</span>
                                                </div>
                                            </div>
                                            <div class="row g-0">
                                                <div class="col pe-2">
                                                    <a href="/Pages/Portfolio/Detail" class="stretched-link">
                                                        <h5 class="heading text-white mb-1">Apple Cake Recipe</h5>
                                                    </a>
                                                    <div class="d-inline-block">
                                                        <div class="text-white">Kirby Peters</div>
                                                    </div>
                                                </div>
                                                <div class="col-auto me-auto">
                                                    <button class="btn btn-icon btn-icon-only btn-foreground mb-1"
                                                            type="button">
                                                        <i data-cs-icon="like"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-xl-12">
                                    <div class="card sh-25 hover-img-scale-up hover-reveal">
                                        <img src="{{ asset('/img/product/small/cornbread.jpg') }}"
                                             class="card-img h-100 scale"
                                             alt="card image"/>
                                        <div
                                            class="card-img-overlay d-flex flex-column justify-content-between reveal-content">
                                            <div class="row g-0">
                                                <div class="col-auto pe-3">
                                                    <i data-cs-icon="eye" class="text-white me-1" data-cs-size="15"></i>
                                                    <span class="align-middle text-white">52</span>
                                                </div>
                                                <div class="col-auto pe-3">
                                                    <i data-cs-icon="message" class="text-white me-1"
                                                       data-cs-size="15"></i>
                                                    <span class="align-middle text-white">19</span>
                                                </div>
                                                <div class="col-auto">
                                                    <i data-cs-icon="like" class="text-white me-1"
                                                       data-cs-size="15"></i>
                                                    <span class="align-middle text-white">6</span>
                                                </div>
                                            </div>
                                            <div class="row g-0">
                                                <div class="col pe-2">
                                                    <a href="/Pages/Portfolio/Detail" class="stretched-link">
                                                        <h5 class="heading text-white mb-1">Introduction to Bread
                                                            Making</h5>
                                                    </a>
                                                    <div class="d-inline-block">
                                                        <div class="text-white">Blaine Cottrell</div>
                                                    </div>
                                                </div>
                                                <div class="col-auto me-auto">
                                                    <button class="btn btn-icon btn-icon-only btn-foreground mb-1"
                                                            type="button">
                                                        <i data-cs-icon="like"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-xl-12">
                                    <div class="card sh-25 hover-img-scale-up hover-reveal">
                                        <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                             class="card-img h-100 scale"
                                             alt="card image"/>
                                        <div
                                            class="card-img-overlay d-flex flex-column justify-content-between reveal-content">
                                            <div class="row g-0">
                                                <div class="col-auto pe-3">
                                                    <i data-cs-icon="eye" class="text-white me-1" data-cs-size="15"></i>
                                                    <span class="align-middle text-white">239</span>
                                                </div>
                                                <div class="col-auto pe-3">
                                                    <i data-cs-icon="message" class="text-white me-1"
                                                       data-cs-size="15"></i>
                                                    <span class="align-middle text-white">40</span>
                                                </div>
                                                <div class="col-auto">
                                                    <i data-cs-icon="like" class="text-white me-1"
                                                       data-cs-size="15"></i>
                                                    <span class="align-middle text-white">15</span>
                                                </div>
                                            </div>
                                            <div class="row g-0">
                                                <div class="col pe-2">
                                                    <a href="/Pages/Portfolio/Detail" class="stretched-link">
                                                        <h5 class="heading text-white mb-1">10 Secrets Every Southern
                                                            Baker Knows</h5>
                                                    </a>
                                                    <div class="d-inline-block">
                                                        <div class="text-white">Kathryn Mengel</div>
                                                    </div>
                                                </div>
                                                <div class="col-auto me-auto">
                                                    <button class="btn btn-icon btn-icon-only btn-foreground mb-1"
                                                            type="button">
                                                        <i data-cs-icon="like"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-xl-12">
                                    <div class="card sh-25 hover-img-scale-up hover-reveal">
                                        <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                             class="card-img h-100 scale"
                                             alt="card image"/>
                                        <div
                                            class="card-img-overlay d-flex flex-column justify-content-between reveal-content">
                                            <div class="row g-0">
                                                <div class="col-auto pe-3">
                                                    <i data-cs-icon="eye" class="text-white me-1" data-cs-size="15"></i>
                                                    <span class="align-middle text-white">185</span>
                                                </div>
                                                <div class="col-auto pe-3">
                                                    <i data-cs-icon="message" class="text-white me-1"
                                                       data-cs-size="15"></i>
                                                    <span class="align-middle text-white">26</span>
                                                </div>
                                                <div class="col-auto">
                                                    <i data-cs-icon="like" class="text-white me-1"
                                                       data-cs-size="15"></i>
                                                    <span class="align-middle text-white">12</span>
                                                </div>
                                            </div>
                                            <div class="row g-0">
                                                <div class="col pe-2">
                                                    <a href="/Pages/Portfolio/Detail" class="stretched-link">
                                                        <h5 class="heading text-white mb-1">Recipes for Sweet and Healty
                                                            Treats</h5>
                                                    </a>
                                                    <div class="d-inline-block">
                                                        <div class="text-white">Esperanza Lodge</div>
                                                    </div>
                                                </div>
                                                <div class="col-auto me-auto">
                                                    <button class="btn btn-icon btn-icon-only btn-foreground mb-1"
                                                            type="button">
                                                        <i data-cs-icon="like"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Smilar Works End -->
                </div>
            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Blog Detail';
    $heading = 'Carrot Cake Gingerbread';
    $description = 'Blog Detail';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Blog"=>"Blog"]
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
    <script src="{{ asset('/js/pages/blog.detail.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title Start -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-container">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $heading }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>
        <!-- Title End -->

        <div class="row">
            <div class="col-12 col-xl-8 col-xxl-9 mb-5">
                <div class="card mb-5">
                    <!-- Content Start -->
                    <div class="card-body p-0">
                        <div class="glide glide-gallery" id="glideBlogDetail">
                            <div class="glide glide-large">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides gallery-glide-custom">
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/bauernbrot.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/bauernbrot.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/guernsey-gache.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/guernsey-gache.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/barmbrack.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/barmbrack.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                />
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="{{ asset('/img/product/large/baguette.jpg') }}">
                                                <img
                                                    alt="detail"
                                                    src="{{ asset('/img/product/large/baguette.jpg') }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="glide glide-thumb mb-3">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <li class="glide__slide p-0">
                                            <img alt="thumb"
                                                 src="{{ asset('/img/product/thumb/pain-de-campagne-thumb.jpg') }}"
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
                                            <img alt="thumb" src="{{ asset('/img/product/thumb/barmbrack-thumb.jpg') }}"
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
                        </div>
                        <div class="card-body pt-0">
                            <h4 class="mb-3">Carrot Cake Gingerbread</h4>
                            <div>
                                <p>
                                    Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin liquorice
                                    chupa chups soufflé bonbon. Liquorice gummi bears
                                    cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream gummies
                                    dessert muffin chocolate jelly. Danish brownie
                                    chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop cheesecake
                                    gummi bears cheesecake. Cake jujubes soufflé.
                                </p>
                                <p>
                                    Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing
                                    macaroon bear claw jelly toffee. Chocolate cake
                                    marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie
                                    macaroon sesame snaps cotton candy jelly
                                    <u>pudding lollipop caramels</u>
                                    marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread chocolate cake
                                    tootsie roll. Oat cake jujubes jelly-o jelly chupa
                                    chups lollipop jelly wafer soufflé.
                                </p>
                                <h6 class="mb-3 mt-5 text-alternate">Sesame Snaps Lollipop Macaroon</h6>
                                <p>
                                    Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame snaps
                                    lollipop macaroon.
                                    <a href="#">Icing tiramisu</a>
                                    oat cake chocolate cake marzipan pudding danish gummies. Dragée liquorice jelly
                                    beans jelly jelly sesame snaps brownie. Cheesecake
                                    chocolate cake sweet roll cupcake dragée croissant muffin. Lemon drops cupcake
                                    croissant liquorice donut cookie cake. Gingerbread
                                    biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar gummi
                                    bears dessert lemon drops gingerbread croissant.
                                    Donut candy jelly.
                                </p>
                                <ul class="list-unstyled">
                                    <li>Croissant</li>
                                    <li>Sesame snaps</li>
                                    <li>Ice cream</li>
                                    <li>Candy canes</li>
                                    <li>Lemon drops</li>
                                </ul>
                                <h6 class="mb-3 mt-5 text-alternate">Muffin Sweet Roll Apple Pie</h6>
                                <p>
                                    Carrot cake gummi bears wafer sesame snaps soufflé cheesecake cheesecake cake. Sweet
                                    roll apple pie tiramisu bonbon sugar plum muffin
                                    sesame snaps chocolate. Lollipop sweet roll gingerbread halvah sesame snaps powder.
                                    Wafer halvah chocolate soufflé icing. Cotton candy
                                    danish lollipop jelly-o candy caramels.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Content End -->

                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <!-- Comments and Likes Start -->
                            <div class="col-6 text-muted">
                                <div class="row g-0">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">421</span>
                                    </div>
                                    <div class="col">
                                        <i data-cs-icon="message" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">4</span>
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
                </div>

                <!-- About the Author Start -->
                <h2 class="small-title">About the Author</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-auto">
                                <div class="sw-5 me-3">
                                    <img src="{{ asset('/img/profile/profile-1.jpg') }}" class="img-fluid rounded-xl"
                                         alt="thumb"/>
                                </div>
                            </div>
                            <div class="col">
                                <a href="#">Olli Hawkins</a>
                                <div class="text-muted text-small mb-2">Development Lead</div>
                                <div class="text-medium text-alternate mb-1 clamp-line" data-line="2">
                                    Cupcake chocolate cake jelly beans lemon drops danish bear claw carrot cake soufflé.
                                    Marshmallow jujubes tiramisu apple pie carrot cake
                                    danish candy. Croissant croissant chocolate bar. Jelly macaroon apple pie croissant
                                    pastry cheesecake. Marshmallow oat cake lemon drops
                                    chocolate bonbon powder lemon drops chocolate. Danish tootsie roll dessert soufflé.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About the Author End -->

                <!-- You May Also Like Start -->
                <h2 class="small-title">You May Also Like</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" class="card-img-top sh-25"
                                 alt="card image"/>
                            <div class="card-body pb-0">
                                <a href="/Pages/Blog/Detail"
                                   class="h5 heading body-link stretched-link sh-8 sh-md-6 d-block">
                                    <div class="mb-0 lh-1-5 clamp-line" data-line="2">Basic Introduction to Bread
                                        Making
                                    </div>
                                </a>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="row g-0">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">241</span>
                                    </div>
                                    <div class="col">
                                        <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">25 Min</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 sh-45">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/cornbread.jpg') }}" class="card-img-top sh-25"
                                 alt="card image"/>
                            <div class="card-body pb-0">
                                <a href="/Pages/Blog/Detail"
                                   class="h5 heading body-link stretched-link sh-8 sh-md-6 d-block">
                                    <div class="mb-0 lh-1-5 clamp-line" data-line="2">14 Facts About Sugar Products
                                    </div>
                                </a>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="row g-0">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">115</span>
                                    </div>
                                    <div class="col">
                                        <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">15 Min</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 sh-45">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}" class="card-img-top sh-25"
                                 alt="card image"/>
                            <div class="card-body pb-0">
                                <a href="/Pages/Blog/Detail"
                                   class="h5 heading body-link stretched-link sh-8 sh-md-6 d-block">
                                    <div class="mb-0 lh-1-5 clamp-line" data-line="2">10 Secrets Every Southern Baker
                                        Knows
                                    </div>
                                </a>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="row g-0">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">54</span>
                                    </div>
                                    <div class="col">
                                        <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">30 Min</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- You May Also Like End -->
            </div>

            <!-- Right Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <div class="mb-5">
                    <div class="row mb-n2">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="card sh-11 sh-sm-14 mb-2">
                                <div class="row g-0 h-100">
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/product/horizontal/horizontal-1.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                    </div>
                                    <div class="col position-static">
                                        <div
                                            class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <a href="/Pages/Blog/Detail" class="stretched-link body-link">
                                                    <div class="clamp-line" data-line="2">A Complete Guide to Mix Dough
                                                        for the Molds
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="card sh-11 sh-sm-14 mb-2">
                                <div class="row g-0 h-100">
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/product/horizontal/horizontal-2.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                    </div>
                                    <div class="col position-static">
                                        <div
                                            class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <a href="/Pages/Blog/Detail" class="stretched-link body-link">
                                                    <div class="clamp-line" data-line="2">Apple Cake Recipe for
                                                        Starters
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="card sh-11 sh-sm-14 mb-2">
                                <div class="row g-0 h-100">
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/product/horizontal/horizontal-3.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                    </div>
                                    <div class="col position-static">
                                        <div
                                            class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <a href="/Pages/Blog/Detail" class="stretched-link body-link">
                                                    <div class="clamp-line" data-line="2">Basic Introduction to Bread
                                                        Making
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="card sh-11 sh-sm-14 mb-2">
                                <div class="row g-0 h-100">
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/product/horizontal/horizontal-4.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                    </div>
                                    <div class="col position-static">
                                        <div
                                            class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <a href="/Pages/Blog/Detail" class="stretched-link body-link">
                                                    <div class="clamp-line" data-line="2">Easy and Efficient Tricks for
                                                        Baking Crispy Breads
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-12 mb-5">
                        <div class="card w-100 sh-25 hover-img-scale-up">
                            <img src="{{ asset('/img/banner/cta-square-1.jpg') }}" class="card-img h-100 scale"
                                 alt="card image"/>
                            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                    <div class="cta-2 mb-5 text-black w-75">Introduction to Bread Making</div>
                                    <a href="/Pages/Blog/List"
                                       class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                        <i data-cs-icon="chevron-right"></i>
                                        <span>View</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-12 mb-5">
                        <div class="card w-100 sh-25 hover-img-scale-up">
                            <img src="{{ asset('/img/banner/cta-square-2.jpg') }}" class="card-img h-100 scale"
                                 alt="card image"/>
                            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                    <div class="cta-2 mb-5 text-black w-75">Apple Cake Recipe for Starters</div>
                                    <a href="/Pages/Blog/List"
                                       class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                        <i data-cs-icon="chevron-right"></i>
                                        <span>View</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection

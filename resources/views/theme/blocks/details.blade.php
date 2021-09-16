@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}',"scrollspy"=>"true"];
    $title = 'Details';
    $description = 'Detail content that made out of images, text, carousel and so on. They might be combined with other blocks to create pages for different layouts.';
    $breadcrumbs = ["/"=>"Home","/Blocks"=>"Blocks"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/glide.core.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/baguetteBox.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/plyr.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/glide.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/plyr.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/glide.custom.js') }}"></script>
    <script src="{{ asset('/js/pages/blocks.details.js') }}"></script>
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
                            <a href="{{ asset('/img/product/large/michetta.jpg') }}" class="lightbox">
                                <img src="{{ asset('/img/product/large/michetta.jpg') }}" class="card-img-top sh-50"
                                     alt="card image"/>
                            </a>
                            <div class="card-body">
                                <h4 class="mb-3">Carrot Cake Gingerbread</h4>
                                <div>
                                    <p>
                                        Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin
                                        liquorice chupa chups soufflé bonbon. Liquorice gummi bears
                                        cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream
                                        gummies dessert muffin chocolate jelly. Danish brownie
                                        chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop
                                        cheesecake gummi bears cheesecake. Cake jujubes soufflé.
                                    </p>
                                    <p>
                                        Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing
                                        macaroon bear claw jelly toffee. Chocolate cake
                                        marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie
                                        macaroon sesame snaps cotton candy jelly
                                        <u>pudding lollipop caramels</u>
                                        marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread chocolate
                                        cake tootsie roll. Oat cake jujubes jelly-o jelly
                                        chupa chups lollipop jelly wafer soufflé.
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
                                        biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar
                                        gummi bears dessert lemon drops gingerbread croissant.
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
                                        Carrot cake gummi bears wafer sesame snaps soufflé cheesecake cheesecake cake.
                                        Sweet roll apple pie tiramisu bonbon sugar plum muffin
                                        sesame snaps chocolate. Lollipop sweet roll gingerbread halvah sesame snaps
                                        powder. Wafer halvah chocolate soufflé icing. Cotton candy
                                        danish lollipop jelly-o candy caramels.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="sw-5 d-inline-block position-relative me-3">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="img-fluid rounded-xl" alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <a href="#" class="lh-1 mb-1 d-inline-block">Olli Hawkins</a>
                                                <div class="text-muted text-small">Development Lead</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row g-0 justify-content-end">
                                            <div class="col-auto pe-3">
                                                <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                                <span class="align-middle">221</span>
                                            </div>
                                            <div class="col col-auto">
                                                <i data-cs-icon="message" class="text-primary me-1"
                                                   data-cs-size="15"></i>
                                                <span class="align-middle">17</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Basic End -->

                    <!-- Video Start -->
                    <section class="scroll-section" id="video">
                        <h2 class="small-title">Video</h2>
                        <div class="card mb-5">
                            <div class="card-img-top">
                                <video id="videoPlayer" class="player"
                                       poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                            type="video/mp4"/>
                                </video>
                            </div>

                            <div class="card-body">
                                <h4 class="mb-3">Carrot Cake Gingerbread</h4>
                                <div>
                                    <p>
                                        Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin
                                        liquorice chupa chups soufflé bonbon. Liquorice gummi bears
                                        cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream
                                        gummies dessert muffin chocolate jelly. Danish brownie
                                        chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop
                                        cheesecake gummi bears cheesecake. Cake jujubes soufflé.
                                    </p>
                                    <p>
                                        Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing
                                        macaroon bear claw jelly toffee. Chocolate cake
                                        marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie
                                        macaroon sesame snaps cotton candy jelly
                                        <u>pudding lollipop caramels</u>
                                        marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread chocolate
                                        cake tootsie roll. Oat cake jujubes jelly-o jelly
                                        chupa chups lollipop jelly wafer soufflé.
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
                                        biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar
                                        gummi bears dessert lemon drops gingerbread croissant.
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
                                        Carrot cake gummi bears wafer sesame snaps soufflé cheesecake cheesecake cake.
                                        Sweet roll apple pie tiramisu bonbon sugar plum muffin
                                        sesame snaps chocolate. Lollipop sweet roll gingerbread halvah sesame snaps
                                        powder. Wafer halvah chocolate soufflé icing. Cotton candy
                                        danish lollipop jelly-o candy caramels.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="sw-5 d-inline-block position-relative me-3">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="img-fluid rounded-xl" alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <a href="#" class="lh-1 mb-1 d-inline-block">Olli Hawkins</a>
                                                <div class="text-muted text-small">Development Lead</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row g-0 justify-content-end">
                                            <div class="col-auto pe-3">
                                                <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                                <span class="align-middle">521</span>
                                            </div>
                                            <div class="col col-auto">
                                                <i data-cs-icon="message" class="text-primary me-1"
                                                   data-cs-size="15"></i>
                                                <span class="align-middle">29</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Video End -->

                    <!-- Carousel Start -->
                    <section class="scroll-section" id="carousel">
                        <h2 class="small-title">Carousel</h2>
                        <div class="card mb-5">
                            <div class="card-body p-0">
                                <div class="glide glide-gallery" id="glideCarouselGallery">
                                    <div class="glide glide-large">
                                        <div class="glide__track" data-glide-el="track">
                                            <ul class="glide__slides gallery-glide-custom">
                                                <li class="glide__slide p-0">
                                                    <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}">
                                                        <img alt="detail"
                                                             src="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                                             class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"/>
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}">
                                                        <img alt="detail"
                                                             src="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                                             class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"/>
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="{{ asset('/img/product/large/bauernbrot.jpg') }}">
                                                        <img alt="detail"
                                                             src="{{ asset('/img/product/large/bauernbrot.jpg') }}"
                                                             class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"/>
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="{{ asset('/img/product/large/guernsey-gache.jpg') }}">
                                                        <img alt="detail"
                                                             src="{{ asset('/img/product/large/guernsey-gache.jpg') }}"
                                                             class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"/>
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="{{ asset('/img/product/large/barmbrack.jpg') }}">
                                                        <img alt="detail"
                                                             src="{{ asset('/img/product/large/barmbrack.jpg') }}"
                                                             class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"/>
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="{{ asset('/img/product/large/baguette.jpg') }}">
                                                        <img alt="detail"
                                                             src="{{ asset('/img/product/large/baguette.jpg') }}"
                                                             class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"/>
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
                                                    <img alt="thumb"
                                                         src="{{ asset('/img/product/thumb/barmbrack-thumb.jpg') }}"
                                                         class="responsive rounded-md img-fluid"/>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <img alt="thumb"
                                                         src="{{ asset('/img/product/thumb/baguette-thumb.jpg') }}"
                                                         class="responsive rounded-md img-fluid"/>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="glide__arrows" data-glide-el="controls">
                                            <button
                                                class="btn btn-icon btn-icon-only btn-foreground hover-outline left-arrow"
                                                data-glide-dir="<">
                                                <i data-cs-icon="chevron-left"></i>
                                            </button>
                                            <button
                                                class="btn btn-icon btn-icon-only btn-foreground hover-outline right-arrow"
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
                                            Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin
                                            liquorice chupa chups soufflé bonbon. Liquorice gummi bears
                                            cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream
                                            gummies dessert muffin chocolate jelly. Danish brownie
                                            chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop
                                            cheesecake gummi bears cheesecake. Cake jujubes soufflé.
                                        </p>
                                        <p>
                                            Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread
                                            icing macaroon bear claw jelly toffee. Chocolate cake
                                            marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple
                                            pie macaroon sesame snaps cotton candy jelly
                                            <u>pudding lollipop caramels</u>
                                            marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread
                                            chocolate cake tootsie roll. Oat cake jujubes jelly-o jelly
                                            chupa chups lollipop jelly wafer soufflé.
                                        </p>
                                        <h6 class="mb-3 mt-5 text-alternate">Sesame Snaps Lollipop Macaroon</h6>
                                        <p>
                                            Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame
                                            snaps lollipop macaroon.
                                            <a href="#">Icing tiramisu</a>
                                            oat cake chocolate cake marzipan pudding danish gummies. Dragée liquorice
                                            jelly beans jelly jelly sesame snaps brownie. Cheesecake
                                            chocolate cake sweet roll cupcake dragée croissant muffin. Lemon drops
                                            cupcake croissant liquorice donut cookie cake. Gingerbread
                                            biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar
                                            gummi bears dessert lemon drops gingerbread croissant.
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
                                            Carrot cake gummi bears wafer sesame snaps soufflé cheesecake cheesecake
                                            cake. Sweet roll apple pie tiramisu bonbon sugar plum
                                            muffin sesame snaps chocolate. Lollipop sweet roll gingerbread halvah sesame
                                            snaps powder. Wafer halvah chocolate soufflé icing.
                                            Cotton candy danish lollipop jelly-o candy caramels.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="sw-5 d-inline-block position-relative me-3">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="img-fluid rounded-xl" alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <a href="#" class="lh-1 mb-1 d-inline-block">Olli Hawkins</a>
                                                <div class="text-muted text-small">Development Lead</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row g-0 justify-content-end">
                                            <div class="col-auto pe-3">
                                                <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                                <span class="align-middle">169</span>
                                            </div>
                                            <div class="col col-auto">
                                                <i data-cs-icon="message" class="text-primary me-1"
                                                   data-cs-size="15"></i>
                                                <span class="align-middle">4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Carousel End -->

                    <!-- Vertical Content Start -->
                    <section class="scroll-section" id="verticalContent">
                        <h2 class="small-title">Vertical Content</h2>
                        <div class="card mb-5">
                            <div class="">
                                <div class="row g-0 align-items-center">
                                    <div class="col-12 col-md-4">
                                        <img src="{{ asset('/img/product/vertical/vertical-4.jpg') }}"
                                             class="card-img card-img-horizontal-md sh-35 sh-md-80 mb-4 mb-md-0"
                                             alt="vertical content image"/>
                                    </div>
                                    <div class="col-12 col-md-8 ps-md-3 ps-0">
                                        <div class="card-body">
                                            <h4 class="mb-4">Carrot Cake Gingerbread</h4>
                                            <h6 class="mb-3 mt-5 text-alternate">Liquorice Chupa Chups</h6>
                                            <p>
                                                Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin
                                                liquorice chupa chups soufflé bonbon. Liquorice gummi
                                                bears cake donut chocolate lollipop gummi bears. Cotton candy cupcake
                                                ice cream gummies dessert muffin chocolate jelly. Danish
                                                brownie chocolate bar lollipop cookie tootsie roll candy canes. Jujubes
                                                lollipop cheesecake gummi bears cheesecake. Cake jujubes
                                                soufflé.
                                            </p>
                                            <p>
                                                Cake chocolate bar biscuit sweet roll liquorice jelly jujubes.
                                                Gingerbread icing macaroon bear claw jelly toffee. Chocolate cake
                                                marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet.
                                                Apple pie macaroon sesame snaps cotton candy jelly
                                                <u>pudding lollipop caramels</u>
                                                marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread
                                                chocolate cake tootsie roll.
                                            </p>
                                            <h6 class="mb-3 mt-5 text-alternate">Sesame Snaps Lollipop Macaroon</h6>
                                            <p>
                                                Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut.
                                                Sesame snaps lollipop macaroon.
                                                <a href="#">Icing tiramisu</a>
                                                oat cake chocolate cake marzipan pudding danish gummies. Dragée
                                                liquorice jelly beans jelly jelly sesame snaps brownie. Cheesecake
                                                chocolate cake sweet roll cupcake dragée croissant muffin. Lemon drops
                                                cupcake croissant liquorice donut cookie cake. Gingerbread
                                                biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate
                                                bar gummi bears dessert lemon drops gingerbread
                                                croissant. Donut candy jelly.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Vertical Content End -->

                    <!-- Images Start -->
                    <section class="scroll-section" id="images">
                        <h2 class="small-title">Images</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h4 class="mb-3">Carrot Cake Gingerbread</h4>
                                <div>
                                    <p>
                                        Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin
                                        liquorice chupa chups soufflé bonbon. Liquorice gummi bears
                                        cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream
                                        gummies dessert muffin chocolate jelly. Danish brownie
                                        chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop
                                        cheesecake gummi bears cheesecake. Cake jujubes soufflé.
                                    </p>
                                    <p>
                                        Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing
                                        macaroon bear claw jelly toffee. Chocolate cake
                                        marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie
                                        macaroon sesame snaps cotton candy jelly
                                        <u>pudding lollipop caramels</u>
                                        marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread chocolate
                                        cake tootsie roll. Oat cake jujubes jelly-o jelly
                                        chupa chups lollipop jelly wafer soufflé.
                                    </p>
                                    <div class="row gx-2 sh-35 gallery mb-4">
                                        <div class="col h-100">
                                            <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                               class="w-100 h-100 rounded-md bg-cover-center d-block"
                                               style="background-image: url({{ asset('/img/product/small/pullman-loaf.jpg') }})"></a>
                                        </div>
                                        <div class="col d-flex flex-column justify-content-stretch h-100">
                                            <div class="d-flex mb-2 flex-grow-1">
                                                <a href="{{ asset('/img/product/large/buccellato-di-lucca.jpg') }}"
                                                   class="w-100 h-100 rounded-md bg-cover-center d-block"
                                                   style="background-image: url({{ asset('/img/product/small/buccellato-di-lucca.jpg') }})"></a>
                                            </div>
                                            <div class="d-flex flex-grow-1">
                                                <a href="{{ asset('/img/product/large/michetta.jpg') }}"
                                                   class="w-100 h-100 rounded-md bg-cover-center d-block"
                                                   style="background-image: url({{ asset('/img/product/small/michetta.jpg') }})"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mb-3 mt-5 text-alternate">Sesame Snaps Lollipop Macaroon</h6>
                                    <p>
                                        Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame snaps
                                        lollipop macaroon.
                                        <a href="#">Icing tiramisu</a>
                                        oat cake chocolate cake marzipan pudding danish gummies. Dragée liquorice jelly
                                        beans jelly jelly sesame snaps brownie. Cheesecake
                                        chocolate cake sweet roll cupcake dragée croissant muffin. Lemon drops cupcake
                                        croissant liquorice donut cookie cake. Gingerbread
                                        biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar
                                        gummi bears dessert lemon drops gingerbread croissant.
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
                                        Carrot cake gummi bears wafer sesame snaps soufflé cheesecake cheesecake cake.
                                        Sweet roll apple pie tiramisu bonbon sugar plum muffin
                                        sesame snaps chocolate. Lollipop sweet roll gingerbread halvah sesame snaps
                                        powder. Wafer halvah chocolate soufflé icing. Cotton candy
                                        danish lollipop jelly-o candy caramels.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="sw-5 d-inline-block position-relative me-3">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="img-fluid rounded-xl" alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <a href="#" class="lh-1 mb-1 d-inline-block">Olli Hawkins</a>
                                                <div class="text-muted text-small">Development Lead</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row g-0 justify-content-end">
                                            <div class="col-auto pe-3">
                                                <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                                <span class="align-middle">368</span>
                                            </div>
                                            <div class="col col-auto">
                                                <i data-cs-icon="message" class="text-primary me-1"
                                                   data-cs-size="15"></i>
                                                <span class="align-middle">38</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Images End -->

                    <!-- Text Only Start -->
                    <section class="scroll-section" id="textOnly">
                        <h2 class="small-title">Text Only</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h4 class="mb-3">Carrot Cake Gingerbread</h4>
                                <div>
                                    <p>
                                        Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin
                                        liquorice chupa chups soufflé bonbon. Liquorice gummi bears
                                        cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream
                                        gummies dessert muffin chocolate jelly. Danish brownie
                                        chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop
                                        cheesecake gummi bears cheesecake. Cake jujubes soufflé.
                                    </p>
                                    <p>
                                        Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing
                                        macaroon bear claw jelly toffee. Chocolate cake
                                        marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie
                                        macaroon sesame snaps cotton candy jelly
                                        <u>pudding lollipop caramels</u>
                                        marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread chocolate
                                        cake tootsie roll. Oat cake jujubes jelly-o jelly
                                        chupa chups lollipop jelly wafer soufflé.
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
                                        biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar
                                        gummi bears dessert lemon drops gingerbread croissant.
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
                                        Carrot cake gummi bears wafer sesame snaps soufflé cheesecake cheesecake cake.
                                        Sweet roll apple pie tiramisu bonbon sugar plum muffin
                                        sesame snaps chocolate. Lollipop sweet roll gingerbread halvah sesame snaps
                                        powder. Wafer halvah chocolate soufflé icing. Cotton candy
                                        danish lollipop jelly-o candy caramels.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="sw-5 d-inline-block position-relative me-3">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="img-fluid rounded-xl" alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <a href="#" class="lh-1 mb-1 d-inline-block">Olli Hawkins</a>
                                                <div class="text-muted text-small">Development Lead</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row g-0 justify-content-end">
                                            <div class="col-auto pe-3">
                                                <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                                <span class="align-middle">229</span>
                                            </div>
                                            <div class="col col-auto">
                                                <i data-cs-icon="message" class="text-primary me-1"
                                                   data-cs-size="15"></i>
                                                <span class="align-middle">41</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Text Only End -->

                    <!-- Product Start -->
                    <section class="scroll-section" id="product">
                        <h2 class="small-title">Product</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div class="glide glide-gallery" id="glideProductGallery">
                                            <!-- Large Images Start -->
                                            <div class="glide glide-large">
                                                <div class="glide__track" data-glide-el="track">
                                                    <ul class="glide__slides gallery-glide-custom">
                                                        <li class="glide__slide p-0">
                                                            <a href="{{ asset('/img/product/large/barmbrack.jpg') }}">
                                                                <img alt="detail"
                                                                     src="{{ asset('/img/product/large/barmbrack.jpg') }}"
                                                                     class="responsive border-0 rounded-md img-fluid mb-3 sh-24 sh-md-35 sh-xl-50 w-100"/>
                                                            </a>
                                                        </li>
                                                        <li class="glide__slide p-0">
                                                            <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}">
                                                                <img alt="detail"
                                                                     src="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                                                     class="responsive border-0 rounded-md img-fluid mb-3 sh-24 sh-md-35 sh-xl-50 w-100"/>
                                                            </a>
                                                        </li>
                                                        <li class="glide__slide p-0">
                                                            <a href="{{ asset('/img/product/large/bauernbrot.jpg') }}">
                                                                <img alt="detail"
                                                                     src="{{ asset('/img/product/large/bauernbrot.jpg') }}"
                                                                     class="responsive border-0 rounded-md img-fluid mb-3 sh-24 sh-md-35 sh-xl-50 w-100"/>
                                                            </a>
                                                        </li>
                                                        <li class="glide__slide p-0">
                                                            <a href="{{ asset('/img/product/large/guernsey-gache.jpg') }}">
                                                                <img alt="detail"
                                                                     src="{{ asset('/img/product/large/guernsey-gache.jpg') }}"
                                                                     class="responsive border-0 rounded-md img-fluid mb-3 sh-24 sh-md-35 sh-xl-50 w-100"/>
                                                            </a>
                                                        </li>
                                                        <li class="glide__slide p-0">
                                                            <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}">
                                                                <img alt="detail"
                                                                     src="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                                                     class="responsive border-0 rounded-md img-fluid mb-3 sh-24 sh-md-35 sh-xl-50 w-100"/>
                                                            </a>
                                                        </li>
                                                        <li class="glide__slide p-0">
                                                            <a href="{{ asset('/img/product/large/baguette.jpg') }}">
                                                                <img alt="detail"
                                                                     src="{{ asset('/img/product/large/baguette.jpg') }}"
                                                                     class="responsive border-0 rounded-md img-fluid mb-3 sh-24 sh-md-35 sh-xl-50 w-100"/>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Large Images End -->

                                            <!-- Thumbs Start -->
                                            <div class="glide glide-thumb">
                                                <div class="glide__track" data-glide-el="track">
                                                    <ul class="glide__slides">
                                                        <li class="glide__slide p-0">
                                                            <img alt="thumb"
                                                                 src="{{ asset('/img/product/thumb/barmbrack-thumb.jpg') }}"
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
                                                            <img alt="thumb"
                                                                 src="{{ asset('/img/product/thumb/baguette-thumb.jpg') }}"
                                                                 class="responsive rounded-md img-fluid"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="glide__arrows" data-glide-el="controls">
                                                    <button
                                                        class="btn btn-icon btn-icon-only btn-foreground hover-outline left-arrow"
                                                        data-glide-dir="<">
                                                        <i data-cs-icon="chevron-left"></i>
                                                    </button>
                                                    <button
                                                        class="btn btn-icon btn-icon-only btn-foreground hover-outline right-arrow"
                                                        data-glide-dir=">">
                                                        <i data-cs-icon="chevron-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Thumbs End -->
                                        </div>
                                    </div>

                                    <div class="col-12 col-xl-6">
                                        <a class="mb-1 d-inline-block text-small" href="#">Whole Wheat</a>
                                        <h4 class="mb-4">Carrot Cake Gingerbread</h4>
                                        <div class="h3">$ 25.20</div>
                                        <div>
                                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                                <select class="rating" name="rating" autocomplete="off"
                                                        data-readonly="true" data-initial-rating="5">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="text-muted d-inline-block text-small align-text-top">(25
                                                Reviews)
                                            </div>
                                        </div>
                                        <p class="mt-2 mb-4">
                                            Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin
                                            liquorice chupa chups soufflé bonbon. Liquorice gummi bears
                                            cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream
                                            gummies dessert muffin chocolate jelly.
                                        </p>
                                        <div class="row g-3 mb-4">
                                            <div class="mb-3 col-12 col-sm-auto me-1">
                                                <label class="fw-bold form-label">Color</label>
                                                <div class="pt-1">
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" class="form-check-input" name="inlineRadio"
                                                               id="inlineRadio1"/>
                                                        <label class="form-check-label" for="inlineRadio1">Red</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" class="form-check-input" name="inlineRadio"
                                                               id="inlineRadio2"/>
                                                        <label class="form-check-label" for="inlineRadio2">Blue</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-auto me-1">
                                                <label class="fw-bold form-label">Size</label>
                                                <select class="sw-10 select-single-no-search">
                                                    <option selected>Pick</option>
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-auto">
                                                <label class="fw-bold form-label">Quantity</label>
                                                <select class="sw-10 select-single-no-search">
                                                    <option selected>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-icon btn-icon-start btn-primary mb-1" type="button">
                                                <i data-cs-icon="check"></i>
                                                <span>Purchase</span>
                                            </button>
                                            <button class="btn btn-icon btn-icon-start btn-primary mb-1" type="button">
                                                <i data-cs-icon="plus"></i>
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Product End -->
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
                        <a class="nav-link" href="#video">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Video</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#carousel">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Carousel</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#verticalContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Vertical Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#images">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#textOnly">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Text Only</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#product">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Product</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

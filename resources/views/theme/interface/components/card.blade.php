@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Card';
    $description = 'Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options. We have extended them to create cards for icons, videos, products and so on.';
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
    <script src="{{ asset('/js/vendor/masonry.pkgd.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/components/cards.js') }}"></script>
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
                    <!-- Images Start -->
                    <section class="scroll-section" id="images">
                        <h2 class="small-title">Images</h2>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 col-12">
                                <div class="card mb-5">
                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}" class="card-img-top"
                                         alt="card image"/>
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <p class="card-text">
                                            Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie
                                            roll.Brownie ice cream marshmallow topping.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 col-12">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <p class="card-text">
                                            Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie
                                            roll.Brownie ice cream marshmallow topping.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                         class="card-img-bottom" alt="card image"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-8 col-lg-6 col-xl-4 col-xxl-3 col-12">
                                <div class="card mb-5 bg-dark">
                                    <img src="{{ asset('/img/product/small/cornbread.jpg') }}"
                                         class="card-img" alt="card image"/>
                                    <div class="card-img-overlay d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="card-title text-white">Card Title</h5>
                                            <p class="card-text text-white">
                                                Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie
                                                roll.Brownie ice cream marshmallow topping.
                                            </p>
                                        </div>
                                        <p class="card-text text-white">Last updated 3 mins ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Images End -->

                    <!-- Content Types Start -->
                    <section class="scroll-section" id="contentTypes">
                        <h2 class="small-title">Content Types</h2>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Card Title</h5>
                                        <h6 class="card-subtitle mb-3 text-alternate">Card Subtitle</h6>
                                        <p class="card-text">
                                            Icing liquorice oat cake caramels. Sugar plum gummi bears jujubes cookie
                                            jelly-o tootsie roll chocolate bar. Jujubes candy jelly-o
                                            topping lemon drops.
                                        </p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card mb-5">
                                    <div class="card-body">This is some text within a card body.</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Content Types End -->

                    <!-- Horizontal Content Start -->
                    <section class="scroll-section" id="horizontalContent">
                        <h2 class="small-title">Horizontal Content</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="row g-0 h-auto sh-md-25">
                                        <div class="col-sm-4 h-100">
                                            <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                 class="card-img card-img-horizontal-sm" alt="card image"/>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="card-body d-flex flex-column h-100">
                                                <h5 class="card-title d-flex">Card Title</h5>
                                                <p class="card-text mb-1 d-flex">
                                                    Icing liquorice oat cake caramels. Sugar plum gummi bears jujubes
                                                    tootsie roll chocolate bar. Jujubes candy jelly-o topping.
                                                </p>
                                                <p class="card-text mt-auto d-flex">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="row g-0 h-auto sh-md-19">
                                        <div class="col-sm-4 h-100">
                                            <img src="{{ asset('/img/product/small/guernsey-gache.jpg') }}"
                                                 class="card-img card-img-horizontal-sm" alt="card image"/>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Card Title</h5>
                                                <p class="card-text">Sugar plum gummi bears jujubes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="row g-0 sh-13">
                                        <div class="col-2 col-sm-3 h-100">
                                            <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" alt="user"
                                                 class="card-img card-img-horizontal"/>
                                        </div>
                                        <div class="col-10 col-sm-9">
                                            <div class="card-body d-flex flex-column">
                                                <p class="heading mb-1">Cream Toffee</p>
                                                <p class="text-muted m-0 text-small">Rua Olegário Ferreira 1081, Rio de
                                                    Janeiro Brazil</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="row g-0 sh-10">
                                        <div class="col-3 col-sm-3 h-100">
                                            <img src="{{ asset('/img/product/small/hamburger-bun.jpg') }}" alt="user"
                                                 class="card-img card-img-horizontal"/>
                                        </div>
                                        <div class="col-9 col-sm-9">
                                            <div class="card-body d-flex flex-column">
                                                <p class="heading mb-0">Jujubes Cookie</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="row g-0 sh-10">
                                <div class="col-2 col-lg-1 d-flex align-items-center h-100">
                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}" alt="card image"
                                         class="card-img card-img-horizontal"/>
                                </div>
                                <div class="col-10 col-lg-11 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <div class="col-12 col-lg-5 d-flex align-items-center">
                                            <p class="mb-0 ps-card">Sugar Plum Gummi</p>
                                        </div>
                                        <div class="col-lg-3 col-5 col-sm-5 d-flex align-items-center mb-1 mb-md-0">
                                            <p class="mb-0 text-alternate ps-card">08.08.2021</p>
                                        </div>
                                        <div class="col-lg-2 col-sm-4 col-3 d-flex align-items-center mb-0">
                                            <span class="badge bg-tertiary text-uppercase">New</span>
                                        </div>
                                        <div
                                            class="col-lg-2 col-sm-3 col-4 d-flex align-items-center justify-content-end pe-4">
                                            <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary"
                                                    type="button">
                                                <i data-cs-icon="check"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                    type="button">
                                                <i data-cs-icon="close"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="row g-0 sh-lg-10 h-auto p-card pt-lg-0 pb-lg-0">
                                <div class="col-lg-4 d-flex align-items-center">
                                    <p class="mb-0 pe-0 pr-lg-4">Sugar Plum Gummi Olegário Jujubes Cookie</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center">
                                    <p class="mb-0 text-alternate">Mongodb r4.0.16</p>
                                </div>
                                <div class="col-lg-2 d-flex align-items-center mb-1 mb-lg-0">
                                    <p class="mb-0 text-alternate">241.157.15.24</p>
                                </div>
                                <div class="col-lg-2 d-flex align-items-center mb-3 mb-lg-0">
                                    <span class="badge bg-tertiary text-uppercase">New</span>
                                </div>
                                <div
                                    class="col-lg-1 d-flex align-items-center justify-content-left justify-content-lg-end">
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary" type="button">
                                        <i data-cs-icon="check"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                            type="button">
                                        <i data-cs-icon="close"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="row g-0 sh-lg-8 h-auto p-card pt-lg-0 pb-lg-0">
                                <div class="col-10 h-100">
                                    <div class="row h-100">
                                        <div class="col-lg-4 d-flex align-items-center">
                                            <p class="mb-0">Cookie Cream Toffee</p>
                                        </div>
                                        <div class="col-lg-3 d-flex align-items-center">
                                            <p class="mb-0 text-alternate">Mongodb r4.0.16</p>
                                        </div>
                                        <div class="col-lg-3 d-flex align-items-center mb-1 mb-lg-0">
                                            <p class="mb-0 text-alternate">241.157.15.24</p>
                                        </div>
                                        <div class="col-lg-2 d-flex align-items-center">
                                            <span class="badge bg-secondary text-uppercase">Old</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 h-100 d-flex align-items-center justify-content-end">
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-light" type="button">
                                        <i data-cs-icon="more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Horizontal Content End -->

                    <!-- Icon Content Start -->
                    <section class="scroll-section" id="iconContent">
                        <h2 class="small-title">Icon Content</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card mb-5">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="cupcake" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Birthday Cake</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="card mb-5">
                                    <div
                                        class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div
                                            class="d-flex rounded-xl bg-gradient-primary sw-6 sh-6 mb-3 justify-content-center align-items-center">
                                            <i data-cs-icon="pepper" class="text-white"></i>
                                        </div>
                                        <p class="card-text mb-2 d-flex">Pending Orders</p>
                                        <p class="h4 text-center mb-0 d-flex text-primary">25</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Icon Content End -->

                    <!-- Small Gutters Start -->
                    <section class="scroll-section" id="smallGutters">
                        <h2 class="small-title">Small Gutters</h2>
                        <div class="row g-2 mb-5">
                            <div class="col-sm-6 col-xxl-3">
                                <div class="card sh-19">
                                    <div
                                        class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                                        <i data-cs-icon="pepper" class="text-primary mb-3"></i>
                                        <p class="heading mb-1">Birthday Cake</p>
                                        <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes cookie.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-3">
                                <div class="card sh-19">
                                    <div
                                        class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                                        <i data-cs-icon="pepper" class="text-primary mb-3"></i>
                                        <p class="heading mb-1">Birthday Cake</p>
                                        <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes cookie.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-3">
                                <div class="card sh-19">
                                    <div
                                        class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                                        <i data-cs-icon="pepper" class="text-primary mb-3"></i>
                                        <p class="heading mb-1">Birthday Cake</p>
                                        <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes cookie.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-3">
                                <div class="card sh-19">
                                    <div
                                        class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                                        <i data-cs-icon="pepper" class="text-primary mb-3"></i>
                                        <p class="heading mb-1">Birthday Cake</p>
                                        <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes cookie.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Small Gutters End -->

                    <!-- List Groups Start -->
                    <section class="scroll-section" id="listGroups">
                        <h2 class="small-title">List Groups</h2>
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-3">
                                <div class="card mb-5">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3">
                                <div class="card mb-5">
                                    <h6 class="card-header mb-0">Featured</h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- List Groups End -->

                    <!-- Kitchen Sink Start -->
                    <section class="scroll-section" id="kitchenSink">
                        <h2 class="small-title">Kitchen Sink</h2>
                        <div class="card mb-5" style="width: 18rem">
                            <img src="{{ asset('/img/product/small/toast-bread.jpg') }}" class="card-img-top"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </section>
                    <!-- Kitchen Sink End -->

                    <!-- Header and Footer Start -->
                    <section class="scroll-section" id="headerAndFooter">
                        <h2 class="small-title">Header and Footer</h2>
                        <div class="card mb-5">
                            <h5 class="card-header">Featured</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <h5 class="card-header">Quote</h5>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante.</p>
                                    <footer class="blockquote-footer">
                                        Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card mb-5 text-center">
                            <h5 class="card-header">Featured</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">2 days ago</div>
                        </div>
                    </section>
                    <!-- Header and Footer End -->

                    <!-- Sizing Start -->
                    <section class="scroll-section" id="sizing">
                        <h2 class="small-title">Sizing</h2>
                        <h6 class="mb-3 text-alternate">Using grid markup</h6>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-3 text-alternate">Using utilities</h6>
                        <div class="card mb-5 w-75">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card mb-5 w-50">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <h6 class="mb-3 text-alternate">Using custom CSS</h6>
                        <div class="card mb-5" style="width: 18rem">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </section>
                    <!-- Sizing End -->

                    <!-- Text Alignment Start -->
                    <section class="scroll-section" id="textAlignment">
                        <h2 class="small-title">Text Alignment</h2>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card mb-5 text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card mb-5 text-end">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Text Alignment End -->

                    <!-- Card Styles Start -->
                    <section class="scroll-section" id="cardStyles">
                        <div class="mb-5">
                            <h2 class="small-title">Card Styles</h2>
                            <div class="row g-4 mb-4">
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Primary card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card text-white bg-secondary">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Secondary card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card text-white bg-tertiary">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Tertiary card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card text-white bg-quaternary">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Quaternary card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card text-white bg-success">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Success card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card text-white bg-danger">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Danger card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card text-white bg-warning">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Warning card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card text-white bg-info">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Info card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card bg-light">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Light card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card text-white bg-dark">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Dark card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-primary">
                                        <div class="card-header text-primary">Header</div>
                                        <div class="card-body text-primary">
                                            <h5 class="card-title text-primary">Primary card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-secondary">
                                        <div class="card-header text-secondary">Header</div>
                                        <div class="card-body text-secondary">
                                            <h5 class="card-title text-secondary">Secondary card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-tertiary">
                                        <div class="card-header text-tertiary">Header</div>
                                        <div class="card-body text-tertiary">
                                            <h5 class="card-title text-tertiary">Tertiary card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-quaternary">
                                        <div class="card-header text-quaternary">Header</div>
                                        <div class="card-body text-quaternary">
                                            <h5 class="card-title text-quaternary">Quaternary card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-success">
                                        <div class="card-header text-success">Header</div>
                                        <div class="card-body text-success">
                                            <h5 class="card-title text-success">Success card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-danger">
                                        <div class="card-header text-danger">Header</div>
                                        <div class="card-body text-danger">
                                            <h5 class="card-title text-danger">Danger card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-warning">
                                        <div class="card-header text-warning">Header</div>
                                        <div class="card-body text-warning">
                                            <h5 class="card-title text-warning">Warning card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-info">
                                        <div class="card-header text-info">Header</div>
                                        <div class="card-body text-info">
                                            <h5 class="card-title text-info">Info card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-light">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Light card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-6">
                                    <div class="card border-dark">
                                        <div class="card-header">Header</div>
                                        <div class="card-body text-dark">
                                            <h5 class="card-title">Dark card title</h5>
                                            <p class="card-text">Brownie ice cream marshmallow topping.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Card Styles End -->

                    <!-- Grid Cards Start -->
                    <section class="scroll-section" id="gridCards">
                        <div class="mb-5">
                            <h2 class="small-title">Grid Cards</h2>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4">
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="{{ asset('/img/product/small/cornbread.jpg') }}" class="card-img-top"
                                             alt="image"/>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">
                                                This is a longer card with supporting text below as a natural lead-in to
                                                additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="{{ asset('/img/product/small/pane-sciocco.jpg') }}"
                                             class="card-img-top" alt="image"/>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">
                                                This is a longer card with supporting text below as a natural lead-in to
                                                additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="{{ asset('/img/product/small/boule.jpg') }}" class="card-img-top"
                                             alt="image"/>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="{{ asset('/img/product/small/barmbrack.jpg') }}" class="card-img-top"
                                             alt="image"/>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">
                                                This is a longer card with supporting text below as a natural lead-in to
                                                additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Grid Cards End -->

                    <!-- Masonry Cards Start -->
                    <!-- Images require static height so that the masonry plugin can work on DOMContentLoaded -->
                    <section class="scroll-section" id="masonryCards">
                        <h2 class="small-title">Masonry Cards</h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4" id="masonryCardsExample">
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('/img/product/small/cornbread.jpg') }}"
                                         class="card-img-top sh-30" alt="image"/>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('/img/product/small/pane-sciocco.jpg') }}"
                                         class="card-img-top sh-15" alt="image"/>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('/img/product/small/boule.jpg') }}" class="card-img-top sh-30"
                                         alt="image"/>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                         class="card-img-top sh-20" alt="image"/>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('/img/product/small/bauernbrot.jpg') }}"
                                         class="card-img-top sh-20" alt="image"/>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                         class="card-img-top sh-15" alt="image"/>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                         class="card-img-top sh-15" alt="image"/>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                         class="card-img-top sh-20" alt="image"/>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a a card detail paragraph.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Masonry Cards End -->
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
                        <a class="nav-link" href="#images">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#contentTypes">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Content Types</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#horizontalContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#iconContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Icon Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#smallGutters">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Small Gutters</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#listGroups">
                            <i data-cs-icon="chevron-right"></i>
                            <span>List Groups</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#kitchenSink">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Kitchen Sink</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#headerAndFooter">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Header and Footer</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#sizing">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sizing</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#textAlignment">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Text Alignment</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#cardStyles">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Card Styles</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#gridCards">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Grid Cards</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#masonryCards">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Masonry Cards</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

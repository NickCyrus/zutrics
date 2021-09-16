@php
    $html_tag_data = [];
    $title = 'Default Dashboard';
    $description = 'Home screen that contains stats, charts, call to action buttons and various listing elements.';
    $breadcrumbs = ["/"=>"Home","/Dashboards"=>"Dashboards"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/glide.core.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/glide.core.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/introjs.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/plyr.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/chartjs-plugin-datalabels.js') }}"></script>
    <script src="{{ asset('/js/vendor/chartjs-plugin-rounded-bar.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/glide.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/intro.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/plyr.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/glide.custom.js') }}"></script>
    <script src="{{ asset('/js/cs/charts.extend.js') }}"></script>
    <script src="{{ asset('/js/pages/dashboard.default.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
                <!-- Top Buttons Start -->
                <div class="col-12 col-sm-6 d-flex align-items-start justify-content-end">
                    <!-- Tour Button Start -->
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-end w-100 w-sm-auto"
                            id="dashboardTourButton">
                        <span>Take a Tour</span>
                        <i data-cs-icon="flag"></i>
                    </button>
                    <!-- Tour Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <div class="col-12 col-xl-6">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5" data-title="Fancy Charts" data-intro="Some charts over here!" data-step="1">
                    <h2 class="small-title">Sales & Stocks</h2>
                    <div class="card mb-2 h-auto sh-xl-24">
                        <div class="card-body">
                            <div class="row g-0 h-100 chart-container">
                                <!-- Contents for below are provided from js -->
                                <div
                                    class="col-12 col-sm-auto d-flex flex-column justify-content-between custom-tooltip pe-0 pe-sm-4">
                                    <p class="heading title mb-1"></p>
                                    <div>
                                        <div>
                                            <div
                                                class="cta-2 text-primary value d-inline-block align-middle sw-4"></div>
                                            <i class="icon d-inline-block align-middle text-primary"
                                               data-cs-size="15"></i>
                                        </div>
                                        <div class="text-small text-muted mb-1 text"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="cta-3 text-alternate">84</div>
                                            <div class="text-small text-muted mb-1">THIS WEEK</div>
                                        </div>
                                        <div class="col">
                                            <div class="cta-3 text-alternate">792</div>
                                            <div class="text-small text-muted mb-1">THIS MONTH</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm sh-17">
                                    <canvas id="largeLineChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card h-auto sh-xl-24">
                        <div class="card-body">
                            <div class="row g-0 h-100 chart-container">
                                <!-- Contents for below are provided from js -->
                                <div
                                    class="col-12 col-sm-auto d-flex flex-column justify-content-between custom-tooltip pe-0 pe-sm-4">
                                    <p class="heading title"></p>
                                    <div>
                                        <div>
                                            <div
                                                class="cta-2 text-primary value d-inline-block align-middle sw-4"></div>
                                            <i class="icon d-inline-block align-middle text-primary"
                                               data-cs-size="15"></i>
                                        </div>
                                        <div class="text-small text-muted mb-1 text"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="cta-3 text-alternate">84</div>
                                            <div class="text-small text-muted mb-1">THIS WEEK</div>
                                        </div>
                                        <div class="col">
                                            <div class="cta-3 text-alternate">792</div>
                                            <div class="text-small text-muted mb-1">THIS MONTH</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm sh-17">
                                    <canvas id="largeLineChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sales & Stocks Charts End -->
                <!-- Stats Start -->
                <h2 class="small-title">Stats</h2>
                <div class="row gx-2">
                    <div class="col-12 p-0">
                        <div class="glide glide-small" id="statsCarousel">
                            <div class="glide__track" data-glide-el="track">
                                <div class="glide__slides">
                                    <div class="glide__slide">
                                        <div class="card mb-5 sh-20 hover-border-primary">
                                            <div
                                                class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                                    <i data-cs-icon="alarm" class="text-white"></i>
                                                </div>
                                                <p class="mb-0 lh-1">Pending Orders</p>
                                                <p class="cta-3 mb-0 text-primary">25</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="glide__slide">
                                        <div class="card mb-5 sh-20 hover-border-primary">
                                            <div
                                                class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                                    <i data-cs-icon="navigate-diagonal" class="text-white"></i>
                                                </div>
                                                <p class="mb-0 lh-1">Shipped Orders</p>
                                                <p class="cta-3 mb-0 text-primary">48</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="glide__slide">
                                        <div class="card mb-5 sh-20 hover-border-primary">
                                            <div
                                                class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                                    <i data-cs-icon="check-circle" class="text-white"></i>
                                                </div>
                                                <p class="mb-0 lh-1">Delivered Orders</p>
                                                <p class="cta-3 mb-0 text-primary">53</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="glide__slide">
                                        <div class="card mb-5 sh-20 hover-border-primary">
                                            <div
                                                class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                                    <i data-cs-icon="arrow-bottom-left" class="text-white"></i>
                                                </div>
                                                <p class="mb-0 lh-1">Returned Orders</p>
                                                <p class="cta-3 mb-0 text-primary">4</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="glide__slide">
                                        <div class="card mb-5 sh-20 hover-border-primary">
                                            <div
                                                class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                                    <i data-cs-icon="warning-hexagon" class="text-white"></i>
                                                </div>
                                                <p class="mb-0 lh-1">Unconfirmed Orders</p>
                                                <p class="cta-3 mb-0 text-primary">3</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="glide__slide">
                                        <div class="card mb-5 sh-20 hover-border-primary">
                                            <div
                                                class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                                    <i data-cs-icon="pin" class="text-white"></i>
                                                </div>
                                                <p class="mb-0 lh-1">Missing Orders</p>
                                                <p class="cta-3 mb-0 text-primary">2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Stats Start -->
            </div>

            <!-- Products Start -->
            <div class="col-12 col-xl-6 mb-5">
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Products</h2>
                    <button class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                        <i data-cs-icon="more-horizontal" data-cs-size="15"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                        <a class="dropdown-item" href="#">Reload</a>
                        <a class="dropdown-item" href="#">Stats</a>
                        <a class="dropdown-item" href="#">Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>

                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="6">
                        <div class="card mb-2" data-title="Product Card"
                             data-intro="Here is a product card with buttons!" data-step="2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-lg-15"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div
                                                class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0 position-static">
                                                <a href="/Pages/Portfolio/Detail">Kommissbrot</a>
                                                <div class="text-small text-muted text-truncate">Icing liquorice
                                                    olegário jujubes oat cake.
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto position-relative">
                                    <span
                                        class="badge rounded-pill bg-primary me-1 position-absolute e-n3 t-2">TREND</span>
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/cornbread.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-lg-15"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Yeast Karavai</a>
                                                <div class="text-small text-muted text-truncate">Gummi liquorice
                                                    olegário jujubes cookie.
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/panettone.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-lg-15"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Cholermüs</a>
                                                <div class="text-small text-muted text-truncate">Marshmallow topping
                                                    icing liquorice oat cake.
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/michetta.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-lg-15"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Cheesymite Scroll</a>
                                                <div class="text-small text-muted text-truncate">Tootsie brownie ice
                                                    cream marshmallow topping.
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/barmbrack.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-lg-15"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Bazlama</a>
                                                <div class="text-small text-muted text-truncate">Tootsie roll cream
                                                    marshmallow chocolate bar.
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/zopf.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-lg-15"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Soda Bread</a>
                                                <div class="text-small text-muted text-truncate">Marshmallow topping
                                                    icing liquorice oat cake.
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/boule.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-lg-15"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Chapati</a>
                                                <div class="text-small text-muted text-truncate">Tootsie brownie ice
                                                    cream marshmallow topping.
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                    type="button">
                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products End -->
        </div>

        <div class="row">
            <!-- Logs Start -->
            <div class="col-lg-6 mb-5">
                <h2 class="small-title">Logs</h2>
                <div class="card sh-40 h-lg-100-card">
                    <div class="card-body mb-n2 scroll-out h-100">
                        <div class="scroll h-100">
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="circle" class="text-primary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">New user registiration</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="circle" class="text-primary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">3 new product added</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="square" class="text-secondary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                Product out of stock:
                                                <a href="#" class="alternate-link underline-link">Breadstick</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="square" class="text-secondary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">Category page returned an error
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="circle" class="text-primary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">14 products added</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                New sale:
                                                <a href="#" class="alternate-link underline-link">Steirer Brot</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                New sale:
                                                <a href="#" class="alternate-link underline-link">Soda Bread</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="triangle" class="text-warning align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">Recived a support ticket</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                New sale:
                                                <a href="#" class="alternate-link underline-link">Cholermüs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                New sale:
                                                <a href="#" class="alternate-link underline-link">Bazlama</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="triangle" class="text-warning align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="triangle" class="text-warning align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">Recived an email</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                New sale:
                                                <a href="#" class="alternate-link underline-link">Bazlama</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-cs-icon="triangle" class="text-warning align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Logs End -->
            <!-- Categories Start -->
            <div class="col-lg-6 mb-5">
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Categories</h2>
                    <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small"
                            type="button">
                        <span class="align-bottom">View All</span>
                        <i data-cs-icon="chevron-right" class="align-middle" data-cs-size="12"></i>
                    </button>
                </div>
                <div class="row g-2">
                    <div class="col-6 col-xl-4 sh-19" data-title="More Cards" data-intro="Category card with an icon!"
                         data-step="3">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="#">
                                <i data-cs-icon="cupcake" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Cupcakes</p>
                                <div class="text-extra-small fw-medium text-muted">14 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="#">
                                <i data-cs-icon="loaf" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Breads</p>
                                <div class="text-extra-small fw-medium text-muted">3 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="#">
                                <i data-cs-icon="radish" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Vegetables</p>
                                <div class="text-extra-small fw-medium text-muted">8 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="#">
                                <i data-cs-icon="pear" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Fruits</p>
                                <div class="text-extra-small fw-medium text-muted">9 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="#">
                                <i data-cs-icon="loaf" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Mushrooms</p>
                                <div class="text-extra-small fw-medium text-muted">3 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="#">
                                <i data-cs-icon="water" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Drinks</p>
                                <div class="text-extra-small fw-medium text-muted">4 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories End -->
        </div>

        <!-- Banners Start -->
        <h2 class="small-title">Extend Your Knowledge</h2>
        <div class="row">
            <div class="col-12 col-md-4 mb-5">
                <div class="card w-100 sh-18 sh-md-22 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-standard-1.jpg') }}" class="card-img h-100 scale" alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <div class="cta-3 text-black">
                                Introduction
                                <br/>
                                to Bread Making
                            </div>
                            <a href="/Pages/Blog/List"
                               class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-cs-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-5">
                <div class="card w-100 sh-18 sh-md-22 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-standard-2.jpg') }}" class="card-img h-100 scale" alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <div class="cta-3 text-black">
                                Basic Principles
                                <br/>
                                of Cooking
                            </div>
                            <a href="/Pages/Blog/List"
                               class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-cs-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-5">
                <div class="card w-100 sh-18 sh-md-22 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-standard-3.jpg') }}" class="card-img h-100 scale"
                         alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <div class="cta-3 text-black">
                                Easy & Practical
                                <br/>
                                Recipes
                            </div>
                            <a href="/Pages/Blog/List"
                               class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-cs-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banners End -->

        <div class="row gy-5">
            <!-- Help Start -->
            <div class="col-12 col-xl-4">
                <h2 class="small-title">Help</h2>
                <div class="card h-100-card">
                    <div class="card-body">
                        <div class="cta-3">Do you need help?</div>
                        <div class="mb-3 cta-3 text-primary">Search for documentation!</div>
                        <div class="text-muted mb-4">Cheesecake chocolate carrot cake pie drops. Brownie ice cream
                            marshmallow topping.
                        </div>
                        <form>
                            <div class="mb-3 filled w-100">
                                <i data-cs-icon="diagram-1"></i>
                                <select class="select-single-no-search-filled select2-hidden-accessible"
                                        id="categorySelect" data-placeholder="Category">
                                    <option label="&nbsp;"></option>
                                    <option value="Breads">Breads</option>
                                    <option value="Pies">Pies</option>
                                    <option value="Desserts">Desserts</option>
                                </select>
                            </div>
                            <div class="mb-3 filled">
                                <i data-cs-icon="help"></i>
                                <input class="form-control" placeholder="Search"/>
                            </div>
                            <a href="#" class="btn btn-icon btn-icon-start btn-primary mt-3">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Search</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Help End -->
            <!-- Video Guide Start -->
            <div class="col-12 col-xl-8">
                <h2 class="small-title">Video Guide</h2>
                <div class="card h-100-card sh-md-45 bg-transparent">
                    <video class="player cover" poster="{{ asset('/img/product/large/bread.jpg') }}" id="videoGuide">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                type="video/mp4"/>
                    </video>
                </div>
            </div>
            <!-- Video Guide End -->
        </div>
    </div>
@endsection

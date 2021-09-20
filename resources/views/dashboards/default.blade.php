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
                        <span>Ver tour</span>
                        <i data-cs-icon="flag"></i>
                    </button>
                    <!-- Tour Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <div class="col-12 col-xl-12">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5" data-title="Fancy Charts" data-intro="Some charts over here!" data-step="1">
                    <h2 class="small-title">Informe</h2>
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
                                            <div class="text-small text-muted mb-1">Esta semana</div>
                                        </div>
                                        <div class="col">
                                            <div class="cta-3 text-alternate">792</div>
                                            <div class="text-small text-muted mb-1">Este Mes</div>
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
                                            <div class="text-small text-muted mb-1">Esta semana</div>
                                        </div>
                                        <div class="col">
                                            <div class="cta-3 text-alternate">792</div>
                                            <div class="text-small text-muted mb-1">Este mes</div>
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

           
        </div>

        
    
 
       
    </div>
@endsection

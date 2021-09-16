@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Stats';
    $description = 'Numeral value containers for different stats with icons and various layouts.';
    $breadcrumbs = ["/"=>"Home","/Blocks"=>"Blocks"]
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
    <script src="{{ asset('/js/vendor/progressbar.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/blocks.stats.js') }}"></script>
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

                    <!-- Vertical Start -->
                    <section class="scroll-section" id="vertical">
                        <h2 class="small-title">Vertical</h2>
                        <div class="row g-2">
                            <div class="col-auto mb-5">
                                <div class="card hover-border-primary sw-19 sh-30">
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="bg-gradient-2 sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center">
                                            <i data-cs-icon="loaf" class="text-white"></i>
                                        </div>
                                        <div class="heading text-center mb-0 sh-8 d-flex align-items-center lh-1-25">
                                            Completed Orders
                                        </div>
                                        <div class="display-5 text-primary">25</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-5">
                                <div class="card sw-19 sh-30 active">
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                            <i data-cs-icon="loaf" class="text-primary"></i>
                                        </div>
                                        <div class="heading text-center mb-0 sh-8 d-flex align-items-center lh-1-25">
                                            Completed Orders
                                        </div>
                                        <div class="display-5 text-primary">25</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-5">
                                <div class="card sw-19 sh-30 bg-gradient-2">
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="border border-foreground sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center">
                                            <i data-cs-icon="loaf" class="text-white"></i>
                                        </div>
                                        <div class="heading text-center mb-0 sh-8 d-flex align-items-center lh-1-25 text-white">
                                            Completed Orders
                                        </div>
                                        <div class="display-5 text-white">25</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Vertical End -->

                    <!-- Square Start -->
                    <section class="scroll-section" id="square">
                        <h2 class="small-title">Square</h2>
                        <div class="row g-2">
                            <div class="col-auto mb-5">
                                <div class="card hover-border-primary sh-20 sw-20">
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="bg-gradient-2 sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                            <i data-cs-icon="loaf" class="text-white"></i>
                                        </div>
                                        <div class="heading text-center mb-0 sh-4 d-flex align-items-center lh-1">Corn
                                        </div>
                                        <div class="text-small text-primary">14 PRODUCTS</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-5">
                                <div class="card sh-20 sw-20 active">
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                            <i data-cs-icon="loaf" class="text-primary"></i>
                                        </div>
                                        <div class="heading text-center mb-0 sh-4 d-flex align-items-center lh-1">Corn
                                        </div>
                                        <div class="text-small text-primary">14 PRODUCTS</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-5">
                                <div class="card sh-20 sw-20 bg-gradient-2">
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="border border-foreground sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                            <i data-cs-icon="loaf" class="text-white"></i>
                                        </div>
                                        <div class="heading text-center mb-0 sh-4 d-flex align-items-center lh-1 text-white">
                                            Corn
                                        </div>
                                        <div class="text-small text-white">14 PRODUCTS</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Square End -->

                    <!-- Horizontal Start -->
                    <section class="scroll-section" id="horizontal">
                        <h2 class="small-title">Horizontal</h2>
                        <div class="row g-2">
                            <div class="col-12 col-xl-4 mb-5">
                                <div class="card hover-border-primary">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="bg-gradient-2 sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                                <i data-cs-icon="loaf" class="text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3">
                                                Completed Orders
                                            </div>
                                        </div>
                                        <div class="col-auto ps-3">
                                            <div class="display-5 text-primary">34</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 mb-5">
                                <div class="card active">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                                <i data-cs-icon="loaf" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3">
                                                Completed Orders
                                            </div>
                                        </div>
                                        <div class="col-auto ps-3">
                                            <div class="display-5 text-primary">235</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 mb-5">
                                <div class="card bg-gradient-2">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="border border-foreground sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                                <i data-cs-icon="loaf" class="text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3 text-white">
                                                Completed Orders
                                            </div>
                                        </div>
                                        <div class="col-auto ps-3">
                                            <div class="display-5 text-white">16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-12 col-xl-4 mb-5">
                                <div class="card hover-border-primary">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                                <i data-cs-icon="loaf" class="text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="sh-5 d-flex align-items-center lh-1-25 ps-3">Completed Orders
                                            </div>
                                        </div>
                                        <div class="col-auto ps-3">
                                            <div class="cta-2 text-primary">34</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 mb-5">
                                <div class="card active">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                                <i data-cs-icon="loaf" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="sh-5 d-flex align-items-center lh-1-25 ps-3">Completed Orders
                                            </div>
                                        </div>
                                        <div class="col-auto ps-3">
                                            <div class="cta-2 text-primary">235</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 mb-5">
                                <div class="card bg-gradient-2">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="border border-foreground sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                                <i data-cs-icon="loaf" class="text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="sh-5 d-flex align-items-center lh-1-25 ps-3 text-white">
                                                Completed Orders
                                            </div>
                                        </div>
                                        <div class="col-auto ps-3">
                                            <div class="cta-2 text-white">16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Horizontal End -->

                    <!-- Progress Start -->
                    <section class="scroll-section" id="progress">
                        <h2 class="small-title">Progress</h2>
                        <div class="row g-2">
                            <div class="col-auto mb-5">
                                <div class="card sw-19 sh-30">
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="sw-8 sh-8 d-flex justify-content-center align-items-center">
                                            <div
                                                    role="progressbar"
                                                    class="progress-bar-circle position-relative text-muted text-small"
                                                    data-trail-color=""
                                                    aria-valuemax="100"
                                                    aria-valuenow="75"
                                                    data-show-percent="true"
                                                    data-hide-all-text="false"
                                                    data-stroke-width="3"
                                                    data-trail-width="1"
                                                    data-duration="0"
                                            ></div>
                                        </div>
                                        <div class="heading text-center mb-0 sh-8 d-flex align-items-center lh-1-25">
                                            Completed Orders
                                        </div>
                                        <div class="text-small text-muted">THIS MONTH</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-xxl-6 col-lg-8 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="heading mb-0 sh-4 lh-1-25">Completed Orders</div>
                                        <div class="text-small text-muted mb-2">THIS MONTH</div>
                                        <div class="cta-3 text-primary sh-3 mb-2">75%</div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Progress End -->

                    <!-- Progress List Start -->
                    <section class="scroll-section" id="progressList">
                        <h2 class="small-title">Progress List</h2>
                        <div class="row g-2">
                            <div class="col-12 col-xl-4 col-xxl-3 col-lg-6 col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-0 align-items-center mb-2 sh-6">
                                            <div class="col-auto">
                                                <div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="pepper" class="text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div class="sh-3 d-flex align-items-center lh-1-25">
                                                            Ingredients
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="cta-3 text-primary sh-3 d-flex align-items-center">
                                                            30%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0">
                                                    <div class="col sh-1">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar"
                                                                 aria-valuenow="30" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center mb-2 sh-6">
                                            <div class="col-auto">
                                                <div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="user" class="text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div class="sh-3 d-flex align-items-center lh-1-25">Workers
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="cta-3 text-primary sh-3 d-flex align-items-center">
                                                            20%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0">
                                                    <div class="col sh-1">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar"
                                                                 aria-valuenow="20" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center mb-2 sh-6">
                                            <div class="col-auto">
                                                <div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="building" class="text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div class="sh-3 d-flex align-items-center lh-1-25">Rent</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="cta-3 text-primary sh-3 d-flex align-items-center">
                                                            15%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0">
                                                    <div class="col sh-1">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar"
                                                                 aria-valuenow="15" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center mb-2 sh-6">
                                            <div class="col-auto">
                                                <div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="electricity" class="text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div class="sh-3 d-flex align-items-center lh-1-25">Utilities
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="cta-3 text-primary sh-3 d-flex align-items-center">
                                                            10%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0">
                                                    <div class="col sh-1">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar"
                                                                 aria-valuenow="10" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col pe-4 d-flex flex-column justify-content-between align-items-end">
                                                <div class="text-small text-muted sh-3 d-flex align-items-center">
                                                    BUDGET
                                                </div>
                                                <div class="text-small text-muted sh-3 d-flex align-items-center">
                                                    SPEND
                                                </div>
                                                <div class="text-small text-muted sh-5 d-flex align-items-end">BALANCE
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex flex-column justify-content-between align-items-end">
                                                <div class="text-muted sh-3 d-flex align-items-center">$12.000</div>
                                                <div class="text-muted sh-3 d-flex align-items-center">- $8.750</div>
                                                <div class="cta-3 text-primary sh-5 d-flex align-items-end">$3.250</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Progress List End -->

                    <!-- Percentages Start -->
                    <section class="scroll-section" id="percentages">
                        <h2 class="small-title">Percentages</h2>
                        <div class="row g-2">
                            <div class="col-12 col-lg-6 col-xxl-4 mb-2">
                                <div class="card">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="bg-gradient-2 sw-6 sh-6 rounded-md d-flex justify-content-center align-items-center">
                                                <i data-cs-icon="loaf" class="text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col sh-6 ps-3 d-flex flex-column justify-content-center">
                                            <div class="heading mb-0 d-flex align-items-center lh-1-25">Orders</div>
                                            <div class="row g-0">
                                                <div class="col-auto">
                                                    <div class="cta-2 text-primary">34</div>
                                                </div>
                                                <div class="col text-success d-flex align-items-center ps-3">
                                                    <i data-cs-icon="arrow-top" class="me-1" data-cs-size="13"></i>
                                                    <span class="text-medium">+18.4%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xxl-4 mb-2">
                                <div class="card">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="bg-gradient-2 sw-6 sh-6 rounded-md d-flex justify-content-center align-items-center">
                                                <i data-cs-icon="loaf" class="text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col sh-6 ps-3 d-flex flex-column justify-content-center">
                                            <div class="heading mb-0 d-flex align-items-center lh-1-25">Views</div>
                                            <div class="row g-0">
                                                <div class="col-auto">
                                                    <div class="cta-2 text-primary">12%</div>
                                                </div>
                                                <div class="col text-danger d-flex align-items-center ps-3">
                                                    <i data-cs-icon="arrow-bottom" class="me-1" data-cs-size="13"></i>
                                                    <span class="text-medium">-18.4%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-12 col-lg-6 col-xxl-4 mb-5">
                                <div class="card">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="bg-gradient-2 sw-6 sh-6 rounded-md d-flex justify-content-center align-items-center">
                                                <i data-cs-icon="loaf" class="text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col sh-6 ps-3 d-flex flex-column justify-content-center">
                                            <div class="heading mb-0 d-flex align-items-center lh-1-25">Orders</div>
                                            <div class="row g-0">
                                                <div class="col-auto">
                                                    <div class="cta-2 text-primary">69</div>
                                                </div>
                                                <div class="col text-success d-flex align-items-center justify-content-end">
                                                    <span class="badge bg-primary text-uppercase">+18.4%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xxl-4 mb-5">
                                <div class="card">
                                    <div class="h-100 row g-0 card-body align-items-center">
                                        <div class="col-auto">
                                            <div class="bg-gradient-2 sw-6 sh-6 rounded-md d-flex justify-content-center align-items-center">
                                                <i data-cs-icon="loaf" class="text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col sh-6 ps-3 d-flex flex-column justify-content-center">
                                            <div class="heading mb-0 d-flex align-items-center lh-1-25">Views</div>
                                            <div class="row g-0">
                                                <div class="col-auto">
                                                    <div class="cta-2 text-primary">235</div>
                                                </div>
                                                <div class="col text-success d-flex align-items-center justify-content-end">
                                                    <span class="badge bg-secondary text-uppercase">-18.4%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Percentages End -->

                    <!-- Line Icons Start -->
                    <section class="scroll-section" id="lineIcons">
                        <h2 class="small-title">Line Icons</h2>
                        <div class="row g-2">
                            <div class="col-12 col-lg-4 col-xxl-2 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="heading d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Orders</span>
                                            <i data-cs-icon="box" class="text-primary"></i>
                                        </div>
                                        <div class="text-small text-muted mb-1">THIS MONTH</div>
                                        <div class="cta-1 text-primary">1.325</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-xxl-2 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="heading d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Views</span>
                                            <i data-cs-icon="trend-up" class="text-primary"></i>
                                        </div>
                                        <div class="text-small text-muted mb-1">THIS MONTH</div>
                                        <div class="cta-1 text-primary">1.325</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Line Icons End -->

                    <!-- Compact Start -->
                    <section class="scroll-section" id="compact">
                        <h2 class="small-title">Compact</h2>
                        <div class="row g-2">
                            <div class="col-12 col-xl-6 mb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-3 text-center">
                                                <div class="text-small text-muted mb-1">SALES</div>
                                                <div class="cta-2 text-primary">235</div>
                                            </div>
                                            <div class="col-3 text-center">
                                                <div class="text-small text-muted mb-1">ORDERS</div>
                                                <div class="cta-2 text-primary">421</div>
                                            </div>
                                            <div class="col-3 text-center">
                                                <div class="text-small text-muted mb-1">VIEWS</div>
                                                <div class="cta-2 text-primary">752</div>
                                            </div>
                                            <div class="col-3 text-center">
                                                <div class="text-small text-muted mb-1">REFUNDS</div>
                                                <div class="cta-2 text-primary">53</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-12 col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-0 mb-n5 mb-sm-0">
                                            <div class="col-6 col-sm-3 text-center d-flex justify-content-center align-items-center flex-column mb-4 mb-sm-0">
                                                <div class="bg-gradient-2 sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-3">
                                                    <i data-cs-icon="box" class="text-white"></i>
                                                </div>
                                                <div class="text-small text-muted mb-1">SALES</div>
                                                <div class="cta-2 text-primary">235</div>
                                            </div>
                                            <div class="col-6 col-sm-3 text-center d-flex justify-content-center align-items-center flex-column mb-4 mb-sm-0">
                                                <div class="bg-gradient-2 sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-3">
                                                    <i data-cs-icon="shipping" class="text-white"></i>
                                                </div>
                                                <div class="text-small text-muted mb-1">ORDERS</div>
                                                <div class="cta-2 text-primary">421</div>
                                            </div>
                                            <div class="col-6 col-sm-3 text-center d-flex justify-content-center align-items-center flex-column mb-4 mb-sm-0">
                                                <div class="bg-gradient-2 sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-3">
                                                    <i data-cs-icon="screen" class="text-white"></i>
                                                </div>
                                                <div class="text-small text-muted mb-1">VIEWS</div>
                                                <div class="cta-2 text-primary">752</div>
                                            </div>
                                            <div class="col-6 col-sm-3 text-center d-flex justify-content-center align-items-center flex-column mb-4 mb-sm-0">
                                                <div class="bg-gradient-2 sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-3">
                                                    <i data-cs-icon="arrow-bottom-left" class="text-white"></i>
                                                </div>
                                                <div class="text-small text-muted mb-1">REFUNDS</div>
                                                <div class="cta-2 text-primary">53</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Compact End -->
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
                        <a class="nav-link" href="#vertical">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Vertical</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#square">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Square</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#horizontal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#progress">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Progress</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#progressList">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Progress List</span>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="#percentages">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Percentages</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#lineIcons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Line Icons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#compact">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Compact</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

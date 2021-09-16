@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Charts';
    $description= 'Chart.js provides simple yet flexible JavaScript charting for designers & developers.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/glide.core.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/chartjs-plugin-rounded-bar.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/chartjs-plugin-crosshair.js') }}"></script>
    <script src="{{ asset('/js/vendor/chartjs-plugin-datalabels.js') }}"></script>
    <script src="{{ asset('/js/vendor/chartjs-plugin-streaming.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/charts.extend.js') }}"></script>
    <script src="{{ asset('/js/plugins/charts.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">{{ $title }} </h1>
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

                    <div class="row">
                        <!-- Line Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="lineChartTitle">
                                <h2 class="small-title">Line Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="lineChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <!-- Line Chart End -->

                        <!-- Area Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="areaChartTitle">
                                <h2 class="small-title">Area Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="areaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Area Chart End -->

                        <!-- Doughnut Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="doughnutChartTitle">
                                <h2 class="small-title">Doughnut Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="doughnutChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Doughnut Chart End -->

                        <!-- Pie Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="pieChartTitle">
                                <h2 class="small-title">Pie Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="pieChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Pie Chart End -->

                        <!-- Bar Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="barChartTitle">
                                <h2 class="small-title">Bar Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="barChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Bar Chart End -->

                        <!-- Rounded Bar Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="roundedBarChartTitle">
                                <h2 class="small-title">Rounded Bar Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="roundedBarChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Rounded Bar Chart End -->

                        <!-- Horizontal Bar Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="horizontalBarChartTitle">
                                <h2 class="small-title">Horizontal Bar Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="horizontalBarChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Horizontal Bar Chart End -->

                        <!-- Horizontal Rounded Bar Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="horizontalRoundedBarChartTitle">
                                <h2 class="small-title">Horizontal Rounded Bar Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="horizontalRoundedBarChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Horizontal Rounded Bar Chart End -->

                        <!-- Radar Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="radarChartTitle">
                                <h2 class="small-title">Radar Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="radarChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Radar Chart End -->

                        <!-- Polar Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="polarChartTitle">
                                <h2 class="small-title">Polar Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="polarChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Polar Chart End -->

                        <!-- Scatter Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="scatterChartTitle">
                                <h2 class="small-title">Scatter Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="scatterChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Scatter Chart End -->

                        <!-- Bubble Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="bubbleChartTitle">
                                <h2 class="small-title">Bubble Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="bubbleChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Bubble Chart End -->

                        <!-- Streaming Line Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="streamingLineChartTitle">
                                <h2 class="small-title">Streaming Line Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="streamingLineChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Streaming Line Chart End -->

                        <!-- Streaming Bar Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="streamingBarChartTitle">
                                <h2 class="small-title">Streaming Bar Chart</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="streamingBarChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Streaming Bar Chart End -->

                        <!-- Custom Tooltip Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="customVerticalTooltipTitle">
                                <h2 class="small-title">Custom Vertical Tooltip</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="verticalTooltipChart"></canvas>
                                            <div
                                                class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex flex-column z-index-1 align-items-center opacity-0 basic-transform-transition">
                                                <div
                                                    class="icon-container border d-flex align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl mb-3">
                                                    <span class="icon"></span>
                                                </div>
                                                <span
                                                    class="text d-flex align-middle text-alternate align-items-center text-small">Bread</span>
                                                <span
                                                    class="value d-flex align-middle text-body align-items-center cta-4">300</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Custom Tooltip Chart End -->

                        <!-- Custom Tooltip Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="customHorizontalTooltipTitle">
                                <h2 class="small-title">Custom Horizontal Tooltip</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-35">
                                            <canvas id="horizontalTooltipChart"></canvas>
                                            <div
                                                class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition">
                                                <div
                                                    class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3">
                                                    <span class="icon"></span>
                                                </div>
                                                <div>
                                                    <span
                                                        class="text d-flex align-middle text-alternate align-items-center text-small">Bread</span>
                                                    <span
                                                        class="value d-flex align-middle text-body align-items-center cta-4">300</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Custom Tooltip Chart End -->

                        <!-- Custom Legend Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="customLegendDoughnutTitle">
                                <h2 class="small-title">Custom Legend Doughnut</h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="sh-30">
                                            <canvas id="customLegendDoughnutChart"></canvas>
                                        </div>
                                        <div class="custom-legend-container mt-5 d-flex justify-content-center"></div>
                                        <template class="custom-legend-item">
                                            <a href="#"
                                               class="d-flex flex-md-row flex-column align-items-center justify-content-center mx-3">
                                                <div class="pe-md-2 mb-2 mb-md-0">
                                                    <div
                                                        class="icon-container border sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center">
                                                        <i class="icon"></i>
                                                    </div>
                                                </div>
                                                <div class="text-center text-md-start">
                                                    <div
                                                        class="text mb-0 d-flex align-items-center text-small text-muted">
                                                        Title
                                                    </div>
                                                    <div class="value cta-4">Value</div>
                                                </div>
                                            </a>
                                        </template>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Custom Legend Chart End -->

                        <!-- Custom Legend Chart Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="customLegendBarTitle">
                                <h2 class="small-title">Custom Legend Bar</h2>
                                <div class="card mb-5 sh-45">
                                    <div class="card-body">
                                        <div class="custom-legend-container mb-3 pb-3 d-flex flex-row"></div>
                                        <template class="custom-legend-item">
                                            <a href="#" class="d-flex flex-row g-0 align-items-center me-5">
                                                <div class="pe-2">
                                                    <div
                                                        class="icon-container border sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center">
                                                        <i class="icon"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div
                                                        class="text p mb-0 d-flex align-items-center text-small text-muted">
                                                        Title
                                                    </div>
                                                    <div class="value cta-4">Value</div>
                                                </div>
                                            </a>
                                        </template>
                                        <div class="sh-30">
                                            <canvas id="customLegendBarChart"></canvas>
                                            <div
                                                class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition">
                                                <div
                                                    class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3">
                                                    <span class="icon"></span>
                                                </div>
                                                <div>
                                                    <span
                                                        class="text d-flex align-middle text-muted align-items-center text-small">Bread</span>
                                                    <span
                                                        class="value d-flex align-middle align-items-center cta-4">300</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Custom Legend Chart End -->

                        <!-- Small Doughnut Charts Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="smallDoughnutChartsTitle">
                                <h2 class="small-title">Small Doughnut Charts</h2>
                                <div class="row g-2">
                                    <div class="col-12 col-md-6 col-xl-12 col-xxl-6">
                                        <div class="card sh-13">
                                            <div class="card-body py-0 d-flex align-items-center">
                                                <div class="row g-0 d-flex w-100">
                                                    <div
                                                        class="col sh-8 d-flex flex-column justify-content-center custom-legend-container"></div>
                                                    <template class="custom-legend-item">
                                                        <div class="text-small text-muted text"></div>
                                                        <div class="cta-3 text-primary value"></div>
                                                    </template>
                                                    <div class="col-auto">
                                                        <canvas id="smallDoughnutChart1" class="sw-8 sh-8"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-12 col-xxl-6">
                                        <div class="card sh-13">
                                            <div class="card-body py-0 d-flex align-items-center">
                                                <div class="row g-0 d-flex w-100">
                                                    <div
                                                        class="col sh-8 d-flex flex-column justify-content-center custom-legend-container"></div>
                                                    <template class="custom-legend-item">
                                                        <div class="text-small text-muted text"></div>
                                                        <div class="cta-3 text-primary value"></div>
                                                    </template>
                                                    <div class="col-auto">
                                                        <canvas id="smallDoughnutChart2" class="sw-8 sh-8"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-12 col-xxl-6">
                                        <div class="card sh-13">
                                            <div class="card-body py-0 d-flex align-items-center">
                                                <div class="row g-0 d-flex w-100">
                                                    <div
                                                        class="col sh-8 d-flex flex-column justify-content-center custom-legend-container"></div>
                                                    <template class="custom-legend-item">
                                                        <div class="text-small text-muted text"></div>
                                                        <div class="cta-3 text-primary value"></div>
                                                    </template>
                                                    <div class="col-auto">
                                                        <canvas id="smallDoughnutChart3" class="sw-8 sh-8"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-12 col-xxl-6">
                                        <div class="card sh-13">
                                            <div class="card-body py-0 d-flex align-items-center">
                                                <div class="row g-0 d-flex w-100">
                                                    <div
                                                        class="col sh-8 d-flex flex-column justify-content-center custom-legend-container"></div>
                                                    <template class="custom-legend-item">
                                                        <div class="text-small text-muted text"></div>
                                                        <div class="cta-3 text-primary value"></div>
                                                    </template>
                                                    <div class="col-auto">
                                                        <canvas id="smallDoughnutChart4" class="sw-8 sh-8"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Small Doughnut Charts End -->

                        <!-- Small Line Charts Start -->
                        <div class="col-12 col-xl-6">
                            <section class="scroll-section" id="smallLineChartsTitle">
                                <h2 class="small-title">Small Line Charts</h2>
                                <div class="row g-2">
                                    <div class="col-12 col-md-6 col-xl-12 col-xxl-6">
                                        <div class="card sh-13">
                                            <div class="card-body py-0 d-flex align-items-center">
                                                <div class="row g-0 d-flex w-100 align-items-center">
                                                    <div class="col sh-8 d-flex flex-column justify-content-center">
                                                        <div class="custom-tooltip">
                                                            <div class="title heading"></div>
                                                            <div class="text-small text-muted text"></div>
                                                            <div
                                                                class="icon d-inline-block align-middle me-1 text-primary"></div>
                                                            <div
                                                                class="cta-4 text-primary value d-inline-block align-middle"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <canvas id="smallLineChart1"
                                                                class="sw-18 sw-xl-15 sw-xxl-11 sh-10"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-12 col-xxl-6">
                                        <div class="card sh-13">
                                            <div class="card-body py-0 d-flex align-items-center">
                                                <div class="row g-0 d-flex w-100 align-items-center">
                                                    <div class="col sh-8 d-flex flex-column justify-content-center">
                                                        <div class="custom-tooltip">
                                                            <div class="title heading"></div>
                                                            <div class="text-small text-muted text"></div>
                                                            <div
                                                                class="icon d-inline-block align-middle me-1 text-primary"></div>
                                                            <div
                                                                class="cta-4 text-primary value d-inline-block align-middle"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <canvas id="smallLineChart2"
                                                                class="sw-18 sw-xl-15 sw-xxl-11 sh-10"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-12 col-xxl-6">
                                        <div class="card sh-13">
                                            <div class="card-body py-0 d-flex align-items-center">
                                                <div class="row g-0 d-flex w-100 align-items-center">
                                                    <div class="col sh-8 d-flex flex-column justify-content-center">
                                                        <div class="custom-tooltip">
                                                            <div class="title heading"></div>
                                                            <div class="text-small text-muted text"></div>
                                                            <div
                                                                class="icon d-inline-block align-middle me-1 text-primary"></div>
                                                            <div
                                                                class="cta-4 text-primary value d-inline-block align-middle"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <canvas id="smallLineChart3"
                                                                class="sw-18 sw-xl-15 sw-xxl-11 sh-10"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-12 col-xxl-6">
                                        <div class="card sh-13">
                                            <div class="card-body py-0 d-flex align-items-center">
                                                <div class="row g-0 d-flex w-100 align-items-center">
                                                    <div class="col sh-8 d-flex flex-column justify-content-center">
                                                        <div class="custom-tooltip">
                                                            <div class="title heading"></div>
                                                            <div class="text-small text-muted text"></div>
                                                            <div
                                                                class="icon d-inline-block align-middle me-1 text-primary"></div>
                                                            <div
                                                                class="cta-4 text-primary value d-inline-block align-middle"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <canvas id="smallLineChart4"
                                                                class="sw-18 sw-xl-15 sw-xxl-11 sh-10"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Small Line Charts End -->
                    </div>
                </div>
                <!-- Content End -->
            </div>

            <!-- Scrollspy Start -->
            <div class="col-md-auto d-none d-lg-block" id="scrollSpyMenu" data-width="260px">
                <ul class="nav flex-column">
                    <li>
                        <a class="nav-link" href="#title">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Title</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#lineChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Line Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#areaChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Area Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#doughnutChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Doughnut Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#pieChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Pie Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#barChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Bar Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#roundedBarChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Rounded Bar Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#horizontalBarChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal Bar Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#horizontalRoundedBarChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal Rounded Bar Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#radarChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Radar Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#polarChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Polar Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#scatterChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Scatter Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#bubbleChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Bubble Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#streamingLineChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Streaming Line Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#streamingBarChartTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Streaming Bar Chart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customVerticalTooltipTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Vertical Tooltip</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customHorizontalTooltipTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Horizontal Tooltip</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customLegendDoughnutTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Legend Doughnut</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customLegendBarTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Legend Bar</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#smallDoughnutChartsTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Small Doughnut Charts</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#smallLineChartsTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Small Line Charts</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Maps';
    $description= 'Commonly used map providers within an iframe.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins"]
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

                    <!-- Open Street Map Start -->
                    <section class="scroll-section" id="openStreetMap">
                        <h2 class="small-title">Open Street Map</h2>
                        <div class="card mb-5 sh-50">
                            <div class="card-body h-100">
                                <iframe class="h-100 w-100"
                                        src="https://www.openstreetmap.org/export/embed.html?bbox=7.37757682800293%2C43.711719348453%2C7.461690902709962%2C43.751226204346814&amp;layer=hot&amp;marker=43.73147603398314%2C7.419633865356445"></iframe>
                            </div>
                        </div>
                    </section>
                    <!-- Open Street Map End -->

                    <!-- Google Maps Start -->
                    <section class="scroll-section" id="googleMaps">
                        <h2 class="small-title">Google Maps</h2>
                        <div class="card mb-5 sh-50">
                            <div class="card-body h-100">
                                <iframe class="h-100 w-100"
                                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJMYU_e2_CzRIR_JzEOkx493Q&key=AIzaSyCO8MfadmlotuuHC8wmjwL_46I5QAMIiRU"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </section>
                    <!-- Google Maps End -->

                    <!-- Yandex Maps Start -->
                    <section class="scroll-section" id="yandexMaps">
                        <h2 class="small-title">Yandex Maps</h2>
                        <div class="card mb-5 sh-50">
                            <div class="card-body">
                                <iframe src="https://yandex.com.tr/map-widget/v1/-/CCQlyWv4KD"
                                        style="border: 0; width: 100%; height: 340px" allowfullscreen></iframe>
                            </div>
                        </div>
                    </section>
                    <!-- Yandex Maps End -->
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
                        <a class="nav-link" href="#openStreetMap">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Open Street Map</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#googleMaps">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Google Maps</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#yandexMaps">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Yandex Maps</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

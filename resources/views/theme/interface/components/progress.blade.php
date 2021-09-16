@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Progress';
    $description= 'Examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.';
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
    <script src="{{ asset('/js/components/progress.js') }}"></script>
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

                    <!-- Default Start -->
                    <section class="scroll-section" id="default">
                        <h2 class="small-title">Default</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Labels Start -->
                    <section class="scroll-section" id="labels">
                        <h2 class="small-title">Labels</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="progress sh-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100">25%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Labels End -->

                    <!-- Height Start -->
                    <section class="scroll-section" id="height">
                        <h2 class="small-title">Height</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-sm mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-md mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-lg mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xxl mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress sh-4">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Height End -->

                    <!-- Backgrounds Start -->
                    <section class="scroll-section" id="backgrounds">
                        <h2 class="small-title">Backgrounds</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="30"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar bg-tertiary" role="progressbar" aria-valuenow="35"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar bg-quaternary" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="45"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Backgrounds End -->

                    <!-- Multiple Bars Start -->
                    <section class="scroll-section" id="multipleBars">
                        <h2 class="small-title">Multiple Bars</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="progress progress-xl">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Multiple Bars End -->

                    <!-- Striped Start -->
                    <section class="scroll-section" id="striped">
                        <h2 class="small-title">Striped</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="10"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Striped End -->

                    <!-- Animated Stripes Start -->
                    <section class="scroll-section" id="animatedStripes">
                        <h2 class="small-title">Animated Stripes</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                         role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                         role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                         role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl mb-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                         role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xl">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                         role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Animated Stripes End -->
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
                        <a class="nav-link" href="#default">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Default</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#labels">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Labels</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#height">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Height</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#backgrounds">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Backgrounds</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#multipleBars">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Multiple Bars</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#striped">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Striped</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#animatedStripes">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Animated Stripes</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

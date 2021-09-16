@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Lightbox';
    $description= 'Simple and easy to use lightbox script written in pure JavaScript.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/baguetteBox.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/baguetteBox.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/plugins/lightbox.js') }}"></script>
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

                    <!-- Gallery Start -->
                    <section class="scroll-section" id="gallery">
                        <h2 class="small-title">Gallery</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row gallery g-2">
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/barmbrack.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/rugbraud.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/rugbraud.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/guernsey-gache.jpg') }}">
                                            <img alt="lightbox"
                                                 src="{{ asset('/img/product/small/guernsey-gache.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/bauernbrot.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/bauernbrot.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/panettone.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Gallery End -->

                    <!-- Fade In Start -->
                    <section class="scroll-section" id="fadeIn">
                        <h2 class="small-title">Fade In</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row gallery-fadeIn g-2">
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/panettone.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/baguette.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/baguette.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/steirer-brot.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/rugbraud.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/rugbraud.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}">
                                            <img alt="lightbox"
                                                 src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/barmbrack.jpg') }}">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Fade In End -->

                    <!-- Captions Start -->
                    <section class="scroll-section" id="captions">
                        <h2 class="small-title">Captions</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row gallery g-2">
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/steirer-brot.jpg') }}"
                                           data-caption="Pain de Campagne">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/bauernbrot.jpg') }}"
                                           data-caption="Bauernbrot">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/bauernbrot.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                           data-caption="Pullman Loaf">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>

                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/baguette.jpg') }}"
                                           data-caption="Baguette">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/baguette.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/barmbrack.jpg') }}"
                                           data-caption="Barmbrack">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                        <a href="{{ asset('/img/product/large/rugbraud.jpg') }}"
                                           data-caption="Basler Brot">
                                            <img alt="lightbox" src="{{ asset('/img/product/small/rugbraud.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Captions End -->

                    <!-- Single Image Start -->
                    <section class="scroll-section" id="singleImage">
                        <h2 class="small-title">Single Image</h2>
                        <div class="row">
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ asset('/img/product/large/guernsey-gache.jpg') }}" class="lightbox">
                                            <img alt="lightbox"
                                                 src="{{ asset('/img/product/small/guernsey-gache.jpg') }}"
                                                 class="card-img"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Single Image End -->
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
                        <a class="nav-link" href="#gallery">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#fadeIn">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Fade In</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#captions">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Captions</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#singleImage">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Single Image</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

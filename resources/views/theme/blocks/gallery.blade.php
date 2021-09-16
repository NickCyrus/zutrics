@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Gallery';
    $description = 'Mobile and desktop gallery elements that designed in various shapes for different layouts.';
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
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/baguetteBox.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/blocks.gallery.js') }}"></script>
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

                    <!-- Small Gutters Start -->
                    <section class="scroll-section" id="smallGutters">
                        <h2 class="small-title">Small Gutters</h2>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 gallery g-2 mb-5">
                            <div class="col">
                                <a href="{{ asset('/img/product/large/buccellato-di-lucca.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                         alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/cornbread.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/cornbread.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/toast-bread.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/toast-bread.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/panettone.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/panettone.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/steirer-brot.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/steirer-brot.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/rugbraud.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/rugbraud.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- Small Gutters End -->

                    <!-- Standard Gutters Start -->
                    <section class="scroll-section" id="standardGutters">
                        <h2 class="small-title">Standard Gutters</h2>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 gallery g-4 mb-5">
                            <div class="col">
                                <a href="{{ asset('/img/product/large/buccellato-di-lucca.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                         alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/cornbread.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/cornbread.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/toast-bread.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/toast-bread.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/panettone.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/panettone.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/steirer-brot.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/steirer-brot.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/rugbraud.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/rugbraud.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                   class="card hover-img-scale-up">
                                    <img class="card-img sh-25 scale"
                                         src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" alt="card image"/>
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- Standard Gutters End -->

                    <!-- Small Columns Start -->
                    <section class="scroll-section" id="smallColumns">
                        <h2 class="small-title">Small Columns</h2>
                        <div class="row">
                            <div class="col-6 col-xl-6 mb-5">
                                <div class="row row-cols-1 row-cols-xl-3 gallery g-2">
                                    <div class="col">
                                        <a href="{{ asset('/img/product/large/buccellato-di-lucca.jpg') }}"
                                           class="card hover-img-scale-down">
                                            <img class="card-img sh-15 sh-sm-25 scale"
                                                 src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                 alt="card image"/>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ asset('/img/product/large/toast-bread.jpg') }}"
                                           class="card hover-img-scale-down">
                                            <img class="card-img sh-15 sh-sm-25 scale"
                                                 src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                                 alt="card image"/>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                           class="card hover-img-scale-down">
                                            <img class="card-img sh-15 sh-sm-25 scale"
                                                 src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                 alt="card image"/>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ asset('/img/product/large/boule.jpg') }}"
                                           class="card hover-img-scale-down">
                                            <img class="card-img sh-15 sh-sm-25 scale"
                                                 src="{{ asset('/img/product/small/boule.jpg') }}" alt="card image"/>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ asset('/img/product/large/michetta.jpg') }}"
                                           class="card hover-img-scale-down">
                                            <img class="card-img sh-15 sh-sm-25 scale"
                                                 src="{{ asset('/img/product/small/michetta.jpg') }}" alt="card image"/>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                           class="card hover-img-scale-down">
                                            <img class="card-img sh-15 sh-sm-25 scale"
                                                 src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                                 alt="card image"/>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-xl-6 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row row-cols-1 row-cols-xl-2 gallery g-2">
                                            <div class="col">
                                                <a href="{{ asset('/img/product/large/buccellato-di-lucca.jpg') }}"
                                                   class="card hover-img-scale-down">
                                                    <img class="card-img sh-15 sh-sm-14 scale"
                                                         src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                         alt="card image"/>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ asset('/img/product/large/toast-bread.jpg') }}"
                                                   class="card hover-img-scale-down">
                                                    <img class="card-img sh-15 sh-sm-14 scale"
                                                         src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                                         alt="card image"/>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                                   class="card hover-img-scale-down">
                                                    <img class="card-img sh-15 sh-sm-14 scale"
                                                         src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         alt="card image"/>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ asset('/img/product/large/boule.jpg') }}"
                                                   class="card hover-img-scale-down">
                                                    <img class="card-img sh-15 sh-sm-14 scale"
                                                         src="{{ asset('/img/product/small/boule.jpg') }}"
                                                         alt="card image"/>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ asset('/img/product/large/michetta.jpg') }}"
                                                   class="card hover-img-scale-down">
                                                    <img class="card-img sh-15 sh-sm-14 scale"
                                                         src="{{ asset('/img/product/small/michetta.jpg') }}"
                                                         alt="card image"/>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                                   class="card hover-img-scale-down">
                                                    <img class="card-img sh-15 sh-sm-14 scale"
                                                         src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                                         alt="card image"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Small Columns End -->

                    <!-- Groups Start -->
                    <!-- Note: Images should be provided via background-image so we have kept them inline. -->
                    <section class="scroll-section" id="groups">
                        <h2 class="small-title">Groups</h2>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35">
                                        <div class="row g-2 h-100 gallery">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35">
                                        <div class="row g-2 h-100 gallery">
                                            <div class="col h-100">
                                                <a href="{{ asset('/img/product/large/boule.jpg') }}"
                                                   class="w-100 h-100 rounded-md bg-cover-center d-block d-block"
                                                   style="background-image: url({{ asset('/img/product/small/boule.jpg') }})"></a>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <a href="{{ asset('/img/product/large/toast-bread.jpg') }}"
                                                   class="w-100 h-100 rounded-md bg-cover-center d-block d-block"
                                                   style="background-image: url({{ asset('/img/product/small/toast-bread.jpg') }})"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35">
                                        <div class="row g-2 h-100 gallery">
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <div class="d-flex mb-2 flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/cornbread.jpg') }}"
                                                       class="w-100 h-100 rounded-md bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/cornbread.jpg') }})"></a>
                                                </div>
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                                       class="w-100 h-100 rounded-md bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/pain-de-campagne.jpg') }})"></a>
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <div class="d-flex mb-2 flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/rugbraud.jpg') }}"
                                                       class="w-100 h-100 rounded-md bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/rugbraud.jpg') }})"></a>
                                                </div>
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/steirer-brot.jpg') }}"
                                                       class="w-100 h-100 rounded-md bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/steirer-brot.jpg') }})"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35">
                                        <div class="row g-2 h-100">
                                            <div class="col d-flex flex-column justify-content-stretch h-100 gallery">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35 d-flex flex-column gallery">
                                        <div class="d-flex mb-2 flex-grow-1 h-100">
                                            <a href="{{ asset('/img/product/large/rugbraud.jpg') }}"
                                               class="w-100 h-100 rounded-md bg-cover-center d-block"
                                               style="background-image: url({{ asset('/img/product/small/rugbraud.jpg') }})"></a>
                                        </div>
                                        <div class="row g-2 h-100">
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                                       class="w-100 h-100 rounded-md bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/pain-de-campagne.jpg') }})"></a>
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/steirer-brot.jpg') }}"
                                                       class="w-100 h-100 rounded-md bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/steirer-brot.jpg') }})"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35">
                                        <div class="row g-1 h-100 gallery">
                                            <div class="col h-100">
                                                <a href="{{ asset('/img/product/large/pullman-loaf.jpg') }}"
                                                   class="w-100 h-100 rounded-md-start bg-cover-center d-block"
                                                   style="background-image: url({{ asset('/img/product/small/pullman-loaf.jpg') }})"></a>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <div class="d-flex mb-1 flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/buccellato-di-lucca.jpg') }}"
                                                       class="w-100 h-100 rounded-md-top-end bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/buccellato-di-lucca.jpg') }})"></a>
                                                </div>
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/michetta.jpg') }}"
                                                       class="w-100 h-100 rounded-md-bottom-end bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/michetta.jpg') }})"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35">
                                        <div class="row g-1 h-100 gallery">
                                            <div class="col h-100">
                                                <a href="{{ asset('/img/product/large/panettone.jpg') }}"
                                                   class="w-100 h-100 rounded-md-start bg-cover-center d-block"
                                                   style="background-image: url({{ asset('/img/product/small/panettone.jpg') }})"></a>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <a href="{{ asset('/img/product/large/michetta.jpg') }}"
                                                   class="w-100 h-100 rounded-md-end bg-cover-center d-block"
                                                   style="background-image: url({{ asset('/img/product/small/michetta.jpg') }})"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35">
                                        <div class="row g-1 h-100 gallery">
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <div class="d-flex mb-1 flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/cornbread.jpg') }}"
                                                       class="w-100 h-100 rounded-md-top-start bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/cornbread.jpg') }})"></a>
                                                </div>
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/rugbraud.jpg') }}"
                                                       class="w-100 h-100 rounded-md-bottom-start bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/rugbraud.jpg') }})"></a>
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <div class="d-flex mb-1 flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/toast-bread.jpg') }}"
                                                       class="w-100 h-100 rounded-md-top-end bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/toast-bread.jpg') }})"></a>
                                                </div>
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/pain-de-campagne.jpg') }}"
                                                       class="w-100 h-100 rounded-md-bottom-end bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/pain-de-campagne.jpg') }})"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35">
                                        <div class="row g-1 h-100">
                                            <div class="col d-flex flex-column justify-content-stretch h-100 gallery">
                                                <div class="d-flex mb-1 flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/steirer-brot.jpg') }}"
                                                       class="w-100 h-100 rounded-md-top bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/steirer-brot.jpg') }})"></a>
                                                </div>
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/toast-bread.jpg') }}"
                                                       class="w-100 h-100 rounded-md-bottom bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/toast-bread.jpg') }})"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-xxl-6 mb-5">
                                <div class="card">
                                    <div class="card-body sh-35 d-flex flex-column gallery">
                                        <div class="d-flex mb-1 flex-grow-1 h-100">
                                            <a href="{{ asset('/img/product/large/rugbraud.jpg') }}"
                                               class="w-100 h-100 rounded-md-top bg-cover-center d-block"
                                               style="background-image: url({{ asset('/img/product/small/rugbraud.jpg') }})"></a>
                                        </div>
                                        <div class="row g-1 h-100">
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/cornbread.jpg') }}"
                                                       class="w-100 h-100 rounded-md-bottom-start bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/cornbread.jpg') }})"></a>
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-stretch h-100">
                                                <div class="d-flex flex-grow-1">
                                                    <a href="{{ asset('/img/product/large/zopf.jpg') }}"
                                                       class="w-100 h-100 rounded-md-bottom-end bg-cover-center d-block"
                                                       style="background-image: url({{ asset('/img/product/small/zopf.jpg') }})"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Groups End -->
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
                        <a class="nav-link" href="#smallGutters">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Small Gutters</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#standardGutters">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Standard Gutters</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#smallColumns">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Small Columns</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#groups">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Groups</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Knowledge Base';
    $description = 'Knowledge Base Page';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Miscellaneous"=>"Miscellaneous"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <!-- Title Start -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-container">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>
        <!-- Title End -->

        <div class="row">
            <!-- Top Search Start -->
            <div class="col-12">
                <div class="card w-100 sh-30 sh-md-25 mb-5">
                    <img src="{{ asset('/img/banner/cta-wide-3.jpg') }}" class="card-img h-100" alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-center bg-transparent">
                        <div class="row d-flex">
                            <div class="col-12 text-center">
                                <div class="cta-3 text-primary">Need help?</div>
                                <div class="cta-3 text-black mb-3">Search for articles!</div>
                                <div class="row g-2 justify-content-center">
                                    <div class="col-12 col-sm-6">
                                        <div class="d-flex flex-column justify-content-start">
                                            <div class="text-muted mb-3 mb-sm-0">
                                                <input type="email" class="form-control" placeholder="Search"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <a href="#" class="btn btn-icon btn-icon-start btn-primary">
                                            <i data-cs-icon="search"></i>
                                            <span>Search</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Search End -->

            <!-- Categories Start -->
            <div class="col-12 col-xl-8 col-xxl-9 mb-5">
                <h2 class="small-title">Categories</h2>
                <div class="row row-cols-1 row-cols-lg-2 g-2">
                    <div class="col">
                        <div class="card mb-2 h-100">
                            <div class="card-body row g-0">
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex">
                                        <div class="bg-gradient-primary sw-6 sh-6 rounded-xl">
                                            <div
                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                <i data-cs-icon="radish"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-column justify-content-center sh-6">
                                                <a href="#" class="heading">Chupa Chups Bonbon</a>
                                            </div>
                                        </div>
                                        <div class="mb-n2">
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Chocolate cake
                                                        marshmallow muffin</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Bear claw marzipan
                                                        tiramisu topping</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Gingerbread biscuit
                                                        bear claw marzipan tiramisu topping</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Sweet roll apple pie
                                                        tiramisu bonbon sugar plum muffin sesame snaps chocolate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-2 h-100">
                            <div class="card-body row g-0">
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex">
                                        <div class="bg-gradient-primary sw-6 sh-6 rounded-xl">
                                            <div
                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                <i data-cs-icon="banana"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-column justify-content-center sh-6">
                                                <a href="#" class="heading">Sweet Roll</a>
                                            </div>
                                        </div>
                                        <div class="mb-n2">
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Wafer halvah chocolate
                                                        soufflé icing</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Lemon drops cupcake
                                                        croissant liquorice bears dessert lemon drops gingerbread</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Gingerbread chocolate
                                                        cake tootsie marzipan tiramisu topping</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Sweet roll cupcake
                                                        dragée croissant</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-2 h-100">
                            <div class="card-body row g-0">
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex">
                                        <div class="bg-gradient-primary sw-6 sh-6 rounded-xl">
                                            <div
                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                <i data-cs-icon="pear"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-column justify-content-center sh-6">
                                                <a href="#" class="heading">Lemon Drops</a>
                                            </div>
                                        </div>
                                        <div class="mb-n2">
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">
                                                        Cookie tootsie roll candy canes marshmallow jujubes tiramisu
                                                        apple pie carrot cake danish candy
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Croissant chocolate bar
                                                        croissant drops gingerbread</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Marzipan bear claw
                                                        marzipan tiramisu topping</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Sweet roll cupcake
                                                        dragée croissant muffin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-2 h-100">
                            <div class="card-body row g-0">
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex">
                                        <div class="bg-gradient-primary sw-6 sh-6 rounded-xl">
                                            <div
                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                <i data-cs-icon="burger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-column justify-content-center sh-6">
                                                <a href="#" class="heading">Danish Brownie Chocolate</a>
                                            </div>
                                        </div>
                                        <div class="mb-n2">
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Chupa chups marshmallow
                                                        muffin liquorice</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Chocolate cake sweet
                                                        roll cupcake dragée croissant croissant muffin</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Dragée croissant
                                                        muffin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-2 h-100">
                            <div class="card-body row g-0">
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex">
                                        <div class="bg-gradient-primary sw-6 sh-6 rounded-xl">
                                            <div
                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                <i data-cs-icon="loaf"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-column justify-content-center sh-6">
                                                <a href="#" class="heading">Gingerbread Biscuit Bear</a>
                                            </div>
                                        </div>
                                        <div class="mb-n2">
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Chupa chups marshmallow
                                                        muffin liquorice</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Liquorice donut cookie
                                                        cake croissant muffin</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Oat cake jujubes
                                                        jelly-o jelly chupa chups</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Jujubes wafer sesame
                                                        snaps soufflé cheesecake</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-2 h-100">
                            <div class="card-body row g-0">
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex">
                                        <div class="bg-gradient-primary sw-6 sh-6 rounded-xl">
                                            <div
                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                <i data-cs-icon="tea"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-column justify-content-center sh-6">
                                                <a href="#" class="heading">Chocolate Bar</a>
                                            </div>
                                        </div>
                                        <div class="mb-n2">
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Lollipop gummi bears
                                                        pie carrot cake danish candy</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Gingerbread croissant
                                                        drops gingerbread</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Cotton candy jelly
                                                        pudding</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Bear claw marzipan
                                                        tiramisu topping</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-2 h-100">
                            <div class="card-body row g-0">
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex">
                                        <div class="bg-gradient-primary sw-6 sh-6 rounded-xl">
                                            <div
                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                <i data-cs-icon="cupcake"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-column justify-content-center sh-6">
                                                <a href="#" class="heading">Tiramisu</a>
                                            </div>
                                        </div>
                                        <div class="mb-n2">
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">
                                                        Tiramisu apple pie carrot cake cookie candy canes marshmallow
                                                        jujubes danish candy
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Marzipan bear claw
                                                        marzipan tiramisu topping</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Sweet roll cupcake
                                                        dragée croissant muffin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-2 h-100">
                            <div class="card-body row g-0">
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex">
                                        <div class="bg-gradient-primary sw-6 sh-6 rounded-xl">
                                            <div
                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                <i data-cs-icon="pepper"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-column justify-content-center sh-6">
                                                <a href="#" class="heading">Carrot Cake</a>
                                            </div>
                                        </div>
                                        <div class="mb-n2">
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Marshmallow chupa
                                                        muffin liquorice</a>
                                                </div>
                                            </div>

                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Liquorice donut cookie
                                                        cake croissant muffin</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Oat cake jujubes
                                                        jelly-o jelly chupa chups</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Chupa chups marshmallow
                                                        muffin liquorice</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Liquorice donut cookie
                                                        cake croissant muffin</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Croissant croissant
                                                        muffin candy canes</a>
                                                </div>
                                            </div>
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 me-1">
                                                        <i data-cs-icon="chevron-right" class="text-muted align-top"
                                                           data-cs-size="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col lh-1-25">
                                                    <a href="#" class="alternate-link align-top">Macaroon sesame snaps
                                                        cotton candy jelly pudding lollipop caramels</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <!-- Blog Posts Start -->
                <h2 class="small-title">Helpful Blog Posts</h2>
                <div class="mb-5">
                    <div class="row g-2">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="card sh-11 sh-sm-14">
                                <div class="row g-0 h-100">
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/product/horizontal/horizontal-1.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                    </div>
                                    <div class="col position-static">
                                        <div
                                            class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <a href="#" class="stretched-link body-link">
                                                    <div class="clamp-line" data-line="2">A Complete Guide to Mix Dough
                                                        for the Molds
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="card sh-11 sh-sm-14">
                                <div class="row g-0 h-100">
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/product/horizontal/horizontal-2.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                    </div>
                                    <div class="col position-static">
                                        <div
                                            class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <a href="#" class="stretched-link body-link">
                                                    <div class="clamp-line" data-line="2">Apple Cake Recipe for
                                                        Starters
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="card sh-11 sh-sm-14">
                                <div class="row g-0 h-100">
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/product/horizontal/horizontal-3.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                    </div>
                                    <div class="col position-static">
                                        <div
                                            class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <a href="#" class="stretched-link body-link">
                                                    <div class="clamp-line" data-line="2">Basic Introduction to Bread
                                                        Making
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="card sh-11 sh-sm-14">
                                <div class="row g-0 h-100">
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/product/horizontal/horizontal-4.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                    </div>
                                    <div class="col position-static">
                                        <div
                                            class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <a href="#" class="stretched-link body-link">
                                                    <div class="clamp-line" data-line="2">Easy and Efficient Tricks for
                                                        Baking Crispy Breads
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Posts End -->

                <!-- Popular Topics Start -->
                <h2 class="small-title">Popular Topics</h2>
                <div class="mb-5">
                    <div class="card mb-2">
                        <div class="card-body py-4 d-flex align-items-center">
                            <a href="#" class="body-link stretched-link">Cheesecake chocolate carrot cake pie lollipop
                                lemon toffee lollipop?</a>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body py-4 d-flex align-items-center">
                            <a href="#" class="body-link stretched-link">Liquorice gummi halvah dessert ice bears cake
                                donut chocolate lollipop gummi bears?</a>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body py-4 d-flex align-items-center">
                            <a href="#" class="body-link stretched-link">Pie lollipop lemon toffee lollipop cake sweet
                                roll cupcake dragée croissant?</a>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body py-4 d-flex align-items-center">
                            <a href="#" class="body-link stretched-link">Liquorice gummi halvah dessert ice bears cake
                                donut chocolate lollipop gummi bears?</a>
                        </div>
                    </div>
                </div>
                <!-- Popular Topics End -->
            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection

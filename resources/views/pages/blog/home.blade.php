@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Blog Home';
    $description = 'Blog Home';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Blog"=>"Blog"]
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
    <script src="{{ asset('/js/vendor/glide.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/glide.custom.js') }}"></script>
    <script src="{{ asset('/js/pages/blog.home.js') }}"></script>
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

        <!-- Top Stories Start -->
        <h2 class="small-title">Top Stories</h2>
        <div class="row g-4 mb-5">
            <div class="col-12 col-lg-6 col-xxl-6 sh-40">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/large/hands.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-0">
                        <a href="/Pages/Blog/Detail" class="h5 heading body-link stretched-link">
                            <div class="mb-0 lh-1-5 sh-8 sh-md-6 clamp-line" data-line="2">A Complete Guide to Mix Dough
                                for the Molds
                            </div>
                        </a>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row g-0">
                            <div class="col-auto pe-3">
                                <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">5</span>
                            </div>
                            <div class="col">
                                <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">20 Min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xxl-3 sh-40">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/panettone.jpg') }}" class="card-img-top sh-22"
                         alt="card image"/>
                    <div class="card-body pb-0">
                        <a href="/Pages/Blog/Detail" class="h5 heading body-link stretched-link">
                            <div class="mb-0 lh-1-5 sh-8 sh-md-6 clamp-line" data-line="2">14 Facts About Sugar
                                Products
                            </div>
                        </a>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row g-0">
                            <div class="col-auto pe-3">
                                <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">148</span>
                            </div>
                            <div class="col">
                                <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">10 Min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xxl-3 sh-40">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}" class="card-img-top sh-22"
                         alt="card image"/>
                    <div class="card-body pb-0">
                        <a href="/Pages/Blog/Detail" class="h5 heading body-link stretched-link">
                            <div class="mb-0 lh-1-5 sh-8 sh-md-6 clamp-line" data-line="2">Easy and Efficient Tricks for
                                Baking Crispy Breads
                            </div>
                        </a>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row g-0">
                            <div class="col-auto pe-3">
                                <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">19</span>
                            </div>
                            <div class="col">
                                <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">30 Min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xxl-3 sh-40">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/boule.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-0">
                        <a href="/Pages/Blog/Detail" class="h5 heading body-link stretched-link">
                            <div class="mb-0 lh-1-5 sh-8 sh-md-6 clamp-line" data-line="2">Basic Introduction to Bread
                                Making
                            </div>
                        </a>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row g-0">
                            <div class="col-auto pe-3">
                                <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">42</span>
                            </div>
                            <div class="col">
                                <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">15 Min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xxl-3 sh-40">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}" class="card-img-top sh-22"
                         alt="card image"/>
                    <div class="card-body pb-0">
                        <a href="/Pages/Blog/Detail" class="h5 heading body-link stretched-link">
                            <div class="mb-0 lh-1-5 sh-8 sh-md-6 clamp-line" data-line="2">10 Secrets Every Southern
                                Baker Knows
                            </div>
                        </a>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row g-0">
                            <div class="col-auto pe-3">
                                <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">241</span>
                            </div>
                            <div class="col">
                                <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">25 Min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xxl-3 sh-40">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/michetta.jpg') }}" class="card-img-top sh-22"
                         alt="card image"/>
                    <div class="card-body pb-0">
                        <a href="/Pages/Blog/Detail" class="h5 heading body-link stretched-link">
                            <div class="mb-0 lh-1-5 sh-8 sh-md-6 clamp-line" data-line="2">Apple Cake Recipe for
                                Starters
                            </div>
                        </a>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row g-0">
                            <div class="col-auto pe-3">
                                <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">194</span>
                            </div>
                            <div class="col">
                                <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">40 Min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xxl-3 sh-40">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/cornbread.jpg') }}" class="card-img-top sh-22"
                         alt="card image"/>
                    <div class="card-body pb-0">
                        <a href="/Pages/Blog/Detail" class="h5 heading body-link stretched-link">
                            <div class="mb-0 lh-1-5 sh-8 sh-md-6 clamp-line" data-line="2">14 Facts About Sugar
                                Products
                            </div>
                        </a>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row g-0">
                            <div class="col-auto pe-3">
                                <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">67</span>
                            </div>
                            <div class="col">
                                <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                <span class="align-middle">10 Min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Stories End -->

        <!-- Popular Articles Start -->
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="small-title">Popular Articles</h2>
                <div class="glide glide-blog">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <div class="glide__slide">
                                <div class="card w-100 sh-25 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-standard-1.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div class="card-img-overlay d-flex flex-column justify-content-end bg-transparent">
                                        <a href="/Pages/Blog/List" class="stretched-link">
                                            <div class="cta-3 mb-3 text-black w-100 w-sm-50">Introduction to Bread
                                                Making
                                            </div>
                                            <div class="w-50 text-black d-none d-md-block">
                                                <div class="clamp-line sh-8" data-line="3">
                                                    Lollipop chocolate marzipan marshmallow gummi bears. Tootsie roll
                                                    liquorice cake jelly beans. Lollipop chocolate marzipan
                                                    marshmallow gummi bears. Tootsie roll liquorice cake jelly beans.
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="glide__slide">
                                <div class="card w-100 sh-25 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-standard-2.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div class="card-img-overlay d-flex flex-column justify-content-end bg-transparent">
                                        <a href="/Pages/Blog/List" class="stretched-link">
                                            <div class="cta-3 mb-3 text-black w-100 w-sm-50">14 Facts About Sugar</div>
                                            <div class="w-50 text-black d-none d-md-block">
                                                <div class="clamp-line sh-8" data-line="3">
                                                    Sesame snaps brownie gummi bears tootsie roll caramels dragée.
                                                    Powder cake gummies jelly beans toffee carrot cake bonbon powder
                                                    muffin.
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="glide__slide">
                                <div class="card w-100 sh-25 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-standard-3.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div class="card-img-overlay d-flex flex-column justify-content-end bg-transparent">
                                        <a href="/Pages/Blog/List" class="stretched-link">
                                            <div class="cta-3 mb-3 text-black w-100 w-sm-50">Apple Cake Recipe for
                                                Starters
                                            </div>
                                            <div class="w-50 text-black d-none d-md-block">
                                                <div class="clamp-line sh-8" data-line="3">
                                                    Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop.
                                                    Tiramisu toffee brownie sweet roll sesame snaps halvah.
                                                    Icing carrot cake cupcake gummi bears danish.
                                                </div>
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
        <!-- Popular Articles End -->

        <!-- Quick Reads Start -->
        <h2 class="small-title">Quick Reads</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">
            <div class="col mb-5">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/zopf.jpg') }}" class="card-img-top sh-19" alt="card image"/>
                    <div class="card-body">
                        <h5 class="heading mb-3">
                            <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                <span class="clamp-line sh-5" data-line="2">Basic Introduction to Bread Making</span>
                            </a>
                        </h5>
                        <div>
                            <div class="row g-0">
                                <div class="col-auto pe-3">
                                    <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                    <span class="align-middle">67</span>
                                </div>
                                <div class="col">
                                    <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                    <span class="align-middle">10 Min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/toast-bread.jpg') }}" class="card-img-top sh-19"
                         alt="card image"/>
                    <div class="card-body">
                        <h5 class="heading mb-3">
                            <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                <span class="clamp-line sh-5" data-line="2">14 Facts About Sugar Products</span>
                            </a>
                        </h5>
                        <div>
                            <div class="row g-0">
                                <div class="col-auto pe-3">
                                    <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                    <span class="align-middle">24</span>
                                </div>
                                <div class="col">
                                    <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                    <span class="align-middle">15 Min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/michetta.jpg') }}" class="card-img-top sh-19"
                         alt="card image"/>
                    <div class="card-body">
                        <h5 class="heading mb-3">
                            <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                <span class="clamp-line sh-5" data-line="2">Apple Cake Recipe for Starters</span>
                            </a>
                        </h5>
                        <div>
                            <div class="row g-0">
                                <div class="col-auto pe-3">
                                    <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                    <span class="align-middle">274</span>
                                </div>
                                <div class="col">
                                    <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                    <span class="align-middle">15 Min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" class="card-img-top sh-19"
                         alt="card image"/>
                    <div class="card-body">
                        <h5 class="heading mb-3">
                            <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                <span class="clamp-line sh-5"
                                      data-line="2">A Complete Guide to Mix Dough for the Molds</span>
                            </a>
                        </h5>
                        <div>
                            <div class="row g-0">
                                <div class="col-auto pe-3">
                                    <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                    <span class="align-middle">144</span>
                                </div>
                                <div class="col">
                                    <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                    <span class="align-middle">25 Min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Reads End -->
    </div>
@endsection

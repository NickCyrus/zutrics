@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Blog Grid';
    $description = 'Blog Grid';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Blog"=>"Blog"]
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
            <div class="col-12 col-xl-8 col-xxl-9 mb-5">
                <!-- Grid Start -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-2 mb-5">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/zopf.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5"
                                              data-line="2">Basic Introduction to Bread Making</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">34</span>
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
                    <div class="col">
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
                                            <span class="align-middle">53</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/michetta.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5"
                                              data-line="2">Apple Cake Recipe for Starters</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">115</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">30 Min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5" data-line="2">A Complete Guide to Mix Dough for the Molds</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">329</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">45 Min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/cornbread.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5" data-line="2">10 Secrets Every Southern Baker Knows</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">43</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5"
                                              data-line="2">Recipes for Sweet and Healty Treats</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">5</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/rugbraud.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5" data-line="2">Better Ways to Mix Dough for the Molds</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">94</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5"
                                              data-line="2">Basic Introduction for Dough Molding</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">77</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">20 Min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/boule.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5" data-line="2">A Complete Guide to Mix Dough for the Molds</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">64</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/panettone.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5" data-line="2">Introduction to Baking Cakes</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">80</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/michetta.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5"
                                              data-line="2">Apple Cake Recipe for Starters</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">52</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5" data-line="2">A Complete Guide to Mix Dough for the Molds</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">26</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">30 Min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/zopf.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5"
                                              data-line="2">Basic Introduction to Bread Making</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">12</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">45 Min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
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
                                            <span class="align-middle">22</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/cornbread.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5" data-line="2">10 Secrets Every Southern Baker Knows</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">54</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5"
                                              data-line="2">Recipes for Sweet and Healty Treats</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">108</span>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/panettone.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5" data-line="2">Introduction to Baking Cakes</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">28</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">30 Min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/rugbraud.jpg') }}" class="card-img-top sh-19"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-3">
                                    <a href="/Pages/Blog/Detail" class="body-link stretched-link">
                                        <span class="clamp-line sh-5" data-line="2">Better Ways to Mix Dough for the Molds</span>
                                    </a>
                                </h5>
                                <div>
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="like" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">16</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">20 Min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid End -->

                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-xl btn-outline-primary sw-30">Load More</button>
                    </div>
                </div>
            </div>

            <!-- Right Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <div class="row">
                    <!-- Mailing List Start -->
                    <div class="col-12">
                        <div class="card mb-5">
                            <div class="card-body row g-0">
                                <div class="col-12">
                                    <div class="cta-3">Ready to make bread?</div>
                                    <div class="mb-3 cta-3 text-primary">Join our email list!</div>
                                    <div class="text-muted mb-3">Cheesecake chocolate carrot cake pie lollipop lemon
                                        drops.
                                    </div>
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="text-muted mb-2">
                                            <input type="email" class="form-control" placeholder="E-mail"/>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-icon btn-icon-start btn-primary">
                                        <i data-cs-icon="chevron-right"></i>
                                        <span>Join</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mailing List End -->

                    <!-- Must Read Start -->
                    <div class="col-12">
                        <h2 class="small-title">Must Read</h2>
                        <div class="mb-5">
                            <div class="row mb-n2">
                                <div class="col-12 col-md-6 col-xl-12 mb-2">
                                    <div class="card sh-11 sh-sm-14">
                                        <div class="row g-0 h-100">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/horizontal/horizontal-1.jpg') }}"
                                                     alt="user"
                                                     class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                            </div>
                                            <div class="col position-static">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <a href="/Pages/Blog/Detail"
                                                           class="stretched-link body-link">
                                                            <div class="clamp-line" data-line="2">A Complete Guide to
                                                                Mix Dough for the Molds
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12 mb-2">
                                    <div class="card sh-11 sh-sm-14">
                                        <div class="row g-0 h-100">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/horizontal/horizontal-2.jpg') }}"
                                                     alt="user"
                                                     class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                            </div>
                                            <div class="col position-static">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <a href="/Pages/Blog/Detail"
                                                           class="stretched-link body-link">
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
                                <div class="col-12 col-md-6 col-xl-12 mb-2">
                                    <div class="card sh-11 sh-sm-14">
                                        <div class="row g-0 h-100">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/horizontal/horizontal-3.jpg') }}"
                                                     alt="user"
                                                     class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                            </div>
                                            <div class="col position-static">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <a href="/Pages/Blog/Detail"
                                                           class="stretched-link body-link">
                                                            <div class="clamp-line" data-line="2">Basic Introduction to
                                                                Bread Making
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12 mb-2">
                                    <div class="card sh-11 sh-sm-14">
                                        <div class="row g-0 h-100">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/horizontal/horizontal-4.jpg') }}"
                                                     alt="user"
                                                     class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                            </div>
                                            <div class="col position-static">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <a href="/Pages/Blog/Detail"
                                                           class="stretched-link body-link">
                                                            <div class="clamp-line" data-line="2">Easy and Efficient
                                                                Tricks for Baking Crispy Breads
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
                    </div>
                    <!-- Must Read End -->

                    <!-- Categories Start -->
                    <div class="col-12 col-sm-6 col-xl-12">
                        <h2 class="small-title">Categories</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row g-0">
                                    <div class="col-12 col-sm-6 mb-n2">
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Anpan</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Arboud</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Arepa</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Baba</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Bagel</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Chapati</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Bammy</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Kalach</a>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-n2">
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Kulcha</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Matzo</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Mohnflesserl</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Pan Dulce</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Pane Ticinese</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Pita</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Rieska</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Zopf</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Categories End -->

                    <!-- Tags Start -->
                    <div class="col-12 col-sm-6 col-xl-12">
                        <h2 class="small-title">Tags</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Food (12)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Baking (3)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Sweet (1)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Molding (3)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Pastry (5)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Healthy (7)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Rye (3)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Simple (3)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Cake (2)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Recipe (6)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Bread (8)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Wheat (2)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection

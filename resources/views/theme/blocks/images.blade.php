@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Images';
    $description = 'Thumbnails with different sizes and properties. Mostly created with Bootstrap utils.';
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

                    <!-- Fixed Width Start -->
                    <section class="scroll-section" id="fixedWidth">
                        <h2 class="small-title">Fixed Width</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div>
                                    <div class="sw-3 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-4 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-5 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-7 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-8 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-9 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-7.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-10 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="sw-3 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/guernsey-gache.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-4 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/baguette.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-5 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-7 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-8 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-9 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/hamburger-bun.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-10 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Fixed Width End -->

                    <!-- Fixed Height Start -->
                    <section class="scroll-section" id="fixedHeight">
                        <h2 class="small-title">Fixed Height</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div>
                                    <div class="sh-3 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sh-3 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/guernsey-gache.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="sh-4 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sh-4 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/baguette.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="sh-5 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sh-5 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="sh-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sh-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="sh-7 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sh-7 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="sh-8 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sh-8 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="sh-9 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-7.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sh-9 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/hamburger-bun.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="sh-10 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sh-10 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                             class="img-fluid-height rounded-md" alt="thumb"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Fixed Height End -->

                    <!-- Radius Start -->
                    <section class="scroll-section" id="borderRadius">
                        <h2 class="small-title">Border Radius</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="card-title mb-2 text-alternate">Size</h6>
                                <div class="mb-3">
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-6.jpg') }}" class="img-fluid"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                             class="img-fluid rounded-sm" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                             class="img-fluid rounded-md" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                             class="img-fluid rounded-xl" alt="thumb"/>
                                    </div>
                                </div>
                                <h6 class="card-title mb-2 text-alternate">Corners</h6>
                                <div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-top" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-end" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-bottom" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-start" alt="thumb"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                             class="img-fluid rounded-top-start" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                             class="img-fluid rounded-top-end" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                             class="img-fluid rounded-bottom-start" alt="thumb"/>
                                    </div>
                                    <div class="sw-6 me-1 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                             class="img-fluid rounded-bottom-end" alt="thumb"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Radius End -->

                    <!-- Letters Start -->
                    <section class="scroll-section" id="letterThumbs">
                        <h2 class="small-title">Letter Thumbs</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="card-title mb-2 text-alternate">Size</h6>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-start">
                                        <div
                                            class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                            <div class="fw-bold text-alternate">AA</div>
                                        </div>
                                        <div
                                            class="sw-5 sh-5 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                            <div class="fw-bold text-alternate">BB</div>
                                        </div>
                                        <div
                                            class="sw-6 sh-6 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                            <div class="fw-bold text-alternate">CC</div>
                                        </div>
                                        <div
                                            class="sw-7 sh-7 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                            <div class="fw-bold text-alternate">DD</div>
                                        </div>
                                        <div
                                            class="sw-8 sh-8 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                            <div class="fw-bold text-alternate">A</div>
                                        </div>
                                        <div
                                            class="sw-9 sh-9 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                            <div class="fw-bold text-alternate">B</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div
                                            class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                            <div class="fw-bold text-alternate">AA</div>
                                        </div>
                                        <div
                                            class="sw-5 sh-5 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                            <div class="fw-bold text-alternate">BB</div>
                                        </div>
                                        <div
                                            class="sw-6 sh-6 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                            <div class="fw-bold text-alternate">CC</div>
                                        </div>
                                        <div
                                            class="sw-7 sh-7 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                            <div class="fw-bold text-alternate">DD</div>
                                        </div>
                                        <div
                                            class="sw-8 sh-8 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                            <div class="fw-bold text-alternate">A</div>
                                        </div>
                                        <div
                                            class="sw-9 sh-9 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                            <div class="fw-bold text-alternate">B</div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="card-title mb-2 text-alternate">Colors</h6>
                                <div class="d-flex justify-content-start">
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-separator-light d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold">A</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold">B</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-muted d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold">C</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-alternate d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold">D</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-body d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold text-white">E</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-primary d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold text-white">F</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-secondary d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold text-white">G</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-tertiary d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold text-white">H</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-quaternary d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold text-white">I</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-success d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold text-white">J</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-danger d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold text-white">K</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-warning d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold text-white">L</div>
                                    </div>
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-info d-flex justify-content-center align-items-center rounded-xl">
                                        <div class="fw-bold text-white">M</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Letters End -->

                    <!-- Icons Start -->
                    <section class="scroll-section" id="iconThumbs">
                        <h2 class="small-title">Icon Thumbs</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="d-flex justify-content-start">
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                        <i data-cs-icon="user" class="text-alternate"></i>
                                    </div>
                                    <div
                                        class="sw-5 sh-5 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                        <i data-cs-icon="user" class="text-alternate"></i>
                                    </div>
                                    <div
                                        class="sw-6 sh-6 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                        <i data-cs-icon="user" class="text-alternate"></i>
                                    </div>
                                    <div
                                        class="sw-7 sh-7 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-xl">
                                        <i data-cs-icon="user" class="text-alternate"></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div
                                        class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                        <i data-cs-icon="user" class="text-alternate"></i>
                                    </div>
                                    <div
                                        class="sw-5 sh-5 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                        <i data-cs-icon="user" class="text-alternate"></i>
                                    </div>
                                    <div
                                        class="sw-6 sh-6 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                        <i data-cs-icon="user" class="text-alternate"></i>
                                    </div>
                                    <div
                                        class="sw-7 sh-7 me-1 mb-1 d-inline-block bg-separator d-flex justify-content-center align-items-center rounded-md">
                                        <i data-cs-icon="user" class="text-alternate"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Icons End -->

                    <!-- Stacked Start -->
                    <section class="scroll-section" id="stacked">
                        <h2 class="small-title">Stacked</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div>
                                    <div class="sw-6 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block ms-n4">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block ms-n4">
                                        <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block ms-n4">
                                        <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block ms-n4">
                                        <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block ms-n4">
                                        <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-6 sh-6 d-inline-block mb-1 ms-n4">
                                        <div
                                            class="w-100 h-100 bg-separator-light d-inline-block rounded-xl border border-2 border-foreground align-middle d-inline-flex justify-content-center align-items-center">
                                            <div class="fw-bold text-primary">10+</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="sw-4 mb-1 d-inline-block">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-4 mb-1 d-inline-block ms-n3">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-4 mb-1 d-inline-block ms-n3">
                                        <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-4 mb-1 d-inline-block ms-n3">
                                        <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-4 mb-1 d-inline-block ms-n3">
                                        <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-4 mb-1 d-inline-block ms-n3">
                                        <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                    </div>
                                    <div class="sw-4 sh-4 d-inline-block mb-1 ms-n3">
                                        <div
                                            class="w-100 h-100 bg-separator-light d-inline-block rounded-xl border border-2 border-foreground align-middle d-inline-flex justify-content-center align-items-center">
                                            <div class="fw-bold text-primary">10+</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Stacked End -->

                    <!-- Notification Start -->
                    <section class="scroll-section" id="notification">
                        <h2 class="small-title">Notification</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div>
                                    <div class="sw-6 mb-1 d-inline-block position-relative">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 mt-1 me-1"></i>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block position-relative">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 b-0 mt-1 mb-1 me-1"></i>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block position-relative">
                                        <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl s-0 t-0 mt-1 ms-1"></i>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block position-relative">
                                        <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl s-0 b-0 mb-1 ms-1"></i>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block position-relative">
                                        <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-secondary position-absolute rounded-xl e-0 t-0 mt-1 me-1"></i>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block position-relative">
                                        <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-secondary position-absolute rounded-xl e-0 b-0 mt-1 mb-1 me-1"></i>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block position-relative">
                                        <img src="{{ asset('/img/profile/profile-7.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-secondary position-absolute rounded-xl s-0 t-0 mt-1 ms-1"></i>
                                    </div>
                                    <div class="sw-6 mb-1 d-inline-block position-relative">
                                        <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-secondary position-absolute rounded-xl s-0 b-0 mb-1 ms-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Notification End -->

                    <!-- With Text Start -->
                    <section class="scroll-section" id="withText">
                        <h2 class="small-title">With Text</h2>
                        <div class="card mb-5">
                            <div class="card-body d-flex flex-column flex-sm-row">
                                <div class="d-flex align-items-center me-3">
                                    <div class="sw-6 d-inline-block position-relative me-2">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 mt-1 me-1"></i>
                                    </div>
                                    <div class="d-inline-block">
                                        <div class="text-primary">Olli Tera</div>
                                        <div class="text-muted text-small">Project Manager</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-inline-block me-2 text-end">
                                        <div class="text-primary">Olli Tera</div>
                                        <div class="text-muted text-small">Project Manager</div>
                                    </div>
                                    <div class="sw-6 d-inline-block position-relative">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl border border-2 border-foreground"
                                             alt="thumb"/>
                                        <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 mt-1 me-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- With Text End -->

                    <!-- Fluid Start -->
                    <section class="scroll-section" id="fluid">
                        <h2 class="small-title">Fluid</h2>
                        <div class="row">
                            <div class="col-12 col-sm-2">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <img src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                             class="img-fluid rounded-md" alt="Fluid image"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <img src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                             class="img-fluid rounded-md" alt="Fluid image"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <img src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                             class="img-fluid rounded-md" alt="Fluid image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Fluid End -->

                    <!-- Aligning Start -->
                    <section class="scroll-section" id="aligning">
                        <h2 class="small-title">Aligning</h2>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                     class="rounded mb-1 float-start sw-18" alt="card image"/>
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                     class="rounded mb-1 float-end sw-18" alt="card image"/>
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                     class="rounded mx-auto mb-1 d-block sw-18" alt="card image"/>
                            </div>
                        </div>
                    </section>
                    <!-- Aligning End -->
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
                        <a class="nav-link" href="#fixedWidth">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Fixed Width</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#fixedHeight">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Fixed Height</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#borderRadius">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Border Radius</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#letterThumbs">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Letter Thumbs</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#iconThumbs">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Icon Thumbs</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#stacked">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Stacked</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#notification">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Notification</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#withText">
                            <i data-cs-icon="chevron-right"></i>
                            <span>With Text</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#fluid">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Fluid</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#aligning">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Aligning</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

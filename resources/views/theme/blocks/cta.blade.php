@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Call to Action';
    $description = 'Call to actions elements with buttons, text and images that comes with the support for static and responsive sizes.';
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

                    <!-- Images Vertical Start -->
                    <section class="scroll-section" id="imagesVertical">
                        <h2 class="small-title">Images Vertical</h2>
                        <div class="row">
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 sh-sm-50 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-vertical-1.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div>
                                            <div class="cta-1 mb-5 text-black w-90">Introduction to Bread Making</div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 sh-sm-45 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-vertical-2.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div>
                                            <div class="cta-1 mb-5 text-black w-90">Introduction to Bread Making</div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 sh-sm-40 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-vertical-3.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div>
                                            <div class="cta-1 mb-5 text-black w-90">Introduction to Bread Making</div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 sh-sm-35 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-vertical-4.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div>
                                            <div class="cta-1 mb-5 text-black w-90">Introduction to Bread Making</div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>VIEW</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Images Vertical End -->

                    <!-- Images Square Start -->
                    <section class="scroll-section" id="imagesSquare">
                        <h2 class="small-title">Images Square</h2>
                        <div class="row">
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-square-1.jpg') }}" class="card-img h-100 scale"
                                         alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                            <div class="cta-2 mb-5 text-black w-80">Introduction to Bread Making</div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-square-2.jpg') }}" class="card-img h-100 scale"
                                         alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                            <div class="cta-2 mb-5 text-black w-80">Introduction to Bread Making</div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-square-3.jpg') }}" class="card-img h-100 scale"
                                         alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                            <div class="cta-2 mb-5 text-black w-80">Introduction to Bread Making</div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-square-4.jpg') }}" class="card-img h-100 scale"
                                         alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                            <div class="cta-2 mb-5 text-black w-80">Introduction to Bread Making</div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Images Square End -->

                    <!-- Images Horizontal Start -->
                    <section class="scroll-section" id="imagesHorizontal">
                        <h2 class="small-title">Images Horizontal</h2>
                        <div class="row">
                            <div class="col-auto mb-5">
                                <div class="card w-100 sw-sm-50 sh-19 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-horizontal-short-1.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div>
                                            <div class="cta-3 mb-3 text-black w-75 w-md-50">Introduction to Bread
                                                Making
                                            </div>
                                            <a href="#" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-5">
                                <div class="card w-100 sw-sm-50 sh-19 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-horizontal-short-2.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div>
                                            <div class="cta-3 mb-3 text-black w-75 w-md-50">Introduction to Bread
                                                Making
                                            </div>
                                            <a href="#" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Images Horizontal End -->

                    <!-- Images Standard Start -->
                    <section class="scroll-section" id="imagesStandard">
                        <h2 class="small-title">Images Standard</h2>
                        <div class="row">
                            <div class="col-auto mb-5">
                                <div class="card w-100 sw-sm-45 sh-25 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-standard-1.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                            <div class="cta-3 mb-5 text-black">
                                                Introduction
                                                <br/>
                                                to Bread Making
                                            </div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-5">
                                <div class="card w-100 sw-sm-45 sh-25 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-standard-2.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                            <div class="cta-3 mb-5 text-black">
                                                Introduction
                                                <br/>
                                                to Bread Making
                                            </div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-5">
                                <div class="card w-100 sw-sm-45 sh-25 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-standard-3.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                            <div class="cta-3 mb-5 text-black">
                                                Introduction
                                                <br/>
                                                to Bread Making
                                            </div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Images Standard End -->

                    <!-- Images Large Start -->
                    <section class="scroll-section" id="imagesLarge">
                        <h2 class="small-title">Images Large</h2>
                        <div class="row">
                            <div class="col-auto mb-5">
                                <div class="card w-100 sw-md-50 sh-40 hover-img-scale-up">
                                    <img src="{{ asset('/img/banner/cta-standard-1.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div>
                                            <div class="cta-1 mb-3 text-black w-75 w-sm-50">Introduction to Bread
                                                Making
                                            </div>
                                            <div class="w-50 text-black">Lollipop chocolate marzipan marshmallow gummi
                                                bears. Tootsie roll liquorice cake jelly beans.
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Images Large End -->

                    <!-- Images Dark Start -->
                    <section class="scroll-section" id="imagesDark">
                        <h2 class="small-title">Images Dark</h2>
                        <div class="row">
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 sh-sm-50 hover-img-scale-up">
                                    <img src="{{ asset('/img/product/vertical/vertical-1.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div class="card-img-overlay d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="cta-1 mb-5 text-white">
                                                Introduction
                                                <br/>
                                                to Bread
                                                <br/>
                                                Making
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 sh-sm-45 hover-img-scale-up">
                                    <img src="{{ asset('/img/product/vertical/vertical-2.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div class="card-img-overlay d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="cta-1 mb-5 text-white">
                                                Introduction
                                                <br/>
                                                to Bread
                                                <br/>
                                                Making
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 sh-sm-40 hover-img-scale-up">
                                    <img src="{{ asset('/img/product/vertical/vertical-3.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div class="card-img-overlay d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="cta-1 mb-5 text-white">
                                                Introduction
                                                <br/>
                                                to Bread
                                                <br/>
                                                Making
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto mb-5">
                                <div class="card w-100 sw-sm-30 sh-30 2h-sm-35 hover-img-scale-up">
                                    <img src="{{ asset('/img/product/vertical/vertical-4.jpg') }}"
                                         class="card-img h-100 scale" alt="card image"/>
                                    <div class="card-img-overlay d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="cta-1 mb-5 text-white">
                                                Introduction
                                                <br/>
                                                to Bread
                                                <br/>
                                                Making
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#"
                                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Images Dark End -->

                    <!-- Text and Buttons Start -->
                    <section class="scroll-section" id="textAndButtons">
                        <h2 class="small-title">Text and Buttons</h2>
                        <div class="row">
                            <div class="col-12 col-xxl-6 mb-5 h-100-card">
                                <div class="card h-100">
                                    <div class="card-body row g-0">
                                        <div class="col-12">
                                            <div class="cta-3">Ready to make bread?</div>
                                            <div class="mb-3 cta-3 text-primary">Start now!</div>
                                            <div class="row gx-2">
                                                <div class="col">
                                                    <div class="text-muted mb-3 mb-sm-0 pe-3">
                                                        Cheesecake chocolate carrot cake pie lollipop lemon toffee
                                                        lollipop. Oat cake pie cake cotton.
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 col-sm-auto d-flex align-items-center position-relative">
                                                    <a href="#" class="btn btn-icon btn-icon-start btn-primary">
                                                        <i data-cs-icon="send"></i>
                                                        <span>Start</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xxl-6 mb-5 h-100-card">
                                <div class="card h-100 bg-gradient-2">
                                    <div class="card-body row g-0">
                                        <div class="col-12">
                                            <div class="cta-3 text-white">Ready to make bread?</div>
                                            <div class="mb-3 cta-3 text-white">Start now!</div>
                                            <div class="row gx-2">
                                                <div class="col">
                                                    <div class="text-muted mb-3 mb-sm-0 pe-3 text-white">
                                                        Cheesecake chocolate carrot cake pie lollipop lemon toffee
                                                        lollipop. Oat cake pie cake cotton.
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 col-sm-auto d-flex align-items-center position-relative">
                                                    <a href="#" class="btn btn-icon btn-icon-start btn-white">
                                                        <i data-cs-icon="send"></i>
                                                        <span>Start</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Text and Buttons End -->

                    <!-- Title and Buttons Start -->
                    <section class="scroll-section" id="titleAndButtons">
                        <h2 class="small-title">Title and Buttons</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="cta-1 mb-4">
                                            Introduction to
                                            <br/>
                                            <span class="text-primary">Bread Making</span>
                                        </h5>
                                        <a href="#" class="btn btn-gradient-primary me-2">Get Started</a>
                                        <a href="#" class="btn btn-outline-primary me-2">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h5 class="cta-1 mb-4">
                                                Introduction to
                                                <br/>
                                                <span class="text-primary">Bread Making</span>
                                            </h5>
                                            <a href="#" class="btn btn-gradient-primary me-2">Get Started</a>
                                            <a href="#" class="btn btn-outline-primary me-2">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Title and Buttons End -->

                    <!-- Mail List Start -->
                    <section class="scroll-section" id="mailList">
                        <h2 class="small-title">Mail List</h2>
                        <div class="card mb-5">
                            <div class="card-body row g-0 text-center">
                                <div class="col-12">
                                    <div class="cta-3">Ready to make bread?</div>
                                    <div class="mb-3 cta-3 text-primary">Join our email list!</div>
                                    <div class="text-muted mb-3">Cheesecake chocolate carrot cake pie lollipop lemon
                                        drops.
                                    </div>
                                    <div class="row gx-2 justify-content-center">
                                        <div class="col-12 col-sm-4">
                                            <div class="d-flex flex-column justify-content-start">
                                                <div class="text-muted mb-3 mb-sm-0">
                                                    <input type="email" class="form-control" placeholder="E-mail"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <a href="#" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>Subscribe</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-body row g-0">
                                <div class="col-12">
                                    <div class="cta-3">Ready to make bread?</div>
                                    <div class="mb-3 cta-3 text-primary">Join our email list!</div>
                                    <div class="text-muted mb-3">
                                        Cheesecake chocolate carrot cake pie lollipop lemon drops toffee lollipop. Oat
                                        cake jujubes chupa chups cotton candy sugar plum.
                                        Jujubes wafer topping biscuit lemon drops jelly-o muffin. Jujubes jelly pastry
                                        tart chupa chups. Pudding cake tiramisu biscuit cake
                                        cotton candy caramels topping.
                                    </div>
                                    <div class="row gx-2 d-flex justify-content-center">
                                        <div class="col-12 col-sm-4">
                                            <div class="d-flex flex-column justify-content-start">
                                                <div class="text-muted mb-3 mb-sm-0">
                                                    <input type="text" class="form-control" placeholder="Name"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="d-flex flex-column justify-content-start">
                                                <div class="text-muted mb-3 mb-sm-0">
                                                    <input type="email" class="form-control" placeholder="Email"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <a href="#" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                                <i data-cs-icon="chevron-right"></i>
                                                <span>Subscribe</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 sh-25 sh-sm-19 mb-5">
                            <img src="{{ asset('/img/banner/cta-wide-4.jpg') }}" class="card-img h-100"
                                 alt="card image"/>
                            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="cta-3 text-black">Ready to make bread?</div>
                                        <div class="mb-3 cta-3 text-primary">Join our email list!</div>
                                        <div class="row gx-2">
                                            <div class="col-12 col-sm-6">
                                                <div class="d-flex flex-column justify-content-start">
                                                    <div class="text-muted mb-3 mb-sm-0">
                                                        <input type="email" class="form-control" placeholder="E-mail"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-auto">
                                                <a href="#"
                                                   class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                                    <i data-cs-icon="chevron-right"></i>
                                                    <span>Subscribe</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Mail List End -->

                    <!-- Search Start-->
                    <section class="scroll-section" id="search">
                        <h2 class="small-title">Search</h2>
                        <div class="card w-100 sh-25 sh-sm-19">
                            <img src="{{ asset('/img/banner/cta-wide-2.jpg') }}" class="card-img h-100"
                                 alt="card image"/>
                            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="cta-3 text-black">Looking for a recipe?</div>
                                        <div class="mb-3 cta-3 text-primary">Search here!</div>
                                        <div class="row gx-2">
                                            <div class="col-12 col-sm-6">
                                                <div class="d-flex flex-column justify-content-start">
                                                    <div class="text-muted mb-3 mb-sm-0">
                                                        <input type="email" class="form-control" placeholder="Search"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-auto">
                                                <a href="#"
                                                   class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                                    <i data-cs-icon="search"></i>
                                                    <span>Search</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Search End-->
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
                        <a class="nav-link" href="#imagesVertical">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images Vertical</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#imagesSquare">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images Square</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#imagesHorizontal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images Horizontal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#imagesStandard">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images Standard</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#imagesLarge">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images Large</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#imagesDark">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images Dark</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#textAndButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Text and Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#titleAndButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Title and Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#mailList">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Mail List</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#search">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Search</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = [];
    $title = 'Visual Dashboard';
    $description = 'A dashboard implementation that mainly has visual items such as banners, call to action buttons and stats.';
    $breadcrumbs = ["/"=>"Home","/Dashboards"=>"Dashboards"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/jquery.barrating.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/dashboard.visual.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-container">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <!-- Inventory Start -->
                <h2 class="small-title">Inventory</h2>
                <div class="mb-5">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-scale-up cursor-pointer sh-19">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                        <i data-cs-icon="radish" class="text-white"></i>
                                    </div>
                                    <div class="heading text-center mb-0 d-flex align-items-center lh-1">Radish</div>
                                    <div class="text-small text-primary">14 PRODUCTS</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-scale-up cursor-pointer sh-19">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                        <i data-cs-icon="loaf" class="text-white"></i>
                                    </div>
                                    <div class="heading text-center mb-0 d-flex align-items-center lh-1">Mushroom</div>
                                    <div class="text-small text-primary">8 PRODUCTS</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-scale-up cursor-pointer sh-19">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                        <i data-cs-icon="pepper" class="text-white"></i>
                                    </div>
                                    <div class="heading text-center mb-0 d-flex align-items-center lh-1">Pepper</div>
                                    <div class="text-small text-primary">21 PRODUCTS</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-scale-up cursor-pointer sh-19">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div class="sh-5 sw-5 border border-dashed rounded-xl mx-auto">
                                        <div class="bg-separator w-100 h-100 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                            <i data-cs-icon="plus" class="text-white"></i>
                                        </div>
                                    </div>
                                    <div class="heading text-center text-muted mb-0 d-flex align-items-center lh-1">Add
                                        New
                                    </div>
                                    <div class="text-small text-primary">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inventory End -->

                <!-- Products Start -->
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Stocks</h2>
                    <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small"
                            type="button">
                        <span class="align-bottom">View All</span>
                        <i data-cs-icon="chevron-right" class="align-middle" data-cs-size="12"></i>
                    </button>
                </div>
                <div class="scroll-out mb-5">
                    <div class="scroll-by-count mb-n2" data-count="5">
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-10">
                                <div class="col-auto h-100">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-md-12"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Barmbrack</a>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                Whole Wheat
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                                1.543 Sales
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-10">
                                <div class="col-auto h-100">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/barmbrack.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-md-12"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Cheesymite Scroll</a>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                Whole Wheat
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                                2.701 Sales
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-10">
                                <div class="col-auto h-100">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/panettone.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-md-12"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Cholermüs</a>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                Multigrain
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                                4.024 Sales
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-10">
                                <div class="col-auto h-100">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/zopf.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal h-100 sw-13 sw-md-12"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Ruisreikäleipä</a>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                Sourdough
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                                1.972 Sales
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-10">
                                <div class="col-auto h-100">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal sw-13 sw-md-12"/>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Buccellato di Lucca</a>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                Whole Wheat
                                            </div>
                                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                                1.352 Sales
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products End -->
            </div>
            <div class="col-12 col-lg-4">
                <!-- Today's Orders Start -->
                <h2 class="small-title">Today's Orders</h2>
                <div class="card w-100 sh-50 mb-5">
                    <img src="{{ asset('/img/banner/cta-square-4.jpg') }}" class="card-img h-100" alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <div>
                                <div class="cta-1 text-primary mb-1">124</div>
                                <div class="lh-1-25 mb-0">Received Orders</div>
                            </div>
                            <div>
                                <div class="cta-1 text-primary mb-1">64</div>
                                <div class="lh-1-25 mb-0">Completed Orders</div>
                            </div>
                            <div>
                                <div class="cta-1 text-primary mb-1">34</div>
                                <div class="lh-1-25 mb-0">Pending Orders</div>
                            </div>
                            <div>
                                <div class="cta-1 text-primary mb-1">23</div>
                                <div class="lh-1-25 mb-0">Shipped Orders</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Today's Orders End -->

                <!-- Categories Start -->
                <h2 class="small-title">Categories</h2>
                <div class="card mb-5 h-auto sh-lg-23">
                    <div class="card-body h-100">
                        <div class="row g-0 h-100">
                            <div class="col-12 col-sm-6 h-100 d-flex justify-content-between flex-column">
                                <a href="#" class="body-link d-flex mb-2">Whole Wheat (2)</a>
                                <a href="#" class="body-link d-flex mb-2">Brown (6)</a>
                                <a href="#" class="body-link d-flex mb-2">White (4)</a>
                                <a href="#" class="body-link d-flex mb-2">Vegetable (2)</a>
                            </div>
                            <div class="col-12 col-sm-6 h-100 d-flex justify-content-between flex-column">
                                <a href="#" class="body-link d-flex mb-2">Diet (2)</a>
                                <a href="#" class="body-link d-flex mb-2">Rye (6)</a>
                                <a href="#" class="body-link d-flex mb-2">Sourdough (3)</a>
                                <a href="#" class="body-link d-flex mb-2">Multigrain (4)</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Categories End -->
            </div>
        </div>

        <!-- Banners Start -->
        <h2 class="small-title">Extend Your Knowledge</h2>
        <div class="row g-2 mb-5">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card w-100 sh-23 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-vertical-1.jpg') }}" class="card-img h-100 scale"
                         alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <div class="cta-2 text-black w-75">Introduction to Bread Making</div>
                            <a href="/Pages/Blog/List"
                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                <i data-cs-icon="chevron-right" class="text-white"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card w-100 sh-23 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-vertical-2.jpg') }}" class="card-img h-100 scale"
                         alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <div class="cta-2 text-black w-75">Basic Principles of Cooking</div>
                            <a href="/Pages/Blog/List"
                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                <i data-cs-icon="chevron-right" class="text-white"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card w-100 sh-23 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-vertical-3.jpg') }}" class="card-img h-100 scale"
                         alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <div class="cta-2 text-black w-75">Easy & Practical Recipes</div>
                            <a href="/Pages/Blog/List"
                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                <i data-cs-icon="chevron-right" class="text-white"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card w-100 sh-23 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-vertical-4.jpg') }}" class="card-img h-100 scale"
                         alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <div class="cta-2 text-black w-75">Introduction to Bread Making</div>
                            <a href="/Pages/Blog/List"
                               class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                <i data-cs-icon="chevron-right" class="text-white"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banners End -->

        <div class="row">
            <!-- Latest Registrations Start -->
            <div class="col-12 col-xl-6 mb-5">
                <h2 class="small-title">Latest Registrations</h2>
                <div class="card h-100-card">
                    <div class="card-body">
                        <div class="scroll-out">
                            <div class="scroll-by-count mb-n2" data-childSelector=".scroll-item" data-count="5">
                                <div class="mb-2 scroll-item">
                                    <div class="row g-0 sh-10 sh-sm-7">
                                        <div class="col-auto">
                                            <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                                 class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb"/>
                                        </div>
                                        <div class="col">
                                            <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                                <div class="d-flex flex-column mb-2 mb-sm-0">
                                                    <div>Joisse Kaycee</div>
                                                    <div class="text-small text-muted">UX Designer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                            type="button">
                                                        <i data-cs-icon="more-vertical"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 scroll-item">
                                    <div class="row g-0 sh-10 sh-sm-7">
                                        <div class="col-auto">
                                            <img src="{{ asset('/img/profile/profile-7.jpg') }}"
                                                 class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb"/>
                                        </div>
                                        <div class="col">
                                            <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                                <div class="d-flex flex-column mb-2 mb-sm-0">
                                                    <div>Zayn Hartley</div>
                                                    <div class="text-small text-muted">Frontend Developer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                            type="button">
                                                        <i data-cs-icon="more-vertical"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 scroll-item">
                                    <div class="row g-0 sh-10 sh-sm-7">
                                        <div class="col-auto">
                                            <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                                 class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb"/>
                                        </div>
                                        <div class="col">
                                            <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                                <div class="d-flex flex-column mb-2 mb-sm-0">
                                                    <div>Esperanza Lodge</div>
                                                    <div class="text-small text-muted">Project Manager</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                            type="button">
                                                        <i data-cs-icon="more-vertical"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 scroll-item">
                                    <div class="row g-0 sh-10 sh-sm-7">
                                        <div class="col-auto">
                                            <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                 class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb"/>
                                        </div>
                                        <div class="col">
                                            <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                                <div class="d-flex flex-column mb-2 mb-sm-0">
                                                    <div>Kathryn Mengel</div>
                                                    <div class="text-small text-muted">Executive Team Leader</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                            type="button">
                                                        <i data-cs-icon="more-vertical"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 scroll-item">
                                    <div class="row g-0 sh-10 sh-sm-7">
                                        <div class="col-auto">
                                            <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                                 class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb"/>
                                        </div>
                                        <div class="col">
                                            <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                                <div class="d-flex flex-column mb-2 mb-sm-0">
                                                    <div>Blaine Cottrell</div>
                                                    <div class="text-small text-muted">Accounting</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                            type="button">
                                                        <i data-cs-icon="more-vertical"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 scroll-item">
                                    <div class="row g-0 sh-10 sh-sm-7">
                                        <div class="col-auto">
                                            <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                                 class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb"/>
                                        </div>
                                        <div class="col">
                                            <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                                <div class="d-flex flex-column mb-2 mb-sm-0">
                                                    <div>Cherish Kerr</div>
                                                    <div class="text-small text-muted">Development Lead</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                            type="button">
                                                        <i data-cs-icon="more-vertical"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 scroll-item">
                                    <div class="row g-0 sh-10 sh-sm-7">
                                        <div class="col-auto">
                                            <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                 class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb"/>
                                        </div>
                                        <div class="col">
                                            <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                                <div class="d-flex flex-column mb-2 mb-sm-0">
                                                    <div>Olli Hawkins</div>
                                                    <div class="text-small text-muted">Client Relations Lead</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                            type="button">
                                                        <i data-cs-icon="more-vertical"></i>
                                                    </button>
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
            <!-- Latest Registrations End -->

            <!-- Tasks Start -->
            <div class="col-12 col-xl-6 mb-5">
                <h2 class="small-title">Tasks</h2>
                <div class="card h-100-card">
                    <div class="card-body scroll-out">
                        <div class="scroll-by-count" data-childSelector=".scroll-item" data-count="7">
                            <div class="mb-2 scroll-item">
                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                    <input type="checkbox" class="form-check-input" checked/>
                                    <span class="form-check-label d-block">
                  <span>Create Wireframes</span>
                  <span class="text-muted d-block text-small mt-0">Today 09:00</span>
                </span>
                                </label>
                            </div>
                            <div class="mb-2 scroll-item">
                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                    <input type="checkbox" class="form-check-input"/>
                                    <span class="form-check-label d-block">
                          <span>Meeting with the team</span>
                          <span class="text-muted d-block text-small mt-0">Today 13:00</span>
                        </span>
                                </label>
                            </div>
                            <div class="mb-2 scroll-item">
                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                    <input type="checkbox" class="form-check-input" checked/>
                                    <span class="form-check-label d-block">
                          <span>Business lunch with clients</span>
                          <span class="text-muted d-block text-small mt-0">Today 14:00</span>
                        </span>
                                </label>
                            </div>
                            <div class="mb-2 scroll-item">
                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                    <input type="checkbox" class="form-check-input" checked/>
                                    <span class="form-check-label d-block">
                          <span>Training with the team</span>
                          <span class="text-muted d-block text-small mt-0">Today 15:00</span>
                        </span>
                                </label>
                            </div>
                            <div class="mb-2 scroll-item">
                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                    <input type="checkbox" class="form-check-input"/>
                                    <span class="form-check-label d-block">
                          <span>Account meeting</span>
                          <span class="text-muted d-block text-small mt-0">Today 17:00</span>
                        </span>
                                </label>
                            </div>
                            <div class="mb-2 scroll-item">
                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                    <input type="checkbox" class="form-check-input"/>
                                    <span class="form-check-label d-block">
                          <span>Gym</span>
                          <span class="text-muted d-block text-small mt-0">Today 17:30</span>
                        </span>
                                </label>
                            </div>
                            <div class="mb-2 scroll-item">
                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                    <input type="checkbox" class="form-check-input"/>
                                    <span class="form-check-label d-block">
                          <span>Dinner with the family</span>
                          <span class="text-muted d-block text-small mt-0">Today 19:30</span>
                        </span>
                                </label>
                            </div>
                            <div class="mb-2 scroll-item">
                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                    <input type="checkbox" class="form-check-input"/>
                                    <span class="form-check-label d-block">
                          <span>Gym</span>
                          <span class="text-muted d-block text-small mt-0">Today 17:30</span>
                        </span>
                                </label>
                            </div>
                            <div class="mb-2 scroll-item">
                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                    <input type="checkbox" class="form-check-input"/>
                                    <span class="form-check-label d-block">
                          <span>Dinner with the family</span>
                          <span class="text-muted d-block text-small mt-0">Today 19:30</span>
                        </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tasks End -->
        </div>

        <div class="row gy-5">
            <!-- Recent Ratings Start -->
            <div class="col-lg-8">
                <h2 class="small-title">Recent Ratings</h2>
                <div class="scroll-out mb-n2">
                    <div class="scroll-by-count" data-count="4">
                        <div class="card mb-2">
                            <div class="row g-0 sh-17 sh-lg-10">
                                <div class="col-auto">
                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}" alt="user"
                                         class="card-img card-img-horizontal h-100 sw-lg-11 sw-14"/>
                                </div>
                                <div class="col">
                                    <div class="card-body px-4 py-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <a href="#"
                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                <div>Spelt Bread</div>
                                                <div class="text-small text-muted text-truncate">Liquorice fruitcake
                                                    tiramisu caramels.
                                                </div>
                                            </a>
                                            <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                <div class="lh-1 text-alternate">
                                                    <div class="br-wrapper br-theme-cs-icon">
                                                        <select class="recentRating" name="rating" autocomplete="off"
                                                                data-readonly="true" data-initial-rating="5">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                                <div class="text-alternate">1.552</div>
                                                <div class="text-muted text-small">Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-17 sh-lg-10">
                                <div class="col-auto">
                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}" alt="user"
                                         class="card-img card-img-horizontal h-100 sw-lg-11 sw-14"/>
                                </div>
                                <div class="col">
                                    <div class="card-body px-4 py-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <a href="#"
                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                <div>Cheesymite Scroll</div>
                                                <div class="text-small text-muted text-truncate">Chocolate tiramisu
                                                    sweet dragée.
                                                </div>
                                            </a>
                                            <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                <div class="lh-1 text-alternate">
                                                    <div class="br-wrapper br-theme-cs-icon">
                                                        <select class="recentRating" name="rating" autocomplete="off"
                                                                data-readonly="true" data-initial-rating="5">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                                <div class="text-alternate">1.192</div>
                                                <div class="text-muted text-small">Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-17 sh-lg-10">
                                <div class="col-auto">
                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}" alt="user"
                                         class="card-img card-img-horizontal h-100 sw-lg-11 sw-14"/>
                                </div>
                                <div class="col">
                                    <div class="card-body px-4 py-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <a href="#"
                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                <div>Cholermüs</div>
                                                <div class="text-small text-muted text-truncate">Candy brownie sesame
                                                    snaps pastry.
                                                </div>
                                            </a>
                                            <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                <div class="lh-1 text-alternate">
                                                    <div class="br-wrapper br-theme-cs-icon">
                                                        <select class="recentRating" name="rating" autocomplete="off"
                                                                data-readonly="true" data-initial-rating="4">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                                <div class="text-alternate">2.853</div>
                                                <div class="text-muted text-small">Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-17 sh-lg-10">
                                <div class="col-auto">
                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" alt="user"
                                         class="card-img card-img-horizontal h-100 sw-lg-11 sw-14"/>
                                </div>
                                <div class="col">
                                    <div class="card-body px-4 py-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <a href="#"
                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                <div>Ruisreikäleipä</div>
                                                <div class="text-small text-muted text-truncate">Candy cookie jujubes
                                                    gummi bears.
                                                </div>
                                            </a>
                                            <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                <div class="lh-1 text-alternate">
                                                    <div class="br-wrapper br-theme-cs-icon">
                                                        <select class="recentRating" name="rating" autocomplete="off"
                                                                data-readonly="true" data-initial-rating="5">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                                <div class="text-alternate">1.290</div>
                                                <div class="text-muted text-small">Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-17 sh-lg-10">
                                <div class="col-auto">
                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}" alt="user"
                                         class="card-img card-img-horizontal h-100 sw-lg-11 sw-14"/>
                                </div>
                                <div class="col">
                                    <div class="card-body px-4 py-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <a href="#"
                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                <div>Zopf</div>
                                                <div class="text-small text-muted text-truncate">Danish cookie marzipan
                                                    chocolate bar.
                                                </div>
                                            </a>
                                            <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                <div class="lh-1 text-alternate">
                                                    <div class="br-wrapper br-theme-cs-icon">
                                                        <select class="recentRating" name="rating" autocomplete="off"
                                                                data-readonly="true" data-initial-rating="5">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                                <div class="text-alternate">1.744</div>
                                                <div class="text-muted text-small">Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Ratings End -->

            <!-- Spendings Start -->
            <div class="col-lg-4">
                <h2 class="small-title">Spendings</h2>
                <div class="card h-100-card">
                    <div class="card-body">
                        <div class="row g-0 align-items-center mb-4 sh-5">
                            <div class="col-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary">
                                    <i data-cs-icon="loaf" class="text-white"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-5 d-flex align-items-center">Ingredients</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="cta-3 text-primary sh-5 d-flex align-items-center">30%</div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="30"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-0 align-items-center mb-4 sh-5">
                            <div class="col-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary">
                                    <i data-cs-icon="building" class="text-white"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-5 d-flex align-items-center">Rent</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="cta-3 text-primary sh-5 d-flex align-items-center">15%</div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col sh-1">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="15"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-0 align-items-center mb-4 sh-5">
                            <div class="col-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary">
                                    <i data-cs-icon="electricity" class="text-white"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-5 d-flex align-items-center">Utilities</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="cta-3 text-primary sh-5 d-flex align-items-center">10%</div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col sh-1">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="10"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col pe-4 d-flex flex-column justify-content-between align-items-end">
                                <div class="text-small text-muted sh-3 d-flex align-items-center">BUDGET</div>
                                <div class="text-small text-muted sh-3 d-flex align-items-center">SPEND</div>
                                <div class="text-small text-muted sh-5 d-flex align-items-end">BALANCE</div>
                            </div>
                            <div class="col-auto d-flex flex-column justify-content-between align-items-end">
                                <div class="text-muted sh-3 d-flex align-items-center">$12.000</div>
                                <div class="text-muted sh-3 d-flex align-items-center">- $8.750</div>
                                <div class="cta-4 text-primary sh-5 d-flex align-items-end">$3.250</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Spendings End -->
        </div>
    </div>
@endsection

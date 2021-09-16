@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Tabular Data';
    $description = 'Tables that are created without using table markup in favour of flex divs that have breakpoint specific classes. They are available in varieties that contain icons, images and texts with or without a scrollbar.';
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
    <script src="{{ asset('/js/vendor/jquery.barrating.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/checkall.js') }}"></script>
    <script src="{{ asset('/js/pages/blocks.tabulardata.js') }}"></script>
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

                    <div class="row">
                        <!-- Basic Items Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="basicItems">
                                <div class="d-flex justify-content-between">
                                    <h2 class="small-title">Basic Items</h2>
                                    <button
                                        class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-haspopup="true">
                                        <i data-cs-icon="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                                        <a class="dropdown-item" href="#">Reload</a>
                                        <a class="dropdown-item" href="#">Stats</a>
                                        <a class="dropdown-item" href="#">Details</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="4">
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Barmbrack</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                                Whole Wheat
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
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
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Cheesymite Scroll</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                                Whole Wheat
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
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
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Cholermüs</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                                Multigrain
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
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
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Ruisreikäleipä</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                                Sourdough
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
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
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Buccellato di Lucca</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                                                Whole Wheat
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                                                1.352 Sales
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Basic Items End -->

                        <!-- Buttons Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="buttons">
                                <div class="d-flex justify-content-between">
                                    <h2 class="small-title">Buttons</h2>
                                    <button
                                        class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-haspopup="true">
                                        <i data-cs-icon="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                                        <a class="dropdown-item" href="#">Reload</a>
                                        <a class="dropdown-item" href="#">Stats</a>
                                        <a class="dropdown-item" href="#">Details</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="4">
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                                <div>Kommissbrot</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                                    <span
                                                                        class="d-none d-xxl-inline-block">Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto position-relative h-100">
                                                    <span
                                                        class="badge rounded-pill bg-primary me-1 position-absolute e-n3 t-2">TREND</span>
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                                <div>Yeast Karavai</div>
                                                                <div class="text-small text-muted text-truncate">Gummi
                                                                    liquorice olegário jujubes cookie.
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                                    <span
                                                                        class="d-none d-xxl-inline-block">Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex flex-column mb-2 mb-md-0">
                                                                <div>Soda Bread</div>
                                                                <div class="text-small text-muted text-truncate">
                                                                    Marshmallow topping icing liquorice oat cake.
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-7 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                                    <span
                                                                        class="d-none d-xxl-inline-block">Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex flex-column mb-2 mb-md-0">
                                                                <div>Cheesymite Scroll</div>
                                                                <div class="text-small text-muted text-truncate">Tootsie
                                                                    brownie ice cream marshmallow topping.
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-7 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                                    <span
                                                                        class="d-none d-xxl-inline-block">Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex flex-column mb-2 mb-md-0">
                                                                <div>Bazlama</div>
                                                                <div class="text-small text-muted text-truncate">Tootsie
                                                                    roll cream marshmallow chocolate bar.
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-7 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                                                    type="button">
                                                                    <i data-cs-icon="bin" data-cs-size="15"></i>
                                                                    <span
                                                                        class="d-none d-xxl-inline-block">Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Buttons End -->

                        <!-- Badges Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="badges">
                                <h2 class="small-title">Badges</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="4">
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Barmbrack</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                                <span class="badge rounded-pill bg-primary me-1">IN STOCK</span>
                                                                <span
                                                                    class="badge rounded-pill bg-secondary me-1">SALE</span>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-1 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button">
                                                                    <i data-cs-icon="chevron-right"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Cheesymite Scroll</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                                <span class="badge rounded-pill bg-primary me-1">IN STOCK</span>
                                                                <span
                                                                    class="badge rounded-pill bg-outline-separator me-1">SALE</span>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-1 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button">
                                                                    <i data-cs-icon="chevron-right"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Cholermüs</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                                <span
                                                                    class="badge rounded-pill bg-outline-separator me-1">IN STOCK</span>
                                                                <span
                                                                    class="badge rounded-pill bg-secondary me-1">SALE</span>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-1 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button">
                                                                    <i data-cs-icon="chevron-right"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Ruisreikäleipä</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                                <span class="badge rounded-pill bg-primary me-1">IN STOCK</span>
                                                                <span
                                                                    class="badge rounded-pill bg-secondary me-1">SALE</span>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-1 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button">
                                                                    <i data-cs-icon="chevron-right"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-14 sh-md-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                                <a href="#">Buccellato di Lucca</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-6 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                                <span class="badge rounded-pill bg-primary me-1">IN STOCK</span>
                                                                <span
                                                                    class="badge rounded-pill bg-secondary me-1">SALE</span>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-1 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button">
                                                                    <i data-cs-icon="chevron-right"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Badges End -->

                        <!-- Schedule Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="schedule">
                                <h2 class="small-title">Schedule</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="4">
                                        <div class="card mb-2 sh-16 sh-md-10">
                                            <div class="row g-0 h-100">
                                                <div
                                                    class="col-12 col-md-7 d-flex align-items-start align-items-md-center card-body pt-md-0 pb-0 pe-md-0">
                                                    <label
                                                        class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 w-100 d-flex">
                                                        <input type="checkbox" class="form-check-input" checked/>
                                                        <span class="form-check-label d-flex align-items-center">
                                                        <span class="content">
                                                            <span class="mb-0 lh-1">Create Wireframes</span>
                                                        </span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <div class="card-body pt-0 pb-md-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-9 col-md-11 d-flex flex-column text-muted text-medium">
                                                                <div>10:00</div>
                                                                <div>15.09.2020</div>
                                                            </div>
                                                            <div
                                                                class="col-3 col-md-1 d-flex justify-content-end align-self-center">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false" aria-haspopup="true">
                                                                    <i data-cs-icon="more-horizontal"></i>
                                                                </button>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Details</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-16 sh-md-10">
                                            <div class="row g-0 h-100">
                                                <div
                                                    class="col-12 col-md-7 d-flex align-items-start align-items-md-center card-body pt-md-0 pb-0 pe-md-0">
                                                    <label
                                                        class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 w-100 d-flex">
                                                        <input type="checkbox" class="form-check-input" checked/>
                                                        <span class="form-check-label d-flex align-items-center">
                                                        <span class="content">
                                                            <span class="mb-0 lh-1">Business lunch with clients</span>
                                                        </span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <div class="card-body pt-0 pb-md-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-9 col-md-11 d-flex flex-column text-muted text-medium">
                                                                <div>12:00</div>
                                                                <div>15.09.2020</div>
                                                            </div>
                                                            <div
                                                                class="col-3 col-md-1 d-flex justify-content-end align-self-center">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false" aria-haspopup="true">
                                                                    <i data-cs-icon="more-horizontal"></i>
                                                                </button>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Details</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-16 sh-md-10">
                                            <div class="row g-0 h-100">
                                                <div
                                                    class="col-12 col-md-7 d-flex align-items-start align-items-md-center card-body pt-md-0 pb-0 pe-md-0">
                                                    <label
                                                        class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 w-100 d-flex">
                                                        <input type="checkbox" class="form-check-input"/>
                                                        <span class="form-check-label d-flex align-items-center">
                                                        <span class="content">
                                                            <span class="mb-0 lh-1">Training with the team</span>
                                                        </span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <div class="card-body pt-0 pb-md-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-9 col-md-11 d-flex flex-column text-muted text-medium">
                                                                <div>14:30</div>
                                                                <div>15.09.2020</div>
                                                            </div>
                                                            <div
                                                                class="col-3 col-md-1 d-flex justify-content-end align-self-center">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false" aria-haspopup="true">
                                                                    <i data-cs-icon="more-horizontal"></i>
                                                                </button>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Details</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-16 sh-md-10">
                                            <div class="row g-0 h-100">
                                                <div
                                                    class="col-12 col-md-7 d-flex align-items-start align-items-md-center card-body pt-md-0 pb-0 pe-md-0">
                                                    <label
                                                        class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 w-100 d-flex">
                                                        <input type="checkbox" class="form-check-input"/>
                                                        <span class="form-check-label d-flex align-items-center">
                                                        <span class="content">
                                                            <span class="mb-0 lh-1">Gym</span>
                                                        </span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <div class="card-body pt-0 pb-md-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-9 col-md-11 d-flex flex-column text-muted text-medium">
                                                                <div>17:00</div>
                                                                <div>15.09.2020</div>
                                                            </div>
                                                            <div
                                                                class="col-3 col-md-1 d-flex justify-content-end align-self-center">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false" aria-haspopup="true">
                                                                    <i data-cs-icon="more-horizontal"></i>
                                                                </button>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Details</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-16 sh-md-10">
                                            <div class="row g-0 h-100">
                                                <div
                                                    class="col-12 col-md-7 d-flex align-items-start align-items-md-center card-body pt-md-0 pb-0 pe-md-0">
                                                    <label
                                                        class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 w-100 d-flex">
                                                        <input type="checkbox" class="form-check-input"/>
                                                        <span class="form-check-label d-flex align-items-center">
                                                        <span class="content">
                                                            <span class="mb-0 lh-1">Dinner with the boys</span>
                                                        </span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <div class="card-body pt-0 pb-md-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div
                                                                class="col-9 col-md-11 d-flex flex-column text-muted text-medium">
                                                                <div>19:00</div>
                                                                <div>15.09.2020</div>
                                                            </div>
                                                            <div
                                                                class="col-3 col-md-1 d-flex justify-content-end align-self-center">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false" aria-haspopup="true">
                                                                    <i data-cs-icon="more-horizontal"></i>
                                                                </button>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Details</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Schedule End -->

                        <!-- Users Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="users">
                                <h2 class="small-title">Users</h2>
                                <div class="card h-100-card">
                                    <div class="card-body mb-n2 scroll-out">
                                        <div class="scroll-by-count" data-count="5" data-childSelector="div.item"
                                             data-subtractMargin="false">
                                            <div class="row g-0 sh-13 sh-md-6 mb-2 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-md-0">
                                                                <div>Blaine Cottrell</div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-4 d-flex align-items-center text-muted pe-2 mb-2 mb-md-0">
                                                                Project Manager
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-delay="0"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Twitter">
                                                                    <i data-cs-icon="twitter"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-13 sh-md-6 mb-2 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-md-0">
                                                                <div>Winry Rockbell</div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-4 d-flex align-items-center text-muted pe-2 mb-2 mb-md-0">
                                                                Development Lead
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-delay="0"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Facebook">
                                                                    <i data-cs-icon="facebook"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-13 sh-md-6 mb-2 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-md-0">
                                                                <div>Kirby Peters</div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-4 d-flex align-items-center text-muted pe-2 mb-2 mb-md-0">
                                                                Accounting
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-delay="0"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Linkedin">
                                                                    <i data-cs-icon="twitter"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-13 sh-md-6 mb-2 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-md-0">
                                                                <div>Olli Hawkins</div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-4 d-flex align-items-center text-muted pe-2 mb-2 mb-md-0">
                                                                Client Relations
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end me-1"
                                                                    type="button" data-bs-delay="0"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Facebook">
                                                                    <i data-cs-icon="facebook"></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-delay="0"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Twitter">
                                                                    <i data-cs-icon="twitter"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-13 sh-md-6 mb-2 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-md-0">
                                                                <div>Daisy Hartley</div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-4 d-flex align-items-center text-muted pe-2 mb-2 mb-md-0">
                                                                Customer Engagement
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-delay="0"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Linkedin">
                                                                    <i data-cs-icon="twitter"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-13 sh-md-6 mb-2 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                            <div
                                                                class="col-12 col-md-5 d-flex align-items-center mb-md-0">
                                                                <div>Kathryn Mengel</div>
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-4 d-flex align-items-center text-muted pe-2 mb-2 mb-md-0">
                                                                UI Designer
                                                            </div>
                                                            <div
                                                                class="col-12 col-md-3 d-flex align-items-center justify-content-md-end">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end me-1"
                                                                    type="button" data-bs-delay="0"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Instagram">
                                                                    <i data-cs-icon="twitter"></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end"
                                                                    type="button" data-bs-delay="0"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Twitter">
                                                                    <i data-cs-icon="facebook"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Users End -->

                        <!-- Teams Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="teams">
                                <h2 class="small-title">Teams</h2>
                                <div class="card h-100-card">
                                    <div class="card-body mb-n2 scroll-out">
                                        <div class="scroll-by-count" data-count="6" data-childSelector="div.item"
                                             data-subtractMargin="false">
                                            <div
                                                class="row g-0 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item">
                                                <div class="col-auto d-flex align-items-center mb-md-0">
                                                    <div class="sw-12">
                                                        <div class="sw-4 mb-1 d-inline-block">
                                                            <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kathryn Mengel"/>
                                                        </div>
                                                        <div class="sw-4 mb-1 d-inline-block ms-n3">
                                                            <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kirby Peters"/>
                                                        </div>
                                                        <div
                                                            class="sw-4 sh-4 ms-n3 bg-separator-light d-inline-flex justify-content-center align-items-center rounded-xl">
                                                            <div class="fw-bold text-small text-primary cursor-default"
                                                                 data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kenny Carlson, Noor Wilder, Henri Pate">
                                                                3+
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                        <div
                                                            class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                            <div>Developer Team</div>
                                                            <div class="text-muted text-small">5 Members</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                            <div>4 Tasks</div>
                                                            <div class="text-small text-muted">Active</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                            <div>2 Tasks</div>
                                                            <div class="text-small text-muted">On Hold</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="row g-0 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item">
                                                <div class="col-auto d-flex align-items-center mb-md-0">
                                                    <div class="sw-12">
                                                        <div class="sw-4 mb-1 d-inline-block">
                                                            <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kathryn Mengel"/>
                                                        </div>
                                                        <div class="sw-4 mb-1 d-inline-block ms-n3">
                                                            <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kirby Peters"/>
                                                        </div>
                                                        <div
                                                            class="sw-4 sh-4 ms-n3 bg-separator-light d-inline-flex justify-content-center align-items-center rounded-xl">
                                                            <div class="fw-bold text-small text-primary cursor-default"
                                                                 data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Henri Pate">
                                                                1+
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                        <div
                                                            class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                            <div>Design Team</div>
                                                            <div class="text-muted text-small">3 Members</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                            <div>2 Tasks</div>
                                                            <div class="text-small text-muted">Active</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                            <div>0 Tasks</div>
                                                            <div class="text-small text-muted">On Hold</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item">
                                                <div class="col-auto d-flex align-items-center mb-md-0">
                                                    <div class="sw-12">
                                                        <div class="sw-4 mb-1 d-inline-block">
                                                            <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Alissia Blair"/>
                                                        </div>
                                                        <div class="sw-4 mb-1 d-inline-block ms-n3">
                                                            <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Jayne Conrad"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                        <div
                                                            class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                            <div>Account Team</div>
                                                            <div class="text-muted text-small">2 Members</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                            <div>1 Tasks</div>
                                                            <div class="text-small text-muted">Active</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                            <div>4 Tasks</div>
                                                            <div class="text-small text-muted">On Hold</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="row g-0 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item">
                                                <div class="col-auto d-flex align-items-center mb-md-0">
                                                    <div class="sw-12">
                                                        <div class="sw-4 mb-1 d-inline-block">
                                                            <img src="{{ asset('/img/profile/profile-7.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kathryn Mengel"/>
                                                        </div>
                                                        <div class="sw-4 mb-1 d-inline-block ms-n3">
                                                            <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kirby Peters"/>
                                                        </div>
                                                        <div
                                                            class="sw-4 sh-4 ms-n3 bg-separator-light d-inline-flex justify-content-center align-items-center rounded-xl">
                                                            <div class="fw-bold text-small text-primary cursor-default"
                                                                 data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Sade Cooley, Ellouise Powers">
                                                                2+
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                        <div
                                                            class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                            <div>Client Team</div>
                                                            <div class="text-muted text-small">4 Members</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                            <div>2 Tasks</div>
                                                            <div class="text-small text-muted">Active</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                            <div>7 Tasks</div>
                                                            <div class="text-small text-muted">On Hold</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="row g-0 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item">
                                                <div class="col-auto d-flex align-items-center mb-md-0">
                                                    <div class="sw-12">
                                                        <div class="sw-4 mb-1 d-inline-block">
                                                            <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Milly Briggs"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                        <div
                                                            class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                            <div>Management</div>
                                                            <div class="text-muted text-small">1 Member</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                            <div>2 Tasks</div>
                                                            <div class="text-small text-muted">Active</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                            <div>0 Tasks</div>
                                                            <div class="text-small text-muted">On Hold</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="row g-0 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item">
                                                <div class="col-auto d-flex align-items-center mb-md-0">
                                                    <div class="sw-12">
                                                        <div class="sw-4 mb-1 d-inline-block">
                                                            <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Esme Daniels"/>
                                                        </div>
                                                        <div class="sw-4 mb-1 d-inline-block ms-n3">
                                                            <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Minahil Arias"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                        <div
                                                            class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                            <div>Copywriters</div>
                                                            <div class="text-muted text-small">2 Members</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                            <div>4 Tasks</div>
                                                            <div class="text-small text-muted">Active</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                            <div>9 Tasks</div>
                                                            <div class="text-small text-muted">On Hold</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="row g-0 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item">
                                                <div class="col-auto d-flex align-items-center mb-md-0">
                                                    <div class="sw-12">
                                                        <div class="sw-4 mb-1 d-inline-block">
                                                            <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kathryn Mengel"/>
                                                        </div>
                                                        <div class="sw-4 mb-1 d-inline-block ms-n3">
                                                            <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                                                 class="img-fluid rounded-xl border border-2 border-foreground"
                                                                 alt="thumb" data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kirby Peters"/>
                                                        </div>
                                                        <div
                                                            class="sw-4 sh-4 ms-n3 bg-separator-light d-inline-flex justify-content-center align-items-center rounded-xl">
                                                            <div class="fw-bold text-small text-primary cursor-default"
                                                                 data-delay='{"show":"500", "hide":"0"}'
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Kenny Carlson, Noor Wilder, Henri Pate">
                                                                1+
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                        <div
                                                            class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                            <div>UX Team</div>
                                                            <div class="text-muted text-small">3 Members</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                            <div>1 Task</div>
                                                            <div class="text-small text-muted">Active</div>
                                                        </div>
                                                        <div
                                                            class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                            <div>2 Tasks</div>
                                                            <div class="text-small text-muted">On Hold</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Teams End -->

                        <!-- Cart Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="cart">
                                <h2 class="small-title">Cart</h2>
                                <div class="card h-100-card">
                                    <div class="card-body mb-n2 scroll-out">
                                        <div class="scroll-by-count" data-count="3" data-childSelector="div.item"
                                             data-subtractMargin="false">
                                            <div class="row g-0 sh-9 mb-3 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-7" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-center">
                                                            <div class="col-11 d-flex flex-column mb-2">
                                                                <div class="">Kommissbrot</div>
                                                                <div class="text-muted text-small">Whole Wheat</div>
                                                            </div>
                                                            <div class="col-1">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate align-top float-end pe-0"
                                                                    type="button">
                                                                    <i data-cs-icon="error-hexagon"
                                                                       data-cs-size="15"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                                <div class="row g-0">
                                                                    <div
                                                                        class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                        <span>12</span>
                                                                        <span class="text-muted ms-1 me-1">x</span>
                                                                        <span>
                                                                        <span class="text-small">$</span>
                                                                        1.10
                                                                    </span>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                                                                    <span>
                                                                        <span class="text-small">$</span>
                                                                        13.20
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-9 mb-3 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-7" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-center">
                                                            <div class="col-11 d-flex flex-column mb-2">
                                                                <div class="">Ruisreikäleipä</div>
                                                                <div class="text-muted text-small">Multigrain</div>
                                                            </div>
                                                            <div class="col-1">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate align-top float-end pe-0"
                                                                    type="button">
                                                                    <i data-cs-icon="error-hexagon"
                                                                       data-cs-size="15"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                                <div class="row g-0">
                                                                    <div
                                                                        class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                        <span>3</span>
                                                                        <span class="text-muted ms-1 me-1">x</span>
                                                                        <span>
                                                                        <span class="text-small">$</span>
                                                                        2.75
                                                                    </span>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                                                                    <span>
                                                                        <span class="text-small">$</span>
                                                                        8.25
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-9 mb-3 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-7" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-center">
                                                            <div class="col-11 d-flex flex-column mb-2">
                                                                <div class="">Yeast Karavai</div>
                                                                <div class="text-muted text-small">Sourdough</div>
                                                            </div>
                                                            <div class="col-1">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate align-top float-end pe-0"
                                                                    type="button">
                                                                    <i data-cs-icon="error-hexagon"
                                                                       data-cs-size="15"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                                <div class="row g-0">
                                                                    <div
                                                                        class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                        <span>3</span>
                                                                        <span class="text-muted ms-1 me-1">x</span>
                                                                        <span>
                                                                        <span class="text-small">$</span>
                                                                        6.25
                                                                    </span>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                                                                    <span>
                                                                        <span class="text-small">$</span>
                                                                        18.75
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-9 mb-3 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-7" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-center">
                                                            <div class="col-11 d-flex flex-column mb-2">
                                                                <div class="">Bammy</div>
                                                                <div class="text-muted text-small">Sourdough</div>
                                                            </div>
                                                            <div class="col-1">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate align-top float-end pe-0"
                                                                    type="button">
                                                                    <i data-cs-icon="error-hexagon"
                                                                       data-cs-size="15"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                                <div class="row g-0">
                                                                    <div
                                                                        class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                        <span>3</span>
                                                                        <span class="text-muted ms-1 me-1">x</span>
                                                                        <span>
                                                                        <span class="text-small">$</span>
                                                                        2.50
                                                                    </span>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                                                                    <span>
                                                                        <span class="text-small">$</span>
                                                                        7.50
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-9 mb-3 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/hamburger-bun.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-7" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-center">
                                                            <div class="col-11 d-flex flex-column mb-2">
                                                                <div class="">Challah</div>
                                                                <div class="text-muted text-small">Multigrain</div>
                                                            </div>
                                                            <div class="col-1">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate align-top float-end pe-0"
                                                                    type="button">
                                                                    <i data-cs-icon="error-hexagon"
                                                                       data-cs-size="15"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                                <div class="row g-0">
                                                                    <div
                                                                        class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                        <span>2</span>
                                                                        <span class="text-muted ms-1 me-1">x</span>
                                                                        <span>
                                                                        <span class="text-small">$</span>
                                                                        12.40
                                                                    </span>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                                                                    <span>
                                                                        <span class="text-small">$</span>
                                                                        24.80
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-9 mb-3 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-7" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-center">
                                                            <div class="col-11 d-flex flex-column mb-2">
                                                                <div class="">Buccellato di Lucca</div>
                                                                <div class="text-muted text-small">Whole Wheat</div>
                                                            </div>
                                                            <div class="col-1">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate align-top float-end pe-0"
                                                                    type="button">
                                                                    <i data-cs-icon="error-hexagon"
                                                                       data-cs-size="15"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                                <div class="row g-0">
                                                                    <div
                                                                        class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                        <span>6</span>
                                                                        <span class="text-muted ms-1 me-1">x</span>
                                                                        <span>
                                                                        <span class="text-small">$</span>
                                                                        7.40
                                                                    </span>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                                                                    <span>
                                                                        <span class="text-small">$</span>
                                                                        44.40
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-9 mb-3 item">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-7" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                        <div
                                                            class="row g-0 h-100 align-items-start align-content-center">
                                                            <div class="col-11 d-flex flex-column mb-2">
                                                                <div class="">Bolillo</div>
                                                                <div class="text-muted text-small">Multigrain</div>
                                                            </div>
                                                            <div class="col-1">
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate align-top float-end pe-0"
                                                                    type="button">
                                                                    <i data-cs-icon="error-hexagon"
                                                                       data-cs-size="15"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                                <div class="row g-2">
                                                                    <div
                                                                        class="col-auto d-flex flex-row pe-2 align-items-end text-alternate">
                                                                        <span>3</span>
                                                                        <span class="text-muted ms-1 me-1">x</span>
                                                                        <span>
                                                                        <span class="text-small">$</span>
                                                                        2.50
                                                                    </span>
                                                                    </div>
                                                                    <div
                                                                        class="col d-flex flex-row align-items-end justify-content-end text-alternate">
                                                                    <span>
                                                                        <span class="text-small">$</span>
                                                                        7.50
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0">
                                        <div class="row g-0">
                                            <div
                                                class="col-12 col-md-7 order-2 order-md-1 d-flex flex-row justify-content-end justify-content-md-start align-items-center">
                                                <button type="button" class="btn btn-outline-primary btn-sm me-1">View
                                                    Cart
                                                </button>
                                                <button type="button" class="btn btn-primary btn-sm">Purchase</button>
                                            </div>

                                            <div
                                                class="col-12 col-md-5 d-flex flex-column align-items-end order-1 order-md-2 mb-3 mb-md-0">
                                                <div>
                                                    <span class="me-2 text-muted">Shipping</span>
                                                    <span>
                                                    <span class="text-small text-muted">$</span>
                                                    12.50
                                                </span>
                                                </div>
                                                <div>
                                                    <span class="me-2 text-muted">Grand Total</span>
                                                    <span>
                                                    <span class="text-small text-muted">$</span>
                                                    345.50
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Cart End -->

                        <!-- Text Data Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="textData">
                                <h2 class="small-title">Text Data</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="7">
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Barmbrack</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">STOCK</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-3 d-flex align-items-center text-medium text-danger justify-content-md-center mb-1 mb-md-0">
                                                        <i data-cs-icon="arrow-bottom" class="me-1"
                                                           data-cs-size="13"></i>
                                                        <span class="text-medium">-18.4%</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                                    <span>
                                                        <span class="text-small">$</span>
                                                        3.25
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Cheesymite
                                                            Scroll</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">TREND</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-3 d-flex align-items-center text-medium text-danger justify-content-md-center mb-1 mb-md-0">
                                                        <i data-cs-icon="arrow-bottom" class="me-1"
                                                           data-cs-size="13"></i>
                                                        <span class="text-medium">-13.4%</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                                    <span>
                                                        <span class="text-small">$</span>
                                                        4.50
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Cholermüs</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">SALE</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-3 d-flex align-items-center text-medium text-success justify-content-md-center mb-1 mb-md-0">
                                                        <i data-cs-icon="arrow-top" class="me-1" data-cs-size="13"></i>
                                                        <span class="text-medium">+9.7%</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                                    <span>
                                                        <span class="text-small">$</span>
                                                        1.75
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Ruisreikäleipä</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">SALE</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-3 d-flex align-items-center text-medium text-success justify-content-md-center mb-1 mb-md-0">
                                                        <i data-cs-icon="arrow-top" class="me-1" data-cs-size="13"></i>
                                                        <span class="text-medium">+5.3%</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                                    <span>
                                                        <span class="text-small">$</span>
                                                        3.00
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Bagel</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">STOCK</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-3 d-flex align-items-center text-medium text-danger justify-content-md-center mb-1 mb-md-0">
                                                        <i data-cs-icon="arrow-bottom" class="me-1"
                                                           data-cs-size="13"></i>
                                                        <span class="text-medium">-2.3%</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                                    <span>
                                                        <span class="text-small">$</span>
                                                        4.25
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Buccellato di
                                                            Lucca</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">TREND</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-3 d-flex align-items-center text-medium text-danger justify-content-md-center mb-1 mb-md-0">
                                                        <i data-cs-icon="arrow-bottom" class="me-1"
                                                           data-cs-size="13"></i>
                                                        <span class="text-medium">-5.3%</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                                    <span>
                                                        <span class="text-small">$</span>
                                                        3.75
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Chapati</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">SALE</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-3 d-flex align-items-center text-medium text-success justify-content-md-center mb-1 mb-md-0">
                                                        <i data-cs-icon="arrow-top" class="me-1" data-cs-size="13"></i>
                                                        <span class="text-medium">+7.1%</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                                    <span>
                                                        <span class="text-small">$</span>
                                                        1.85
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Pullman Loaf</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">TREND</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-3 d-flex align-items-center text-medium text-success justify-content-md-center mb-1 mb-md-0">
                                                        <i data-cs-icon="arrow-top" class="me-1" data-cs-size="13"></i>
                                                        <span class="text-medium">+2.3%</span>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                                    <span>
                                                        <span class="text-small">$</span>
                                                        2.25
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Text Data End -->

                        <!-- Responsive Horizontal Start -->
                        <div class="col-12 mb-5">
                            <section class="scroll-section" id="responsiveHorizontal">
                                <h2 class="small-title">Responsive Horizontal</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="3">
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-19 sh-lg-9">
                                                <div class="col-auto position-relative">
                                                    <span
                                                        class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2">SALE</span>
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Barmbrack</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Whole Wheat</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    2.25
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.452</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">4.193</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-19 sh-lg-9">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Cheesymite Scroll</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Whole Wheat</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    1.50
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.152</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">3.793</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-19 sh-lg-9">
                                                <div class="col-auto position-relative">
                                                    <span
                                                        class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2">TREND</span>
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Cholermüs</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Whole Wheat</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    3.20
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.398</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">4.251</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-19 sh-lg-9">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Ruisreikäleipä</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Whole Wheat</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    4.75
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.631</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">6.401</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 sh-19 sh-lg-9">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pt-0 pb-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Buccellato di Lucca</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Whole Wheat</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    4.75
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.092</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">5.119</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Responsive Horizontal End -->

                        <!-- Responsive Vertical Start -->
                        <div class="col-12 mb-5">
                            <section class="scroll-section" id="responsiveVertical">
                                <h2 class="small-title">Responsive Vertical</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="3">
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-19 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/pane-sciocco.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Spelt Bread</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Multigrain</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    2.80
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">2.590</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">8.294</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-19 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Cheesymite Scroll</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Multigrain</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    1.50
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.152</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">3.793</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-19 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Cholermüs</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Sourdough</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    3.20
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.398</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">4.251</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-19 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Ruisreikäleipä</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Whole Wheat</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    4.75
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.631</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">6.401</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-19 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Buccellato di Lucca</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">Sourdough</div>
                                                                <div class="text-muted text-small">Category</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    2.75
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-8 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.092</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                            <div
                                                                class="col-4 col-sm-6 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">5.119</div>
                                                                <div class="text-muted text-small">Stock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Responsive Vertical End -->

                        <!-- Rating Start -->
                        <div class="col-12 mb-5">
                            <section class="scroll-section" id="rating">
                                <h2 class="small-title">Rating</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="3">
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-15 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Spelt Bread</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-12 col-lg-3 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                                <div class="lh-1 text-alternate">
                                                                    <div class="br-wrapper br-theme-cs-icon">
                                                                        <select class="rating" name="rating"
                                                                                autocomplete="off" data-readonly="true"
                                                                                data-initial-rating="5">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    2.80
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.552</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-15 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Cheesymite Scroll</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-12 col-lg-3 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                                <div class="lh-1 text-alternate">
                                                                    <div class="br-wrapper br-theme-cs-icon">
                                                                        <select class="rating" name="rating"
                                                                                autocomplete="off" data-readonly="true"
                                                                                data-initial-rating="5">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    1.50
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.152</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-15 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/pane-sciocco.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Cholermüs</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-12 col-lg-3 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                                <div class="lh-1 text-alternate">
                                                                    <div class="br-wrapper br-theme-cs-icon">
                                                                        <select class="rating" name="rating"
                                                                                autocomplete="off" data-readonly="true"
                                                                                data-initial-rating="4">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    3.20
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.398</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-15 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Ruisreikäleipä</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-12 col-lg-3 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                                <div class="lh-1 text-alternate">
                                                                    <div class="br-wrapper br-theme-cs-icon">
                                                                        <select class="rating" name="rating"
                                                                                autocomplete="off" data-readonly="true"
                                                                                data-initial-rating="5">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    4.75
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.631</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="row g-0 h-auto sh-sm-15 sh-lg-9">
                                                <div class="col-12 col-sm-auto">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user"
                                                         class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-lg-12 sw-sm-16"/>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="card-body pt-sm-0 pb-sm-0 h-100">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <a href="#"
                                                               class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                                                <div class="lh-1">Ruisreikäleipä</div>
                                                                <div class="text-small text-muted text-truncate">Icing
                                                                    liquorice olegário jujubes oat cake.
                                                                </div>
                                                            </a>
                                                            <div
                                                                class="col-8 col-sm-12 col-lg-3 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                                                <div class="lh-1 text-alternate">
                                                                    <div class="br-wrapper br-theme-cs-icon">
                                                                        <select class="rating" name="rating"
                                                                                autocomplete="off" data-readonly="true"
                                                                                data-initial-rating="4">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">
                                                                <span>
                                                                    <span class="text-small">$</span>
                                                                    2.75
                                                                </span>
                                                                </div>
                                                                <div class="text-muted text-small">Price</div>
                                                            </div>
                                                            <div
                                                                class="col-6 col-sm-6 col-lg-2 d-flex flex-column pe-1 align-items-lg-end">
                                                                <div class="lh-1 text-alternate">1.092</div>
                                                                <div class="text-muted text-small">Sales</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Rating End -->

                        <!-- Labels Start -->
                        <div class="col-12 mb-5">
                            <section class="scroll-section" id="labels">
                                <h2 class="small-title">Labels</h2>
                                <div class="card mb-2 bg-transparent no-shadow d-none d-md-block sh-3">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div
                                                class="col-12 col-md-4 d-flex align-items-center mb-2 mb-md-0 text-muted text-small">
                                                TITLE
                                            </div>
                                            <div
                                                class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted text-small">
                                                CATEGORY
                                            </div>
                                            <div
                                                class="col-6 col-md-2 d-flex align-items-center justify-content-end text-alternate text-medium justify-content-end text-muted text-small">
                                                PRICE
                                            </div>
                                            <div
                                                class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted text-small">
                                                SALES
                                            </div>
                                            <div
                                                class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted text-small">
                                                STOCK
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="4">
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-12 col-md-4 d-flex flex-column justify-content-center mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Barmbrack</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Whole Wheat</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            3.25
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">789</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">2.345</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-12 col-md-4 d-flex flex-column justify-content-center mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Cheesymite Scroll</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Multigrain</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            5.10
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">234</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">1.937</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-12 col-md-4 d-flex flex-column justify-content-center mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Cholermüs</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Whole Wheat</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            5.10
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">852</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">2.493</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-12 col-md-4 d-flex flex-column justify-content-center mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Ruisreikäleipä</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Sourdough</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            3.75
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">562</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">1.970</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-12 col-md-4 d-flex flex-column justify-content-center mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Bagel</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Whole Wheat</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            6.25
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">738</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">1.381</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Labels End -->

                        <!-- Checkboxes Start -->
                        <div class="col-12 mb-5">
                            <section class="scroll-section" id="checkboxes">
                                <div class="d-flex justify-content-between">
                                    <h2 class="small-title">Checkboxes</h2>
                                    <div class="btn-group check-all-container mt-n1">
                                        <div class="btn btn-sm btn-outline-primary btn-custom-control"
                                             id="checkAllforCheckboxTable" data-target="#checkboxTable">
                                        <span class="form-check mb-0 pe-1">
                                            <input type="checkbox" class="form-check-input" id="checkAll"/>
                                        </span>
                                        </div>
                                        <button type="button"
                                                class="btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                                data-bs-offset="0,3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Details</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2 bg-transparent no-shadow d-none d-md-block sh-3">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div
                                                class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0 text-muted text-small">
                                                TITLE
                                            </div>
                                            <div
                                                class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted text-small">
                                                CATEGORY
                                            </div>
                                            <div
                                                class="col-6 col-md-2 d-flex align-items-center justify-content-end text-alternate text-medium justify-content-end text-muted text-small">
                                                PRICE
                                            </div>
                                            <div
                                                class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted text-small">
                                                SALES
                                            </div>
                                            <div
                                                class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted text-small">
                                                STOCK
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="4" id="checkboxTable">
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-11 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-1 order-md-1">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Barmbrack</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-3 order-md-2">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Whole Wheat</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-4 order-md-3">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            3.25
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-5 order-md-4">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">789</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-last order-md-5">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">2.345</div>
                                                    </div>
                                                    <div
                                                        class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-2 text-end order-md-last">
                                                        <label class="form-check float-end pe-none mt-2">
                                                            <input type="checkbox" class="form-check-input"/>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-11 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-1 order-md-1">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Cheesymite Scroll</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-3 order-md-2">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Multigrain</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-4 order-md-3">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            5.10
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-5 order-md-4">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">234</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-last order-md-5">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">1.937</div>
                                                    </div>
                                                    <div
                                                        class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-2 text-end order-md-last">
                                                        <label class="form-check float-end pe-none mt-2">
                                                            <input type="checkbox" class="form-check-input"/>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-11 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-1 order-md-1">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Cholermüs</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-3 order-md-2">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Whole Wheat</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-4 order-md-3">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            5.10
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-5 order-md-4">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">852</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-last order-md-5">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">2.493</div>
                                                    </div>
                                                    <div
                                                        class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-2 text-end order-md-last">
                                                        <label class="form-check float-end pe-none mt-2">
                                                            <input type="checkbox" class="form-check-input"/>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-11 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-1 order-md-1">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Ruisreikäleipä</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-3 order-md-2">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Sourdough</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-4 order-md-3">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            3.75
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-5 order-md-4">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">562</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-last order-md-5">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">1.970</div>
                                                    </div>
                                                    <div
                                                        class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-2 text-end order-md-last">
                                                        <label class="form-check float-end pe-none mt-2">
                                                            <input type="checkbox" class="form-check-input"/>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-19 sh-md-8">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div
                                                        class="col-11 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-1 order-md-1">
                                                        <div class="text-muted text-small d-md-none">Title</div>
                                                        <a href="#" class="text-truncate">Bagel</a>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-3 order-md-2">
                                                        <div class="text-muted text-small d-md-none">Category</div>
                                                        <div class="text-alternate">Whole Wheat</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-4 order-md-3">
                                                        <div class="text-muted text-small d-md-none">Price</div>
                                                        <div class="text-alternate">
                                                        <span>
                                                            <span class="text-small">$</span>
                                                            6.25
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-5 order-md-4">
                                                        <div class="text-muted text-small d-md-none">Sale</div>
                                                        <div class="text-alternate">738</div>
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-last order-md-5">
                                                        <div class="text-muted text-small d-md-none">Stock</div>
                                                        <div class="text-alternate">1.381</div>
                                                    </div>
                                                    <div
                                                        class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-2 text-end order-md-last">
                                                        <label class="form-check float-end pe-none mt-2">
                                                            <input type="checkbox" class="form-check-input"/>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Checkboxes End -->

                        <!-- Summary Start -->
                        <div class="col-12">
                            <section class="scroll-section" id="summary">
                                <h2 class="small-title">Summary</h2>
                                <div class="card mb-2">
                                    <div class="row g-0 h-auto sh-sm-18">
                                        <div class="col-12 col-sm-auto h-100">
                                            <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" alt="user"
                                                 class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-sm-18"/>
                                        </div>
                                        <div class="col-12 col-sm">
                                            <div class="card-body h-100">
                                                <div class="row g-0 h-100 align-content-start">
                                                    <a href="#"
                                                       class="col-12 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3">
                                                        <div class="lh-1 mb-3 heading">Ruisreikäleipä</div>
                                                        <div class="text-medium text-muted mb-3 clamp-line"
                                                             data-line="2">
                                                            Toffee icing cupcake halvah tart. Marshmallow oat cake lemon
                                                            drops chocolate bonbon powder lemon drops chocolate. Danish
                                                            tootsie roll dessert soufflé. Cupcake chocolate cake cake
                                                            jelly beans lemon drops danish bear claw carrot cake
                                                            soufflé.
                                                            Marshmallow jujubes tiramisu apple pie carrot cake danish
                                                            candy. Croissant croissant chocolate bar. Jelly macaroon
                                                            apple pie
                                                            croissant marshmallow pastry cheesecake.
                                                        </div>
                                                        <div class="text-small text-muted">23.10.2020</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="row g-0 h-auto sh-sm-18">
                                        <div class="col-12 col-sm-auto position-relative h-100">
                                            <span class="badge rounded-pill bg-primary me-1 position-absolute e-n3 t-2">SALE</span>
                                            <img src="{{ asset('/img/product/small/zopf.jpg') }}" alt="user"
                                                 class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-sm-18"/>
                                        </div>
                                        <div class="col-12 col-sm">
                                            <div class="card-body h-100">
                                                <div class="row g-0 h-100 align-content-start">
                                                    <a href="#"
                                                       class="col-12 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3">
                                                        <div class="lh-1 mb-3 heading">Boule</div>
                                                        <div class="text-medium text-muted lh-1-25 mb-3 clamp-line"
                                                             data-line="2">
                                                            Macaroon muffin apple pie tiramisu. Topping brownie pastry.
                                                            Tootsie roll tootsie roll bonbon marshmallow tart bonbon
                                                            soufflé
                                                            chocolate cake brownie. Cheesecake powder sugar plum cake
                                                            dragée halvah donut cotton candy. Sweet tiramisu gummi bears
                                                            gummies wafer cheesecake.
                                                        </div>
                                                        <div class="text-small text-muted">21.11.2020</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="row g-0 h-auto sh-sm-18">
                                        <div class="col-12 col-sm-auto h-100">
                                            <img src="{{ asset('/img/product/small/michetta.jpg') }}" alt="user"
                                                 class="card-img card-img-horizontal-sm sh-24 h-sm-100 sw-sm-18"/>
                                        </div>
                                        <div class="col-12 col-sm">
                                            <div class="card-body h-100">
                                                <div class="row g-0 h-100 align-content-start">
                                                    <a href="#"
                                                       class="col-12 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3">
                                                        <div class="lh-1 mb-3 heading">Spelt Bread</div>
                                                        <div class="text-medium text-muted lh-1-25 mb-3 clamp-line"
                                                             data-line="2">
                                                            Sweet roll soufflé candy jelly wafer cake sweet roll
                                                            macaroon lemon drops. Pastry chocolate jujubes dessert.
                                                            Cookie chupa
                                                            chups candy canes marshmallow sugar plum dessert donut
                                                            muffin bonbon. Lollipop croissant fruitcake jelly beans
                                                            jujubes
                                                            dessert lollipop candy canes cookie. Donut apple pie jelly
                                                            beans.
                                                        </div>
                                                        <div class="text-small text-muted">16.10.2020</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Summary End -->
                    </div>
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
                        <a class="nav-link" href="#basicItems">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic Items</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#buttons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#badges">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Badges</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#schedule">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#users">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#teams">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Teams</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#cart">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Cart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#textData">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Text Data</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#responsiveHorizontal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Responsive Horizontal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#responsiveVertical">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Responsive Vertical</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#rating">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Rating</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#labels">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Labels</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#checkboxes">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Checkboxes</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#summary">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Summary</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

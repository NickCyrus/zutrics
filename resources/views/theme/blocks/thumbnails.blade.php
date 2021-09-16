@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Thumbnails';
    $description = 'Thumbnail elements that fit for lots of use cases. They cover a wide range by containing icons, images, backgrounds and text.';
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
    <script src="{{ asset('/js/pages/blocks.thumbnails.js') }}"></script>
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
                <div class="card mb-5">
                    <div class="card-body">
                        <p class="mb-0">{{ $description }}</p>
                    </div>
                </div>

                <!-- Basic Items Start -->
                <section class="scroll-section" id="basicItems">
                    <h2 class="small-title">Basic Items</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">SALE</span>
                                <img src="{{ asset('/img/product/small/baguette.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-0"><a href="#" class="body-link stretched-link">Introduction
                                            to Bread Making</a></h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">SALE</span>
                                <img src="{{ asset('/img/product/small/barmbrack.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-0"><a href="#" class="body-link stretched-link">14 Facts About
                                            Sugar</a></h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">SALE</span>
                                <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                     class="card-img-top sh-22" alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-0"><a href="#" class="body-link stretched-link">Apple Cake
                                            Recipe</a></h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">SALE</span>
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                     class="card-img-top sh-22" alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-0"><a href="#" class="body-link stretched-link">Dough for the
                                            Molds</a></h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Items End -->

                <!-- Checkboxes Start -->
                <section class="scroll-section" id="checkboxes">
                    <div class="d-flex justify-content-between">
                        <h2 class="small-title">Checkboxes</h2>
                        <div class="btn-group check-all-container mt-n1">
                            <div class="btn btn-sm btn-outline-primary btn-custom-control" id="checkAllforCheckboxTable"
                                 data-target="#checkboxTable">
                            <span class="form-check mb-0 pe-1">
                                <input type="checkbox" class="form-check-input" id="checkAllCheckbox"/>
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
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4" id="checkboxTable">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/baguette.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                                <div class="card-body pb-3">
                                    <h5 class="heading mb-0 d-flex">
                                        <label class="form-check float-start pe-none">
                                            <input type="checkbox" class="form-check-input d-block"/>
                                        </label>
                                        <a href="#" class="body-link d-block lh-1-5">Introduction to Bread Making</a>
                                    </h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/barmbrack.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                                <div class="card-body pb-3">
                                    <h5 class="heading mb-0 d-flex">
                                        <label class="form-check float-start pe-none">
                                            <input type="checkbox" class="form-check-input d-block"/>
                                        </label>
                                        <a href="#" class="body-link d-block lh-1-5">Facts About Sugar</a>
                                    </h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}"
                                     class="card-img-top sh-22" alt="card image"/>
                                <div class="card-body pb-3">
                                    <h5 class="heading mb-0 d-flex">
                                        <label class="form-check float-start pe-none">
                                            <input type="checkbox" class="form-check-input d-block"/>
                                        </label>
                                        <a href="#" class="body-link d-block lh-1-5">Apple Cake Recipe</a>
                                    </h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                     class="card-img-top sh-22" alt="card image"/>
                                <div class="card-body pb-3">
                                    <h5 class="heading mb-0 d-flex">
                                        <label class="form-check float-start pe-none">
                                            <input type="checkbox" class="form-check-input d-block"/>
                                        </label>
                                        <a href="#" class="body-link d-block lh-1-5">Dough for the Molds</a>
                                    </h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Checkboxes End -->

                <!-- Checkboxes Horizontal Start -->
                <section class="scroll-section" id="checkboxesHorizontal">
                    <div class="d-flex justify-content-between">
                        <h2 class="small-title">Checkboxes Horizontal</h2>
                        <div class="btn-group check-all-container mt-n1">
                            <div class="btn btn-sm btn-outline-primary btn-custom-control"
                                 id="checkAllforCheckboxHorizontal" data-target="#checkboxHorizontal">
                            <span class="form-check mb-0 pe-1">
                                <input type="checkbox" class="form-check-input" id="checkAllHorizontal"/>
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
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-3" id="checkboxHorizontal">
                        <div class="col mb-5">
                            <div class="card">
                                <div class="row g-0 h-auto sh-sm-19">
                                    <div class="col-12 col-sm-auto h-100">
                                        <img src="{{ asset('/img/product/small/boule.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal-sm sh-22 h-sm-100 sw-sm-16 sw-lg-19"/>
                                    </div>
                                    <div class="col-12 col-sm p-0 h-100">
                                        <div class="card-body d-flex align-items-center h-100 h6">
                                            <div class="mb-0 d-flex">
                                                <label class="form-check float-start pe-none">
                                                    <input type="checkbox" class="form-check-input d-block"/>
                                                </label>
                                                <div>
                                                    <a href="#" class="body-link clamp-line sh-6 lh-1-5 mb-3"
                                                       data-line="2">Basic Introduction to Bread Making</a>
                                                    <div class="card-text mb-0">
                                                        <div class="text-muted text-overline text-small">
                                                            <del>$ 42.25</del>
                                                        </div>
                                                        <div>$ 27.50</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card">
                                <div class="row g-0 h-auto sh-sm-19">
                                    <div class="col-12 col-sm-auto h-100">
                                        <img src="{{ asset('/img/product/small/toast-bread.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal-sm sh-22 h-sm-100 sw-sm-16 sw-lg-19"/>
                                    </div>
                                    <div class="col-12 col-sm p-0 h-100">
                                        <div class="card-body d-flex align-items-center h-100 heading">
                                            <div class="mb-0 d-flex">
                                                <label class="form-check float-start pe-none">
                                                    <input type="checkbox" class="form-check-input d-block"/>
                                                </label>
                                                <div>
                                                    <a href="#" class="body-link clamp-line sh-6 lh-1-5 mb-3"
                                                       data-line="2">Apple Cake Recipe</a>
                                                    <div class="card-text mb-0">
                                                        <div class="text-muted text-overline text-small">
                                                            <del>$ 42.25</del>
                                                        </div>
                                                        <div>$ 27.50</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card">
                                <div class="row g-0 h-auto sh-sm-19">
                                    <div class="col-12 col-sm-auto h-100">
                                        <img src="{{ asset('/img/product/small/michetta.jpg') }}" alt="user"
                                             class="card-img card-img-horizontal-sm sh-22 h-sm-100 sw-sm-16 sw-lg-19"/>
                                    </div>
                                    <div class="col-12 col-sm p-0 h-100">
                                        <div class="card-body d-flex align-items-center h-100 heading">
                                            <div class="mb-0 d-flex">
                                                <label class="form-check float-start pe-none">
                                                    <input type="checkbox" class="form-check-input d-block"/>
                                                </label>
                                                <div>
                                                    <a href="#" class="body-link clamp-line sh-6 lh-1-5 mb-3"
                                                       data-line="2">14 Facts About Sugar</a>
                                                    <div class="card-text mb-0">
                                                        <div class="text-muted text-overline text-small">
                                                            <del>$ 42.25</del>
                                                        </div>
                                                        <div>$ 27.50</div>
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
                <!-- Checkboxes Horizontal End -->

                <!-- Images Vertical Start -->
                <section class="scroll-section" id="imagesVertical">
                    <h2 class="small-title">Images Vertical</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
                        <div class="col mb-5">
                            <div class="card sh-45 hover-img-scale-up">
                                <img src="{{ asset('/img/product/vertical/vertical-1.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title text-white mb-1">4.25</h5>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block text-white">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-white d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Pullman Loaf</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Olli Hawkins</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card sh-45 hover-img-scale-up">
                                <img src="{{ asset('/img/product/vertical/vertical-2.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title text-white mb-1">4.85</h5>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block text-white">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-white d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Ruisreikäleipä</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Zayn Hartley</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card sh-45 hover-img-scale-up">
                                <img src="{{ asset('/img/product/vertical/vertical-3.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title text-white mb-1">4.90</h5>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block text-white">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-white d-inline-block text-small align-text-top">(8)</div>
                                    </div>
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Basler Brot</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Kirby Peters</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card sh-45 hover-img-scale-up">
                                <img src="{{ asset('/img/product/vertical/vertical-4.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title text-white mb-1">4.15</h5>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block text-white">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-white d-inline-block text-small align-text-top">(12)</div>
                                    </div>
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Yeast Karavai</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Cherish Kerr</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Images Vertical End -->

                <!-- Images Horizontal Start -->
                <section class="scroll-section" id="imagesHorizontal">
                    <h2 class="small-title">Images Horizontal</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                        <div class="col mb-5">
                            <div class="card sh-19 hover-img-scale-down">
                                <img src="{{ asset('/img/product/horizontal/horizontal-1.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Yeast Karavai</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Olli Hawkins</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card sh-19 hover-img-scale-down">
                                <img src="{{ asset('/img/product/horizontal/horizontal-6.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Ruisreikäleipä</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Cherish Kerr</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card sh-19 hover-img-scale-down">
                                <img src="{{ asset('/img/product/horizontal/horizontal-4.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Pullman Loaf</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Kirby Peters</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Images Horizontal End -->

                <!-- Images Vertical Start -->
                <section class="scroll-section" id="imagesHover">
                    <h2 class="small-title">Images Hover</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
                        <div class="col mb-5">
                            <div class="card sh-45 hover-img-scale-up hover-reveal">
                                <img src="{{ asset('/img/product/vertical/vertical-1.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-between reveal-content">
                                    <div>
                                        <h5 class="card-title text-white mb-1">4.25</h5>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block text-white">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-white d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Pullman Loaf</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Olli Hawkins</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card sh-45 hover-img-scale-up hover-reveal">
                                <img src="{{ asset('/img/product/vertical/vertical-2.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-between reveal-content">
                                    <div>
                                        <h5 class="card-title text-white mb-1">4.85</h5>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block text-white">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-white d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Ruisreikäleipä</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Zayn Hartley</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card sh-45 hover-img-scale-up hover-reveal">
                                <img src="{{ asset('/img/product/vertical/vertical-3.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-between reveal-content">
                                    <div>
                                        <h5 class="card-title text-white mb-1">4.90</h5>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block text-white">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-white d-inline-block text-small align-text-top">(8)</div>
                                    </div>
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Basler Brot</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Kirby Peters</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card sh-45 hover-img-scale-up hover-reveal">
                                <img src="{{ asset('/img/product/vertical/vertical-4.jpg') }}"
                                     class="card-img h-100 scale" alt="card image"/>
                                <div class="card-img-overlay d-flex flex-column justify-content-between reveal-content">
                                    <div>
                                        <h5 class="card-title text-white mb-1">4.15</h5>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block text-white">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                    data-initial-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-white d-inline-block text-small align-text-top">(12)</div>
                                    </div>
                                    <div>
                                        <a href="#" class="heading text-white stretched-link">Yeast Karavai</a>
                                        <div class="d-flex align-items-center me-3 mt-2">
                                            <div class="sw-3 d-inline-block position-relative me-2">
                                                <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                                     class="img-fluid rounded-xl border border-2 border-foreground"
                                                     alt="thumb"/>
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="text-white">Cherish Kerr</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Images Vertical End -->

                <!-- List Start -->
                <section class="scroll-section" id="listItems">
                    <h2 class="small-title">List Items</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xxl-4">
                        <div class="col mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="heading mb-3">
                                        <a href="#" class="body-link">
                                            <span class="clamp-line sh-5" data-line="2">Basic Introduction to Bread Making</span>
                                        </a>
                                    </h5>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="lh-1-25 text-alternate align-middle d-inline-block">5+ Hours</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="lh-1-25 text-alternate align-middle d-inline-block">5.0 Rating</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="lh-1-25 text-alternate align-middle d-inline-block">45 Users Enrolled</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="plus" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span
                                                    class="lh-1-25 text-alternate align-middle d-inline-block">4 More</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="heading mb-3">
                                        <a href="#" class="body-link">
                                            <span class="clamp-line sh-5"
                                                  data-line="2">14 Facts About Sugar Products</span>
                                        </a>
                                    </h5>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">34+ Hours</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">4.2 Rating</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">198 Users Enrolled</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="plus" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-primary align-middle d-inline-block">2 More</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="heading mb-3">
                                        <a href="#" class="body-link">
                                            <span class="clamp-line sh-5"
                                                  data-line="2">Apple Cake Recipe for Starters</span>
                                        </a>
                                    </h5>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">11+ Hours</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">4.6 Rating</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">44 Users Enrolled</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="plus" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-primary align-middle d-inline-block">2 More</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="heading mb-3">
                                        <a href="#" class="body-link">
                                            <span class="clamp-line sh-5" data-line="2">A Complete Guide to Mix Dough for the Molds</span>
                                        </a>
                                    </h5>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">7+ Hours</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">5.0 Rating</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="chevron-right" data-cs-size="17"
                                                   class="text-muted me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">19 Users Enrolled</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="plus" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-primary align-middle d-inline-block">3 More</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- List End -->

                <!-- Icon Content Start -->
                <section class="scroll-section" id="iconContent">
                    <h2 class="small-title">Icon Content</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                     class="card-img-top sh-16" alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-0"><a href="#" class="body-link stretched-link">Tricks for
                                            Crispy Bread Baking</a></h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="star" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">4.8</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">00:40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}" class="card-img-top sh-16"
                                     alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-0"><a href="#" class="body-link stretched-link">10 Secrets
                                            Every Southern Baker Knows</a></h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="star" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">4.9</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">05:15</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/baguette.jpg') }}" class="card-img-top sh-16"
                                     alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-0"><a href="#" class="body-link stretched-link">Introduction
                                            to Bread Making</a></h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="row g-0">
                                        <div class="col-auto pe-3">
                                            <i data-cs-icon="star" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">4.8</span>
                                        </div>
                                        <div class="col">
                                            <i data-cs-icon="clock" class="text-primary me-1" data-cs-size="15"></i>
                                            <span class="align-middle">02:45</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Icon Content End -->

                <!-- Icon List Start -->
                <section class="scroll-section" id="iconList">
                    <h2 class="small-title">Icon List</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xxl-4">
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}" class="card-img-top sh-30"
                                     alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-3">
                                        <a href="#" class="body-link stretched-link">
                                            <span class="clamp-line sh-5" data-line="2">Basic Introduction to Bread Making</span>
                                        </a>
                                    </h5>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="clock" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">14+ Hours</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="star" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span
                                                    class="col lh-1-25 text-alternate align-middle d-inline-block">4.9</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="user" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">128 Users Enrolled</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="trend-up" data-cs-size="17"
                                                   class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">Trending</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/toast-bread.jpg') }}" class="card-img-top sh-30"
                                     alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-3">
                                        <a href="#" class="body-link stretched-link">
                                            <span class="clamp-line sh-5"
                                                  data-line="2">14 Facts About Sugar Products</span>
                                        </a>
                                    </h5>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="clock" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">34+ Hours</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="star" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span
                                                    class="col lh-1-25 text-alternate align-middle d-inline-block">4.2</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="user" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">198 Users Enrolled</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="trend-up" data-cs-size="17"
                                                   class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">Trending</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/michetta.jpg') }}" class="card-img-top sh-30"
                                     alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-3">
                                        <a href="#" class="body-link stretched-link">
                                            <span class="clamp-line sh-5"
                                                  data-line="2">Apple Cake Recipe for Starters</span>
                                        </a>
                                    </h5>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="clock" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">11+ Hours</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="star" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span
                                                    class="col lh-1-25 text-alternate align-middle d-inline-block">4.6</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="user" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">44 Users Enrolled</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="toy" data-cs-size="17"
                                                   class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">Popular</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" class="card-img-top sh-30"
                                     alt="card image"/>
                                <div class="card-body">
                                    <h5 class="heading mb-3">
                                        <a href="#" class="body-link stretched-link">
                                            <span class="clamp-line sh-5" data-line="2">A Complete Guide to Mix Dough for the Molds</span>
                                        </a>
                                    </h5>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="clock" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">7+ Hours</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="star" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span
                                                    class="col lh-1-25 text-alternate align-middle d-inline-block">5.0</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="user" data-cs-size="17" class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">19 Users Enrolled</span>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <i data-cs-icon="toy" data-cs-size="17"
                                                   class="text-primary me-2"></i>
                                            </div>
                                            <div class="col">
                                                <span class="col lh-1-25 text-alternate align-middle d-inline-block">Popular</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Icon List End -->

                <!-- Icon Details Start -->
                <section class="scroll-section" id="iconDetails">
                    <h2 class="small-title">Icon Details</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                        <div class="col mb-5">
                            <div class="card mb-2 h-100">
                                <div class="card-body row g-0">
                                    <div class="col-auto">
                                        <div class="d-inline-block d-flex">
                                            <div class="bg-gradient-primary sw-6 sh-6 rounded-xl">
                                                <div
                                                    class="text-white d-flex justify-content-center align-items-center h-100">
                                                    <i data-cs-icon="birthday"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div
                                            class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                            <div class="d-flex flex-column">
                                                <div class="d-flex flex-column justify-content-center sh-6">
                                                    <a href="#" class="heading stretched-link">Introduction to Bread
                                                        Making</a>
                                                </div>
                                                <div class="text-small text-muted">18.11.2020</div>
                                                <div class="text-muted mt-1">
                                                    Cheesecake chocolate carrot cake pie lollipop lemon drops toffee
                                                    lollipop. Oat cake jujubes chupa chups cotton.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
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
                                                    <a href="#" class="heading stretched-link">Apple Cake Recipe</a>
                                                </div>
                                                <div class="text-small text-muted">18.11.2020</div>
                                                <div class="text-muted mt-1">
                                                    Cheesecake chocolate carrot cake pie lollipop lemon drops toffee
                                                    lollipop. Oat cake jujubes chupa chups cotton.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
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
                                                    <a href="#" class="heading stretched-link">Dough for the Molds</a>
                                                </div>
                                                <div class="text-small text-muted">18.11.2020</div>
                                                <div class="text-muted mt-1">Cheesecake chocolate carrot cake pie
                                                    lollipop lemon drops toffee lollipop.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Icon Details End -->

                <!-- Pop Art Start -->
                <section class="scroll-section" id="popArt">
                    <h2 class="small-title">Pop Art</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 gy-4">
                        <div class="col">
                            <div class="card bg-gradient-single-3 sh-35 hover-img-scale-up">
                                <div class="d-flex flex-column justify-content-between h-100 bg-vertical-ornament-3">
                                    <img src="{{ asset('/img/product/small/plate-2.png') }}"
                                         class="card-img sw-20 d-flex align-self-center scale" alt="card image"/>
                                    <div class="d-flex flex-column card-body justify-content-end">
                                        <div>
                                            <a href="#" class="heading text-white stretched-link">Pullman Loaf</a>
                                            <div class="d-flex align-items-center mt-2">
                                                <div class="text-white text-medium sh-5 clamp-line" data-line="2">
                                                    Cheesecake chocolate carrot cake pie lollipop lemon drops.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-gradient-single-3 sh-35 hover-img-scale-up">
                                <div class="d-flex flex-column justify-content-between h-100 bg-vertical-ornament-4">
                                    <img src="{{ asset('/img/product/small/plate-3.png') }}"
                                         class="card-img sw-20 d-flex align-self-center scale" alt="card image"/>
                                    <div class="d-flex flex-column card-body justify-content-end">
                                        <div>
                                            <a href="#" class="heading text-white stretched-link">Pullman Loaf</a>
                                            <div class="d-flex align-items-center mt-2">
                                                <div class="text-white text-medium sh-5 clamp-line" data-line="2">
                                                    Cheesecake chocolate carrot cake pie lollipop lemon drops.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-gradient-single-3 sh-35 hover-img-scale-up">
                                <div class="d-flex flex-column justify-content-between h-100 bg-vertical-ornament-1">
                                    <img src="{{ asset('/img/product/small/plate-4.png') }}"
                                         class="card-img sw-20 d-flex align-self-center scale" alt="card image"/>
                                    <div class="d-flex flex-column card-body justify-content-end">
                                        <div>
                                            <a href="#" class="heading text-white stretched-link">Pullman Loaf</a>
                                            <div class="d-flex align-items-center mt-2">
                                                <div class="text-white text-medium sh-5 clamp-line" data-line="2">
                                                    Cheesecake chocolate carrot cake pie lollipop lemon drops.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-gradient-single-3 sh-35 hover-img-scale-up">
                                <div class="d-flex flex-column justify-content-between h-100 bg-vertical-ornament-2">
                                    <img src="{{ asset('/img/product/small/plate-1.png') }}"
                                         class="card-img sw-20 d-flex align-self-center scale" alt="card image"/>
                                    <div class="d-flex flex-column card-body justify-content-end">
                                        <div>
                                            <a href="#" class="heading text-white stretched-link">Pullman Loaf</a>
                                            <div class="d-flex align-items-center mt-2">
                                                <div class="text-white text-medium sh-5 clamp-line" data-line="2">
                                                    Cheesecake chocolate carrot cake pie lollipop lemon drops.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pop Art End -->

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
                        <a class="nav-link" href="#checkboxes">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Checkboxes</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#checkboxesHorizontal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Checkboxes Horizontal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#imagesVertical">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images Vertical</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#imagesHorizontal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images Horizontal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#imagesHover">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images Hover</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#listItems">
                            <i data-cs-icon="chevron-right"></i>
                            <span>List Items</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#iconContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Icon Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#iconList">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Icon List</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#iconDetails">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Icon Details</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#popArt">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Pop Art</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

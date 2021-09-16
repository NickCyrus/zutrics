@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'List';
    $description= 'Tiny, invisible and simple, yet powerful and incredibly fast vanilla JavaScript that adds search, sort, filters and flexibility to plain HTML lists, tables, or anything.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins"]
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
    <script src="{{ asset('/js/vendor/list.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/plugins/lists.js') }}"></script>
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

                <div class="row">
                    <!-- Existing Html Start -->
                    <div class="col-xl-6 mb-5">
                        <section class="scroll-section" id="existingHtml">
                            <h2 class="small-title">Existing Html</h2>
                            <div class="card">
                                <div class="card-body mb-n2" id="existingHtmlList">
                                    <!-- class="search" automagically makes the input a search field. -->
                                    <div
                                        class="search-input-container border border-separator rounded-md bg-foreground mb-4">
                                        <input class="form-control search" type="text" autocomplete="off"
                                               placeholder="Search"/>
                                        <span class="search-magnifier-icon">
                            <i data-cs-icon="search"></i>
                          </span>
                                    </div>

                                    <!-- Child elements of container with class="list" becomes list items -->
                                    <div class="list">
                                        <div class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <!-- class="name" and class="position" provides the data -->
                                                        <div class="name">Blaine Cottrell</div>
                                                        <div class="text-small text-muted position">Project Manager
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm ms-1">Follow
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div class="name">Cherish Kerr</div>
                                                        <div class="text-small text-muted position">Development Lead
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm ms-1">Follow
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div class="name">Kirby Peters</div>
                                                        <div class="text-small text-muted position">Accounting</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm ms-1">Follow
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div class="name">Olli Hawkins</div>
                                                        <div class="text-small text-muted position">Client Relations
                                                            Lead
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm ms-1">Follow
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Existing Html End -->

                    <!-- Existing Html with Scrollbar Start -->
                    <div class="col-xl-6 mb-5">
                        <section class="scroll-section" id="existingHtmlScrollbar">
                            <h2 class="small-title">Existing Html with Scrollbar</h2>
                            <div class="card">
                                <div class="card-body mb-n2" id="existingHtmlListScrollbar">
                                    <div
                                        class="search-input-container border border-separator rounded-md bg-foreground mb-4">
                                        <input class="form-control search" type="text" autocomplete="off"
                                               placeholder="Search"/>
                                        <span class="search-magnifier-icon">
                            <i data-cs-icon="search"></i>
                          </span>
                                    </div>
                                    <div class="scroll-out mb-2">
                                        <div class="list scroll-by-count" data-count="4" data-childSelector=".row">
                                            <div class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div class="name">Blaine Cottrell</div>
                                                            <div class="text-small text-muted position">Project
                                                                Manager
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button type="button"
                                                                    class="btn btn-outline-primary btn-sm ms-1">Follow
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div class="name">Cherish Kerr</div>
                                                            <div class="text-small text-muted position">Development
                                                                Lead
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button type="button"
                                                                    class="btn btn-outline-primary btn-sm ms-1">Follow
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div class="name">Kirby Peters</div>
                                                            <div class="text-small text-muted position">Accounting</div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button type="button"
                                                                    class="btn btn-outline-primary btn-sm ms-1">Follow
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div class="name">Olli Hawkins</div>
                                                            <div class="text-small text-muted position">Client Relations
                                                                Lead
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button type="button"
                                                                    class="btn btn-outline-primary btn-sm ms-1">Follow
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div class="name">Zayn Hartley</div>
                                                            <div class="text-small text-muted position">Customer
                                                                Engagement Lead
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button type="button"
                                                                    class="btn btn-outline-primary btn-sm ms-1">Follow
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
                    <!-- Existing Html with Scrollbar End -->

                    <!-- Adding via JavaScript Start -->
                    <div class="col-12 mb-5">
                        <section class="scroll-section" id="addingViaJavaScript">
                            <h2 class="small-title">Adding via JavaScript</h2>
                            <div id="addingViaJS">
                                <div class="search-input-container shadow rounded-md bg-foreground mb-2">
                                    <input class="form-control search" type="text" autocomplete="off"
                                           placeholder="Search"/>
                                    <span class="search-magnifier-icon">
                          <i data-cs-icon="search"></i>
                        </span>
                                </div>
                                <div class="list"></div>
                            </div>
                            <!-- A template element is needed when list is empty -->
                            <div class="d-none">
                                <div class="card mb-2" id="addingViaJSlItemTemplate">
                                    <a href="#" class="row g-0 sh-9">
                                        <div class="col-auto">
                                            <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}" alt="user"
                                                 class="card-img card-img-horizontal sw-11 image"/>
                                        </div>
                                        <div class="col d-flex align-items-center">
                                            <div class="card-body py-0">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <div class="name">Samoon</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Adding via JavaScript End -->

                    <!-- Sort and Filter Start -->
                    <div class="col-12 mb-5">
                        <section class="scroll-section" id="sortAndFilterTitle">
                            <h2 class="small-title">Sort and Filter</h2>
                            <div class="row g-2" id="sortAndFilter">
                                <div class="col-12">
                                    <div class="row gx-2">
                                        <div class="col-12 col-sm mb-1 mb-sm-0">
                                            <div class="search-input-container shadow rounded-md bg-foreground mb-2">
                                                <input class="form-control search" type="text" autocomplete="off"
                                                       placeholder="Search"/>
                                                <span class="search-magnifier-icon">
                                <i data-cs-icon="search"></i>
                              </span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-auto d-flex justify-content-end">
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-foreground-alternate shadow dropdown-toggle mb-1"
                                                        type="button"
                                                        data-bs-toggle="dropdown"
                                                        data-bs-auto-close="outside"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        Categories
                                                    </button>
                                                    <div class="dropdown-menu sw-25 shadow dropdown-menu-end">
                                                        <div class="px-4 py-3">
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input filter"
                                                                       id="category1" data-filter="Multigrain" checked/>
                                                                <label class="form-check-label" for="category1">Multigrain</label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input filter"
                                                                       id="category2" data-filter="Sourdough" checked/>
                                                                <label class="form-check-label" for="category2">Sourdough</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input filter"
                                                                       id="category3" data-filter="Whole Wheat"
                                                                       checked/>
                                                                <label class="form-check-label" for="category3">Whole
                                                                    Wheat</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Sort for smaller screens -->
                                            <div class="btn-group d-inline-block d-sm-none ms-1">
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-foreground-alternate shadow dropdown-toggle mb-1"
                                                        type="button"
                                                        data-bs-toggle="dropdown"
                                                        data-bs-auto-close="outside"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        Sort
                                                    </button>
                                                    <div class="dropdown-menu sw-25 dropdown-menu-end custom-sort">
                                                        <div class="dropdown-item cursor-pointer sort" data-sort="name">
                                                            Name
                                                        </div>
                                                        <div class="dropdown-item cursor-pointer sort"
                                                             data-sort="category">Category
                                                        </div>
                                                        <div class="dropdown-item cursor-pointer sort" data-sort="sale">
                                                            Sale
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="row g-0 h-100 align-content-center mb-2 custom-sort d-none d-sm-flex">
                                                <div class="col-4 col-sm-6 d-flex align-items-center">
                                                    <div class="text-muted text-small cursor-pointer sort"
                                                         data-sort="name">NAME
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-3 d-flex align-items-center">
                                                    <div class="text-muted text-small cursor-pointer sort"
                                                         data-sort="category">CATEGORY
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-4 col-sm-3 d-flex align-items-center justify-content-end">
                                                    <div class="text-muted text-small cursor-pointer sort"
                                                         data-sort="sale">SALE
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list scroll-out">
                                                <div class="scroll-by-count" data-count="5"
                                                     data-childSelector=".scroll-child">
                                                    <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                                                <a href="#" class="body-link name">Saffron Bun</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                                Sourdough
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                                543
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                                                <a href="#" class="body-link name">Bagel</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                                Whole Wheat
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                                349
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                                                <a href="#" class="body-link name">Pullman Loaf</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                                Sourdough
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                                22
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                                                <a href="#" class="body-link name">Challah</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                                Whole Wheat
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                                734
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                                                <a href="#" class="body-link name">Lye Roll</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                                Multigrain
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                                123
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                                                <a href="#" class="body-link name">Bolillo</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                                Multigrain
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                                622
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                                                <a href="#" class="body-link name">Himbasha</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                                Multigrain
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                                901
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                                                <a href="#" class="body-link name">Dorayaki</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                                Sourdough
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                                435
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                        <div class="row g-0 h-100 align-content-center">
                                                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                                                <a href="#" class="body-link name">Kommissbrot</a>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                                Whole Wheat
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                                721
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
                    <!-- Sort and Filter End -->

                    <!-- Pagination Start -->
                    <div class="col-12">
                        <section class="scroll-section" id="paginationTitle">
                            <h2 class="small-title">Pagination</h2>
                            <div id="pagination">
                                <div class="card mb-3">
                                    <div class="card-body mb-3">
                                        <div class="row gx-2 mb-3">
                                            <div class="col-12 col-sm mb-1 mb-sm-0">
                                                <div
                                                    class="search-input-container rounded-md border border-separator mb-2">
                                                    <input class="form-control search" type="text" autocomplete="off"
                                                           placeholder="Search"/>
                                                    <span class="search-magnifier-icon">
                                  <i data-cs-icon="search"></i>
                                </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-auto d-flex justify-content-end">
                                                <div class="btn-group">
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-outline-primary dropdown-toggle mb-1"
                                                            type="button"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-auto-close="outside"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"
                                                        >
                                                            Categories
                                                        </button>
                                                        <div class="dropdown-menu sw-25 dropdown-menu-end">
                                                            <div class="px-4 py-3">
                                                                <div class="form-check mb-2">
                                                                    <input type="checkbox"
                                                                           class="form-check-input filter"
                                                                           id="categoryPagination1"
                                                                           data-filter="Multigrain" checked/>
                                                                    <label class="form-check-label"
                                                                           for="categoryPagination1">Multigrain</label>
                                                                </div>
                                                                <div class="form-check mb-2">
                                                                    <input type="checkbox"
                                                                           class="form-check-input filter"
                                                                           id="categoryPagination2"
                                                                           data-filter="Sourdough" checked/>
                                                                    <label class="form-check-label"
                                                                           for="categoryPagination2">Sourdough</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="checkbox"
                                                                           class="form-check-input filter"
                                                                           id="categoryPagination3"
                                                                           data-filter="Whole Wheat" checked/>
                                                                    <label class="form-check-label"
                                                                           for="categoryPagination3">Whole Wheat</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Sort for smaller screens -->
                                                <div class="btn-group d-inline-block d-sm-none ms-1">
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-outline-primary dropdown-toggle mb-1"
                                                            type="button"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-auto-close="outside"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"
                                                        >
                                                            Sort
                                                        </button>
                                                        <div class="dropdown-menu sw-25 dropdown-menu-end custom-sort">
                                                            <div class="dropdown-item cursor-pointer sort"
                                                                 data-sort="name">Name
                                                            </div>
                                                            <div class="dropdown-item cursor-pointer sort"
                                                                 data-sort="category">Category
                                                            </div>
                                                            <div class="dropdown-item cursor-pointer sort"
                                                                 data-sort="sale">Sale
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="row g-0 h-100 align-content-center mb-2 custom-sort d-none d-sm-flex">
                                            <div class="col-4 col-sm-6 d-flex align-items-center">
                                                <div class="text-muted text-small cursor-pointer sort" data-sort="name">
                                                    NAME
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 d-flex align-items-center">
                                                <div class="text-muted text-small cursor-pointer sort"
                                                     data-sort="category">CATEGORY
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 d-flex align-items-center justify-content-end">
                                                <div class="text-muted text-small cursor-pointer sort" data-sort="sale">
                                                    SALE
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list">
                                            <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-sm-6 d-flex align-items-center">
                                                        <a href="#" class="body-link name">Saffron Bun</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                        Sourdough
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                        543
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-sm-6 d-flex align-items-center">
                                                        <a href="#" class="body-link name">Bagel</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                        Whole Wheat
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                        349
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-sm-6 d-flex align-items-center">
                                                        <a href="#" class="body-link name">Pullman Loaf</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                        Sourdough
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                        22
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-sm-6 d-flex align-items-center">
                                                        <a href="#" class="body-link name">Challah</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                        Whole Wheat
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                        734
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-sm-6 d-flex align-items-center">
                                                        <a href="#" class="body-link name">Lye Roll</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                        Multigrain
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                        123
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-sm-6 d-flex align-items-center">
                                                        <a href="#" class="body-link name">Bolillo</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                        Multigrain
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                        622
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-sm-6 d-flex align-items-center">
                                                        <a href="#" class="body-link name">Himbasha</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                        Multigrain
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                        901
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-sm-6 d-flex align-items-center">
                                                        <a href="#" class="body-link name">Dorayaki</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                        Sourdough
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                        435
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-auto sh-sm-5 mb-3 mb-sm-0 scroll-child">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-sm-6 d-flex align-items-center">
                                                        <a href="#" class="body-link name">Kommissbrot</a>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center text-muted category">
                                                        Whole Wheat
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-3 d-flex align-items-center justify-content-sm-end text-muted sale">
                                                        721
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 d-flex justify-content-center">
                                    <div class="pagination"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Pagination End -->
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
                        <a class="nav-link" href="#existingHtml">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Existing Html</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#existingHtmlScrollbar">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Existing Html with Scrollbar</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#addingViaJavaScript">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Adding via JavaScript</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#sortAndFilterTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sort and Filter</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#paginationTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Pagination</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = [];
    $title =  'Mailbox';
    $description = 'Very basic email application that contains a list page rendering, new&reply layouts and a static details page.';
    $breadcrumbs = ["/"=>"Home","/Apps"=>"Apps"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/tagify.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/quill.bubble.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/baguetteBox.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/movecontent.js') }}"></script>
    <script src="{{ asset('/js/vendor/quill.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/quill.active.js') }}"></script>
    <script src="{{ asset('/js/vendor/tagify.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/fuse.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/checkall.js') }}"></script>
    <script src="{{ asset('/js/apps/mailbox.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
                <div class="col-auto mb-2 mb-lg-0 me-auto">
                    <div class="w-auto sw-md-25">
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                        @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                    </div>
                </div>
                <div class="col-auto d-flex d-lg-none align-items-start mb-2 mb-lg-0 order-lg-1">
                    <button type="button" id="emailMenuButton" class="btn btn-primary btn-icon btn-icon-only ms-1">
                        <i data-cs-icon="menu-left"></i>
                    </button>
                </div>
                <div class="w-100 d-none d-md-block d-lg-none"></div>
                <div class="col-12 col-md-6 col-lg d-flex align-items-start justify-content-start order-3 order-md-2">
                    <div class="btn-group me-1 check-all-container-checkbox-click" id="checkAllButton">
                        <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2"
                             data-target="#emailListContainer">
                    <span class="form-check float-end">
                      <input type="checkbox" class="form-check-input" id="checkAll"/>
                    </span>
                        </div>
                        <button
                            type="button"
                            class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-offset="0,3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        ></button>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button">Mark as read</button>
                            <button class="dropdown-item" type="button">Mark as unread</button>
                            <button class="dropdown-item" type="button">Mute</button>
                            <button class="dropdown-item" type="button">Star</button>
                            <button class="dropdown-item" type="button">Pin</button>
                        </div>
                    </div>
                    <button
                        type="button"
                        class="btn btn-outline-primary btn-icon btn-icon-only me-1"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom"
                        title="Back"
                        data-delay='{"show":"1000", "hide":"0"}'
                        id="backButton"
                    >
                        <i data-cs-icon="arrow-left"></i>
                    </button>
                    <button
                        type="button"
                        class="btn btn-outline-primary btn-icon btn-icon-only me-1 disabled"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom"
                        title="Tag"
                        data-delay='{"show":"1000", "hide":"0"}'
                    >
                        <i data-cs-icon="tag"></i>
                    </button>
                    <button
                        type="button"
                        class="btn btn-outline-primary btn-icon btn-icon-only me-1 disabled"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom"
                        title="Spam"
                        data-delay='{"show":"1000", "hide":"0"}'
                    >
                        <i data-cs-icon="close"></i>
                    </button>
                    <button
                        type="button"
                        class="btn btn-outline-primary btn-icon btn-icon-only me-1 disabled me-lg-auto"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom"
                        title="Delete"
                        data-delay='{"show":"1000", "hide":"0"}'
                    >
                        <i data-cs-icon="bin"></i>
                    </button>
                </div>

                <div
                    class="col-12 col-md-6 col-lg d-flex align-items-start justify-content-end mb-2 mb-md-0 order-md-3">
                    <div class="w-100 w-md-auto search-input-container border border-separator">
                        <input class="form-control search" placeholder="Search" autocomplete="off" id="emailSearch"/>
                        <span class="search-magnifier-icon">
                    <i data-cs-icon="search"></i>
                  </span>
                    </div>

                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-1"
                            id="newEmailButton">
                        <i data-cs-icon="plus"></i>
                        <span>Compose</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row g-0">
            <div class="col-auto d-none d-lg-flex">
                <div class="nav flex-column sw-25 mt-n2" id="emailColumn">
                    <!-- Content of this will be moved from #emailMoveContent div based on the responsive breakpoint.  -->
                </div>
            </div>

            <div class="col">
                <!-- List Items Start -->
                <div id="emailListContainer"></div>
                <!-- List Items End -->

                <div id="emailCorrespondenceContainer" class="d-none">
                    <!-- Static Email Correspondence Start -->
                    <div class="row mb-3">
                        <div class="col-12 col-sm ms-auto">
                            <h2 class="small-title d-inline-block h-auto">Recent Project Update</h2>
                        </div>
                        <div class="col-12 col-sm-auto">
                            <div class="row g-0">
                                <div class="col-auto order-1 order-sm-0 mx-3">
                                    <i data-cs-icon="bell" class="text-muted"></i>
                                    <i data-cs-icon="star" class="text-muted"></i>
                                </div>
                                <div class="col-auto order-0 order-sm-1">
                                    <span class="badge opacity-75 text-decoration-none bg-outline-primary align-middle">Project</span>
                                    <span class="badge opacity-75 text-decoration-none bg-outline-warning align-middle">Personal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="mb-4 pb-4 border-bottom border-separator-light">
                                <div class="row g-0 sh-sm-5 h-auto">
                                    <div class="col-auto" data-bs-toggle="collapse" data-bs-target="#email1"
                                         role="button" aria-expanded="false" aria-controls="email1">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="card-img rounded-xl sh-5 sw-5" alt="thumb"/>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row h-100 g-2">
                                            <div
                                                class="col h-sm-100 d-flex flex-column justify-content-sm-center mb-1 mb-sm-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#email1"
                                                role="button"
                                                aria-expanded="false"
                                                aria-controls="email1"
                                            >
                                                <div>Joisse Kaycee</div>
                                                <div class="text-small text-muted">joissekaycee@gmail.com</div>
                                            </div>
                                            <div
                                                class="col-12 order-3 order-sm-0 col-sm-auto sw-sm-11 text-small text-muted text-sm-end d-flex flex-column justify-content-sm-center"
                                            >
                                                25 Nov 2020 14:40
                                            </div>
                                            <div class="col-auto d-flex flex-column justify-content-center">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                    data-bs-auto-close="outside"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                >
                                                    <i data-cs-icon="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end sw-40">
                                                    <div class="px-4 py-3">
                                                        <div class="row g-2 mb-2">
                                                            <div class="col-3 text-muted">From</div>
                                                            <div class="col">joissekaycee@gmail.com</div>
                                                        </div>
                                                        <div class="row g-2 mb-2">
                                                            <div class="col-3 text-muted">To</div>
                                                            <div class="col">ollihawkins@msn.com</div>
                                                        </div>
                                                        <div class="row g-2 mb-2">
                                                            <div class="col-3 text-muted">Date</div>
                                                            <div class="col">04.12.2020 05:15</div>
                                                        </div>
                                                        <div class="row g-2">
                                                            <div class="col-3 text-muted">Subject</div>
                                                            <div class="col">Recent Project Update</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="email1">
                                    <div class="mt-4">
                                        <p>Hi Olli,</p>
                                        <p>
                                            Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread
                                            icing macaroon bear claw jelly toffee. Chocolate cake
                                            marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple
                                            pie macaroon sesame snaps cotton candy jelly
                                            <u>pudding lollipop caramels</u>
                                            marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread
                                            chocolate cake tootsie roll. Oat cake jujubes jelly-o jelly
                                            chupa chups lollipop jelly wafer soufflé.
                                        </p>
                                        <p>
                                            Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame
                                            snaps lollipop macaroon.
                                            <a href="#">Icing tiramisu</a>
                                            oat cake chocolate cake marzipan pudding danish gummies. Dragée liquorice
                                            jelly beans jelly jelly sesame snaps brownie. Cheesecake
                                            chocolate cake sweet roll cupcake dragée croissant muffin. Lemon drops
                                            cupcake croissant liquorice donut cookie cake. Gingerbread
                                            biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar
                                            gummi bears dessert lemon drops gingerbread croissant.
                                            Donut candy jelly.
                                        </p>
                                        <p class="mb-0">
                                            Best Regards,
                                            <br/>
                                            Joisse Kaycee
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 pb-4 border-bottom border-separator-light">
                                <div class="row g-0 sh-sm-5 h-auto">
                                    <div class="col-auto" data-bs-toggle="collapse" data-bs-target="#email2"
                                         role="button" aria-expanded="false" aria-controls="email2">
                                        <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                             class="card-img rounded-xl sh-5 sw-5" alt="thumb"/>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row h-100 g-2">
                                            <div
                                                class="col h-sm-100 d-flex flex-column justify-content-sm-center mb-1 mb-sm-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#email2"
                                                role="button"
                                                aria-expanded="false"
                                                aria-controls="email2"
                                            >
                                                <div>Olli Hawkins</div>
                                                <div class="text-small text-muted">ollihawkins@msn.com</div>
                                            </div>
                                            <div
                                                class="col-12 order-3 order-sm-0 col-sm-auto sw-sm-11 text-small text-muted text-sm-end d-flex flex-column justify-content-sm-center"
                                            >
                                                25 Nov 2020 14:40
                                            </div>
                                            <div class="col-auto d-flex flex-column justify-content-center">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                    data-bs-auto-close="outside"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                >
                                                    <i data-cs-icon="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end sw-40">
                                                    <div class="px-4 py-3">
                                                        <div class="row g-2 mb-2">
                                                            <div class="col-3 text-muted">From</div>
                                                            <div class="col">joissekaycee@gmail.com</div>
                                                        </div>
                                                        <div class="row g-2 mb-2">
                                                            <div class="col-3 text-muted">To</div>
                                                            <div class="col">ollihawkins@msn.com</div>
                                                        </div>
                                                        <div class="row g-2 mb-2">
                                                            <div class="col-3 text-muted">Date</div>
                                                            <div class="col">04.12.2020 05:15</div>
                                                        </div>
                                                        <div class="row g-2">
                                                            <div class="col-3 text-muted">Subject</div>
                                                            <div class="col">Recent Project Update</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="email2">
                                    <div class="mt-4">
                                        <p>Hi Joisse,</p>
                                        <p>
                                            Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame
                                            snaps lollipop macaroon.
                                            <a href="#">Icing tiramisu</a>
                                            oat cake chocolate cake marzipan pudding danish gummies. Dragée liquorice
                                            jelly beans jelly jelly sesame snaps brownie.
                                        </p>
                                        <p class="mb-0">
                                            Best Regards,
                                            <br/>
                                            Olli Hawkins
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row g-0 sh-sm-5 h-auto mb-4">
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="card-img rounded-xl sh-5 sw-5" alt="thumb"/>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row h-100 g-2">
                                            <div
                                                class="col h-sm-100 d-flex flex-column justify-content-sm-center mb-1 mb-sm-0">
                                                <div>Joisse Kaycee</div>
                                                <div class="text-small text-muted">joissekaycee@gmail.com</div>
                                            </div>
                                            <div
                                                class="col-12 order-3 order-sm-0 col-sm-auto sw-sm-11 text-small text-muted text-sm-end d-flex flex-column justify-content-sm-center"
                                            >
                                                25 Nov 2020 14:40
                                            </div>
                                            <div class="col-auto d-flex flex-column justify-content-center">
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                    data-bs-auto-close="outside"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                >
                                                    <i data-cs-icon="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end sw-40">
                                                    <div class="px-4 py-3">
                                                        <div class="row g-2 mb-2">
                                                            <div class="col-3 text-muted">From</div>
                                                            <div class="col">joissekaycee@gmail.com</div>
                                                        </div>
                                                        <div class="row g-2 mb-2">
                                                            <div class="col-3 text-muted">To</div>
                                                            <div class="col">ollihawkins@msn.com</div>
                                                        </div>
                                                        <div class="row g-2 mb-2">
                                                            <div class="col-3 text-muted">Date</div>
                                                            <div class="col">04.12.2020 05:15</div>
                                                        </div>
                                                        <div class="row g-2">
                                                            <div class="col-3 text-muted">Subject</div>
                                                            <div class="col">Recent Project Update</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Hi,</p>
                                    <p>
                                        Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin
                                        liquorice chupa chups soufflé bonbon. Liquorice gummi bears
                                        cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream
                                        gummies dessert muffin chocolate jelly. Danish brownie
                                        chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop
                                        cheesecake gummi bears cheesecake. Cake jujubes soufflé.
                                    </p>
                                    <p>
                                        Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing
                                        macaroon bear claw jelly toffee. Chocolate cake
                                        marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie
                                        macaroon sesame snaps cotton candy jelly
                                        <u>pudding lollipop caramels</u>
                                        marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread chocolate
                                        cake tootsie roll. Oat cake jujubes jelly-o jelly
                                        chupa chups lollipop jelly wafer soufflé.
                                    </p>
                                    <p>
                                        Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame snaps
                                        lollipop macaroon.
                                        <a href="#">Icing tiramisu</a>
                                        oat cake chocolate cake marzipan pudding danish gummies. Dragée liquorice jelly
                                        beans jelly jelly sesame snaps brownie. Cheesecake
                                        chocolate cake sweet roll cupcake dragée croissant muffin. Lemon drops cupcake
                                        croissant liquorice donut cookie cake. Gingerbread
                                        biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar
                                        gummi bears dessert lemon drops gingerbread croissant.
                                        Donut candy jelly.
                                    </p>
                                    <p class="mb-0">
                                        Best Regards,
                                        <br/>
                                        Joisse
                                    </p>

                                    <div class="mt-4 d-flex flex-row flex-wrap">
                                        <div class="sw-30 me-2 mb-2">
                                            <div class="row g-0 rounded-sm sh-8 border">
                                                <div class="col-auto">
                                                    <a href="{{ asset('/img/product/large/rugbraud.jpg') }}"
                                                       data-caption="rugbraud.jpg" class="lightbox">
                                                        <img src="{{ asset('/img/product/small/rugbraud.jpg') }}"
                                                             class="card-img card-img-horizontal rounded-sm-start sw-10"
                                                             alt="product image 1"/>
                                                    </a>
                                                </div>
                                                <div
                                                    class="col rounded-sm-end d-flex flex-column justify-content-center px-3">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-0 clamp-line" data-line="1">rugbraud.jpg</p>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           title="Download" data-delay='{"show":"1000", "hide":"0"}'>
                                                            <i data-cs-icon="download" data-cs-size="17"
                                                               class="text-alternate"></i>
                                                        </a>
                                                    </div>
                                                    <div class="text-small text-primary">346 KB</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sw-30 me-2 mb-2">
                                            <div class="row g-0 rounded-sm sh-8 border">
                                                <div class="col-auto">
                                                    <a href="{{ asset('/img/product/large/michetta.jpg') }}"
                                                       data-caption="michetta.jpg" class="lightbox">
                                                        <img src="{{ asset('/img/product/small/michetta.jpg') }}"
                                                             class="card-img card-img-horizontal rounded-sm-start sw-10"
                                                             alt="product image 2"/>
                                                    </a>
                                                </div>
                                                <div
                                                    class="col rounded-sm-end d-flex flex-column justify-content-center px-3">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-0 clamp-line" data-line="1">michetta.jpg</p>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           title="Download" data-delay='{"show":"1000", "hide":"0"}'>
                                                            <i data-cs-icon="download" data-cs-size="17"
                                                               class="text-alternate"></i>
                                                        </a>
                                                    </div>
                                                    <div class="text-small text-primary">521 KB</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sw-30 me-2 mb-2">
                                            <div class="row g-0 rounded-sm sh-8 border">
                                                <div class="col-auto">
                                                    <div
                                                        class="sw-10 d-flex justify-content-center align-items-center h-100">
                                                        <i data-cs-icon="file-text" class="text-primary"></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col rounded-sm-end d-flex flex-column justify-content-center pe-3">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-0 clamp-line" data-line="1">nice_recipe.doc</p>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           title="Download" data-delay='{"show":"1000", "hide":"0"}'>
                                                            <i data-cs-icon="download" data-cs-size="17"
                                                               class="text-alternate"></i>
                                                        </a>
                                                    </div>
                                                    <div class="text-small text-primary">521 KB</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Static Email Correspondence End -->

                    <!-- Bottom Buttons Start -->
                    <div class="mt-5 d-none" id="detailBottomButtons">
                        <button class="btn btn-icon btn-icon-end btn-foreground hover-outline shadow mb-1 me-1"
                                type="button" id="replyButton">
                            <span>Reply</span>
                            <i data-cs-icon="arrow-top-left"></i>
                        </button>
                        <button class="btn btn-icon btn-icon-end btn-foreground hover-outline shadow mb-1 me-1"
                                type="button" id="forwardButton">
                            <span>Forward</span>
                            <i data-cs-icon="arrow-top-right"></i>
                        </button>
                        <button
                            class="btn btn-icon btn-icon-only btn-foreground hover-outline shadow mb-1 me-1"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i data-cs-icon="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end shadow">
                            <a class="dropdown-item" href="#">Reply</a>
                            <a class="dropdown-item" href="#">Forward</a>
                            <a class="dropdown-item" href="#">Print</a>
                            <a class="dropdown-item" href="#">Download</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Filter</a>
                            <a class="dropdown-item" href="#">Spam</a>
                            <a class="dropdown-item" href="#">Identity Theft</a>
                        </div>
                    </div>
                    <!-- Bottom Buttons End -->

                    <!-- Reply Email Start -->
                    <div class="card mt-5 d-none" id="replyEmailForm">
                        <div class="card-body">
                            <div class="mb-3 filled w-100">
                                <i data-cs-icon="email"></i>
                                <input id="replyEmailAddress" name="tagsFilled" placeholder=""
                                       value="ollihawkins@msn.com"/>
                            </div>
                            <div class="mb-3 filled custom-control-container editor-container">
                                <div class="html-editor sh-15" id="quillEditorFilledEmail"></div>
                                <i data-cs-icon="file-text"></i>
                            </div>
                            <button class="btn btn-icon btn-icon-end btn-outline-primary" type="button">
                                <span>Send</span>
                                <i data-cs-icon="send"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1">
                                <i data-cs-icon="attachment"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1 float-end"
                                    id="replyDeleteButton">
                                <i data-cs-icon="bin"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Reply Email End -->
                </div>
            </div>
        </div>

        <!-- Mailbox Category Menu Content Start -->
        <div class="modal modal-right fade" id="emailMenuModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row g-0 sh-5">
                            <div class="col-auto">
                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                     class="card-img rounded-xl sh-5 sw-5" alt="thumb"/>
                            </div>
                            <div class="col">
                                <div
                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <div>Joisse Kaycee</div>
                                        <div class="text-small text-muted">joissekaycee@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Content of below will be moved to #emailColumn or back in here based on the data-move-breakpoint attribute below -->
                        <!-- Content will be here if the screen size is smaller than lg -->
                        <div id="emailMoveContent" data-move-target="#emailColumn" data-move-breakpoint="lg">
                            <div class="menu-items">
                                <a
                                    class="nav-link px-0 mailbox-menu-item"
                                    href="#"
                                    data-menuid="1"
                                    data-show='{"folder": "inbox", "starred":"All", "important": "All", "tags": "All"}'
                                >
                                    <i data-cs-icon="inbox" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block mt-1 align-middle">Inbox</span>
                                </a>
                                <a
                                    class="nav-link px-0 mailbox-menu-item"
                                    href="#"
                                    data-menuid="2"
                                    data-show='{"folder": "inbox", "starred": true, "important": "All", "tags": "All"}'
                                >
                                    <i data-cs-icon="star" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block mt-1 align-middle">Starred</span>
                                </a>
                                <a
                                    class="nav-link px-0 mailbox-menu-item"
                                    href="#"
                                    data-menuid="3"
                                    data-show='{"folder": "inbox", "starred": "All", "important": true, "tags": "All"}'
                                >
                                    <i data-cs-icon="bell" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block mt-1 align-middle">Important</span>
                                </a>
                                <a
                                    class="nav-link px-0 mailbox-menu-item"
                                    href="#"
                                    data-menuid="4"
                                    data-show='{"folder": "sent", "starred":"All", "important": "All", "tags": "All"}'
                                >
                                    <i data-cs-icon="send" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block mt-1 align-middle">Sent</span>
                                </a>
                                <a class="nav-link px-0 dropdown-toggle" href="#collapseTags" data-bs-toggle="collapse"
                                   aria-expanded="true">
                                    <i data-cs-icon="tag" data-cs-size="17" class="me-2"></i>
                                    <span class="align-middle">Tags</span>
                                </a>
                                <div class="collapse show" id="collapseTags">
                                    <a
                                        class="nav-link px-0 mailbox-menu-item"
                                        href="#"
                                        data-menuid="5"
                                        data-show='{"folder": "inbox", "starred":"All", "important": "All", "tags": "Project"}'
                                    >
                                        <i class="align-middle me-2 sw-2 d-inline-block"></i>
                                        <i data-cs-icon="circle" data-cs-size="17" class="me-2 text-primary"></i>
                                        <span class="d-inline-block mt-1 align-middle">Project</span>
                                    </a>
                                    <a
                                        class="nav-link px-0 py-2 mailbox-menu-item"
                                        href="#"
                                        data-menuid="6"
                                        data-show='{"folder": "inbox", "starred":"All", "important": "All", "tags": "Personal"}'
                                    >
                                        <i class="align-middle me-2 sw-2 d-inline-block"></i>
                                        <i data-cs-icon="circle" data-cs-size="17" class="me-2 text-warning"></i>
                                        <span class="d-inline-block mt-1 align-middle">Personal</span>
                                    </a>
                                    <a
                                        class="nav-link px-0 py-2 mailbox-menu-item"
                                        href="#"
                                        data-menuid="7"
                                        data-show='{"folder": "inbox", "starred":"All", "important": "All", "tags": "Urgent"}'
                                    >
                                        <i class="align-middle me-2 sw-2 d-inline-block"></i>
                                        <i data-cs-icon="circle" data-cs-size="17" class="me-2 text-danger"></i>
                                        <span class="d-inline-block mt-1 align-middle">Urgent</span>
                                    </a>
                                </div>
                                <a
                                    class="nav-link px-0 mailbox-menu-item"
                                    href="#"
                                    data-menuid="8"
                                    data-show='{"folder": "spam", "starred":"All", "important": "All", "tags": "All"}'
                                >
                                    <i data-cs-icon="error-hexagon" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block mt-1 align-middle">Spam</span>
                                </a>
                                <a
                                    class="nav-link px-0 mailbox-menu-item"
                                    href="#"
                                    data-menuid="9"
                                    data-show='{"folder": "trash", "starred":"All", "important": "All", "tags": "All"}'
                                >
                                    <i data-cs-icon="bin" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block mt-1 align-middle">Trash</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mailbox Category Menu Content End -->

        <!-- New Email Modal Start -->
        <div class="modal fade" id="newEmailModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-semi-full modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Email</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column">
                        <div class="mb-3 filled w-100 d-flex flex-column">
                            <i data-cs-icon="email"></i>
                            <input id="composeEmailAddress" name="tagsFilled" placeholder="To"/>
                        </div>
                        <div class="mb-3 filled w-100 d-flex flex-column">
                            <i data-cs-icon="bookmark"></i>
                            <input class="form-control" placeholder="Subject"/>
                        </div>
                        <div
                            class="mb-3 filled custom-control-container editor-container d-flex flex-column flex-grow-1 mb-0">
                            <div class="html-editor h-100" id="quillEditorFilledEmailNew"></div>
                            <i data-cs-icon="file-text"></i>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button class="btn btn-icon btn-icon-end btn-outline-primary" type="button">
                            <span>Send</span>
                            <i data-cs-icon="send"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1">
                            <i data-cs-icon="attachment"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1 float-end"
                                data-bs-dismiss="modal">
                            <i data-cs-icon="bin"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Email Modal End -->

        <!-- List Item Template Start -->
        <template id="emailListTemplate">
            <div class="card hover-border-primary mb-2 sh-19 sh-md-6 email-list-item">
                <div class="card-body position-relative ps-4 py-3 py-md-0 h-100">
                    <div class="row g-0 h-100 align-content-center">
                        <div class="col-auto d-flex flex-column justify-content-md-center">
                            <label class="form-check mb-0 mt-1 me-2">
                                <input type="checkbox" class="form-check-input pe-none"/>
                            </label>
                        </div>
                        <a href="#" class="col h-100 stretched-link position-relative">
                            <div class="row gx-2 h-100">
                                <div class="col-12 col-md-2 d-flex align-items-center mb-0">
                                    <p class="clamp-line mb-0 from" data-line="1"></p>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0">
                                    <p class="clamp-line mb-0 title" data-line="1"></p>
                                </div>
                                <div class="col-12 col-md d-flex align-items-center text-muted">
                                    <p class="text-muted clamp-line mb-0 detail" data-line="1"></p>
                                </div>
                                <div class="col-12 col-md-1 d-flex align-items-center badges"></div>
                                <div
                                    class="col-6 col-md-auto d-flex align-items-center justify-content-end order-2 order-md-1">
                                    <div class="sw-6 text-end">
                                        <i data-cs-icon="star" class="text-muted star invisible"></i>
                                        <i data-cs-icon="bell" class="text-muted bell invisible"></i>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-md-auto d-flex align-items-center justify-content-md-end mb-1 mb-md-0 order-1 order-md-2">
                                    <p class="text-muted clamp-line mb-0 dateTime sw-6 text-start text-md-end"
                                       data-line="1"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </template>
        <!-- List Item Template End -->

        <!-- Badge Template for List Start -->
        <template id="emailListBadgeTemplate">
            <span class="badge opacity-75 text-decoration-none bg-outline-muted align-middle me-1"></span>
        </template>
        <!-- Badge Template for List End -->
    </div>
@endsection

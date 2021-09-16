@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'List Group';
    $description= 'List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Components"=>"Components"]
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

                    <!-- Active and Disabled Start -->
                    <section class="scroll-section" id="activeAndDisabled">
                        <h2 class="small-title">Active and Disabled</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group">
                                    <ul class="list-group">
                                        <li class="list-group-item active">Settings</li>
                                        <li class="list-group-item">Notifications</li>
                                        <li class="list-group-item disabled" aria-disabled="true">Permissions</li>
                                        <li class="list-group-item">Devices</li>
                                        <li class="list-group-item">Locations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Active and Disabled End -->

                    <!-- Links and Buttons Start -->
                    <section class="scroll-section" id="linksAndButtons">
                        <h2 class="small-title">Links and Buttons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="list-group mb-2">
                                    <a href="#" class="list-group-item list-group-item-action active">Settings</a>
                                    <a href="#" class="list-group-item list-group-item-action">Notifications</a>
                                    <a href="#" class="list-group-item list-group-item-action">Permissions</a>
                                    <a href="#" class="list-group-item list-group-item-action">Devices</a>
                                    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
                                       aria-disabled="true">Locations</a>
                                </div>
                                <div class="list-group">
                                    <button type="button" class="list-group-item list-group-item-action active">
                                        Settings
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">Notifications
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">Permissions
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">Devices
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action" disabled>
                                        Locations
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Links and Buttons End -->

                    <!-- Flush Start -->
                    <section class="scroll-section" id="flush">
                        <h2 class="small-title">Flush</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Settings</li>
                                        <li class="list-group-item">Notifications</li>
                                        <li class="list-group-item">Permissions</li>
                                        <li class="list-group-item">Devices</li>
                                        <li class="list-group-item">Locations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Flush End -->

                    <!-- Horizontal Start -->
                    <section class="scroll-section" id="horizontal">
                        <h2 class="small-title">Horizontal</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate">Default</h6>
                                <ul class="list-group list-group-horizontal mb-3">
                                    <li class="list-group-item">Settings</li>
                                    <li class="list-group-item">Notifications</li>
                                    <li class="list-group-item">Permissions</li>
                                </ul>
                                <h6 class="mb-3 text-alternate">Breakpoint sm</h6>
                                <ul class="list-group list-group-horizontal-sm mb-3">
                                    <li class="list-group-item">Settings</li>
                                    <li class="list-group-item">Notifications</li>
                                    <li class="list-group-item">Permissions</li>
                                </ul>
                                <h6 class="mb-3 text-alternate">Breakpoint md</h6>
                                <ul class="list-group list-group-horizontal-md mb-3">
                                    <li class="list-group-item">Settings</li>
                                    <li class="list-group-item">Notifications</li>
                                    <li class="list-group-item">Permissions</li>
                                </ul>
                                <h6 class="mb-3 text-alternate">Breakpoint xl</h6>
                                <ul class="list-group list-group-horizontal-xl">
                                    <li class="list-group-item">Settings</li>
                                    <li class="list-group-item">Notifications</li>
                                    <li class="list-group-item">Permissions</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- Horizontal End -->

                    <!-- With Badges Start -->
                    <section class="scroll-section" id="withBadges">
                        <h2 class="small-title">With Badges</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Settings
                                        <span class="badge bg-primary rounded-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Notifications
                                        <span class="badge bg-primary rounded-pill">2</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Permissions
                                        <span class="badge bg-primary rounded-pill">1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- With Badges End -->

                    <!-- Custom Content Start -->
                    <section class="scroll-section" id="customContent">
                        <h2 class="small-title">Custom Content</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-2">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Macaroon cake lollipop pie liquorice danish dessert tiramisu
                                            candy canes. Brownie biscuit toffee.</p>
                                        <small>Donut cotton candy carrot cake.</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-2">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Macaroon cake lollipop pie liquorice danish dessert tiramisu
                                            candy canes. Brownie biscuit toffee.</p>
                                        <small>Donut cotton candy carrot cake.</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-2">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Macaroon cake lollipop pie liquorice danish dessert tiramisu
                                            candy canes. Brownie biscuit toffee.</p>
                                        <small>Donut cotton candy carrot cake.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Custom Content End -->

                    <!-- JavaScript Behavior Start -->
                    <section class="scroll-section" id="javaScriptBehavior">
                        <h2 class="small-title">JavaScript Behavior</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 mb-3 mb-lg-0">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action active" id="list-home-list"
                                               data-bs-toggle="tab" href="#list-home" role="tab"
                                               aria-controls="list-home">
                                                Home
                                            </a>
                                            <a class="list-group-item list-group-item-action" id="list-profile-list"
                                               data-bs-toggle="tab" href="#list-profile" role="tab"
                                               aria-controls="list-profile">
                                                Profile
                                            </a>
                                            <a class="list-group-item list-group-item-action" id="list-messages-list"
                                               data-bs-toggle="tab" href="#list-messages" role="tab"
                                               aria-controls="list-messages">
                                                Messages
                                            </a>
                                            <a class="list-group-item list-group-item-action" id="list-settings-list"
                                               data-bs-toggle="tab" href="#list-settings" role="tab"
                                               aria-controls="list-settings">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                                 aria-labelledby="list-home-list">
                                                <p>
                                                    Apple pie caramels pie. Icing jelly-o gingerbread tart. Brownie
                                                    lemon drops sweet roll lemon drops dragée biscuit. Tiramisu
                                                    pudding sugar plum candy canes ice cream apple pie pastry pastry.
                                                    Marshmallow chocolate jujubes macaroon. Pie fruitcake jelly
                                                    fruitcake ice cream ice cream.
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                                 aria-labelledby="list-profile-list">
                                                <p>
                                                    Cake chocolate chocolate cake cookie cheesecake powder lollipop
                                                    sugar plum. Cheesecake halvah candy biscuit chocolate bar muffin
                                                    pie sweet cotton candy. Jelly beans jelly pastry cake halvah halvah
                                                    pastry sugar plum. Jelly beans muffin marshmallow chocolate
                                                    cake chupa chups brownie cheesecake cotton candy marzipan.
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                                 aria-labelledby="list-messages-list">
                                                <p>
                                                    Bear claw soufflé carrot cake candy canes apple pie apple pie
                                                    muffin. Sesame snaps marzipan jelly-o pastry. Icing candy biscuit
                                                    lollipop soufflé. Ice cream liquorice topping cake pie powder carrot
                                                    cake pudding. Ice cream bear claw gummies. Biscuit wafer
                                                    jelly chupa chups.
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                                 aria-labelledby="list-settings-list">
                                                <p>
                                                    Cheesecake pudding sweet tootsie roll chocolate. Danish cake jelly-o
                                                    carrot cake jujubes fruitcake. Tootsie roll jelly-o jelly-o
                                                    chocolate. Oat cake fruitcake candy canes. Fruitcake lollipop oat
                                                    cake chupa chups toffee. Cotton candy icing toffee sesame
                                                    snaps gummi bears halvah icing cupcake.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- JavaScript Behavior End -->
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
                        <a class="nav-link" href="#activeAndDisabled">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Active and Disabled</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#linksAndButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Links and Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#flush">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Flush</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#horizontal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#withBadges">
                            <i data-cs-icon="chevron-right"></i>
                            <span>With Badges</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#javaScriptBehavior">
                            <i data-cs-icon="chevron-right"></i>
                            <span>JavaScript Behavior</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

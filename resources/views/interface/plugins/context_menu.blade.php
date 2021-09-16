@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Context Menu';
    $description= 'Management facility for context(right click) menus.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/jquery.contextMenu.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.contextMenu.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/plugins/contextmenu.js') }}"></script>
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

                    <!-- Default Start -->
                    <section class="scroll-section" id="default">
                        <h2 class="small-title">Default</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card mb-5 context-menu-icons" id="contextMenuBasic">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="radio" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Right Click</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Menu Icons Start -->
                    <section class="scroll-section" id="menuIcons">
                        <h2 class="small-title">Menu Icons</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card mb-5" id="contextMenuIcons">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="tool" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Menu with Icons</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Menu Icons End -->

                    <!-- Disabled Item Start -->
                    <section class="scroll-section" id="disabledItem">
                        <h2 class="small-title">Disabled Item</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card mb-5" id="contextMenuDisabledItem">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="air-balloon" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Disabled Item</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Disabled Item End -->

                    <!-- Sub Items Start -->
                    <section class="scroll-section" id="subItems">
                        <h2 class="small-title">Sub Items</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card mb-5" id="contextMenuSub">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="luggage" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Sub Menu Items</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Sub Items End -->

                    <!-- Left Click Start -->
                    <section class="scroll-section" id="leftClick">
                        <h2 class="small-title">Left Click</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card mb-5" id="contextMenuLeft">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="router" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Left Click Trigger</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Left Click End -->

                    <!-- Hover Start -->
                    <section class="scroll-section" id="hover">
                        <h2 class="small-title">Hover</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card mb-5" id="contextMenuHover">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="toy" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Hover Trigger</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Hover End -->

                    <!-- Active Class Start -->
                    <section class="scroll-section" id="activeClass">
                        <h2 class="small-title">Active Class</h2>
                        <div class="row g-2" id="contextActive">
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card activatable">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="question-hexagon" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Security Warning</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card activatable">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="warning-hexagon" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Security Off</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card activatable">
                                    <div class="row g-0 sh-9 p-card pt-0 pb-0">
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="pe-card">
                                                <i data-cs-icon="error-hexagon" class="text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex flex-column justify-content-center">
                                            <p class="heading mb-0">Security On</p>
                                            <p class="text-small text-muted mb-0">Sugar plum gummi bears jujubes
                                                cookie.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Active Class End -->
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
                        <a class="nav-link" href="#default">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Default</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#menuIcons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Menu Icons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#disabledItem">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Disabled Item</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#subItems">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sub Items</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#leftClick">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Left Click</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#hover">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Hover</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#activeClass">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Active Class</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

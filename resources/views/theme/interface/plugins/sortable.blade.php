@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Sortable';
    $description= 'Sortable is a JavaScript library for reorderable drag-and-drop lists.';
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
    <script src="{{ asset('/js/vendor/sortable.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/plugins/sortables.js') }}"></script>
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

                    <!-- Basic Start -->
                    <section class="scroll-section" id="basic">
                        <h2 class="small-title">Basic</h2>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <ul class="list-group sortable" id="sortableBasic">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Carrot sesame tootsie</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Basic End -->

                    <!-- Columns Start -->
                    <section class="scroll-section" id="columns">
                        <h2 class="small-title">Columns</h2>
                        <div class="row g-2 mb-5" id="sortableColumns">
                            <div class="col-3">
                                <div class="card sh-16">
                                    <div
                                        class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                                        <i data-cs-icon="pepper" class="text-primary mb-4"></i>
                                        <p class="text-small text-muted mb-0">Pepper</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card sh-16">
                                    <div
                                        class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                                        <i data-cs-icon="pear" class="text-primary mb-4"></i>
                                        <p class="text-small text-muted mb-0">Pear</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card sh-16">
                                    <div
                                        class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                                        <i data-cs-icon="radish" class="text-primary mb-4"></i>
                                        <p class="text-small text-muted mb-0">Radish</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card sh-16">
                                    <div
                                        class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                                        <i data-cs-icon="banana" class="text-primary mb-4"></i>
                                        <p class="text-small text-muted mb-0">Banana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Columns End -->

                    <!-- Class Initialization Start -->
                    <section class="scroll-section" id="classInitialization">
                        <h2 class="small-title">Class Initialization</h2>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <ul class="list-group sortable sortable-init">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <ul class="list-group sortable sortable-init">
                                            <li class="list-group-item">Eisus ac facilisis</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">Reprehenderit aute ipsum</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Class Initialization End -->

                    <!-- Animation Start -->
                    <section class="scroll-section" id="animation">
                        <h2 class="small-title">Animation</h2>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <ul class="list-group sortable" id="sortableAnimation">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Reprehenderit aute ipsum</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Animation End -->

                    <!-- Moving Start -->
                    <section class="scroll-section" id="moving">
                        <h2 class="small-title">Moving</h2>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <ul class="list-group pt-1 pb-1 sortable" id="sortableGroupFirst">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Reprehenderit aute ipsum</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <ul class="list-group pt-1 pb-1 sortable" id="sortableGroupSecond">
                                            <li class="list-group-item">Reprehenderit aute ipsum</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Moving End -->

                    <!-- Store Start -->
                    <section class="scroll-section" id="store">
                        <h2 class="small-title">Store</h2>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="list-group pt-1 pb-1 sortable" id="sortableStore">
                                            <li class="list-group-item">1. Cras justo odio</li>
                                            <li class="list-group-item">2. Dapibus ac facilisis in</li>
                                            <li class="list-group-item">3. Morbi leo risus</li>
                                            <li class="list-group-item">4. Reprehenderit aute ipsum</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Store End -->
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
                        <a class="nav-link" href="#basic">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#columns">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Columns</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#classInitialization">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Class Initialization</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#animation">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Animation</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#moving">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Moving</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#store">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Store</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

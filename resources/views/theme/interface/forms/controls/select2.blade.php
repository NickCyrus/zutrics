@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Select2';
    $description= 'Select2 is a jQuery based replacement for select boxes. It supports searching, remote data sets, and infinite scrolling of results.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms","/Interface/Forms/Controls"=>"Controls"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/controls.select2.js') }}"></script>
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

                    <!-- Basic Single Start -->
                    <section class="scroll-section" id="basicSingle">
                        <h2 class="small-title">Basic Single</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="w-100">
                                            <label class="form-label">Breads</label>
                                            <select id="select2Basic">
                                                <option label="&nbsp;"></option>
                                                <option value="Breadstick">Breadstick</option>
                                                <option value="Biscotti">Biscotti</option>
                                                <option value="Fougasse">Fougasse</option>
                                                <option value="Lefse">Lefse</option>
                                                <option value="Melonpan">Melonpan</option>
                                                <option value="Naan">Naan</option>
                                                <option value="Panbrioche">Panbrioche</option>
                                                <option value="Rewena">Rewena</option>
                                                <option value="Shirmal">Shirmal</option>
                                                <option value="Tunnbröd">Tunnbröd</option>
                                                <option value="Vánočka">Vánočka</option>
                                                <option value="Zopf">Zopf</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Basic Single End -->

                    <!-- Basic Multiple Start -->
                    <section class="scroll-section" id="basicMultiple">
                        <h2 class="small-title">Basic Multiple</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="w-100">
                                            <label class="form-label">Breads</label>
                                            <select multiple="multiple" id="select2Multiple">
                                                <option value="Breadstick">Breadstick</option>
                                                <option value="Biscotti">Biscotti</option>
                                                <option value="Fougasse">Fougasse</option>
                                                <option value="Lefse">Lefse</option>
                                                <option value="Melonpan">Melonpan</option>
                                                <option value="Naan">Naan</option>
                                                <option value="Panbrioche">Panbrioche</option>
                                                <option value="Rewena">Rewena</option>
                                                <option value="Shirmal">Shirmal</option>
                                                <option value="Tunnbröd">Tunnbröd</option>
                                                <option value="Vánočka">Vánočka</option>
                                                <option value="Zopf">Zopf</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Basic Multiple End -->

                    <!-- Tags Start -->
                    <section class="scroll-section" id="tags">
                        <h2 class="small-title">Tags</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="w-100">
                                            <label class="form-label">Breads</label>
                                            <select multiple="multiple" id="select2Tags">
                                                <option value="Breadstick">Breadstick</option>
                                                <option value="Biscotti">Biscotti</option>
                                                <option value="Fougasse">Fougasse</option>
                                                <option value="Lefse">Lefse</option>
                                                <option value="Melonpan">Melonpan</option>
                                                <option value="Naan">Naan</option>
                                                <option value="Panbrioche">Panbrioche</option>
                                                <option value="Rewena">Rewena</option>
                                                <option value="Shirmal">Shirmal</option>
                                                <option value="Tunnbröd">Tunnbröd</option>
                                                <option value="Vánočka">Vánočka</option>
                                                <option value="Zopf">Zopf</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Tags End -->

                    <!-- Search Hidden Start -->
                    <section class="scroll-section" id="searchHidden">
                        <h2 class="small-title">Search Hidden</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="w-100">
                                            <label class="form-label">Breads</label>
                                            <select id="select2SearchHidden">
                                                <option label="&nbsp;"></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="Maybe">Maybe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Search Hidden End -->

                    <!-- Ajax Start -->
                    <section class="scroll-section" id="ajax">
                        <h2 class="small-title">Ajax</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="w-100">
                                            <label class="form-label">Breads</label>
                                            <select multiple="multiple" id="select2Ajax"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ajax End -->

                    <!-- Data Api Start -->
                    <section class="scroll-section" id="dataApi">
                        <h2 class="small-title">Data Api</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="w-100">
                                            <label class="form-label">Breads</label>
                                            <select multiple="multiple" data-placeholder="Breads" data-tags="true"
                                                    data-close-on-select="false" id="selectDataApi">
                                                <option value="Breadstick">Breadstick</option>
                                                <option value="Biscotti">Biscotti</option>
                                                <option value="Fougasse">Fougasse</option>
                                                <option value="Lefse">Lefse</option>
                                                <option value="Melonpan">Melonpan</option>
                                                <option value="Naan">Naan</option>
                                                <option value="Panbrioche">Panbrioche</option>
                                                <option value="Rewena">Rewena</option>
                                                <option value="Shirmal">Shirmal</option>
                                                <option value="Tunnbröd">Tunnbröd</option>
                                                <option value="Vánočka">Vánočka</option>
                                                <option value="Zopf">Zopf</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Data Api End -->

                    <!-- Templating Start -->
                    <section class="scroll-section" id="templatingTitle">
                        <h2 class="small-title">Templating</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="w-100">
                                            <label class="form-label">Breads</label>
                                            <select id="selectTemplating">
                                                <option label="&nbsp;"></option>
                                                <option data-class="border-primary" value="Primary">Primary</option>
                                                <option data-class="border-secondary" value="Secondary">Secondary
                                                </option>
                                                <option data-class="border-warning" value="Warning">Warning</option>
                                                <option data-class="border-danger" value="Danger">Danger</option>
                                                <option data-class="border-info" value="Info">Info</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Templating End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="top-label mb-0 w-100">
                                            <select id="selectTopLabel">
                                                <option label="&nbsp;"></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="Maybe">Maybe</option>
                                            </select>
                                            <span>BREADS</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Top Label End -->

                    <!-- Filled Start -->
                    <section class="scroll-section" id="filled">
                        <h2 class="small-title">Filled</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="filled mb-0 w-100">
                                            <i data-cs-icon="loaf"></i>
                                            <select id="selectFilled" data-placeholder="Search">
                                                <option label="&nbsp;"></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="Maybe">Maybe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Filled End -->

                    <!-- Floating Label Start -->
                    <section class="scroll-section" id="floatingLabel">
                        <h2 class="small-title">Floating Label</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="form-floating w-100">
                                            <select class="select-floating" id="selectFloating">
                                                <option label="&nbsp;"></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="Maybe">Maybe</option>
                                            </select>
                                            <label>Bread</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Floating Label End -->
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
                        <a class="nav-link" href="#basicSingle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic Single</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#basicMultiple">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic Multiple</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#tags">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Tags</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#searchHidden">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Search Hidden</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#ajax">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Ajax</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#dataApi">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Data Api</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#templatingTitle">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Templating</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#topLabel">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Top Label</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#filled">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Filled</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#floatingLabel">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Floating Label</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

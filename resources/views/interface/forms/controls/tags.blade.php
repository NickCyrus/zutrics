@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Tags';
    $description= 'Lightweight, efficient Tags input component in Vanilla JS.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms","/Interface/Forms/Controls"=>"Controls"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/tagify.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/tagify.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/controls.tag.js') }}"></script>
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
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Add Tags</label>
                                        <input value="Lefse, Fougasse" id="tagsBasic"
                                               data-whitelist="Lefse, Fougasse, Dorayaki, Barmbrack, Brioche, Arepa, Cozonac, Saffron Bun, Eggette, Himbasha, Flatbread"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Basic End -->

                    <!-- Advanced Start -->
                    <section class="scroll-section" id="advanced">
                        <h2 class="small-title">Advanced</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="mb-3">
                                            <label class="form-label">Breads</label>
                                            <input id="tagsAdvanced" placeholder="Search for Breads"
                                                   value="Fougasse, Naan" data-blacklist="Rieska,Roti"/>
                                        </div>
                                        <button class="btn btn-primary" id="removeAllTags" type="button">Remove All!
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Advanced End -->

                    <!-- Text Area Start -->
                    <section class="scroll-section" id="textArea">
                        <h2 class="small-title">Text Area</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="form-label">Breads</label>
                                        <textarea id="tagsTextArea" placeholder="Add Bread"> [{"value":"Dorayaki"}, {"value":"Panbrioche"}]</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Text Area Start -->

                    <!-- Custom Look Start -->
                    <section class="scroll-section" id="customLook">
                        <h2 class="small-title">Custom Look</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <label class="d-block form-label">Add Emails</label>
                                <input id="tagsCustomLook" class="custom-look" placeholder="Search for Breads"
                                       value="test@test.com" data-blacklist="null@null.com"/>
                                <button class="btn btn-icon btn-icon-only btn-outline-primary mb-1" type="button">
                                    <i data-cs-icon="plus"></i>
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Custom Look End -->

                    <!-- Outside Start -->
                    <section class="scroll-section" id="outside">
                        <h2 class="small-title">Outside</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <label class="d-block form-label">Breads</label>
                                <input id="tagsOutside" class="tagify--outside" value="Dorayaki, Roti, Panbrioche"
                                       placeholder="Write Tags"/>
                            </div>
                        </div>
                    </section>
                    <!-- Outside End -->

                    <!-- User List Start -->
                    <section class="scroll-section" id="userList">
                        <h2 class="small-title">User List</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <label class="d-block form-label">Users</label>
                                <input id="usersListTags" class="users-list-container"/>
                            </div>
                        </div>
                    </section>
                    <!-- User List End -->

                    <!-- Tags with Props Start -->
                    <section class="scroll-section" id="withProps">
                        <h2 class="small-title">Tags with Props</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <label class="d-block form-label">Users</label>
                                <input id="tagsWithProps" class="countries" placeholder="Add a Country"/>
                            </div>
                        </div>
                    </section>
                    <!-- Tags with Props End -->

                    <!-- Readonly Start -->
                    <section class="scroll-section" id="readonly">
                        <h2 class="small-title">Readonly</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <label class="d-block form-label">Tags</label>
                                <input id="tagsReadonly" readonly value="tag1, tag 2, another tag"/>
                            </div>
                        </div>
                    </section>
                    <!-- Readonly End -->

                    <!-- Select Mode Start -->
                    <section class="scroll-section" id="selectMode">
                        <h2 class="small-title">Select Mode</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <label class="d-block form-label">Single Select</label>
                                <input id="tagsSelectMode" class="selectMode" placeholder="Please select"/>
                            </div>
                        </div>
                    </section>
                    <!-- Select Mode End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <label class="top-label w-100">
                                            <input id="tagsTopLabel"/>
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
                                        <div class="filled w-100">
                                            <i data-cs-icon="loaf"></i>
                                            <input id="tagsFilled" placeholder="Tags"/>
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
                                        <div class="form-floating">
                                            <input id="tagsFloatingLabel" placeholder=""/>
                                            <label>Tags</label>
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
                        <a class="nav-link" href="#basic">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#advanced">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Advanced</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#textArea">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Text Area</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customLook">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Look</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#outside">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Outside</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#userList">
                            <i data-cs-icon="chevron-right"></i>
                            <span>User List</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#withProps">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Tags with Props</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#readonly">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Readonly</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#selectMode">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Select Mode</span>
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

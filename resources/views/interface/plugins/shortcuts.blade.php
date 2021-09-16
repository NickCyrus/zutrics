@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Shortcuts';
    $description= 'A simple library for handling keyboard shortcuts in Javascript.';
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
    <script src="{{ asset('/js/vendor/mousetrap.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/plugins/shortcuts.js') }}"></script>
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

                    <!-- Document Events Start -->
                    <section class="scroll-section" id="singleKeys">
                        <h2 class="small-title">Single Keys</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <p>It's possible to bind single keys to a task.</p>
                                        <p>
                                            <kbd>s</kbd>
                                            key toggles search box.
                                        </p>
                                        <p>
                                            <kbd>o</kbd>
                                            key toggles options panel.
                                        </p>
                                        <p class="mb-0">
                                            <kbd>d</kbd>
                                            and
                                            <kbd>l</kbd>
                                            keys toggle dark/light mode.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Document Events End -->

                    <!-- Combination of Keys Start -->
                    <section class="scroll-section" id="combinationOfKeys">
                        <h2 class="small-title">Combination of Keys</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <p>
                                            <kbd>ctrl+shift+1</kbd>
                                            <kbd>ctrl+shift+2</kbd>
                                            will toggle the active state of the buttons below.
                                        </p>
                                        <button type="button" class="btn btn-outline-primary mb-1" id="button1">
                                            Primary
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary mb-1" id="button2">
                                            Secondary
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Combination of Keys Start -->

                    <!-- Overriding Defaults Start -->
                    <section class="scroll-section" id="overridingDefaults">
                        <h2 class="small-title">Overriding Defaults</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <p>
                                            <kbd>ctrl+a</kbd>
                                            will add active class to the below items and will override default behaviour
                                            that selects all of the page.
                                        </p>
                                        <p>
                                            <kbd>ctrl+d</kbd>
                                            will remove active class from the below items and will override default
                                            behaviour that adds the page as a bookmark.
                                        </p>
                                        <div class="btn-group">
                                            <ul class="list-group" id="selectAllList">
                                                <li class="list-group-item">Cras justo odio</li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item" aria-disabled="true">Morbi leorisus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Overriding Defaults End -->

                    <!-- Wrapping Start -->
                    <section class="scroll-section" id="wrapping">
                        <h2 class="small-title">Wrapping</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <p>
                                            <kbd>ctrl+s</kbd>
                                            will only work when cursor is in one of the inputs so the form is in focus.
                                            Will show spinner on the submit button for a second.
                                        </p>
                                        <form id="wrapperForm">
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control"/>
                                            </div>
                                            <button type="submit" class="btn btn-primary" id="submitButton">
                                                <span class="spinner-border spinner-border-sm d-none" role="status"
                                                      aria-hidden="true"></span>
                                                <span class="label">Save</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Wrapping End -->
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
                        <a class="nav-link" href="#singleKeys">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Single Keys</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#combinationOfKeys">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Combination of Keys</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#overridingDefaults">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Overriding Defaults</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#wrapping">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Wrapping</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

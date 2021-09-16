@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Alerts';
    $description = 'Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.';
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
                    <!-- Default Alerts Start -->
                    <section class="scroll-section" id="default">
                        <h2 class="small-title">Default</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="alert alert-primary" role="alert">A simple primary alert—check it out!</div>
                                <div class="alert alert-secondary" role="alert">A simple secondary alert—check it out!
                                </div>
                                <div class="alert alert-success" role="alert">A simple success alert—check it out!</div>
                                <div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>
                                <div class="alert alert-warning" role="alert">A simple warning alert—check it out!</div>
                                <div class="alert alert-info" role="alert">A simple info alert—check it out!</div>
                                <div class="alert alert-light" role="alert">A simple light alert—check it out!</div>
                                <div class="alert alert-dark" role="alert">A simple dark alert—check it out!</div>
                            </div>
                        </div>
                    </section>
                    <!-- Default Alerts End -->

                    <!-- Link Color Start -->
                    <section class="scroll-section" id="linkColor">
                        <h2 class="small-title">Link Color</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="alert alert-primary" role="alert">
                                    A simple primary alert with
                                    <a href="#" class="alert-link">an example link</a>
                                    . Give it a click if you like.
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    A simple secondary alert with
                                    <a href="#" class="alert-link">an example link</a>
                                    . Give it a click if you like.
                                </div>
                                <div class="alert alert-success" role="alert">
                                    A simple success alert with
                                    <a href="#" class="alert-link">an example link</a>
                                    . Give it a click if you like.
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    A simple danger alert with
                                    <a href="#" class="alert-link">an example link</a>
                                    . Give it a click if you like.
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    A simple warning alert with
                                    <a href="#" class="alert-link">an example link</a>
                                    . Give it a click if you like.
                                </div>
                                <div class="alert alert-info" role="alert">
                                    A simple info alert with
                                    <a href="#" class="alert-link">an example link</a>
                                    . Give it a click if you like.
                                </div>
                                <div class="alert alert-light" role="alert">
                                    A simple light alert with
                                    <a href="#" class="alert-link">an example link</a>
                                    . Give it a click if you like.
                                </div>
                                <div class="alert alert-dark" role="alert">
                                    A simple dark alert with
                                    <a href="#" class="alert-link">an example link</a>
                                    . Give it a click if you like.
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Link Color End -->

                    <!-- Additional Content Start -->
                    <section class="scroll-section" id="additionalContent">
                        <h2 class="small-title">Additional Content</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Well done!</h4>
                                    <p>
                                        Aww yeah, you successfully read this important alert message. This example text
                                        is going to run a bit longer so that you can see how
                                        spacing within an alert works with this kind of content.
                                    </p>
                                    <hr/>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                        nice and tidy.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Additional Content End -->

                    <!-- Dismissing Start -->
                    <section class="scroll-section" id="dismissing">
                        <h2 class="small-title">Dismissing</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong>
                                    You should check in on some of those fields below.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Dismissing End -->
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
                        <a class="nav-link" href="#linkColor">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Link Color</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#additionalContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Additional Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#dismissing">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Dismissing</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

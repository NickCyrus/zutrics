@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Notify';
    $description= "A simple plugin that turns standard Bootstrap alerts into 'Growl-like' notifications.";
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
    <script src="{{ asset('/js/vendor/bootstrap-notify.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/plugins/notifies.js') }}"></script>
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
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="#" id="defaultNotifyButton" class="btn btn-outline-primary mb-1">Notify!</a>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Direction Start -->
                    <section class="scroll-section" id="direction">
                        <h2 class="small-title">Direction</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonTopLeft">Top Left</a>
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonTopCenter">Top
                                    Center</a>
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonTopRight">Top Right</a>
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonBottomLeft">Bottom
                                    Left</a>
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonBottomCenter">Bottom
                                    Center</a>
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonBottomRight">Bottom
                                    Right</a>
                            </div>
                        </div>
                    </section>
                    <!-- Direction End -->

                    <!-- Colors Start -->
                    <section class="scroll-section" id="colors">
                        <h2 class="small-title">Colors</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonPrimary">Primary</a>
                                <a href="#" class="btn btn-outline-secondary mb-1"
                                   id="notifyButtonSecondary">Secondary</a>
                                <a href="#" class="btn btn-outline-tertiary mb-1" id="notifyButtonTertiary">Tertiary</a>
                                <a href="#" class="btn btn-outline-quaternary mb-1" id="notifyButtonQuaternary">Quaternary</a>
                                <a href="#" class="btn btn-outline-success mb-1" id="notifyButtonSuccess">Success</a>
                                <a href="#" class="btn btn-outline-danger mb-1" id="notifyButtonDanger">Danger</a>
                                <a href="#" class="btn btn-outline-warning mb-1" id="notifyButtonWarning">Warning</a>
                                <a href="#" class="btn btn-outline-info mb-1" id="notifyButtonInfo">Info</a>
                                <a href="#" class="btn btn-outline-light mb-1" id="notifyButtonLight">Light</a>
                                <a href="#" class="btn btn-outline-dark mb-1" id="notifyButtonDark">Dark</a>
                            </div>
                        </div>
                    </section>
                    <!-- Colors End -->

                    <!-- Icons Start -->
                    <section class="scroll-section" id="iconsNotify">
                        <h2 class="small-title">Icons</h2>
                        <div class="card mb-card">
                            <div class="card-body">
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonErrorIcon">Error</a>
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonInfoIcon">Info</a>
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonNoteIcon">Note</a>
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonSendIcon">Send</a>
                            </div>
                        </div>
                    </section>
                    <!-- Icons End -->

                    <!-- Thumbnail Start -->
                    <section class="scroll-section" id="thumbnail">
                        <h2 class="small-title">Thumbnail</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonImage">Show</a>
                            </div>
                        </div>
                    </section>
                    <!-- Thumbnail End -->

                    <!-- Html Start -->
                    <section class="scroll-section" id="html">
                        <h2 class="small-title">Html</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonHtml">Show</a>
                            </div>
                        </div>
                    </section>
                    <!-- Html End -->

                    <!-- Progress Start -->
                    <section class="scroll-section" id="progress">
                        <h2 class="small-title">Progress</h2>
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class="btn btn-outline-primary mb-1" id="notifyButtonProgress">Show</a>
                            </div>
                        </div>
                    </section>
                    <!-- Progress End -->
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
                        <a class="nav-link" href="#direction">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Direction</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#colors">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Colors</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#iconsNotify">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Icons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#thumbnail">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Thumbnail</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#html">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Html</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#progress">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Progress</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

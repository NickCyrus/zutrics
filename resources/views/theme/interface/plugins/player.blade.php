@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Player';
    $description= 'Plyr is a simple, lightweight, accessible and customizable HTML5 and YouTube media player that supports modern browsers.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/plyr.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/plyr.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/plugins/players.js') }}"></script>
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
                            <div class="col-12 col-md-8 col-xxl-4">
                                <div class="card mb-5 bg-transparent">
                                    <video class="player"
                                           poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                        <source
                                            src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                            type="video/mp4"/>
                                    </video>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Cover Static Height Start -->
                    <section class="scroll-section" id="coverStaticHeight">
                        <h2 class="small-title">Cover Static Height</h2>
                        <div class="row">
                            <div class="col-12 col-md-8 col-xxl-4">
                                <div class="card mb-5 sh-45 bg-transparent">
                                    <video class="cover player"
                                           poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                        <source
                                            src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                            type="video/mp4"/>
                                    </video>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Cover Static Height End -->

                    <!-- Youtube Start -->
                    <section class="scroll-section" id="youtube">
                        <h2 class="small-title">Youtube</h2>
                        <div class="row">
                            <div class="col-12 col-md-8 col-xxl-4">
                                <div class="card mb-5 bg-transparent">
                                    <div class="plyr__video-embed player">
                                        <iframe
                                            src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                            allowfullscreen allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Youtube End -->

                    <!-- Video Card Start -->
                    <section class="scroll-section" id="videoCard">
                        <h2 class="small-title">Video Card</h2>
                        <div class="row">
                            <div class="col-12 col-md-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-img-top">
                                        <video class="player"
                                               poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                            <source
                                                src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                                type="video/mp4"/>
                                        </video>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <p class="card-text">
                                            Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie
                                            roll.Brownie ice cream marshmallow topping.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <p class="card-text">
                                            Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie
                                            roll.Brownie ice cream marshmallow topping.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                    <div class="card-img-bottom">
                                        <video class="player"
                                               poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                            <source
                                                src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                                type="video/mp4"/>
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Video Card End -->

                    <!-- Modal Start -->
                    <section class="scroll-section" id="modal">
                        <h2 class="small-title">Modal</h2>
                        <div class="row">
                            <div class="col-12 col-md-8 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <!-- Button Trigger -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#videoPlayerModal">Modal Video
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade modal-close-out modal-player" id="videoPlayerModal"
                                             tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header p-0 border-0">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <video id="modalVideo"
                                                           poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                                        <source
                                                            src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                                            type="video/mp4"/>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Modal End -->

                    <!-- Audio Start -->
                    <section class="scroll-section" id="audio">
                        <h2 class="small-title">Audio</h2>
                        <div class="row">
                            <div class="col-12 col-md-8 col-xxl-4">
                                <div class="card mb-5 bg-transparent">
                                    <audio class="player" controls>
                                        <source
                                            src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3"
                                            type="audio/mp3"/>
                                        <source
                                            src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.ogg"
                                            type="audio/ogg"/>
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Audio Start -->
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
                        <a class="nav-link" href="#coverStaticHeight">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Cover Static Height</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#youtube">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Youtube</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#videoCard">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Video Card</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#modal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Modal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#audio">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Audio</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Toasts';
    $description= 'Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.';
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
    <script src="{{ asset('/js/components/toasts.js') }}"></script>
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
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <strong class="me-auto">Bootstrap</strong>
                                        <small>11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">Hello, world! This is a toast message.</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Live Start -->
                    <section class="scroll-section" id="live">
                        <h2 class="small-title">Live</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

                                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
                                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive"
                                         aria-atomic="true">
                                        <div class="toast-header">
                                            <strong class="me-auto">Bootstrap</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">Hello, world! This is a toast message.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Live End -->

                    <!-- Translucent Start -->
                    <section class="scroll-section" id="translucent">
                        <h2 class="small-title">Translucent</h2>
                        <div class="card mb-5 bg-primary">
                            <div class="card-body">
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-muted">11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">Hello, world! This is a toast message.</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Translucent End -->

                    <!-- Stacking Start -->
                    <section class="scroll-section" id="stacking">
                        <h2 class="small-title">Stacking</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="toast fade show mb-2" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-muted">just now</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">See? Just like this.</div>
                                </div>

                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-muted">2 seconds ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">Heads up, toasts will stack automatically</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Stacking End -->

                    <!-- Custom Content Start -->
                    <section class="scroll-section" id="customContent">
                        <h2 class="small-title">Custom Content</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="toast fade show align-items-center mb-2" role="alert" aria-live="assertive"
                                     aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">Hello, world! This is a toast message.</div>
                                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                </div>

                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                        <div class="mt-2 pt-2 border-top">
                                            <button type="button" class="btn btn-primary btn-sm">Take action</button>
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                    data-bs-dismiss="toast">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Custom Content End -->

                    <!-- Color Schemes Start -->
                    <section class="scroll-section" id="colorSchemes">
                        <h2 class="small-title">Color Schemes</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="toast align-items-center bg-primary border-0 fade show mb-2" role="alert"
                                     aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body text-white">Hello, world! This is a toast message.</div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>

                                <div class="toast align-items-center bg-secondary border-0 fade show mb-2" role="alert"
                                     aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body text-white">Hello, world! This is a toast message.</div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Color Schemes End -->

                    <!-- Placement Start -->
                    <section class="scroll-section" id="placementExample">
                        <h2 class="small-title">Placement</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="selectToastPlacement">Toast placement</label>
                                        <select class="form-select mt-2" id="selectToastPlacement">
                                            <option value="" selected>Select a position...</option>
                                            <option value="top-0 start-0">Top left</option>
                                            <option value="top-0 start-50 translate-middle-x">Top center</option>
                                            <option value="top-0 end-0">Top right</option>
                                            <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                            <option value="top-50 start-50 translate-middle">Middle center</option>
                                            <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                            <option value="bottom-0 start-0">Bottom left</option>
                                            <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                            <option value="bottom-0 end-0">Bottom right</option>
                                        </select>
                                    </div>
                                </form>
                                <div aria-live="polite" aria-atomic="true" class="bg-primary position-relative sh-50">
                                    <div class="toast-container position-absolute p-3 top-50 start-50 translate-middle"
                                         id="toastPlacement">
                                        <div class="toast fade show">
                                            <div class="toast-header">
                                                <strong class="me-auto">Bootstrap</strong>
                                                <small>11 mins ago</small>
                                            </div>
                                            <div class="toast-body">Hello, world! This is a toast message.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Placement End -->
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
                        <a class="nav-link" href="#live">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Live</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#translucent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Translucent</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#stacking">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Stacking</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Content</span>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="#colorSchemes">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Color Schemes</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#placementExample">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Placement</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

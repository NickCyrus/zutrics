@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Dropdowns';
    $description= 'Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.';
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
    <script src="{{ asset('/js/vendor/bootstrap-submenu.js') }}"></script>
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

                    <!-- Default Start -->
                    <section class="scroll-section" id="default">
                        <h2 class="small-title">Default</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group me-3">
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-primary dropdown-toggle mb-1"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <a
                                            class="dropdown-toggle mb-1"
                                            href="#"
                                            role="button"
                                            id="dropdownMenuLink"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Dropdown link
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Colors Start -->
                    <section class="scroll-section" id="colors">
                        <h2 class="small-title">Colors</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle mb-1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Primary
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-secondary dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Secondary
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-tertiary dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Tertiary
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-quaternary dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Quaternary
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle mb-1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Success
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle mb-1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Info
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle mb-1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Warning
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle mb-1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Danger
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle mb-1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Light
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark dropdown-toggle mb-1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dark
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-primary dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Primary
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Secondary
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-tertiary dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Tertiary
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-quaternary dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Quaternary
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-success dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Success
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-info dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Info
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-warning dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Warning
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-danger dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Danger
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-light dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Light
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button
                                        type="button"
                                        class="btn btn-outline-dark dropdown-toggle mb-1"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Dark
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Colors End -->

                    <!-- Sub Menu Start -->
                    <section class="scroll-section" id="subMenu">
                        <h2 class="small-title">Sub Menu</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                                        <h6 class="mb-3 text-alternate">Left Align</h6>

                                        <div class="mb-1 btn-group">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-submenu="" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown dropend dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>

                                                            <div class="dropdown dropend dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another sub action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                            <button class="dropdown-item" type="button" disabled="">
                                                                Disabled action
                                                            </button>
                                                            <div class="dropdown dropend dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-header">Dropdown header</div>
                                                    <div class="dropdown dropend dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Another action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Another sub
                                                                action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button class="dropdown-item" type="button">Something else here
                                                    </button>
                                                    <div class="dropdown-divider"></div>
                                                    <button class="dropdown-item" type="button">Separated link</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-1 btn-group">
                                            <button class="btn btn-secondary" type="button">Split dropdown</button>
                                            <button
                                                class="btn btn-secondary dropdown-toggle"
                                                type="button"
                                                data-bs-toggle="dropdown"
                                                data-submenu=""
                                                aria-expanded="false"
                                            ></button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown dropend dropdown-submenu">
                                                    <button class="dropdown-item dropdown-toggle" type="button">Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">Sub action</button>
                                                        <div class="dropdown dropend dropdown-submenu">
                                                            <button class="dropdown-item dropdown-toggle" type="button">
                                                                Another sub action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <button class="dropdown-item" type="button">Sub action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Another sub
                                                                    action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Something
                                                                    else here
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <button class="dropdown-item" type="button">Something else
                                                            here
                                                        </button>
                                                        <button class="dropdown-item" type="button" disabled="">Disabled
                                                            action
                                                        </button>
                                                        <div class="dropdown dropend dropdown-submenu">
                                                            <button class="dropdown-item dropdown-toggle" type="button">
                                                                Another action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <button class="dropdown-item" type="button">Sub action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Another sub
                                                                    action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Something
                                                                    else here
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-header">Dropdown header</div>
                                                <div class="dropdown dropend dropdown-submenu">
                                                    <button class="dropdown-item dropdown-toggle" type="button">Another
                                                        action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">Sub action</button>
                                                        <button class="dropdown-item" type="button">Another sub action
                                                        </button>
                                                        <button class="dropdown-item" type="button">Something else
                                                            here
                                                        </button>
                                                    </div>
                                                </div>
                                                <button class="dropdown-item" type="button">Something else here</button>
                                                <div class="dropdown-divider"></div>
                                                <button class="dropdown-item" type="button">Separated link</button>
                                            </div>
                                        </div>

                                        <div class="mb-1 btn-group">
                                            <div class="dropup">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-submenu="">Dropup
                                                </button>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown dropend dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>
                                                            <div class="dropdown dropend dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another sub action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                            <button class="dropdown-item" type="button" disabled="">
                                                                Disabled action
                                                            </button>
                                                            <div class="dropdown dropend dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-header">Dropdown header</div>
                                                    <div class="dropdown dropend dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Another action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Another sub
                                                                action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button class="dropdown-item" type="button">Something else here
                                                    </button>
                                                    <div class="dropdown-divider"></div>
                                                    <button class="dropdown-item" type="button">Separated link</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-1 btn-group">
                                            <div class="btn-group dropup">
                                                <button class="btn btn-secondary" type="button">Split dropup</button>
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-submenu=""></button>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown dropend dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>
                                                            <div class="dropdown dropend dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another sub action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                            <button class="dropdown-item" type="button" disabled="">
                                                                Disabled action
                                                            </button>
                                                            <div class="dropdown dropend dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-header">Dropdown header</div>
                                                    <div class="dropdown dropend dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Another action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Another sub
                                                                action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button class="dropdown-item" type="button">Something else here
                                                    </button>
                                                    <div class="dropdown-divider"></div>
                                                    <button class="dropdown-item" type="button">Separated link</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h6 class="mb-3 text-alternate">Right Align</h6>

                                        <div class="mb-1 btn-group">
                                            <div class="dropdown pull-right">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-submenu="" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown dropstart dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>
                                                            <div class="dropdown dropstart dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another sub action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                            <button class="dropdown-item" type="button" disabled="">
                                                                Disabled action
                                                            </button>
                                                            <div class="dropdown dropstart dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-header">Dropdown header</div>
                                                    <div class="dropdown dropstart dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Another action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Another sub
                                                                action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button class="dropdown-item" type="button">Something else here
                                                    </button>
                                                    <div class="dropdown-divider"></div>
                                                    <button class="dropdown-item" type="button">Separated link</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-group mb-1 pull-right">
                                            <button class="btn btn-secondary" type="button">Split dropdown</button>
                                            <button
                                                class="btn btn-secondary dropdown-toggle"
                                                type="button"
                                                data-bs-toggle="dropdown"
                                                data-submenu=""
                                                aria-expanded="false"
                                            ></button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div class="dropdown dropstart dropdown-submenu">
                                                    <button class="dropdown-item dropdown-toggle" type="button">Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">Sub action</button>
                                                        <div class="dropdown dropstart dropdown-submenu">
                                                            <button class="dropdown-item dropdown-toggle" type="button">
                                                                Another sub action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <button class="dropdown-item" type="button">Sub action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Another sub
                                                                    action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Something
                                                                    else here
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <button class="dropdown-item" type="button">Something else
                                                            here
                                                        </button>
                                                        <button class="dropdown-item" type="button" disabled="">Disabled
                                                            action
                                                        </button>
                                                        <div class="dropdown dropstart dropdown-submenu">
                                                            <button class="dropdown-item dropdown-toggle" type="button">
                                                                Another action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <button class="dropdown-item" type="button">Sub action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Another sub
                                                                    action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Something
                                                                    else here
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-header">Dropdown header</div>
                                                <div class="dropdown dropstart dropdown-submenu">
                                                    <button class="dropdown-item dropdown-toggle" type="button">Another
                                                        action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">Sub action</button>
                                                        <button class="dropdown-item" type="button">Another sub action
                                                        </button>
                                                        <button class="dropdown-item" type="button">Something else
                                                            here
                                                        </button>
                                                    </div>
                                                </div>
                                                <button class="dropdown-item" type="button">Something else here</button>
                                                <div class="dropdown-divider"></div>
                                                <button class="dropdown-item" type="button">Separated link</button>
                                            </div>
                                        </div>

                                        <div class="mb-1 btn-group">
                                            <div class="dropup pull-right">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-submenu="">Dropup
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown dropstart dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>
                                                            <div class="dropdown dropstart dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another sub action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                            <button class="dropdown-item" type="button" disabled="">
                                                                Disabled action
                                                            </button>
                                                            <div class="dropdown dropstart dropdown-submenu">
                                                                <button class="dropdown-item dropdown-toggle"
                                                                        type="button">Another action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <button class="dropdown-item" type="button">Sub
                                                                        action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">Another
                                                                        sub action
                                                                    </button>
                                                                    <button class="dropdown-item" type="button">
                                                                        Something else here
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-header">Dropdown header</div>
                                                    <div class="dropdown dropstart dropdown-submenu">
                                                        <button class="dropdown-item dropdown-toggle" type="button">
                                                            Another action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button class="dropdown-item" type="button">Sub action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Another sub
                                                                action
                                                            </button>
                                                            <button class="dropdown-item" type="button">Something else
                                                                here
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button class="dropdown-item" type="button">Something else here
                                                    </button>
                                                    <div class="dropdown-divider"></div>
                                                    <button class="dropdown-item" type="button">Separated link</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-group mb-1 dropup pull-right">
                                            <button class="btn btn-secondary" type="button">Split dropup</button>
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" data-submenu=""></button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div class="dropdown dropstart dropdown-submenu">
                                                    <button class="dropdown-item dropdown-toggle" type="button">Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">Sub action</button>
                                                        <div class="dropdown dropstart dropdown-submenu">
                                                            <button class="dropdown-item dropdown-toggle" type="button">
                                                                Another sub action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <button class="dropdown-item" type="button">Sub action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Another sub
                                                                    action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Something
                                                                    else here
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <button class="dropdown-item" type="button">Something else
                                                            here
                                                        </button>
                                                        <button class="dropdown-item" type="button" disabled="">Disabled
                                                            action
                                                        </button>
                                                        <div class="dropdown dropstart dropdown-submenu">
                                                            <button class="dropdown-item dropdown-toggle" type="button">
                                                                Another action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <button class="dropdown-item" type="button">Sub action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Another sub
                                                                    action
                                                                </button>
                                                                <button class="dropdown-item" type="button">Something
                                                                    else here
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-header">Dropdown header</div>
                                                <div class="dropdown dropstart dropdown-submenu">
                                                    <button class="dropdown-item dropdown-toggle" type="button">Another
                                                        action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">Sub action</button>
                                                        <button class="dropdown-item" type="button">Another sub action
                                                        </button>
                                                        <button class="dropdown-item" type="button">Something else
                                                            here
                                                        </button>
                                                    </div>
                                                </div>
                                                <button class="dropdown-item" type="button">Something else here</button>
                                                <div class="dropdown-divider"></div>
                                                <button class="dropdown-item" type="button">Separated link</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Sub Menu End -->

                    <!-- Sizing Start -->
                    <section class="scroll-section" id="sizing">
                        <h2 class="small-title">Sizing</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate">Xlarge</h6>
                                <div class="btn-toolbar mb-2" role="toolbar">
                                    <div class="btn-group mb-1">
                                        <button
                                            class="btn btn-secondary btn-xl dropdown-toggle"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Xlarge button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1 ms-1">
                                        <button type="button" class="btn btn-xl btn-secondary">Xlarge split button
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-xl btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        ></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix mb-4"></div>
                                <h6 class="mb-3 text-alternate">Large</h6>
                                <div class="btn-toolbar mb-2" role="toolbar">
                                    <div class="btn-group mb-1">
                                        <button
                                            class="btn btn-secondary btn-lg dropdown-toggle"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Large button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group ms-1 mb-1">
                                        <button type="button" class="btn btn-lg btn-secondary">Large split button
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        ></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix mb-4"></div>
                                <h6 class="mb-3 text-alternate">Small</h6>
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group mb-1">
                                        <button
                                            class="btn btn-secondary btn-sm dropdown-toggle"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Small button
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group ms-1 mb-1">
                                        <button type="button" class="btn btn-sm btn-secondary">Small split button
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        ></button>
                                        <div class="dropdown-menu dropdown-menu-sm">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix mb-4"></div>
                                <h6 class="mb-3 text-alternate">Block</h6>
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group w-100 mb-1">
                                        <button
                                            class="btn btn-secondary w-100 dropdown-toggle"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Block button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group w-100">
                                        <button type="button" class="btn btn-secondary w-100">Block split button
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        ></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Sizing End -->

                    <!-- Split Button Start -->
                    <section class="scroll-section" id="splitButton">
                        <h2 class="small-title">Split Button</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button
                                        type="button"
                                        class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    ></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>

                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button
                                        type="button"
                                        class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    ></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>

                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button
                                        type="button"
                                        class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    ></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>

                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button
                                        type="button"
                                        class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    ></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>

                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button
                                        type="button"
                                        class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    ></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>

                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button
                                        type="button"
                                        class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    ></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Split Button End -->

                    <!-- Directions Start -->
                    <section class="scroll-section" id="directions">
                        <h2 class="small-title">Directions</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-toolbar">
                                    <div class="btn-group dropup mb-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropup
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropup ms-1 mb-1">
                                        <button type="button" class="btn btn-secondary">Split Dropup</button>
                                        <button
                                            type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        ></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-toolbar">
                                    <div class="btn-group dropend mb-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropend
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropend ms-1 mb-1">
                                        <button type="button" class="btn btn-secondary">Split Dropend</button>
                                        <button
                                            type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        ></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-toolbar">
                                    <div class="btn-group dropstart mb-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropstart
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group ms-1 mb-1">
                                        <div class="btn-group dropstart" role="group">
                                            <button
                                                type="button"
                                                class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            ></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-secondary">Split Dropstart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Directions End -->

                    <!-- Menu Content Start -->
                    <section class="scroll-section" id="menuContent">
                        <h2 class="small-title">Menu Content</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-tertiary dropdown-toggle mb-1"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            User
                                        </button>
                                        <div class="dropdown-menu sw-40">
                                            <div class="px-4 py-3">
                                                <div class="row mb-3 ms-0 me-0">
                                                    <div class="col-12 ps-1 mb-2">
                                                        <div class="text-extra-small text-primary">ACCOUNT</div>
                                                    </div>
                                                    <div class="col-6 ps-1 pe-1">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">User Info</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Preferences</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Calendar</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6 pe-1 ps-1">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">Security</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Billing</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row mb-1 ms-0 me-0">
                                                    <div class="col-12 p-1 mb-2 pt-2">
                                                        <div class="text-extra-small text-primary">APPLICATION</div>
                                                    </div>
                                                    <div class="col-6 ps-1 pe-1">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">Themes</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Language</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6 pe-1 ps-1">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">Devices</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Storage</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row mb-1 ms-0 me-0">
                                                    <div class="col-12 p-1 mb-3 pt-3">
                                                        <div class="separator"></div>
                                                    </div>
                                                    <div class="col-6 ps-1 pe-1">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">
                                                                    <i data-cs-icon="help" data-cs-size="17"
                                                                       class="me-2"></i>
                                                                    <span class="align-middle">Help</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i data-cs-icon="file-text" data-cs-size="17"
                                                                       class="me-2"></i>
                                                                    <span class="align-middle">Docs</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6 pe-1 ps-1">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">
                                                                    <i data-cs-icon="gear" data-cs-size="17"
                                                                       class="me-2"></i>
                                                                    <span class="align-middle">Settings</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i data-cs-icon="logout" data-cs-size="17"
                                                                       class="me-2"></i>
                                                                    <span class="align-middle">Logout</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-tertiary dropdown-toggle mb-1"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Menu
                                        </button>
                                        <div class="dropdown-menu">
                                            <h6 class="dropdown-header">Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item disabled" href="#">Disabled action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <span class="dropdown-item-text">Text</span>
                                            <a class="dropdown-item" href="#">Link</a>
                                            <a class="dropdown-item active" href="#">Active link</a>
                                            <a class="dropdown-item" href="#">Another link</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                            <a class="dropdown-item" href="#">Another link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <button
                                        class="btn btn-tertiary dropdown-toggle mb-1"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Text
                                    </button>
                                    <div class="dropdown-menu sw-25">
                                        <div class="px-4 py-3">
                                            <h4>Text</h4>
                                            <p>Some example text that's free-flowing within the dropdown menu.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="dropdown-divider"></div>
                                            <p class="mb-0 text-muted">And this is more example text.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <button
                                        class="btn btn-tertiary dropdown-toggle mb-1"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-bs-auto-close="outside"
                                    >
                                        Login
                                    </button>
                                    <div class="dropdown-menu sw-40">
                                        <form class="px-4 py-3">
                                            <div class="mb-3">
                                                <label class="form-label">Email address</label>
                                                <input class="form-control" type="email"
                                                       placeholder="email@example.com"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password"/>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                                        <a class="dropdown-item" href="#">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Menu Content End -->

                    <!-- Menu Alignment Start -->
                    <section class="scroll-section" id="menuAlignment">
                        <h2 class="small-title">Menu Alignment</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group mb-2">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Right-aligned menu
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                                <div class="btn-group mb-2">
                                    <button
                                        type="button"
                                        class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown"
                                        data-display="static"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Left-aligned but right aligned when large screen
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-lg-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                                <div class="btn-group mb-2">
                                    <button
                                        type="button"
                                        class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown"
                                        data-display="static"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Right-aligned but left aligned when large screen
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Menu Alignment End -->

                    <!-- Dropdown Options Start -->
                    <section class="scroll-section" id="dropdownOptions">
                        <h2 class="small-title">Dropdown Options</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="dropdown me-1">
                                        <button
                                            type="button"
                                            class="btn btn-secondary dropdown-toggle"
                                            id="dropdownMenuOffset"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-bs-offset="10,20"
                                        >
                                            Offset
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary">Reference</button>
                                        <button
                                            type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            id="dropdownMenuReference"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-reference="parent"
                                        ></button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Dropdown Options End -->

                    <!-- Keep Open Start -->
                    <section class="scroll-section" id="autoCloseBehavior">
                        <h2 class="small-title">Auto Close Behavior</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group">
                                    <button
                                        class="btn btn-secondary dropdown-toggle"
                                        type="button"
                                        id="defaultDropdown"
                                        data-bs-toggle="dropdown"
                                        data-bs-auto-close="true"
                                        aria-expanded="false"
                                    >
                                        Default dropdown
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button
                                        class="btn btn-secondary dropdown-toggle"
                                        type="button"
                                        id="dropdownMenuClickableOutside"
                                        data-bs-toggle="dropdown"
                                        data-bs-auto-close="inside"
                                        aria-expanded="false"
                                    >
                                        Clickable outside
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button
                                        class="btn btn-secondary dropdown-toggle"
                                        type="button"
                                        id="dropdownMenuClickableInside"
                                        data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside"
                                        aria-expanded="false"
                                    >
                                        Clickable inside
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button
                                        class="btn btn-secondary dropdown-toggle"
                                        type="button"
                                        id="dropdownMenuClickable"
                                        data-bs-toggle="dropdown"
                                        data-bs-auto-close="false"
                                        aria-expanded="false"
                                    >
                                        Manual close
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#autoCloseBehavior">Menu item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Keep Open End -->

                    <!-- Dropdown as Select Start -->
                    <section class="scroll-section" id="dropdownAsSelect">
                        <h2 class="small-title">Dropdown as Select</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown-as-select d-inline-block me-1" data-childSelector="span">
                                    <button class="btn p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                          <span
                              class="btn btn-primary dropdown-toggle"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              data-bs-delay="0"
                              title="Item Count"
                          ></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Options 1</a>
                                        <a class="dropdown-item" href="#">Options 2</a>
                                        <a class="dropdown-item active" href="#">Options 3</a>
                                    </div>
                                </div>
                                <div class="dropdown-as-select d-inline-block" data-childSelector="span">
                                    <button class="btn p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                          <span
                              class="btn btn-outline-primary dropdown-toggle"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              data-bs-delay="0"
                              title="Item Count"
                          ></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Options 1</a>
                                        <a class="dropdown-item active" href="#">Options 2</a>
                                        <a class="dropdown-item" href="#">Options 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Dropdown as Select End -->
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
                        <a class="nav-link" href="#colors">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Colors</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#subMenu">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sub Menu</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#sizing">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sizing</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#splitButton">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Split Button</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#directions">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Directions</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#menuContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Menu Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#menuAlignment">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Menu Alignment</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#dropdownOptions">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Dropdown Options</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#autoCloseBehavior">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Auto Close Behavior</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#dropdownAsSelect">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Dropdown as Select</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

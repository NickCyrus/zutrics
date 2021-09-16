@php
    $html_tag_data = [];
    $title = 'Plugins';
    $description = 'Various types of plugins that are implemented in the template.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="card mb-2">
            <div class="card-body h-100">{{ $description }}</div>
        </div>
        <!-- Content End -->

        <!-- List Items Start -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-2">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="layout-5" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Carousel') }}" class="heading stretched-link d-block">Carousel</a>
                            <div class="text-muted">Glidejs is a dependency-free JavaScript ES6 slider and carousel.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="chart-2" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Charts') }}" class="heading stretched-link d-block">Charts</a>
                            <div class="text-muted">Chart.js provides simple yet flexible JavaScript charting for
                                designers & developers.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="more-horizontal" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Clamp') }}"
                               class="heading stretched-link d-block">Clamp</a>
                            <div class="text-muted">Clamps an HTML element by adding ellipsis to it if the content
                                inside is too long.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="menu-bookmark" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/ContextMenu') }}"
                               class="heading stretched-link d-block">Context Menu</a>
                            <div class="text-muted">Management facility for context(right click) menus.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="layout-3" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Datatables') }}" class="heading stretched-link d-block">Datatables</a>
                            <div class="text-muted">A table enhancing plug-in for the jQuery Javascript library.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="layout-4" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Lightbox') }}" class="heading stretched-link d-block">Lightbox</a>
                            <div class="text-muted">Simple and easy to use lightbox script written in pure JavaScript.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="list" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/List') }}"
                               class="heading stretched-link d-block">List</a>
                            <div class="text-muted">Tiny, invisible and simple, yet powerful and incredibly fast vanilla
                                js list library.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="pin" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Maps') }}"
                               class="heading stretched-link d-block">Maps</a>
                            <div class="text-muted">Commonly used map providers within an iframe.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="notification" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Notify') }}" class="heading stretched-link d-block">Notify</a>
                            <div class="text-muted">Commonly used map providers within an iframe.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="play" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Player') }}" class="heading stretched-link d-block">Player</a>
                            <div class="text-muted">Plyr is a simple, lightweight, accessible and customizable HTML5,
                                YouTube and Vimeo media player.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="spinner" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Progress') }}" class="heading stretched-link d-block">Progress</a>
                            <div class="text-muted">Responsive and slick progress bars with animated SVG paths.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="mouse" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Scrollbar') }}" class="heading stretched-link d-block">Scrollbar</a>
                            <div class="text-muted">A javascript scrollbar plugin which hides native scrollbars,
                                provides custom styleable overlay scrollbars.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="shortcut" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Shortcuts') }}" class="heading stretched-link d-block">Shortcuts</a>
                            <div class="text-muted">A simple library for handling keyboard shortcuts in Javascript.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="sort" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Sortable') }}" class="heading stretched-link d-block">Sortable</a>
                            <div class="text-muted">Sortable is a JavaScript library for reorderable drag-and-drop
                                lists.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

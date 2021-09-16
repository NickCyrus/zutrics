@php
    $html_tag_data = [];
    $title = 'Menu';
    $description = 'Different menu types that can be configured further.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Content"=>"Content"]
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
                            <i data-cs-icon="menu" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Menu/HorizontalStandard') }}"
                               class="heading stretched-link d-block">Horizontal</a>
                            <div class="text-muted">Horizontal standard menu that turns into mobile menu for smaller
                                screens.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="menu" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Menu/VerticalStandard') }}"
                               class="heading stretched-link d-block">Vertical</a>
                            <div class="text-muted">
                                Standard vertical menu that can be pinned for larger screens, switches to semi-hidden
                                state for tablet sizes and shows mobile menu for
                                smaller screens.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="menu" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Menu/VerticalSemiHidden') }}"
                               class="heading stretched-link d-block">Vertical Hidden</a>
                            <div class="text-muted">A vertical menu that newer shows larger pinned version and switches
                                between mobile view and semi-hidden view.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="menu" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Menu/VerticalNoSemiHidden') }}"
                               class="heading stretched-link d-block">Vertical No Hidden</a>
                            <div class="text-muted">
                                A vertical menu that never gets into semi-hidden state and switches to mobile view
                                directly after desktop view.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="menu" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Menu/MobileOnly') }}"
                               class="heading stretched-link d-block">Mobile Only</a>
                            <div class="text-muted">Shows only the mobile menu regardless of the screen resolution.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="menu" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Content/Menu/Sidebar') }}"
                               class="heading stretched-link d-block">Sidebar</a>
                            <div class="text-muted">
                                A secondary in page menu that blends into the mobile menu for smaller screens. Can be
                                used with both horizontal and vertical menu types.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

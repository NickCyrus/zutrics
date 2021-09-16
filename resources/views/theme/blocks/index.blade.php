@php
    $html_tag_data = [];
    $title = 'Blocks';
    $description = 'Html elements that built with utility-based css classes which are shipped with the template. Additional styling is not required to create these elements and they may be easily modified for custom project needs.';
    $breadcrumbs = ["/"=>"Home"]
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
                            <i data-cs-icon="send" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Blocks/Cta') }}" class="heading stretched-link d-block">Call to Action</a>
                            <div class="text-muted">
                                Call to actions elements with buttons, text and images that comes with the support for
                                static and responsive sizes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="file-text" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Blocks/Details') }}" class="heading stretched-link d-block">Details</a>
                            <div class="text-muted">
                                Detail content that made out of images, text, carousel and so on. They might be combined
                                with other blocks to create pages for different
                                layouts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="image" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Blocks/Gallery') }}" class="heading stretched-link d-block">Gallery</a>
                            <div class="text-muted">Mobile and desktop gallery elements that designed in various shapes
                                for different layouts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="file-image" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Blocks/Images') }}" class="heading stretched-link d-block">Images</a>
                            <div class="text-muted">Thumbnails with different sizes and properties. Mostly created with
                                Bootstrap utils.
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
                            <a href="{{ url('/Blocks/List') }}" class="heading stretched-link d-block">List</a>
                            <div class="text-muted">Lists with and without scrollbars that contains icons, images and
                                texts without breakpoint specific classes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="board-1" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Blocks/Stats') }}" class="heading stretched-link d-block">Stats</a>
                            <div class="text-muted">Numeral value containers for different stats with icons and various
                                layouts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="diagram-1" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Blocks/Steps') }}" class="heading stretched-link d-block">Steps</a>
                            <div class="text-muted">Interface elements for timelines and steps.</div>
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
                            <a href="{{ url('/Blocks/TabularData') }}" class="heading stretched-link d-block">Tabular
                                Data</a>
                            <div class="text-muted">
                                Tables that are created without using table markup in favour of flex divs that have
                                breakpoint specific classes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="content" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Blocks/Thumbnails') }}"
                               class="heading stretched-link d-block">Thumbnails</a>
                            <div class="text-muted">
                                Thumbnail elements that fit for lots of use cases. They cover a wide range by containing
                                icons, images, backgrounds and text.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

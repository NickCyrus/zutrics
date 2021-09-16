@php
    $html_tag_data = [];
    $title = 'Bootstrap Icons';
    $description = 'Free, high quality, open source icon library with over 1,300 icons. Include them anyway you like—SVGs, SVG sprite, or web fonts. Use them with or without Bootstrap in any project.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Content"=>"Content","/Interface/Content/Icons"=>"Icons"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/fuse.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/interface.icons.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-title-container">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>

                <div class="mb-3">
                    <div class="card mb-5">
                        <div class="card-body">
                            <p class="mb-0">{{ $description }}</p>
                        </div>
                    </div>

                    <h2 class="small-title">Icons</h2>
                    <div class="card mb-2">
                        <div class="card-body text-center position-relative p-0">
                            <input class="form-control borderless m-0 py-3 px-3 rounded-lg" type="text"
                                   autocomplete="off" placeholder="Search for icon names & tags"
                                   id="bootstrapIconsSearch"/>
                            <i data-cs-icon="search" class="search-input-icon text-muted"></i>
                        </div>
                    </div>

                    <div class="row g-2 row-cols-3 row-cols-md-4 row-cols-lg-6" id="bootstrapIconsContainer">
                        <!-- Icons will be appended here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@php
    $html_tag_data = [];
    $title = 'CS Line Interface Icons';
    $description = 'An essential and smaller version of CS Line icons in font format.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Content"=>"Content","/Interface/Content/Icons"=>"Icons"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
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
                                   id="csLineInterfaceIconsSearch"/>
                            <i data-cs-icon="search" class="search-input-icon text-muted"></i>
                        </div>
                    </div>

                    <div class="row g-2 row-cols-3 row-cols-md-4 row-cols-lg-6" id="csLineInterfaceIconsContainer">
                        <!-- Icons will be appended here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

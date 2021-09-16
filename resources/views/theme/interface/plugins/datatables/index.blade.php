@php
    $html_tag_data = [];
    $title = 'Datatables';
    $description= 'A table enhancing plug-in for the jQuery Javascript library, adding sorting, paging and filtering abilities to plain HTML tables with minimal effort.';
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
                            <i data-cs-icon="layout-3" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Plugins/Datatables/BoxedVariations') }}"
                               class="heading stretched-link d-block">Boxed Variations</a>
                            <div class="text-muted">Various boxed version implementations.</div>
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
                            <a href="{{ url('/Interface/Plugins/Datatables/EditableBoxed') }}"
                               class="heading stretched-link d-block">Editable Boxed</a>
                            <div class="text-muted">Boxed version with edit, delete and add.</div>
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
                            <a href="{{ url('/Interface/Plugins/Datatables/EditableRows') }}"
                               class="heading stretched-link d-block">Editable Rows</a>
                            <div class="text-muted">Separate rows with edit, delete and add.</div>
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
                            <a href="{{ url('/Interface/Plugins/Datatables/RowsAjax') }}"
                               class="heading stretched-link d-block">Rows Ajax</a>
                            <div class="text-muted">Implementation with a static ajax data source.</div>
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
                            <a href="{{ url('/Interface/Plugins/Datatables/RowsServerSide') }}"
                               class="heading stretched-link d-block">Rows Server Side</a>
                            <div class="text-muted">Server side api implementation.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

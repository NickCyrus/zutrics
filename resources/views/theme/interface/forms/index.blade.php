@php
    $html_tag_data = [];
    $title = 'Forms';
    $description = 'Elements, layouts and plugins that are needed for the forms.';
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
                            <i data-cs-icon="layout-1" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Layouts') }}" class="heading stretched-link d-block">Layouts</a>
                            <div class="text-muted">Top labeled, filled, standard and floating label form layouts along
                                side with Bootstrap form rows.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="form-check" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Validation') }}" class="heading stretched-link d-block">Validation</a>
                            <div class="text-muted">Form validation with the help of javascript and jQuery validation
                                library.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="wizard" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Wizard') }}"
                               class="heading stretched-link d-block">Wizard</a>
                            <div class="text-muted">Wizard implementation on top of Bootstrap's tab system.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="input" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/InputMask') }}" class="heading stretched-link d-block">Input
                                Mask</a>
                            <div class="text-muted">A javascript input mask library that helps the user with the input
                                by ensuring a predefined format.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="form" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/GenericForms') }}" class="heading stretched-link d-block">Generic
                                Forms</a>
                            <div class="text-muted">Generic form examples with validation and different layouts.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="button" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Controls') }}" class="heading stretched-link d-block">Controls</a>
                            <div class="text-muted">External components that are styled for the template.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

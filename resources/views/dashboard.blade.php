@php
    $title = 'Dashboard';
    $description = '';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('layout',[
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
<script>
    @if (session('alert'))
            fn.alert('{{session('alert')}}')
            @php Session::forget('yourKeyGoesHere') @endphp
    @endif
</script>
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
                            <i data-cs-icon="lock-on" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Authentication') }}"
                               class="heading stretched-link d-block">Authentication</a>
                            <div class="text-muted">User verification, registration and recovery pages.</div>
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
                            <a href="{{ url('/Pages/Blog') }}" class="heading stretched-link d-block">Blog</a>
                            <div class="text-muted">Multiple blog pages for home, detail and listing layouts.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="layout-1" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Miscellaneous') }}" class="heading stretched-link d-block">Miscellaneous</a>
                            <div class="text-muted">Various pages fit to use for error, faq, pricing and so on.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="suitcase" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Portfolio') }}" class="heading stretched-link d-block">Portfolio</a>
                            <div class="text-muted">Collection of thumbnails and detail page to showcase work.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="user" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Profile') }}" class="heading stretched-link d-block">Profile</a>
                            <div class="text-muted">Layouts for settings and social aspects of a user page.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

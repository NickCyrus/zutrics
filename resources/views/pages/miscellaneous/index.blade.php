@php
    $html_tag_data = [];
    $title = 'Miscellaneous';
    $description = 'Various pages fit to use for error, faq, pricing and so on.';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages"]
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
                            <i data-cs-icon="alarm" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Miscellaneous/ComingSoon') }}"
                               class="heading stretched-link d-block">Coming
                                Soon</a>
                            <div class="text-muted">A basic countdown page with an email input for newsletter.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="file-empty" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Miscellaneous/Empty') }}" class="heading stretched-link d-block">Empty</a>
                            <div class="text-muted">An empty page that only contains basic script and styling.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="error-hexagon" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Miscellaneous/Error') }}" class="heading stretched-link d-block">Error</a>
                            <div class="text-muted">Error page with error code and a back to home button.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="help" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Miscellaneous/Faq') }}"
                               class="heading stretched-link d-block">Faq</a>
                            <div class="text-muted">Help page with accordion content and a sidebar.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="notebook-1" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Miscellaneous/KnowledgeBase') }}"
                               class="heading stretched-link d-block">Knowledge
                                Base</a>
                            <div class="text-muted">A help page with search, categorized articles and sidebar.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="email" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Miscellaneous/Mailing') }}"
                               class="heading stretched-link d-block">Mailing</a>
                            <div class="text-muted">Inline styled email templates.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="tag" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Miscellaneous/Pricing') }}"
                               class="heading stretched-link d-block">Pricing</a>
                            <div class="text-muted">Price page with a faq section.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="search" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Pages/Miscellaneous/Search') }}" class="heading stretched-link d-block">Search</a>
                            <div class="text-muted">Search result page with filter button and search input.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

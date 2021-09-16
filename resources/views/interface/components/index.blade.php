@php
    $html_tag_data = [];
    $title = 'Components';
    $description = 'Bootstrap components styled for the template as the core of the project.';
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
                            <i data-cs-icon="accordion" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Accordion') }}"
                               class="heading stretched-link d-block">Accordion</a>
                            <div class="text-muted">Build vertically collapsing accordions in combination with our
                                Collapse JavaScript plugin.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="warning-hexagon" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Alerts') }}" class="heading stretched-link d-block">Alerts</a>
                            <div class="text-muted">
                                Provide contextual feedback messages for typical user actions with the handful of
                                available and flexible alert messages.
                            </div>
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
                            <a href="{{ url('/Interface/Components/Badge') }}" class="heading stretched-link d-block">Badge</a>
                            <div class="text-muted">Examples for badges, our small count and labeling component.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="menu-shrink" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Breadcrumb') }}"
                               class="heading stretched-link d-block">Breadcrumb</a>
                            <div class="text-muted">
                                Indicate the current page’s location within a navigational hierarchy that automatically
                                adds separators via CSS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="button-group" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/ButtonGroup') }}"
                               class="heading stretched-link d-block">Button Group</a>
                            <div class="text-muted">
                                Group a series of buttons together on a single line with the button group, and
                                super-power them with JavaScript.
                            </div>
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
                            <a href="{{ url('/Interface/Components/Buttons') }}" class="heading stretched-link d-block">Buttons</a>
                            <div class="text-muted">
                                Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with
                                support for multiple sizes, states, and more.
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
                            <a href="{{ url('/Interface/Components/Card') }}" class="heading stretched-link d-block">Card</a>
                            <div class="text-muted">
                                Bootstrap’s cards provide a flexible and extensible content container with multiple
                                variants and options. We have extended them to create
                                cards for icons, videos, products and so on.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="collapse" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Collapse') }}"
                               class="heading stretched-link d-block">Collapse</a>
                            <div class="text-muted">Toggle the visibility of content across your project with a few
                                classes and our JavaScript plugins.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="dropdown" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Dropdowns') }}"
                               class="heading stretched-link d-block">Dropdowns</a>
                            <div class="text-muted">Toggle contextual overlays for displaying lists of links and more
                                with the Bootstrap dropdown plugin.
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
                            <a href="{{ url('/Interface/Components/ListGroup') }}"
                               class="heading stretched-link d-block">List Group</a>
                            <div class="text-muted">
                                List groups are a flexible and powerful component for displaying a series of content.
                                Modify and extend them to support just about any
                                content within.
                            </div>
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
                            <a href="{{ url('/Interface/Components/Modal') }}" class="heading stretched-link d-block">Modal</a>
                            <div class="text-muted">
                                Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                notifications, or completely custom content.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="compass" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Navs') }}" class="heading stretched-link d-block">Navs</a>
                            <div class="text-muted">Examples for how to use Bootstrap’s included navigation
                                components.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="book-open" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Pagination') }}"
                               class="heading stretched-link d-block">Pagination</a>
                            <div class="text-muted">Examples for showing pagination to indicate a series of related
                                content exists across multiple pages.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="duplicate" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Popovers') }}"
                               class="heading stretched-link d-block">Popovers</a>
                            <div class="text-muted">Examples for adding Bootstrap popovers, like those found in iOS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="arrow-right" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Progress') }}"
                               class="heading stretched-link d-block">Progress</a>
                            <div class="text-muted">
                                Examples for using Bootstrap custom progress bars featuring support for stacked bars,
                                animated backgrounds, and text labels.
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
                            <a href="{{ url('/Interface/Components/Spinners') }}"
                               class="heading stretched-link d-block">Spinners</a>
                            <div class="text-muted">
                                Indicate the loading state of a component or page with Bootstrap spinners, built
                                entirely with HTML, CSS, and no JavaScript.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="warning-hexagon" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Toasts') }}" class="heading stretched-link d-block">Toasts</a>
                            <div class="text-muted">Push notifications to your visitors with a toast, a lightweight and
                                easily customizable alert message.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="messages" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Components/Tooltips') }}"
                               class="heading stretched-link d-block">Tooltips</a>
                            <div class="text-muted">
                                Documentation and examples for adding custom Bootstrap tooltips with CSS and JavaScript
                                using CSS3 for animations and data-attributes for
                                local title storage.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- List Items End -->
    </div>
@endsection

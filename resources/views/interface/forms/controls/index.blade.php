@php
    $html_tag_data = [];
    $title = 'Controls';
    $description = 'External components that are styled for the template.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms"]
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
                            <i data-cs-icon="input" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Controls/Autocomplete') }}"
                               class="heading stretched-link d-block">Autocomplete</a>
                            <div class="text-muted">AutoComplete.js is a simple pure vanilla Javascript library.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="check-square" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Controls/CheckboxRadio') }}"
                               class="heading stretched-link d-block">Checkbox Radio</a>
                            <div class="text-muted">Custom radio, checkbox and switch examples of Bootstrap.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="calendar" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Controls/DatePicker') }}"
                               class="heading stretched-link d-block">Date Picker</a>
                            <div class="text-muted">Bootstrap-datepicker provides a flexible datepicker widget in the
                                Bootstrap style.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="upload" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Controls/Dropzone') }}"
                               class="heading stretched-link d-block">Dropzone</a>
                            <div class="text-muted">An open source library that provides drag and drop file uploads with
                                image previews.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="editor" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Controls/Editor') }}"
                               class="heading stretched-link d-block">Editor</a>
                            <div class="text-muted">A modern rich text editor built for compatibility and
                                extensibility.
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
                            <a href="{{ url('/Interface/Forms/Controls/InputSpinner') }}"
                               class="heading stretched-link d-block">Input Spinner</a>
                            <div class="text-muted">A number spinner that support keyboard operations and properties
                                like max, min and step.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="star" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Controls/Rating') }}"
                               class="heading stretched-link d-block">Rating</a>
                            <div class="text-muted">Rating Plugin works by transforming a standard select field into a
                                rating widget.
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
                            <a href="{{ url('/Interface/Forms/Controls/Select2') }}"
                               class="heading stretched-link d-block">Select2</a>
                            <div class="text-muted">Select2 is a jQuery based replacement for select boxes.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="settings-2" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Controls/Slider') }}"
                               class="heading stretched-link d-block">Slider</a>
                            <div class="text-muted">Lightweight JavaScript range slider library with full multi-touch
                                support.
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
                            <a href="{{ url('/Interface/Forms/Controls/Tags') }}"
                               class="heading stretched-link d-block">Tags</a>
                            <div class="text-muted">Lightweight, efficient Tags input component in Vanilla JS.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="clock" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="{{ url('/Interface/Forms/Controls/TimePicker') }}"
                               class="heading stretched-link d-block">TimePicker</a>
                            <div class="text-muted">A simple component that turns a form input into a time picker with
                                the help of Select2.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection

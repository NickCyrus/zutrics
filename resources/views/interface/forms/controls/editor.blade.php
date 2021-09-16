@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Editor';
    $description= 'A modern rich text editor built for compatibility and extensibility.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms","/Interface/Forms/Controls"=>"Controls"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/quill.bubble.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/quill.snow.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/quill.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/quill.active.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/controls.editor.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">{{ $title }}</h1>
                        @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                    </div>
                </section>
                <!-- Title End -->

                <!-- Content Start -->
                <div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <p class="mb-0">{{ $description }}</p>
                        </div>
                    </div>

                    <!-- Quill Bubble Start -->
                    <section class="scroll-section" id="quillBubble">
                        <h2 class="small-title">Quill Bubble</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="html-editor-bubble sh-19 html-editor" id="quillEditorBubble"></div>
                            </div>
                        </div>
                    </section>
                    <!-- Quill Bubble End -->

                    <!-- Quill Standart Start -->
                    <section class="scroll-section" id="quillStandart">
                        <h2 class="small-title">Quill Standart</h2>
                        <div class="card mb-5">
                            <div class="card-body editor-container">
                                <div class="html-editor sh-19" id="quillEditor"></div>
                            </div>
                        </div>
                    </section>
                    <!-- Quill Standart End -->

                    <!-- Quill Filled Start -->
                    <section class="scroll-section" id="filled">
                        <h2 class="small-title">Filled</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="filled custom-control-container editor-container">
                                    <div class="html-editor sh-9" id="quillEditorFilled"></div>
                                    <i data-cs-icon="notebook-1"></i>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Quill Filled End -->

                    <!-- Quill Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="top-label custom-control-container editor-container">
                                    <div class="html-editor sh-9" id="quillEditorTopLabel"></div>
                                    <span>EDITOR</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Quill Top Label End -->

                    <!-- Quill Floating Label Start -->
                    <section class="scroll-section" id="floatingLabel">
                        <h2 class="small-title">Floating Label</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-floating">
                                    <div class="html-editor sh-13" id="quillEditorFloatingLabel"></div>
                                    <label>Editor</label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Quill Top Label End -->
                </div>
                <!-- Content End -->
            </div>

            <!-- Scrollspy Start -->
            <div class="col-md-auto d-none d-lg-block" id="scrollSpyMenu">
                <ul class="nav flex-column">
                    <li>
                        <a class="nav-link" href="#title">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Title</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#quillBubble">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Quill Bubble</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#quillStandart">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Quill Standart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#filled">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Filled</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#topLabel">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Top Label</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#floatingLabel">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Floating Label</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

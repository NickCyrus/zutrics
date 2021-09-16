@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Dropzone';
    $description= 'An open source library that provides drag’n’drop file uploads with image previews.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms","/Interface/Forms/Controls"=>"Controls"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/dropzone.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/dropzone.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/singleimageupload.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/dropzone.templates.js') }}"></script>
    <script src="{{ asset('/js/forms/controls.dropzone.js') }}"></script>
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

                    <!-- Images Start -->
                    <section class="scroll-section" id="images">
                        <h2 class="small-title">Images</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="dropzone" id="dropzoneImage"></div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Images End -->

                    <!-- Text Files Start -->
                    <section class="scroll-section" id="textFiles">
                        <h2 class="small-title">Text Files</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="dropzone" id="dropzoneText"></div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Text Files End -->

                    <!-- Columns Start -->
                    <section class="scroll-section" id="columns">
                        <h2 class="small-title">Columns</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div
                                        class="dropzone dropzone-columns row g-2 row-cols-1 row-cols-md-4 row-cols-xl-6 border-0 p-0"
                                        id="dropzoneColumns"></div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Columns End -->

                    <!-- Uploaded Files Start -->
                    <section class="scroll-section" id="uploadedFiles">
                        <h2 class="small-title">Uploaded Files</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="dropzone" id="dropzoneServerFiles"></div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Uploaded Files End -->

                    <!-- Filled Start -->
                    <section class="scroll-section" id="filled">
                        <h2 class="small-title">Filled</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="filled">
                                        <div class="dropzone dropzone-filled" id="dropzoneFilled"></div>
                                        <i data-cs-icon="upload"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Filled End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="top-label">
                                        <div class="dropzone dropzone-top-label" id="dropzoneTopLabel"></div>
                                        <span>FILES</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Top Label End -->

                    <!-- Floating Label Start -->
                    <section class="scroll-section" id="floatingLabel">
                        <h2 class="small-title">Floating Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="form-floating">
                                        <div class="dropzone dropzone-floating-label" id="dropzoneFloatingLabel"></div>
                                        <label>Files</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Floating Label End -->

                    <!-- Single Image Uploader Start -->
                    <section class="scroll-section" id="singleImageUpload">
                        <h2 class="small-title">Single Image Upload</h2>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="position-relative d-inline-block" id="singleImageUploadExample">
                                        <img src="{{ asset('/img/profile/profile-11.jpg') }}" alt="user"
                                             class="rounded-xl border border-separator-light border-4 sw-11 sh-11"/>
                                        <button
                                            class="btn btn-sm btn-icon btn-icon-only btn-separator-light rounded-xl position-absolute e-0 b-0"
                                            type="button">
                                            <i data-cs-icon="upload"></i>
                                        </button>
                                        <input class="file-upload d-none" type="file" accept="image/*"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Single Image Uploader End -->
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
                        <a class="nav-link" href="#images">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Images</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#textFiles">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Text Files</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#columns">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Columns</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#uploadedFiles">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Uploaded Files</span>
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
                    <li>
                        <a class="nav-link" href="#singleImageUpload">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Single Image Upload</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

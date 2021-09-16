@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Pagination';
    $description= 'Examples for showing pagination to indicate a series of related content exists across multiple pages.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Components"=>"Components"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
@endsection

@section('js_page')
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

                    <!-- Default Start -->
                    <section class="scroll-section" id="default">
                        <h2 class="small-title">Default</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Working with Icons Start -->
                    <section class="scroll-section" id="workingWithIcons">
                        <h2 class="small-title">Working with Icons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="First">
                                                <i data-cs-icon="arrow-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Last">
                                                <i data-cs-icon="arrow-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="First">
                                                <i data-cs-icon="arrow-end-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i data-cs-icon="arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i data-cs-icon="arrow-right"></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Last">
                                                <i data-cs-icon="arrow-end-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Working with Icons End -->

                    <!-- Appearance Start -->
                    <section class="scroll-section" id="appearance">
                        <h2 class="small-title">Appearance</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate">Default</h6>
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="clearfix mb-4"></div>
                                <h6 class="mb-3 text-alternate">Bodered</h6>
                                <nav>
                                    <ul class="pagination bordered">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="clearfix mb-4"></div>
                                <h6 class="mb-3 text-alternate">Semi Bordered</h6>
                                <nav>
                                    <ul class="pagination semibordered">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Appearance End -->

                    <!-- Foreground Start -->
                    <section class="scroll-section" id="foreground">
                        <h2 class="small-title">Foreground</h2>
                        <div class="mb-5">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item shadow disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <i data-cs-icon="chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active shadow"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item shadow"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item shadow"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item shadow">
                                        <a class="page-link" href="#">
                                            <i data-cs-icon="chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </section>
                    <!-- Foreground End -->

                    <!-- Sizing Start -->
                    <section class="scroll-section" id="sizing">
                        <h2 class="small-title">Sizing</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <nav class="mb-5">
                                    <ul class="pagination pagination-xl">
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav class="mb-5">
                                    <ul class="pagination pagination-lg">
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav class="mb-5">
                                    <ul class="pagination pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav class="mb-5">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Sizing End -->

                    <!-- Alignment Start -->
                    <section class="scroll-section" id="alignment">
                        <h2 class="small-title">Alignment</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <nav aria-label="Page navigation example" class="mb-5">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i data-cs-icon="chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Alignment End -->
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
                        <a class="nav-link" href="#default">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Default</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#workingWithIcons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Working with Icons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#appearance">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Appearance</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#foreground">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Foreground</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#sizing">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sizing</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#alignment">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Alignment</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

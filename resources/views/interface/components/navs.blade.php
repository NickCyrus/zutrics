@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Navs';
    $description= 'Examples for how to use Bootstrap’s included navigation components.';
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
    <script src="{{ asset('/js/cs/responsivetab.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/components/navs.js') }}"></script>
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
                                <h6 class="mb-3 text-alternate">List</h6>
                                <ul class="nav horizontal-padding-0">
                                    <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                <div class="clearfix mb-3"></div>
                                <h6 class="mb-3 text-alternate">Nav</h6>
                                <nav class="nav horizontal-padding-0">
                                    <a class="nav-link active" href="#">Active</a>
                                    <a class="nav-link" href="#">Link</a>
                                    <a class="nav-link" href="#">Link</a>
                                    <a class="nav-link disabled" href="#" tabindex="-1"
                                       aria-disabled="true">Disabled</a>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Horizontal Alignment Start -->
                    <section class="scroll-section" id="horizontalAlignment">
                        <h2 class="small-title">Horizontal Alignment</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <ul class="nav justify-content-center mb-4 horizontal-padding-0">
                                    <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                <ul class="nav justify-content-end horizontal-padding-0">
                                    <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- Horizontal Alignment End -->

                    <!-- Vertical Start -->
                    <section class="scroll-section" id="vertical">
                        <h2 class="small-title">Vertical</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <nav class="nav flex-column">
                                    <a class="nav-link active px-0" href="#">Active</a>
                                    <a class="nav-link px-0" href="#">Link</a>
                                    <a class="nav-link px-0" href="#">Link</a>
                                    <a class="nav-link disabled px-0" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Vertical End -->

                    <!-- Lines Start -->
                    <section class="scroll-section" id="lines">
                        <h2 class="small-title">Lines</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <ul class="nav card-header-tabs nav-tabs nav-tabs-line">
                                    <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- Lines End -->

                    <!-- Pills Start -->
                    <section class="scroll-section" id="pills">
                        <h2 class="small-title">Pills</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- Pills End -->

                    <!-- Fill and Justify Start -->
                    <section class="scroll-section" id="fillAndJustify">
                        <h2 class="small-title">Fill and Justify</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate">Fill</h6>
                                <nav class="nav nav-pills nav-fill mb-4">
                                    <a class="nav-item nav-link active" href="#">Active</a>
                                    <a class="nav-item nav-link" href="#">Much longer nav link</a>
                                    <a class="nav-item nav-link" href="#">Link</a>
                                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </nav>
                                <h6 class="mb-3 text-alternate">Justify</h6>
                                <nav class="nav nav-pills nav-justified">
                                    <a class="nav-item nav-link active" href="#">Active</a>
                                    <a class="nav-item nav-link" href="#">Much longer nav link</a>
                                    <a class="nav-item nav-link" href="#">Link</a>
                                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Fill and Justify End -->

                    <!-- Flex Utilities Start -->
                    <section class="scroll-section" id="flexUtilities">
                        <h2 class="small-title">Flex Utilities</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <nav class="nav nav-pills flex-column flex-sm-row">
                                    <a class="flex-sm-fill text-sm-center nav-link active" href="#">Active</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" href="#">Longer nav link</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" href="#">Link</a>
                                    <a class="flex-sm-fill text-sm-center nav-link disabled" href="#" tabindex="-1"
                                       aria-disabled="true">Disabled</a>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Flex Utilities End -->

                    <!-- Responsive Tabs Start -->
                    <section class="scroll-section" id="responsiveTabs">
                        <h2 class="small-title">Responsive Tabs</h2>
                        <div class="card mb-3">
                            <div class="card-header border-0 pb-0">
                                <ul class="nav nav-tabs nav-tabs-line card-header-tabs responsive-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#first"
                                                role="tab" type="button" aria-selected="true">
                                            First
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#second"
                                                role="tab" type="button" aria-selected="false">Second
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#third" role="tab"
                                                type="button" aria-selected="false">Third
                                        </button>
                                    </li>
                                    <li class="nav-item disabled" role="presentation">
                                        <button class="nav-link" disabled data-bs-toggle="tab" data-bs-target="#fourth"
                                                role="tab" type="button" aria-selected="false">
                                            Disabled
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fifth" role="tab"
                                                type="button" aria-selected="false">Fifth
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sixth" role="tab"
                                                type="button" aria-selected="false">Sixth
                                        </button>
                                    </li>
                                    <!-- An empty list to put overflowed links -->
                                    <li class="nav-item dropdown ms-auto pe-0 d-none responsive-tab-dropdown">
                                        <button class="btn btn-icon btn-icon-only btn-foreground mt-2" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-cs-icon="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu mt-2 dropdown-menu-end"></ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="first" role="tabpanel">
                                        <h5 class="card-title">First Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="second" role="tabpanel">
                                        <h5 class="card-title">Second Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="third" role="tabpanel">
                                        <h5 class="card-title">Third Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="fourth" role="tabpanel">
                                        <h5 class="card-title">Fourth Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="fifth" role="tabpanel">
                                        <h5 class="card-title">Fifth Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="sixth" role="tabpanel">
                                        <h5 class="card-title">Sixth Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-header border-0 pb-0">
                                <ul class="nav nav-pills responsive-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#first3"
                                                role="tab" aria-selected="true" type="button">
                                            First
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#second3"
                                                role="tab" aria-selected="false" type="button">Second
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#third3"
                                                role="tab" aria-selected="false" type="button">Third
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fourth3"
                                                role="tab" aria-selected="false" type="button">Fourth
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fifth3"
                                                role="tab" aria-selected="false" type="button">Fifth
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sixth3"
                                                role="tab" aria-selected="false" type="button">Sixth
                                        </button>
                                    </li>
                                    <!-- An empty list to put overflowed links -->
                                    <li class="nav-item dropdown ms-auto pe-0 d-none responsive-tab-dropdown">
                                        <button class="btn btn-icon btn-icon-only btn-foreground"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                type="button">
                                            <i data-cs-icon="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"></ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="first3" role="tabpanel">
                                        <h5 class="card-title">First Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="second3" role="tabpanel">
                                        <h5 class="card-title">Second Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="third3" role="tabpanel">
                                        <h5 class="card-title">Third Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="fourth3" role="tabpanel">
                                        <h5 class="card-title">Fourth Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="fifth3" role="tabpanel">
                                        <h5 class="card-title">Fifth Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="sixth3" role="tabpanel">
                                        <h5 class="card-title">Sixth Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive Tabs End -->

                        <!-- Responsive Tabs with Title Start -->
                        <ul class="nav nav-tabs nav-tabs-title card-header-tabs responsive-tabs" id="titleTabsContainer"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#firstTitleTab" role="tab"
                                   aria-selected="true">First Title Tabs</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#secondTitleTab" role="tab"
                                   aria-selected="false">Second Title Tab</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#thirdTitleTab" role="tab"
                                   aria-selected="false">Third Title Tab</a>
                            </li>
                            <!-- An empty list to put overflowed links -->
                            <li class="nav-item dropdown ms-auto pe-0 d-none responsive-tab-dropdown">
                                <a class="btn btn-icon btn-icon-only btn-background mt-n3" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-cs-icon="more-horizontal"></i>
                                </a>
                                <ul class="dropdown-menu mt-2 dropdown-menu-end"></ul>
                            </li>
                        </ul>

                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="firstTitleTab" role="tabpanel">
                                        <h5 class="card-title">First Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="secondTitleTab" role="tabpanel">
                                        <h5 class="card-title">Second Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="thirdTitleTab" role="tabpanel">
                                        <h5 class="card-title">Third Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive Tabs with Title End -->

                        <!-- Responsive Tabs with Line Title Start -->
                        <ul class="nav nav-tabs nav-tabs-title nav-tabs-line-title responsive-tabs"
                            id="lineTitleTabsContainer" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#firstLineTitleTab" role="tab"
                                   aria-selected="true">First Line Title Tab</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#secondLineTitleTab" role="tab"
                                   aria-selected="false">Second Line Title Tab</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#thirdLineTitleTab" role="tab"
                                   aria-selected="false">Third Line Title Tab</a>
                            </li>
                            <!-- An empty list to put overflowed links -->
                            <li class="nav-item dropdown ms-auto pe-0 d-none responsive-tab-dropdown">
                                <a class="btn btn-icon btn-icon-only btn-background pt-0 bg-transparent pe-0" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-cs-icon="more-horizontal"></i>
                                </a>
                                <ul class="dropdown-menu mt-2 dropdown-menu-end"></ul>
                            </li>
                        </ul>

                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="firstLineTitleTab" role="tabpanel">
                                        <h5 class="card-title">First Line Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="secondLineTitleTab" role="tabpanel">
                                        <h5 class="card-title">Second Line Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="tab-pane fade" id="thirdLineTitleTab" role="tabpanel">
                                        <h5 class="card-title">Third Line Title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Responsive Tabs with Line Title End -->

                    <!-- Using Dropdowns Start -->
                    <section class="scroll-section" id="usingDropdowns">
                        <h2 class="small-title">Using Dropdowns</h2>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate">Pills</h6>
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                           aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                <div class="clearfix mb-4"></div>

                                <h6 class="mb-3 text-alternate">Line Tabs</h6>
                                <ul class="nav nav-tabs nav-tabs-line">
                                    <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                           aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- Using Dropdowns End -->
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
                        <a class="nav-link" href="#horizontalAlignment">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal Alignment</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#vertical">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Vertical</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#lines">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Lines</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#pills">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Pills</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#fillAndJustify">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Fill and Justify</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#flexUtilities">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Flex Utilities</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#responsiveTabs">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Responsive Tabs</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#usingDropdowns">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Using Dropdowns</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

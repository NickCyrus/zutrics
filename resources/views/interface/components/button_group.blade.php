@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Button Group';
    $description = 'Group a series of buttons together on a single line with the button group, and super-power them with JavaScript.';
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
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary">Left</button>
                                    <button type="button" class="btn btn-primary">Middle</button>
                                    <button type="button" class="btn btn-primary">Right</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Links Start -->
                    <section class="scroll-section" id="links">
                        <h2 class="small-title">Links</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
                                    <a href="#" class="btn btn-primary">Link</a>
                                    <a href="#" class="btn btn-primary">Link</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Links End -->

                    <!-- Mixed Styles Start -->
                    <section class="scroll-section" id="mixedStyles">
                        <h2 class="small-title">Mixed Styles</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-primary">Left</button>
                                    <button type="button" class="btn btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-tertiary">Right</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Mixed Styles End -->

                    <!-- Outline Styles Start -->
                    <section class="scroll-section" id="outlineStyles">
                        <h2 class="small-title">Outline Styles</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-primary">Left</button>
                                    <button type="button" class="btn btn-outline-primary">Middle</button>
                                    <button type="button" class="btn btn-outline-primary">Right</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Outline Styles End -->

                    <!-- Checkboxes & Radios Start -->
                    <section class="scroll-section" id="checkboxRadioButtons">
                        <h2 class="small-title">Checkboxes & Radios</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1"/>
                                    <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>
                                    <input type="checkbox" class="btn-check" id="btncheck2"/>
                                    <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>
                                    <input type="checkbox" class="btn-check" id="btncheck3"/>
                                    <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                                </div>
                                <div class="mb-3"></div>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked/>
                                    <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2"/>
                                    <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3"/>
                                    <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                                </div>
                                <div class="mb-3"></div>
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1Secondary"/>
                                    <label class="btn btn-outline-secondary" for="btncheck1Secondary">Checkbox 1</label>
                                    <input type="checkbox" class="btn-check" id="btncheck2Secondary"/>
                                    <label class="btn btn-outline-secondary" for="btncheck2Secondary">Checkbox 2</label>
                                    <input type="checkbox" class="btn-check" id="btncheck3Secondary"/>
                                    <label class="btn btn-outline-secondary" for="btncheck3Secondary">Checkbox 3</label>
                                </div>
                                <div class="mb-3"></div>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradioSecondary"
                                           id="btnradio1Secondary" checked/>
                                    <label class="btn btn-outline-secondary" for="btnradio1Secondary">Radio 1</label>
                                    <input type="radio" class="btn-check" name="btnradioSecondary"
                                           id="btnradio2Secondary"/>
                                    <label class="btn btn-outline-secondary" for="btnradio2Secondary">Radio 2</label>
                                    <input type="radio" class="btn-check" name="btnradioSecondary"
                                           id="btnradio3Secondary"/>
                                    <label class="btn btn-outline-secondary" for="btnradio3Secondary">Radio 3</label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Checkboxes & Radios End -->

                    <!-- Button Toolbar Start -->
                    <section class="scroll-section" id="buttonToolbar">
                        <h2 class="small-title">Button Toolbar</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-primary">1</button>
                                        <button type="button" class="btn btn-primary">2</button>
                                        <button type="button" class="btn btn-primary">3</button>
                                        <button type="button" class="btn btn-primary">4</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Second group">
                                        <button type="button" class="btn btn-secondary">5</button>
                                        <button type="button" class="btn btn-secondary">6</button>
                                        <button type="button" class="btn btn-secondary">7</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-info">8</button>
                                    </div>
                                </div>
                                <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-outline-secondary">1</button>
                                        <button type="button" class="btn btn-outline-secondary">2</button>
                                        <button type="button" class="btn btn-outline-secondary">3</button>
                                        <button type="button" class="btn btn-outline-secondary">4</button>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text" id="btnGroupAddon">@@</div>
                                        <input type="text" class="form-control" placeholder="Input group example"
                                               aria-label="Input group example" aria-describedby="btnGroupAddon"/>
                                    </div>
                                </div>
                                <div class="btn-toolbar justify-content-between" role="toolbar"
                                     aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-outline-secondary">1</button>
                                        <button type="button" class="btn btn-outline-secondary">2</button>
                                        <button type="button" class="btn btn-outline-secondary">3</button>
                                        <button type="button" class="btn btn-outline-secondary">4</button>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text" id="btnGroupAddon2">@@</div>
                                        <input type="text" class="form-control" placeholder="Input group example"
                                               aria-label="Input group example" aria-describedby="btnGroupAddon2"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Button Toolbar End -->

                    <!-- Sizing Start -->
                    <section class="scroll-section" id="sizing">
                        <h2 class="small-title">Sizing</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate font-standard">Xlarge</h6>
                                <div class="btn-group btn-group-xl mb-1" role="group" aria-label="Basic example -lg">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>
                                <div class="clearfix mb-4"></div>

                                <h6 class="mb-3 text-alternate font-standard">Large</h6>
                                <div class="btn-group btn-group-lg mb-1" role="group" aria-label="Basic example -lg">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>
                                <div class="clearfix mb-4"></div>

                                <h6 class="mb-3 text-alternate font-standard">Normal</h6>
                                <div class="btn-group mb-1" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>
                                <div class="clearfix mb-4"></div>

                                <h6 class="mb-3 text-alternate font-standard">Small</h6>
                                <div class="btn-group btn-group-sm mb-1" role="group" aria-label="Basic example -sm">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Sizing End -->

                    <!-- Nesting Start -->
                    <section class="scroll-section" id="nesting">
                        <h2 class="small-title">Nesting</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-secondary">1</button>
                                    <button type="button" class="btn btn-secondary">2</button>

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button"
                                                class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Nesting End -->
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
                        <a class="nav-link" href="#links">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Links</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#mixedStyles">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Mixed Styles</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#outlineStyles">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Outline Styles</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#checkboxRadioButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Checkbox & Radios</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#buttonToolbar">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Button Toolbar</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#sizing">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sizing</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#nesting">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Nesting</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

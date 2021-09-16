@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Input Group';
    $description= 'Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.';
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

                    <!-- Basic Example Start -->
                    <section class="scroll-section" id="basicExample">
                        <h2 class="small-title">Basic Example</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                           aria-describedby="basic-addon1"/>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                           aria-label="Recipient's username" aria-describedby="basic-addon2"/>
                                    <span class="input-group-text" id="basic-addon2">@@example.com</span>
                                </div>
                                <label for="basic-url" class="form-label">Your vanity URL</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    <input type="text" class="form-control" id="basic-url"
                                           aria-describedby="basic-addon3"/>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control"
                                           aria-label="Amount (to the nearest dollar)"/>
                                    <span class="input-group-text">.00</span>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Username"
                                           aria-label="Username"/>
                                    <span class="input-group-text">@@</span>
                                    <input type="text" class="form-control" placeholder="Server" aria-label="Server"/>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">With textarea</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Basic Example End -->

                    <!-- Wrapping Start -->
                    <section class="scroll-section" id="wrapping">
                        <h2 class="small-title">Wrapping</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">@@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                           aria-describedby="addon-wrapping"/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Wrapping End -->

                    <!-- Sizing Start -->
                    <section class="scroll-section" id="sizing">
                        <h2 class="small-title">Sizing</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-sm"/>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default"/>
                                </div>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-lg"/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Sizing End -->

                    <!-- Checkboxes and Radios Start -->
                    <section class="scroll-section" id="checkboxesAndRadios">
                        <h2 class="small-title">Checkboxes and Radios</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="checkbox" value=""
                                               aria-label="Checkbox for following text input"/>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox"/>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="radio" value=""
                                               aria-label="Radio button for following text input"/>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with radio button"/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Checkboxes and Radios End -->

                    <!-- Multiple Inputs Start -->
                    <section class="scroll-section" id="multipleInputs">
                        <h2 class="small-title">Multiple Inputs</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group">
                                    <span class="input-group-text">First and last name</span>
                                    <input type="text" aria-label="First name" class="form-control"/>
                                    <input type="text" aria-label="Last name" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Multiple Inputs End -->

                    <!-- Multiple Addons Start -->
                    <section class="scroll-section" id="multipleAddons">
                        <h2 class="small-title">Multiple Addons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                    <input type="text" class="form-control"
                                           aria-label="Dollar amount (with dot and two decimal places)"/>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           aria-label="Dollar amount (with dot and two decimal places)"/>
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Multiple Addons End -->

                    <!-- Button Addons Start -->
                    <section class="scroll-section" id="buttonAddons">
                        <h2 class="small-title">Button Addons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button
                                    </button>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Example text with button addon"
                                           aria-describedby="button-addon1"/>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                           aria-label="Recipient's username" aria-describedby="button-addon2"/>
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button
                                    </button>
                                </div>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Example text with two button addons"/>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                           aria-label="Recipient's username with two button addons"/>
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Button Addons End -->

                    <!-- Buttons with Dropdowns Start -->
                    <section class="scroll-section" id="buttonsWithDropdowns">
                        <h2 class="small-title">Buttons with Dropdowns</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider"/>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="text" class="form-control"
                                           aria-label="Text input with dropdown button"/>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control"
                                           aria-label="Text input with dropdown button"/>
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider"/>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action before</a></li>
                                        <li><a class="dropdown-item" href="#">Another action before</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider"/>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="text" class="form-control"
                                           aria-label="Text input with 2 dropdown buttons"/>
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider"/>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Buttons with Dropdowns End -->

                    <!-- Segmented Buttons Start -->
                    <section class="scroll-section" id="segmentedButtons">
                        <h2 class="small-title">Segmented Buttons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider"/>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="text" class="form-control"
                                           aria-label="Text input with segmented dropdown button"/>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           aria-label="Text input with segmented dropdown button"/>
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider"/>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Segmented Buttons End -->

                    <!-- Custom Forms Start -->
                    <section class="scroll-section" id="customForms">
                        <h2 class="small-title">Custom Forms</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                </div>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <select class="form-select" id="inputGroupSelect03"
                                            aria-label="Example select with button addon">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect04"
                                            aria-label="Example select with button addon">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Custom Forms End -->

                    <!-- Custom File Input Start -->
                    <section class="scroll-section" id="customFileInput">
                        <h2 class="small-title">Custom File Input</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01"/>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02"/>
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">
                                        Button
                                    </button>
                                    <input type="file" class="form-control" id="inputGroupFile03"
                                           aria-describedby="inputGroupFileAddon03" aria-label="Upload"/>
                                </div>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="inputGroupFile04"
                                           aria-describedby="inputGroupFileAddon04" aria-label="Upload"/>
                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">
                                        Button
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Custom File Input End -->
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
                        <a class="nav-link" href="#basicExample">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic Example</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#wrapping">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Wrapping</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#sizing">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sizing</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#checkboxesAndRadios">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Checkboxes and Radios</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#multipleInputs">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Multiple Inputs</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#multipleAddons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Multiple Addons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#buttonAddons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Button Addons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#buttonsWithDropdowns">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Buttons with Dropdowns</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#segmentedButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Segmented Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customForms">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Forms</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customFileInput">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom File Input</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Layouts';
    $description= 'Examples and usage guidelines for form control styles and layout options.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap-datepicker3.standalone.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/tagify.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/tagify.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/layouts.js') }}"></script>
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

                    <section class="scroll-section" id="basic">
                        <!-- Basic Start -->
                        <h2 class="small-title">Basic</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tag</label>
                                        <input class="form-control" id="tagBasic"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control date-picker" id="datePickerBasic"/>
                                    </div>
                                    <div class="mb-3 w-100">
                                        <label class="form-label">Breads</label>
                                        <select id="selectBasic">
                                            <option label="&nbsp;"></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Maybe">Maybe</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea placeholder="" class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Basic End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <label class="mb-3 top-label">
                                        <input class="form-control"/>
                                        <span>E-MAIL</span>
                                    </label>
                                    <label class="mb-3 top-label">
                                        <input class="form-control" type="password" placeholder=""/>
                                        <span>PASSWORD</span>
                                    </label>
                                    <label class="mb-3 top-label w-100">
                                        <input id="tagsTopLabel"/>
                                        <span>TAGS</span>
                                    </label>
                                    <label class="mb-3 top-label">
                                        <input type="text" id="dateTopLabel" class="form-control"/>
                                        <span>DATE</span>
                                    </label>
                                    <label class="mb-3 top-label w-100">
                                        <select id="select2TopLabel">
                                            <option label="&nbsp;"></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Maybe">Maybe</option>
                                        </select>
                                        <span>BREAD</span>
                                    </label>
                                    <div class="mb-3 top-label">
                                        <textarea class="form-control" rows="2"></textarea>
                                        <span>ADDRESS</span>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
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
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" placeholder="Email"/>
                                        <label>Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" placeholder="Password"/>
                                        <label>Password</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input id="tagsFloatingLabel"/>
                                        <label>Tags</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="date-picker form-control" placeholder="Date"
                                               id="datePickerFloatingLabel"/>
                                        <label>Date</label>
                                    </div>
                                    <div class="form-floating mb-3 w-100">
                                        <select id="select2FloatingLabel">
                                            <option label="&nbsp;"></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Maybe">Maybe</option>
                                        </select>
                                        <label>Bread</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Address" rows="3"></textarea>
                                        <label>Address</label>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Floating Label End -->

                    <!-- Filled Start -->
                    <section class="scroll-section" id="filled">
                        <h2 class="small-title">Filled</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3 filled">
                                        <i data-cs-icon="user"></i>
                                        <input class="form-control" placeholder="Email"/>
                                    </div>
                                    <div class="mb-3 filled">
                                        <i data-cs-icon="lock-off"></i>
                                        <input class="form-control" type="password" placeholder="Password"/>
                                    </div>
                                    <div class="mb-3 filled w-100">
                                        <i data-cs-icon="tag"></i>
                                        <input id="tagsFilled" placeholder="Tags"/>
                                    </div>
                                    <div class="mb-3 filled">
                                        <i data-cs-icon="calendar"></i>
                                        <input type="text" class="form-control" placeholder="Date"
                                               id="datePickerFilled"/>
                                    </div>
                                    <div class="mb-3 filled w-100">
                                        <i data-cs-icon="loaf"></i>
                                        <select id="select2Filled" data-placeholder="Bread">
                                            <option label="&nbsp;"></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Maybe">Maybe</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 filled">
                                        <textarea placeholder="Address" class="form-control" rows="2"></textarea>
                                        <i data-cs-icon="notebook-1"></i>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>

                    <!-- Filled End -->

                    <!-- Disabled Start -->
                    <section class="scroll-section" id="disabled">
                        <h2 class="small-title">Disabled</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="Email"
                                                   value="support@crealeaf.com" disabled/>
                                        </div>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset disabled>
                                        <label class="mb-3 top-label">
                                            <input class="form-control" value="support@crealeaf.com" disabled/>
                                            <span>E-MAIL</span>
                                        </label>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset disabled>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" placeholder="Email"
                                                   value="support@crealeaf.com" disabled/>
                                            <label>Email</label>
                                        </div>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset disabled>
                                        <div class="filled">
                                            <i data-cs-icon="user"></i>
                                            <input class="form-control" placeholder="Email" value="support@crealeaf.com"
                                                   disabled/>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </section>

                    <!-- Disabled End -->

                    <!-- Sizing Start -->
                    <section class="scroll-section" id="sizing">
                        <h2 class="small-title">Sizing</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <p class="heading">Basic</p>
                                    <div class="mb-2">
                                        <input class="form-control form-control-lg" type="text"
                                               placeholder="form-control-lg"/>
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" type="text" placeholder="form-control"/>
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control form-control-sm" type="text"
                                               placeholder="form-control-sm"/>
                                    </div>
                                    <div class="clearfix mb-4"></div>
                                    <p class="heading">Top Label</p>
                                    <label class="mb-3 top-label">
                                        <input class="form-control form-control-lg"/>
                                        <span>FORM-CONTROL-LG</span>
                                    </label>
                                    <label class="mb-3 top-label">
                                        <input class="form-control"/>
                                        <span>FORM-CONTROL</span>
                                    </label>
                                    <label class="mb-3 top-label">
                                        <input class="form-control form-control-sm"/>
                                        <span>FORM-CONTROL-SM</span>
                                    </label>
                                    <div class="clearfix mb-4"></div>

                                    <p class="heading">Filled</p>
                                    <div class="mb-3 filled lg">
                                        <i data-cs-icon="user"></i>
                                        <input class="form-control form-control-lg" placeholder="form-control-lg"/>
                                    </div>
                                    <div class="mb-3 filled">
                                        <i data-cs-icon="user"></i>
                                        <input class="form-control" placeholder="form-control"/>
                                    </div>
                                    <div class="mb-3 filled sm">
                                        <i data-cs-icon="user"></i>
                                        <input class="form-control form-control-sm" placeholder="form-control-sm"/>
                                    </div>
                                    <div class="clearfix mb-4"></div>

                                    <p class="heading">Floating Label</p>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control form-control-lg"
                                               placeholder="form-control-lg"/>
                                        <label>form-control-lg</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" placeholder="form-control"/>
                                        <label>form-control</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="email" class="form-control form-control-sm"
                                               placeholder="form-control-sm"/>
                                        <label>form-control-sm</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                    <!-- Sizing End -->

                    <!-- Label Size Start -->
                    <section class="scroll-section" id="labelSize">
                        <h2 class="small-title">Label Size</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm"
                                           class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm"
                                               placeholder="col-form-label-sm"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel"
                                               placeholder="col-form-label"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="colFormLabelLg"
                                           class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg"
                                               placeholder="col-form-label-lg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Label Size End -->

                    <!-- Form Row Start -->
                    <section class="scroll-section" id="formRow">
                        <h2 class="small-title">Form Row</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                               placeholder="1234 Main St"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2"
                                               placeholder="Apartment, studio, or floor"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">State</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="inputZip"/>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck"/>
                                            <label class="form-check-label" for="gridCheck">Check me out</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Form Row End -->

                    <!-- Horizontal Form Start -->
                    <section class="scroll-section" id="horizontalForm">
                        <h2 class="small-title">Horizontal Form</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2">Radios</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                       id="gridRadios1" value="option1" checked/>
                                                <label class="form-check-label" for="gridRadios1">First radio</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                       id="gridRadios2" value="option2"/>
                                                <label class="form-check-label" for="gridRadios2">Second radio</label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                       id="gridRadios3" value="option3" disabled/>
                                                <label class="form-check-label" for="gridRadios3">Third disabled
                                                    radio</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-10 offset-sm-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1"/>
                                                <label class="form-check-label" for="gridCheck1">Example
                                                    checkbox</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </section>

                    <!-- Horizontal Form End -->

                    <!-- Auto Sizing Start -->
                    <section class="scroll-section" id="autoSizing">
                        <h2 class="small-title">Auto Sizing</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form class="row gy-2 gx-3 align-items-center">
                                    <div class="col-auto">
                                        <label class="visually-hidden" for="autoSizingInput">Name</label>
                                        <input type="text" class="form-control" id="autoSizingInput"
                                               placeholder="Jane Doe"/>
                                    </div>
                                    <div class="col-auto">
                                        <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-text">@@</div>
                                            <input type="text" class="form-control" id="autoSizingInputGroup"
                                                   placeholder="Username"/>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                                        <select class="form-select" id="autoSizingSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="autoSizingCheck"/>
                                            <label class="form-check-label" for="autoSizingCheck">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                <div class="clearfix mb-4"></div>
                                <form class="row gx-3 gy-2 align-items-center">
                                    <div class="col-sm-3">
                                        <label class="visually-hidden" for="specificSizeInputName">Name</label>
                                        <input type="text" class="form-control" id="specificSizeInputName"
                                               placeholder="Jane Doe"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="visually-hidden"
                                               for="specificSizeInputGroupUsername">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-text">@@</div>
                                            <input type="text" class="form-control" id="specificSizeInputGroupUsername"
                                                   placeholder="Username"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="autoSizingCheck2"/>
                                            <label class="form-check-label" for="autoSizingCheck2">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                    <!-- Auto Sizing End -->

                    <!-- Inline Forms Start -->
                    <section class="scroll-section" id="inlineForms">
                        <h2 class="small-title">Inline Forms</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form class="row row-cols-lg-auto g-3 align-items-center">
                                    <div class="col-12">
                                        <label class="visually-hidden"
                                               for="inlineFormInputGroupUsername">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-text">@@</div>
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                                   placeholder="Username"/>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                                        <select class="form-select" id="inlineFormSelectPref">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineFormCheck"/>
                                            <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                    <!-- Inline Forms End -->

                    <!-- Help Text Start -->
                    <section class="scroll-section" id="helpText">
                        <h2 class="small-title">Help Text</h2>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <label for="inputPassword5" class="form-label">Password</label>
                                    <input type="password" id="inputPassword5" class="form-control"
                                           aria-describedby="passwordHelpBlock"/>
                                    <div id="passwordHelpBlock" class="form-text">
                                        Your password must be 8-20 characters long, contain letters and numbers, and
                                        must not contain spaces, special characters, or emoji.
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                    <!-- Help Text End -->
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
                        <a class="nav-link" href="#basic">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic</span>
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
                        <a class="nav-link" href="#filled">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Filled</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#disabled">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Disabled</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#sizing">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sizing</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#labelSize">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Label Size</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#formRow">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Form Row</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#horizontalForm">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal Form</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#autoSizing">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Auto Sizing</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#inlineForms">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Inline Forms</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#helpText">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Help Text</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

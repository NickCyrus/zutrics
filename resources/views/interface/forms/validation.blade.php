@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Validation';
    $description= 'jQuery Validate makes simple clientside form validation easy, whilst still offering plenty of customization options.';
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
    <script src="{{ asset('/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/tagify.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/validation.js') }}"></script>
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

                    <!-- Basic Start -->
                    <section class="scroll-section" id="basic">
                        <h2 class="small-title">Basic</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- tooltip-label-end inputs should be wrapped in form-group class -->
                                <form id="exampleForm" class="tooltip-label-end" novalidate>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="basicValidationName" required/>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Age</label>
                                        <input type="number" class="form-control" name="basicValidationAge" required/>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control" name="basicValidationDate"
                                               id="basicValidationDate" required/>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Details</label>
                                        <textarea class="form-control" rows="2" name="basicValidationDetail"
                                                  required></textarea>
                                    </div>
                                    <div class="mb-3 position-relative w-100 form-group">
                                        <label class="form-label">Select</label>
                                        <select name="basicValidationSelect2" id="basicValidationSelect2" required>
                                            <option label="&nbsp;"></option>
                                            <option value="Breadstick">Breadstick</option>
                                            <option value="Biscotti">Biscotti</option>
                                            <option value="Fougasse">Fougasse</option>
                                            <option value="Lefse">Lefse</option>
                                            <option value="Melonpan">Melonpan</option>
                                            <option value="Naan">Naan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Radio</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                   name="basicValidationRadioButton" id="basicValidationCustomRadio1"
                                                   required/>
                                            <label class="form-check-label" for="basicValidationCustomRadio1">Radio
                                                First</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                   name="basicValidationRadioButton" id="basicValidationCustomRadio2"
                                                   required/>
                                            <label class="form-check-label" for="basicValidationCustomRadio2">Radio
                                                Second</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Check</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                   name="basicValidationCheckbox" id="basicValidationCustomCheck1"
                                                   required/>
                                            <label class="form-check-label" for="basicValidationCustomCheck1">Checkbox
                                                First</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                   name="basicValidationCheckbox" id="basicValidationCustomCheck2"
                                                   required/>
                                            <label class="form-check-label" for="basicValidationCustomCheck2">Checkbox
                                                Second</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Check Single</label>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"
                                                   id="basicValidationCheckboxSingle" name="basicValidationCheckSingle"
                                                   required/>
                                            <label class="form-check-label" for="basicValidationCheckboxSingle">Check
                                                this custom checkbox</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Basic Start -->

                    <!-- Common Rules Start -->
                    <section class="scroll-section" id="commonRules">
                        <h2 class="small-title">Common Rules</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form id="rulesForm" class="tooltip-label-end" novalidate>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="rulesName"/>
                                        <div class="form-text">Must be letters only!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Id</label>
                                        <input type="text" class="form-control" name="rulesId"/>
                                        <div class="form-text">Must be digits and 8 chars only!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Age</label>
                                        <input type="text" class="form-control" name="rulesAge"/>
                                        <div class="form-text">Must be 18 and over!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="rulesEmail"/>
                                        <div class="form-text">Must be a valid email!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Details</label>
                                        <textarea class="form-control" rows="2" name="rulesDetail"></textarea>
                                        <div class="form-text">Must be 20 chars or less!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Password</label>
                                        <input type="text" class="form-control" name="rulesPassword"
                                               id="rulesPassword"/>
                                        <div class="form-text">Must be at least 6 chars!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="text" class="form-control" name="rulesPasswordConfirm"
                                               id="rulesPasswordConfirm"/>
                                        <div class="form-text">Must be same with password!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Credit Card</label>
                                        <input type="text" class="form-control" name="rulesCreditCard"
                                               id="rulesCreditCard"/>
                                        <div class="form-text">Must be a valid credit card number without whitespace!
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Common Rules End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form id="validationTopLabel" class="tooltip-end-top">
                                    <label class="mb-3 top-label">
                                        <input class="form-control" type="email" name="emailTopLabel" required/>
                                        <span>E-MAIL</span>
                                    </label>
                                    <label class="mb-3 top-label">
                                        <input class="form-control" type="password" name="passwordTopLabel" required/>
                                        <span>PASSWORD</span>
                                    </label>
                                    <label class="mb-3 top-label w-100">
                                        <input id="tagsTopLabel" name="tagsTopLabel" required/>
                                        <span>TAGS</span>
                                    </label>
                                    <label class="mb-3 top-label">
                                        <input type="text" id="dateTopLabel" class="form-control" name="dateTopLabel"
                                               required/>
                                        <span>DATE</span>
                                    </label>
                                    <label class="mb-3 top-label w-100">
                                        <select id="select2TopLabel" name="select2TopLabel" required>
                                            <option label="&nbsp;"></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Maybe">Maybe</option>
                                        </select>
                                        <span>BREAD</span>
                                    </label>
                                    <div class="mb-3 top-label">
                                        <textarea class="form-control" rows="2" name="addressTopLabel"
                                                  required></textarea>
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
                                <form id="validationFloatingLabel" class="tooltip-end-top">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" placeholder="Email"
                                               name="emailFloatingLabel" required/>
                                        <label>Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" placeholder="Password"
                                               name="passwordFloatingLabel" required/>
                                        <label>Password</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input id="tagsFloatingLabel" name="tagsFloatingLabel" required/>
                                        <label>Tags</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="date-picker form-control" placeholder="Date"
                                               id="datePickerFloatingLabel" name="datePickerFloatingLabel"
                                               required/>
                                        <label>Date</label>
                                    </div>
                                    <div class="form-floating mb-3 w-100">
                                        <select id="select2FloatingLabel" name="select2FloatingLabel" required>
                                            <option label="&nbsp;"></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Maybe">Maybe</option>
                                        </select>
                                        <label>Bread</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Address" rows="3"
                                                  name="addressFloatingLabel" required></textarea>
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
                                <form id="validationFilled" class="tooltip-end-top">
                                    <div class="mb-3 filled">
                                        <i data-cs-icon="user"></i>
                                        <input class="form-control" type="email" placeholder="Email" name="emailFilled"
                                               required/>
                                    </div>
                                    <div class="mb-3 filled">
                                        <i data-cs-icon="lock-off"></i>
                                        <input class="form-control" type="password" placeholder="Password"
                                               name="passwordFilled" required/>
                                    </div>
                                    <div class="mb-3 filled w-100">
                                        <i data-cs-icon="tag"></i>
                                        <input id="tagsFilled" placeholder="Tags" name="tagsFilled" required/>
                                    </div>
                                    <div class="mb-3 filled">
                                        <i data-cs-icon="calendar"></i>
                                        <input type="text" class="form-control" placeholder="Date" id="datePickerFilled"
                                               name="datePickerFilled" required/>
                                    </div>
                                    <div class="mb-3 filled w-100">
                                        <i data-cs-icon="loaf"></i>
                                        <select id="select2Filled" data-placeholder="Bread" name="select2Filled"
                                                required>
                                            <option label="&nbsp;"></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Maybe">Maybe</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 filled">
                                        <textarea placeholder="Address" class="form-control" rows="2"
                                                  name="addressFilled" required></textarea>
                                        <i data-cs-icon="notebook-1"></i>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Filled End -->

                    <!-- Positions Start -->
                    <section class="scroll-section" id="positions">
                        <h2 class="small-title">Positions</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form id="tooltipPositions" novalidate class="mb-5">
                                    <div class="tooltip-label-end">
                                        <div class="position-relative mb-3 form-group">
                                            <label class="form-label">Label End</label>
                                            <input name="input1" required="" id="input1" type="text"
                                                   class="form-control"/>
                                            <div class="invalid-tooltip">Label End!</div>
                                        </div>
                                    </div>
                                    <div class="tooltip-center-top position-relative mb-3">
                                        <label class="form-label">Top Center</label>
                                        <input name="input2" required="" id="input2" type="text" class="form-control"/>
                                        <div class="invalid-tooltip">Top Center!</div>
                                    </div>
                                    <div class="tooltip-center-bottom position-relative mb-3">
                                        <label class="form-label">Bottom Center</label>
                                        <input name="input3" required="" id="input3" type="text" class="form-control"/>
                                        <div class="invalid-tooltip">Bottom Center!</div>
                                    </div>
                                    <div class="tooltip-start-top position-relative mb-3">
                                        <label class="form-label">Top Start</label>
                                        <input name="input4" required="" id="input4" type="text" class="form-control"/>
                                        <div class="invalid-tooltip">Top Start!</div>
                                    </div>
                                    <div class="tooltip-end-top position-relative mb-3">
                                        <label class="form-label">Top Right</label>
                                        <input name="input5" required="" id="input5" type="text" class="form-control"/>
                                        <div class="invalid-tooltip">Top Right!</div>
                                    </div>
                                    <div class="tooltip-start-bottom position-relative mb-3">
                                        <label class="form-label">Bottom Start</label>
                                        <input name="input6" required="" id="input6" type="text" class="form-control"/>
                                        <div class="invalid-tooltip">Bottom Start!</div>
                                    </div>
                                    <div class="tooltip-end-bottom position-relative mb-3">
                                        <label class="form-label">Bottom End</label>
                                        <input name="input7" required="" id="input7" type="text" class="form-control"/>
                                        <div class="invalid-tooltip">Bottom End!</div>
                                    </div>
                                    <button class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Positions End -->

                    <!-- Bootstrap Validation Start -->
                    <section class="scroll-section" id="bootstrapValidation">
                        <h2 class="small-title">Bootstrap Validation</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="Mark"
                                               required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="Otto"
                                               required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustomUsername" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="validationCustomUsername" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">City</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom04" class="form-label">State</label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                   required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Bootstrap Validation End -->

                    <!-- Bootstrap Server Side Start -->
                    <section class="scroll-section" id="bootstrapServerSide">
                        <h2 class="small-title">Bootstrap Server Side</h2>
                        <div class="card">
                            <div class="card-body">
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label for="validationServer01" class="form-label">First name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer01"
                                               value="Mark" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationServer02" class="form-label">Last name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer02"
                                               value="Otto" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationServerUsername" class="form-label">Username</label>
                                        <input type="text" class="form-control is-invalid" id="validationServerUsername"
                                               required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationServer03" class="form-label">City</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer03"
                                               aria-describedby="validationServer03Feedback" required>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationServer04" class="form-label">State</label>
                                        <select class="form-select is-invalid" id="validationServer04"
                                                aria-describedby="validationServer04Feedback" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationServer05" class="form-label">Zip</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer05"
                                               aria-describedby="validationServer05Feedback" required>
                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input is-invalid" type="checkbox" value=""
                                                   id="invalidCheck3" aria-describedby="invalidCheck3Feedback"
                                                   required>
                                            <label class="form-check-label" for="invalidCheck3">
                                                Agree to terms and conditions
                                            </label>
                                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Bootstrap Server Side End -->

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
                        <a class="nav-link" href="#commonRules">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Common Rules</span>
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
                        <a class="nav-link" href="#positions">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Positions</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#bootstrapValidation">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Bootstrap Validation</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#bootstrapServerSide">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Bootstrap Server Side</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

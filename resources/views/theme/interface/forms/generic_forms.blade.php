@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Generic Forms';
    $description= 'Generic form examples with validation and different layouts.';
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
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/genericforms.js') }}"></script>
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

                    <!-- Login Start -->
                    <section class="scroll-section" id="login">
                        <h2 class="small-title">Login</h2>
                        <form class="card mb-5 tooltip-end-top" id="loginForm" novalidate>
                            <div class="card-body">
                                <p class="text-alternate mb-4">Please use your credentials to login.</p>
                                <div class="mb-3 filled">
                                    <i data-cs-icon="user"></i>
                                    <input class="form-control" placeholder="Email" name="loginEmail"/>
                                </div>
                                <div class="mb-3 filled">
                                    <i data-cs-icon="lock-off"></i>
                                    <input class="form-control" type="password" name="loginPassword"
                                           placeholder="Password"/>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0 d-flex justify-content-between align-items-center">
                                <a href="#" class="me-3">Forgot Password?</a>
                                <div>
                                    <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
                                        <span>Login</span>
                                        <i data-cs-icon="chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- Login End -->

                    <!-- Sign Up Start -->
                    <section class="scroll-section" id="signUp">
                        <h2 class="small-title">Sign Up</h2>
                        <form class="card mb-5 tooltip-end-top" id="signUpForm" novalidate>
                            <div class="card-body">
                                <p class="text-alternate mb-4">Please create an account to register.</p>
                                <div class="mb-3 filled">
                                    <i data-cs-icon="user"></i>
                                    <input class="form-control" placeholder="Name" name="signUpName"/>
                                </div>
                                <div class="mb-3 filled">
                                    <i data-cs-icon="email"></i>
                                    <input class="form-control" placeholder="Email" name="signUpEmail"/>
                                </div>
                                <div class="mb-3 filled">
                                    <i data-cs-icon="lock-off"></i>
                                    <input class="form-control" type="password" placeholder="Password"
                                           name="signUpPassword"/>
                                </div>
                                <div class="mb-3 position-relative tooltip-label-end form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1"
                                               name="signUpCheck"/>
                                        <label class="form-check-label" for="customCheck1">
                                            I have read and accept the
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and
                                                conditions</a>
                                            .
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0 d-flex justify-content-between align-items-center">
                                <a href="#" class="me-3">Forgot Password?</a>
                                <div>
                                    <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
                                        <span>Sign Up</span>
                                        <i data-cs-icon="chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- Sign Up End -->

                    <!-- Contact Start -->
                    <section class="scroll-section" id="contact">
                        <h2 class="small-title">Contact</h2>
                        <form class="card mb-5 tooltip-end-top" id="contactForm" novalidate>
                            <div class="card-body">
                                <p class="text-alternate mb-4">We would love to hear from you!</p>
                                <div class="mb-3 filled">
                                    <i data-cs-icon="user"></i>
                                    <input class="form-control" placeholder="Name" name="contactName"/>
                                </div>
                                <div class="mb-3 filled">
                                    <i data-cs-icon="email"></i>
                                    <input class="form-control" placeholder="Email" name="contactEmail"/>
                                </div>
                                <div class="mb-3 filled">
                                    <i data-cs-icon="phone"></i>
                                    <input class="form-control" placeholder="Phone" name="contactPhone"/>
                                </div>
                                <div class="mb-3 filled w-100">
                                    <i data-cs-icon="diagram-1"></i>
                                    <select id="contactDepartment" name="contactDepartment"
                                            data-placeholder="Department">
                                        <option label="&nbsp;"></option>
                                        <option value="Sales">Sales</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Accounting">Accounting</option>
                                    </select>
                                </div>
                                <div class="mb-3 filled">
                                    <textarea placeholder="Message" class="form-control" name="contactMessage"
                                              rows="2"></textarea>
                                    <i data-cs-icon="notebook-1"></i>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                <div>
                                    <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
                                        <span>Send</span>
                                        <i data-cs-icon="chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- Contact End -->

                    <!-- Personal Start -->
                    <section class="scroll-section" id="personal">
                        <h2 class="small-title">Personal</h2>
                        <form class="tooltip-end-top" id="personalForm" novalidate>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <p class="text-alternate mb-4">
                                        Cheesecake chocolate carrot cake pie lollipop lemon drops toffee lollipop. Oat
                                        cake jujubes chupa chups cotton candy sugar plum.
                                        Jujubes wafer topping biscuit lemon drops jelly-o muffin.
                                    </p>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="personalName"/>
                                                <span>FULL NAME</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="personalSocialSecurityNumber"/>
                                                <span>SOCIAL SECURITY NUMBER</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="personalPhone"/>
                                                <span>PHONE</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="personalEmail"/>
                                                <span>EMAIL</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="personalBirthday" required
                                                       id="personalBirthday"/>
                                                <span>BIRTHDAY</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" name="personalGender" id="personalGender">
                                                    <option label="&nbsp;"></option>
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <span>GENDER</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" name="personalFiling" id="personalFiling">
                                                    <option label="&nbsp;"></option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                </select>
                                                <span>FILING STATUS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                    <div>
                                        <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
                                            <span>Save</span>
                                            <i data-cs-icon="chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- Personal End -->

                    <!-- Address Start -->
                    <section class="scroll-section" id="address">
                        <h2 class="small-title">Address</h2>
                        <form class="tooltip-end-top" id="addressForm">
                            <div class="card mb-5">
                                <div class="card-body">
                                    <p class="text-alternate mb-4">
                                        Cheesecake chocolate carrot cake pie lollipop lemon drops toffee lollipop. Oat
                                        cake jujubes chupa chups cotton candy sugar plum.
                                        Jujubes wafer topping biscuit lemon drops jelly-o muffin.
                                    </p>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="addressFirstName"/>
                                                <span>FIRST NAME</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="addressLastName"/>
                                                <span>LAST NAME</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="addressPhone"/>
                                                <span>PHONE</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="addressCompany"/>
                                                <span>COMPANY(OPTIONAL)</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label class="mb-3 top-label">
                                                <select data-width="100%" id="addressState"
                                                        name="addressState"></select>
                                                <span>STATE</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="mb-3 top-label">
                                                <select data-width="100%" id="addressCity" name="addressCity"></select>
                                                <span>CITY</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" name="addressZipCode"/>
                                                <span>ZIP CODE</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="mb-3 top-label">
                                                <textarea class="form-control" rows="2" name="addressDetail"></textarea>
                                                <span>DETAIL</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                    <div>
                                        <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
                                            <span>Save</span>
                                            <i data-cs-icon="chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- Address End -->

                    <!-- Reservation Start -->
                    <section class="scroll-section" id="reservation">
                        <h2 class="small-title">Reservation</h2>
                        <form class="tooltip-end-top" id="reservationForm" novalidate>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-alternate mb-4">
                                        Cheesecake chocolate carrot cake pie lollipop lemon drops toffee lollipop. Oat
                                        cake jujubes chupa chups cotton candy sugar plum.
                                        Jujubes wafer topping biscuit lemon drops jelly-o muffin.
                                    </p>
                                    <div class="row g-3 input-daterange" id="reservationRangePicker">
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input type="text" class="form-control" name="reservationCheckIn"/>
                                                <span>CHECK IN</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-3 top-label">
                                                <input type="text" class="form-control" name="reservationCheckOut"/>
                                                <span>CHECK OUT</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" data-width="100%" name="reservationRoom"
                                                        id="reservationRoom">
                                                    <option label="&nbsp;"></option>
                                                    <option value="Type 1">Type 1</option>
                                                    <option value="Type 2">Type 2</option>
                                                    <option value="Type 3">Type 3</option>
                                                </select>
                                                <span>ROOM TYPE</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" data-width="100%" name="reservationAdults"
                                                        id="reservationAdults">
                                                    <option label="&nbsp;"></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <span>ADULTS</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" data-width="100%"
                                                        name="reservationChildren" id="reservationChildren">
                                                    <option label="&nbsp;"></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <span>CHILDREN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                    <div>
                                        <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
                                            <span>Book</span>
                                            <i data-cs-icon="chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- Reservation End -->
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
                        <a class="nav-link" href="#login">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Login</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#signUp">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sign Up</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#contact">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#personal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Personal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#address">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Address</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#reservation">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Reservation</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->

            <!-- Tersm and Conditions Modal Start -->
            <div class="modal fade scroll-out" id="termsModal" tabindex="-1" role="dialog"
                 aria-labelledby="termsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-scrollable short modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="scroll-track-visible">
                                <p>
                                    Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum
                                    icing chocolate cake lollipop jujubes bear claw.
                                    Pastry sweet roll carrot cake cake macaroon gingerbread cookie. Lemon drops brownie
                                    candy cookie candy pie sweet roll biscuit marzipan.
                                    Chocolate bar candy canes macaroon liquorice danish biscuit biscuit. Tiramisu toffee
                                    brownie sweet roll sesame snaps halvah. Icing
                                    carrot cake cupcake gummi bears danish. Sesame snaps muffin macaroon tiramisu ice
                                    cream jelly-o pudding marzipan tootsie roll. Muffin
                                    candy icing tootsie roll wafer powder danish cheesecake macaroon. Sweet marshmallow
                                    oat cake marshmallow ice cream carrot cake. Bonbon
                                    powder carrot cake marzipan jelly beans pie cotton candy cotton candy. Gummies donut
                                    caramels chocolate bar. Powder soufflé brownie
                                    jelly beans gingerbread candy.
                                </p>
                                <p>
                                    Apple pie gummies marshmallow wafer. Cookie macaroon croissant tart topping jelly
                                    pie sesame snaps jelly. Chocolate tootsie roll
                                    marshmallow tootsie roll gummi bears jelly beans lollipop macaroon gummi bears. Ice
                                    cream gingerbread tart cheesecake. Brownie jelly
                                    beans cookie liquorice candy bear claw powder muffin sweet roll. Carrot cake
                                    gingerbread pudding chocolate cake cake chocolate bar
                                    sesame snaps wafer. Pie jelly beans tart donut chupa chups caramels sesame snaps
                                    wafer gummies. Cake marshmallow cupcake donut.
                                    Marshmallow cookie gummies chocolate cake dragée topping cheesecake halvah carrot
                                    cake. Cupcake bear claw carrot cake candy canes bonbon
                                    croissant biscuit liquorice fruitcake. Jelly liquorice gummies. Biscuit croissant
                                    croissant liquorice. Gummi bears pie powder fruitcake
                                    caramels brownie danish pastry pudding. Caramels sugar plum cookie cotton candy
                                    tootsie roll jelly pudding.
                                </p>
                                <p>
                                    Tiramisu brownie tart chupa chups icing chupa chups. Gummi bears fruitcake carrot
                                    cake chocolate bonbon. Sesame snaps brownie gummi
                                    bears tootsie roll caramels dragée. Powder cake gummies jelly beans toffee carrot
                                    cake bonbon powder muffin. Marshmallow jelly beans
                                    cake donut cotton candy chocolate bar biscuit macaroon marzipan. Cake cupcake
                                    gummies. Gingerbread bonbon wafer. Pastry sweet cookie
                                    danish lollipop sweet toffee topping bear claw. Apple pie dessert cake dessert.
                                    Tiramisu pie sugar plum gingerbread cupcake brownie
                                    candy canes gummies jelly. Bonbon chocolate cake lollipop lollipop jelly beans apple
                                    pie halvah sweet roll. Macaroon jujubes powder
                                    cheesecake sesame snaps fruitcake marzipan muffin.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tersm and Conditions Modal End -->
        </div>
    </div>
@endsection

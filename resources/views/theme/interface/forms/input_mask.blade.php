@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Input Masks';
    $description= 'A javascript input mask library that helps the user with the input by ensuring a predefined format.';
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
    <script src="{{ asset('/js/vendor/imask.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/inputmask.js') }}"></script>
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

                    <!-- Date Start -->
                    <section class="scroll-section" id="date">
                        <h2 class="small-title">Date</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control" id="dateMask"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Initial Value</label>
                                        <input type="text" class="form-control" value="02.02.2000"
                                               id="dateInitialMask"/>
                                    </div>
                                    <div>
                                        <label class="form-label">Date Chars</label>
                                        <input type="text" class="form-control" id="dateCharMask"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Date End -->

                    <!-- Hour Start -->
                    <section class="scroll-section" id="hour">
                        <h2 class="small-title">Hour</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Hour</label>
                                        <input type="text" class="form-control" id="hourMask"/>
                                    </div>
                                    <div>
                                        <label class="form-label">Hour 12(AM-PM)</label>
                                        <input type="text" class="form-control" id="hourMaskAMPM"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Hour End -->

                    <!-- Phone Start -->
                    <section class="scroll-section" id="phone">
                        <h2 class="small-title">Phone</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">International</label>
                                        <input type="text" class="form-control" id="hourInternationalMask"/>
                                    </div>
                                    <div>
                                        <label class="form-label">Domestic</label>
                                        <input type="text" class="form-control" id="hourDomesticMask"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Phone End -->

                    <!-- Number Start -->
                    <section class="scroll-section" id="number">
                        <h2 class="small-title">Number</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Number</label>
                                        <input type="text" class="form-control" id="maskNumber"/>
                                        <div class="form-text">Only number</div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Large Number</label>
                                        <input type="text" class="form-control" id="maskNumberLarge"/>
                                        <div class="form-text">Between -10000-10000</div>
                                    </div>
                                    <div>
                                        <label class="form-label">Small Number</label>
                                        <input type="text" class="form-control" id="maskNumberSmall"/>
                                        <div class="form-text">Between 0-9</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Number End -->

                    <!-- Mask in Mask Start -->
                    <section class="scroll-section" id="maskInMask">
                        <h2 class="small-title">Mask in Mask</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div>
                                        <label class="form-label">Currency</label>
                                        <input type="text" class="form-control" id="maskCurrency"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Mask in Mask End -->

                    <!-- Credit Card Start -->
                    <section class="scroll-section" id="creditCard">
                        <h2 class="small-title">Credit Card</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div>
                                        <label class="form-label">Card Number</label>
                                        <input type="text" class="form-control" id="maskCreditCard"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Credit Card End -->

                    <!-- Complex Values Start -->
                    <section class="scroll-section" id="complexValues">
                        <h2 class="small-title">Complex Values</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div>
                                        <label class="form-label">Fill in the Blanks</label>
                                        <input type="text" class="form-control" id="maskComplex"/>
                                        <small class="form-text text-muted">Values are year(YY), month(MM), and one of
                                            the three of 'TV', 'HD' or 'VR'</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Complex Values End -->

                    <!-- Function Start -->
                    <section class="scroll-section" id="function">
                        <h2 class="small-title">Function</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div>
                                        <label class="form-label">Grow</label>
                                        <input type="text" class="form-control" id="maskFunction"/>
                                        <small class="form-text text-muted">Accepts growing values from 0 to 9.</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Function End -->

                    <!-- Prepare Start -->
                    <section class="scroll-section" id="prepare">
                        <h2 class="small-title">Prepare</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div>
                                        <label class="form-label">Uppercase</label>
                                        <input type="text" class="form-control" id="maskUppercase"/>
                                        <small class="form-text text-muted">Convert to text-uppercase.</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Prepare End -->

                    <!-- Get the Value Start -->
                    <section class="scroll-section" id="getTheValue">
                        <h2 class="small-title">Get the Value</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <input type="text" class="form-control mb-1" id="maskGetValue"/>
                                <div class="mb-1">
                                    <button class="btn btn-outline-primary" id="logButton" type="button">Log Value
                                    </button>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary" id="logUnmaskedButton" type="button">Log
                                        Unmasked Value
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Get the Value End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <label class="top-label mb-0 w-100">
                                    <input type="text" class="form-control" id="maskTopLabel"/>
                                    <span>DATE</span>
                                </label>
                            </div>
                        </div>
                    </section>
                    <!-- Top Label End -->

                    <!-- Filled Start -->
                    <section class="scroll-section" id="filled">
                        <h2 class="small-title">Filled</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="filled mb-0 w-100">
                                    <i data-cs-icon="calendar"></i>
                                    <input type="text" class="form-control" id="maskFilled"/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Filled End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="floatingLabel">
                        <h2 class="small-title">Floating Label</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-floating mb-0 w-100">
                                    <input type="text" class="form-control" id="maskFloatingLabel"/>
                                    <label>Date</label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Top Label End -->
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
                        <a class="nav-link" href="#date">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Date</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#hour">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Hour</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#phone">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Phone</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#number">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Number</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#maskInMask">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Mask in Mask</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#creditCard">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Credit Card</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#complexValues">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Complex Values</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#function">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Function</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#prepare">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Prepare</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#getTheValue">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Get the Value</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#topLabel">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Top Label</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#filled">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Filled</span>
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

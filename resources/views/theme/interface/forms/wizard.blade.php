@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Wizard';
    $description= "Wizard implementation on top of Bootstrap's tab system.";
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
    <script src="{{ asset('/js/cs/wizard.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/forms/wizards.js') }}"></script>
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
                        <div class="card mb-5 wizard" id="wizardBasic">
                            <div class="card-header border-0 pb-0">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#basicFirst" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">First</div>
                                            <div class="text-small description d-none d-md-block">First description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#basicSecond" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">Second</div>
                                            <div class="text-small description d-none d-md-block">Second description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#basicThird" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">Third</div>
                                            <div class="text-small description d-none d-md-block">Third description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item d-none" role="presentation">
                                        <a class="nav-link text-center" href="#basicLast" role="tab"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body sh-35">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="basicFirst" role="tabpanel">
                                        <h5 class="card-title">First Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>FIRST NAME</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>LAST NAME</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="basicSecond" role="tabpanel">
                                        <h5 class="card-title">Second Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>E-MAIL</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control" id="password" type="password"
                                                       placeholder=""/>
                                                <span>PASSWORD</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="basicThird" role="tabpanel">
                                        <h5 class="card-title">Third Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>COUNTRY</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>CITY</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="basicLast" role="tabpanel">
                                        <div class="text-center mt-5">
                                            <h5 class="card-title">Thank You!</h5>
                                            <p class="card-text text-alternate mb-4">Your registration completed
                                                successfully!</p>
                                            <button class="btn btn-icon btn-icon-start btn-primary btn-reset"
                                                    type="button">
                                                <i data-cs-icon="rotate-left"></i>
                                                <span>Reset</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center border-0 pt-1">
                                <button class="btn btn-icon btn-icon-start btn-outline-primary btn-prev" type="button">
                                    <i data-cs-icon="chevron-left"></i>
                                    <span>Back</span>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-outline-primary btn-next" type="button">
                                    <span>Next</span>
                                    <i data-cs-icon="chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Basic End -->

                    <!-- Top Nav Disabled Start -->
                    <section class="scroll-section" id="topNavDisabled">
                        <h2 class="small-title">Top Nav Disabled</h2>
                        <div class="card mb-5 wizard" id="wizardNoTopNav">
                            <div class="card-header border-0 pb-0">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#noNavFirst" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">First</div>
                                            <div class="text-small description d-none d-md-block">First description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#noNavSecond" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">Second</div>
                                            <div class="text-small description d-none d-md-block">Second description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#noNavThird" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">Third</div>
                                            <div class="text-small description d-none d-md-block">Third description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item d-none" role="presentation">
                                        <a class="nav-link text-center" href="#noNavLast" role="tab"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body sh-35">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="noNavFirst" role="tabpanel">
                                        <h5 class="card-title">First Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>FIRST NAME</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>LAST NAME</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="noNavSecond" role="tabpanel">
                                        <h5 class="card-title">Second Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>E-MAIL</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>PASSWORD</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="noNavThird" role="tabpanel">
                                        <h5 class="card-title">Third Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>COUNTRY</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>CITY</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="noNavLast" role="tabpanel">
                                        <div class="text-center mt-5">
                                            <h5 class="card-title">Thank You!</h5>
                                            <p class="card-text text-alternate mb-4">Your registration completed
                                                successfully!</p>
                                            <button class="btn btn-icon btn-icon-start btn-primary btn-reset"
                                                    type="button">
                                                <i data-cs-icon="rotate-left"></i>
                                                <span>Reset</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center border-0 pt-1">
                                <button class="btn btn-icon btn-icon-start btn-outline-primary btn-prev" type="button">
                                    <i data-cs-icon="chevron-left"></i>
                                    <span>Back</span>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-outline-primary btn-next" type="button">
                                    <span>Next</span>
                                    <i data-cs-icon="chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Top Nav Disabled End -->

                    <!-- Last Step End Start -->
                    <section class="scroll-section" id="lastStepEnd">
                        <h2 class="small-title">Last Step End</h2>
                        <div class="card mb-5 wizard" id="wizardLastStepEnd">
                            <div class="card-header border-0 pb-0">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#lastStepEndFirst" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">First</div>
                                            <div class="text-small description d-none d-md-block">First description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#lastStepEndSecond" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">Second</div>
                                            <div class="text-small description d-none d-md-block">Second description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#lastStepEndThird" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">Third</div>
                                            <div class="text-small description d-none d-md-block">Third description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item d-none" role="presentation">
                                        <a class="nav-link text-center" href="#lastStepEndLast" role="tab"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body sh-35">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="lastStepEndFirst" role="tabpanel">
                                        <h5 class="card-title">First Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>FIRST NAME</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>LAST NAME</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="lastStepEndSecond" role="tabpanel">
                                        <h5 class="card-title">Second Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>E-MAIL</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>PASSWORD</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="lastStepEndThird" role="tabpanel">
                                        <h5 class="card-title">Third Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>COUNTRY</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control"/>
                                                <span>CITY</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="lastStepEndLast" role="tabpanel">
                                        <div class="text-center mt-5">
                                            <h5 class="card-title">Thank You!</h5>
                                            <p class="card-text text-alternate mb-4">Your registration completed
                                                successfully!</p>
                                            <button class="btn btn-icon btn-icon-start btn-primary" type="button">
                                                <i data-cs-icon="login"></i>
                                                <span>Login</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center border-0 pt-1">
                                <button class="btn btn-icon btn-icon-start btn-outline-primary btn-prev" type="button">
                                    <i data-cs-icon="chevron-left"></i>
                                    <span>Back</span>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-outline-primary btn-next" type="button">
                                    <span>Next</span>
                                    <i data-cs-icon="chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Last Step End End -->

                    <!-- Validation Start -->
                    <section class="scroll-section" id="validation">
                        <h2 class="small-title">Validation</h2>
                        <div class="card wizard" id="wizardValidation">
                            <div class="card-header border-0 pb-0">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#validationFirst" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">First</div>
                                            <div class="text-small description d-none d-md-block">First description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#validationSecond" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">Second</div>
                                            <div class="text-small description d-none d-md-block">Second description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-center" href="#validationThird" role="tab">
                                            <div class="mb-1 title d-none d-sm-block">Third</div>
                                            <div class="text-small description d-none d-md-block">Third description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item d-none" role="presentation">
                                        <a class="nav-link text-center" href="#validationLast" role="tab"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body sh-35">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="validationFirst" role="tabpanel">
                                        <h5 class="card-title">First Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form class="tooltip-end-bottom">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" required name="firstName"/>
                                                <span>FIRST NAME</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control" required name="lastName"/>
                                                <span>LAST NAME</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="validationSecond" role="tabpanel">
                                        <h5 class="card-title">Second Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form class="tooltip-end-bottom">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" required type="email" name="emailName"/>
                                                <span>E-MAIL</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="password" required
                                                       name="passwordName"/>
                                                <span>PASSWORD</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="validationThird" role="tabpanel">
                                        <h5 class="card-title">Third Title</h5>
                                        <p class="card-text text-alternate mb-4">With supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <form class="tooltip-end-bottom">
                                            <label class="mb-3 top-label">
                                                <input class="form-control" required name="countryName"/>
                                                <span>COUNTRY</span>
                                            </label>
                                            <label class="mb-3 top-label">
                                                <input class="form-control" required name="cityName"/>
                                                <span>CITY</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="validationLast" role="tabpanel">
                                        <div class="text-center mt-5">
                                            <h5 class="card-title">Thank You!</h5>
                                            <p class="card-text text-alternate mb-4">Your registration completed
                                                successfully!</p>
                                            <button class="btn btn-icon btn-icon-start btn-primary" type="button">
                                                <i data-cs-icon="login"></i>
                                                <span>Login</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center border-0 pt-1">
                                <button class="btn btn-icon btn-icon-start btn-outline-primary btn-prev" type="button">
                                    <i data-cs-icon="chevron-left"></i>
                                    <span>Back</span>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-outline-primary btn-next" type="button">
                                    <span>Next</span>
                                    <i data-cs-icon="chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Validation End -->
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
                        <a class="nav-link" href="#topNavDisabled">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Top Nav Disabled</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#lastStepEnd">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Last Step End</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#validation">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Validation</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

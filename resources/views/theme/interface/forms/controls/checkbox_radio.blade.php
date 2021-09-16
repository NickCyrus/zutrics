@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Checkbox & Radio';
    $description= 'Custom radio, checkbox and switch examples of Bootstrap.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms","/Interface/Forms/Controls"=>"Controls"]
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

                    <!-- Custom Checkbox Start -->
                    <section class="scroll-section" id="customCheckbox">
                        <h2 class="small-title">Custom Checkbox</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Basic</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="customCheck1"/>
                                        <label class="form-check-label" for="customCheck1">Default checkbox</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Empty</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Without Id</label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox"/>
                                        <span class="form-check-label">No Id</span>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Disabled</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="customCheckDisabled1"
                                               disabled/>
                                        <label class="form-check-label" for="customCheckDisabled1">Disabled
                                            checkbox</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Stacked</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="stackedCheck1"/>
                                        <label class="form-check-label" for="stackedCheck1">Stacked 1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="stackedCheck2"/>
                                        <label class="form-check-label" for="stackedCheck2">Stacked 2</label>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label d-block">Inline</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                               value="option1"/>
                                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                               value="option2"/>
                                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                               value="option3" disabled/>
                                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Custom Checkbox End -->

                    <!-- Custom Radio Start -->
                    <section class="scroll-section" id="customRadio">
                        <h2 class="small-title">Custom Radio</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Basic</label>
                                    <div class="form-check">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                               class="form-check-input"/>
                                        <label class="form-check-label" for="customRadio1">Toggle this custom
                                            radio</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Empty</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radioNoLabel"
                                               id="radioNoLabel"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Without Id</label>
                                    <label class="form-check">
                                        <input type="radio" class="form-check-input"/>
                                        <span class="form-check-label">No Id</span>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Disabled</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="customRadioDisabled1"
                                               disabled/>
                                        <label class="form-check-label" for="customRadioDisabled1">Disabled
                                            radio</label>
                                    </div>
                                </div>
                                <div class="clearfix mb-4"></div>
                                <div class="mb-3">
                                    <label class="form-label">Stacked</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="stackedRadio"
                                               id="stackedRadio1"/>
                                        <label class="form-check-label" for="stackedRadio1">Stacked 1</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="stackedRadio"
                                               id="stackedRadio2"/>
                                        <label class="form-check-label" for="stackedRadio2">Stacked 2</label>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label d-block">Inline</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio1" value="option1"/>
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio2" value="option2"/>
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio3" value="option3" disabled/>
                                        <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Custom Radio End -->

                    <!-- Switches Start -->
                    <section class="scroll-section" id="switches">
                        <h2 class="small-title">Switches</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"/>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                        input</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                           checked/>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                        input</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled"
                                           disabled/>
                                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch
                                        checkbox input</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"
                                           checked disabled/>
                                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled
                                        checked switch checkbox input</label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Switches End -->

                    <!-- Buttons Start -->
                    <section class="scroll-section" id="buttons">
                        <h2 class="small-title">Buttons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label d-block">Checkbox</label>
                                    <div class="mb-1">
                                        <input type="checkbox" class="btn-check" id="btnCheckPrimary"/>
                                        <label class="btn btn-primary" for="btnCheckPrimary">Toggle</label>
                                        <input type="checkbox" class="btn-check" id="btnCheckSecondary"/>
                                        <label class="btn btn-secondary" for="btnCheckSecondary">Toggle</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="btn-check" id="btnCheckPrimaryOutline"/>
                                        <label class="btn btn-outline-primary"
                                               for="btnCheckPrimaryOutline">Toggle</label>
                                        <input type="checkbox" class="btn-check" id="btnCheckSecondaryOutline"/>
                                        <label class="btn btn-outline-secondary"
                                               for="btnCheckSecondaryOutline">Toggle</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Radio</label>
                                    <div class="mb-1">
                                        <input type="radio" class="btn-check" id="btnRadioPrimary" name="radioFilled"/>
                                        <label class="btn btn-primary" for="btnRadioPrimary">Toggle</label>
                                        <input type="radio" class="btn-check" id="btnRadioSecondary"
                                               name="radioFilled"/>
                                        <label class="btn btn-secondary" for="btnRadioSecondary">Toggle</label>
                                    </div>
                                    <div>
                                        <input type="radio" class="btn-check" id="btnRadioPrimaryOutline"
                                               name="radioOutline"/>
                                        <label class="btn btn-outline-primary"
                                               for="btnRadioPrimaryOutline">Toggle</label>
                                        <input type="radio" class="btn-check" id="btnRadioSecondaryOutline"
                                               name="radioOutline"/>
                                        <label class="btn btn-outline-secondary"
                                               for="btnRadioSecondaryOutline">Toggle</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Buttons End -->

                    <!-- Task List Items Start -->
                    <section class="scroll-section" id="taskListItems">
                        <h2 class="small-title">Task List Items</h2>
                        <div class="mb-5">
                            <div class="row mb-n2">
                                <div class="col-md-6 mb-2">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                <p class="mb-2 text-alternate heading">Checkbox</p>

                                                <div class="mb-4">
                                                    <p class="mb-2 text-alternate">Line Through</p>
                                                    <div class="mb-1">
                                                        <label
                                                            class="form-check w-100 checked-line-through checked-opacity-75 mb-0">
                                                            <input type="checkbox" class="form-check-input" checked/>
                                                            <span class="form-check-label d-block">
                              <span class="mb-1 lh-1-25">Pie gummies dessert</span>
                              <span class="text-muted d-block text-small mt-0">03.05.2021 - 12:00</span>
                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="form-check w-100 checked-line-through checked-opacity-75 mb-0">
                                                            <input type="checkbox" class="form-check-input"/>
                                                            <span class="form-check-label d-block">
                              <span class="mb-1 lh-1-25">Gingerbread sweet roll pie</span>
                              <span class="text-muted d-block text-small mt-0">04.05.2021 - 12:00</span>
                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="mb-2 text-alternate">No Line</p>
                                                    <div class="mb-1">
                                                        <label class="form-check w-100 mb-0">
                                                            <input type="checkbox" class="form-check-input" checked/>
                                                            <span class="form-check-label d-block">
                              <span class="mb-1 lh-1-25">Pie gummies dessert</span>
                              <span class="text-muted d-block text-small mt-0">03.05.2021 - 12:00</span>
                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label class="form-check w-100 mb-0">
                                                            <input type="checkbox" class="form-check-input"/>
                                                            <span class="form-check-label d-block">
                              <span class="mb-1 lh-1-25">Gingerbread sweet roll pie</span>
                              <span class="text-muted d-block text-small mt-0">04.05.2021 - 12:00</span>
                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="mb-2 text-alternate heading">Radio</p>
                                                <div class="mb-4">
                                                    <p class="mb-2 text-alternate">Line Through</p>
                                                    <div class="mb-2">
                                                        <label
                                                            class="form-check w-100 checked-line-through checked-opacity-75 mb-0">
                                                            <input type="radio" class="form-check-input"
                                                                   name="customListRadioItem1" checked/>
                                                            <span class="form-check-label d-block">
                              <span class="mb-1 lh-1-25">Pie gummies dessert</span>
                              <span class="text-muted d-block text-small mt-0">03.05.2021 - 12:00</span>
                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="form-check w-100 checked-line-through checked-opacity-75 mb-0">
                                                            <input type="radio" class="form-check-input"
                                                                   name="customListRadioItem1"/>
                                                            <span class="form-check-label d-block">
                              <span class="mb-1 lh-1-25">Gingerbread sweet roll pie</span>
                              <span class="text-muted d-block text-small mt-0">04.05.2021 - 12:00</span>
                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="mb-2 text-alternate">No Line</p>
                                                    <div class="mb-2">
                                                        <label class="form-check w-100 mb-0">
                                                            <input type="radio" class="form-check-input"
                                                                   name="customListRadioItemNoLine1" checked/>
                                                            <span class="form-check-label d-block">
                              <span class="mb-1 lh-1-25">Pie gummies dessert</span>
                              <span class="text-muted d-block text-small mt-0">03.05.2021 - 12:00</span>
                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label class="form-check w-100 mb-0">
                                                            <input type="radio" class="form-check-input"
                                                                   name="customListRadioItemNoLine1"/>
                                                            <span class="form-check-label d-block">
                              <span class="mb-1 lh-1-25">Gingerbread sweet roll pie</span>
                              <span class="text-muted d-block text-small mt-0">04.05.2021 - 12:00</span>
                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="mb-4">
                                                <p class="mb-2 text-alternate heading">Checkbox</p>
                                                <div class="mb-4">
                                                    <p class="mb-3 text-alternate">Line Through</p>
                                                    <div class="mb-2">
                                                        <label
                                                            class="form-check custom-icon mb-0 checked-line-through checked-opacity-75">
                                                            <input type="checkbox" class="form-check-input" checked/>
                                                            <span class="form-check-label">
                              <span class="content">
                                <span class="heading mb-1 d-block lh-1-25">Pie gummies dessert</span>
                                <span class="d-block text-small text-muted">03.05.2021 - 12:00</span>
                              </span>
                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="form-check custom-icon mb-0 checked-line-through checked-opacity-75">
                                                            <input type="checkbox" class="form-check-input"/>
                                                            <span class="form-check-label">
                              <span class="content">
                                <span class="heading mb-1 d-block lh-1-25">Gingerbread sweet roll pie</span>
                                <span class="d-block text-small text-muted">04.05.2021 - 12:00</span>
                              </span>
                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <p class="mb-3 text-alternate">No Line</p>
                                                    <div class="mb-2">
                                                        <label class="form-check custom-icon mb-0">
                                                            <input type="checkbox" class="form-check-input" checked/>
                                                            <span class="form-check-label">
                              <span class="content">
                                <span class="heading mb-1 d-block lh-1-25">Pie gummies dessert</span>
                                <span class="d-block text-small text-muted">03.05.2021 - 12:00</span>
                              </span>
                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label class="form-check custom-icon mb-0">
                                                            <input type="checkbox" class="form-check-input"/>
                                                            <span class="form-check-label">
                              <span class="content">
                                <span class="heading mb-1 d-block lh-1-25">Gingerbread sweet roll pie</span>
                                <span class="d-block text-small text-muted">04.05.2021 - 12:00</span>
                              </span>
                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="mb-2 text-alternate heading">Radio</p>
                                                <div class="mb-4">
                                                    <p class="mb-3 text-alternate">Line Through</p>
                                                    <div class="mb-2">
                                                        <label
                                                            class="form-check custom-icon mb-0 checked-line-through checked-opacity-75">
                                                            <input type="radio" class="form-check-input" checked
                                                                   name="customListRadioItem2"/>
                                                            <span class="form-check-label">
                              <span class="content">
                                <span class="heading mb-1 d-block lh-1-25">Pie gummies dessert</span>
                                <span class="d-block text-small text-muted">03.05.2021 - 12:00</span>
                              </span>
                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="form-check custom-icon mb-0 checked-line-through checked-opacity-75">
                                                            <input type="radio" class="form-check-input"
                                                                   name="customListRadioItem2"/>
                                                            <span class="form-check-label">
                              <span class="content">
                                <span class="heading mb-1 d-block lh-1-25">Gingerbread sweet roll pie</span>
                                <span class="d-block text-small text-muted">04.05.2021 - 12:00</span>
                              </span>
                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="mb-3 text-alternate">No Line</p>
                                                    <div class="mb-2">
                                                        <label class="form-check custom-icon mb-0">
                                                            <input type="radio" class="form-check-input" checked
                                                                   name="customListRadioItemNoLine2"/>
                                                            <span class="form-check-label">
                              <span class="content">
                                <span class="heading mb-1 d-block lh-1-25">Pie gummies dessert</span>
                                <span class="d-block text-small text-muted">03.05.2021 - 12:00</span>
                              </span>
                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label class="form-check custom-icon mb-0">
                                                            <input type="radio" class="form-check-input"
                                                                   name="customListRadioItemNoLine2"/>
                                                            <span class="form-check-label">
                              <span class="content">
                                <span class="heading mb-1 d-block lh-1-25">Gingerbread sweet roll pie</span>
                                <span class="d-block text-small text-muted">04.05.2021 - 12:00</span>
                              </span>
                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Task List Items End -->

                    <!-- Boxed Choices Start -->
                    <section class="scroll-section" id="boxedChoices">
                        <h2 class="small-title">Boxed Choices</h2>
                        <div class="row">
                            <div class="col-lg-6 mb-5">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                            <input type="checkbox"
                                                   class="form-check-input position-absolute e-2 t-2 z-index-1"/>
                                            <span class="card form-check-label w-100">
                      <span class="card-body text-center">
                        <i data-cs-icon="pepper" class="text-primary"></i>
                        <span class="heading mt-3 text-body text-primary d-block">Pepper</span>
                        <span class="text-extra-small fw-medium text-muted d-block">14 PRODUCTS</span>
                      </span>
                    </span>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                            <input type="checkbox"
                                                   class="form-check-input position-absolute e-2 t-2 z-index-1"/>
                                            <span class="card form-check-label w-100">
                      <span class="card-body text-center">
                        <i data-cs-icon="cupcake" class="text-primary"></i>
                        <span class="heading mt-3 text-body text-primary d-block">Cupcake</span>
                        <span class="text-extra-small fw-medium text-muted d-block">8 PRODUCTS</span>
                      </span>
                    </span>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                            <input type="checkbox"
                                                   class="form-check-input position-absolute e-2 t-2 z-index-1"/>
                                            <span class="card form-check-label w-100">
                      <span class="card-body text-center">
                        <i data-cs-icon="loaf" class="text-primary"></i>
                        <span class="heading mt-3 text-body text-primary d-block">Mushrooms</span>
                        <span class="text-extra-small fw-medium text-muted d-block">16 PRODUCTS</span>
                      </span>
                    </span>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                            <input type="checkbox"
                                                   class="form-check-input position-absolute e-2 t-2 z-index-1"/>
                                            <span class="card form-check-label w-100">
                      <span class="card-body text-center">
                        <i data-cs-icon="pear" class="text-primary"></i>
                        <span class="heading mt-3 text-body text-primary d-block">Pear</span>
                        <span class="text-extra-small fw-medium text-muted d-block">10 PRODUCTS</span>
                      </span>
                    </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-5">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                            <input type="radio"
                                                   class="form-check-input position-absolute e-2 t-2 z-index-1"
                                                   name="choiceBoxesRadio"/>
                                            <span class="card form-check-label w-100">
                      <span class="card-body text-center">
                        <i data-cs-icon="pepper" class="text-primary"></i>
                        <span class="heading mt-3 text-body text-primary d-block">Pepper</span>
                        <span class="text-extra-small fw-medium text-muted d-block">14 PRODUCTS</span>
                      </span>
                    </span>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                            <input type="radio"
                                                   class="form-check-input position-absolute e-2 t-2 z-index-1"
                                                   name="choiceBoxesRadio"/>
                                            <span class="card form-check-label w-100">
                      <span class="card-body text-center">
                        <i data-cs-icon="cupcake" class="text-primary"></i>
                        <span class="heading mt-3 text-body text-primary d-block">Cupcake</span>
                        <span class="text-extra-small fw-medium text-muted d-block">8 PRODUCTS</span>
                      </span>
                    </span>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                            <input type="radio"
                                                   class="form-check-input position-absolute e-2 t-2 z-index-1"
                                                   name="choiceBoxesRadio"/>
                                            <span class="card form-check-label w-100">
                      <span class="card-body text-center">
                        <i data-cs-icon="loaf" class="text-primary"></i>
                        <span class="heading mt-3 text-body text-primary d-block">Mushrooms</span>
                        <span class="text-extra-small fw-medium text-muted d-block">16 PRODUCTS</span>
                      </span>
                    </span>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                            <input type="radio"
                                                   class="form-check-input position-absolute e-2 t-2 z-index-1"
                                                   name="choiceBoxesRadio"/>
                                            <span class="card form-check-label w-100">
                      <span class="card-body text-center">
                        <i data-cs-icon="pear" class="text-primary"></i>
                        <span class="heading mt-3 text-body text-primary d-block">Pear</span>
                        <span class="text-extra-small fw-medium text-muted d-block">10 PRODUCTS</span>
                      </span>
                    </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Boxed Choices End -->

                    <!-- Bordered Choices Start -->
                    <section class="scroll-section" id="borderedChoices">
                        <h2 class="small-title">Bordered Choices</h2>
                        <div class="row">
                            <div class="col-lg-6 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                                    <input type="checkbox"
                                                           class="form-check-input position-absolute e-2 t-2 z-index-1"/>
                                                    <span class="card form-check-label w-100 custom-border">
                          <span class="card-body text-center">
                            <i data-cs-icon="pepper" class="text-primary"></i>
                            <span class="heading mt-3 text-body text-primary d-block">Pepper</span>
                            <span class="text-extra-small fw-medium text-muted d-block">14 PRODUCTS</span>
                          </span>
                        </span>
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                                    <input type="checkbox"
                                                           class="form-check-input position-absolute e-2 t-2 z-index-1"/>
                                                    <span class="card form-check-label w-100 custom-border">
                          <span class="card-body text-center">
                            <i data-cs-icon="cupcake" class="text-primary"></i>
                            <span class="heading mt-3 text-body text-primary d-block">Cupcake</span>
                            <span class="text-extra-small fw-medium text-muted d-block">8 PRODUCTS</span>
                          </span>
                        </span>
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                                    <input type="checkbox"
                                                           class="form-check-input position-absolute e-2 t-2 z-index-1"/>
                                                    <span class="card form-check-label w-100 custom-border">
                          <span class="card-body text-center">
                            <i data-cs-icon="loaf" class="text-primary"></i>
                            <span class="heading mt-3 text-body text-primary d-block">Mushrooms</span>
                            <span class="text-extra-small fw-medium text-muted d-block">16 PRODUCTS</span>
                          </span>
                        </span>
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                                    <input type="checkbox"
                                                           class="form-check-input position-absolute e-2 t-2 z-index-1"/>
                                                    <span class="card form-check-label w-100 custom-border">
                          <span class="card-body text-center">
                            <i data-cs-icon="pear" class="text-primary"></i>
                            <span class="heading mt-3 text-body text-primary d-block">Pear</span>
                            <span class="text-extra-small fw-medium text-muted d-block">10 PRODUCTS</span>
                          </span>
                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                                    <input type="radio"
                                                           class="form-check-input position-absolute e-2 t-2 z-index-1"
                                                           name="borderedRadioChoice"/>
                                                    <span class="card form-check-label w-100 custom-border">
                          <span class="card-body text-center">
                            <i data-cs-icon="pepper" class="text-primary"></i>
                            <span class="heading mt-3 text-body text-primary d-block">Pepper</span>
                            <span class="text-extra-small fw-medium text-muted d-block">14 PRODUCTS</span>
                          </span>
                        </span>
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                                    <input type="radio"
                                                           class="form-check-input position-absolute e-2 t-2 z-index-1"
                                                           name="borderedRadioChoice"/>
                                                    <span class="card form-check-label w-100 custom-border">
                          <span class="card-body text-center">
                            <i data-cs-icon="cupcake" class="text-primary"></i>
                            <span class="heading mt-3 text-body text-primary d-block">Cupcake</span>
                            <span class="text-extra-small fw-medium text-muted d-block">8 PRODUCTS</span>
                          </span>
                        </span>
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                                    <input type="radio"
                                                           class="form-check-input position-absolute e-2 t-2 z-index-1"
                                                           name="borderedRadioChoice"/>
                                                    <span class="card form-check-label w-100 custom-border">
                          <span class="card-body text-center">
                            <i data-cs-icon="loaf" class="text-primary"></i>
                            <span class="heading mt-3 text-body text-primary d-block">Mushrooms</span>
                            <span class="text-extra-small fw-medium text-muted d-block">16 PRODUCTS</span>
                          </span>
                        </span>
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-check custom-card w-100 position-relative p-0 m-0">
                                                    <input type="radio"
                                                           class="form-check-input position-absolute e-2 t-2 z-index-1"
                                                           name="borderedRadioChoice"/>
                                                    <span class="card form-check-label w-100 custom-border">
                          <span class="card-body text-center">
                            <i data-cs-icon="pear" class="text-primary"></i>
                            <span class="heading mt-3 text-body text-primary d-block">Pear</span>
                            <span class="text-extra-small fw-medium text-muted d-block">10 PRODUCTS</span>
                          </span>
                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Bordered Choices End -->

                    <!-- Top Label Start -->
                    <section class="scroll-section" id="topLabel">
                        <h2 class="small-title">Top Label</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="mb-3 top-label custom-control-container">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheckTopLabel"/>
                                        <label class="form-check-label" for="customCheckTopLabel">Check this custom
                                            checkbox</label>
                                    </div>
                                    <span>CHECKBOX</span>
                                </div>
                                <div class="mb-3 top-label custom-control-container">
                                    <div class="form-check">
                                        <input type="radio" id="customRadioTopLabel" name="customRadio"
                                               class="form-check-input"/>
                                        <label class="form-check-label" for="customRadioTopLabel">Toggle this custom
                                            radio</label>
                                    </div>
                                    <span>RADIO</span>
                                </div>
                                <div class="top-label custom-control-container">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="customSwitchTopLabel"/>
                                        <label class="form-check-label" for="customSwitchTopLabel">Toggle this switch
                                            element</label>
                                    </div>
                                    <span>SWITCH</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Top Label End -->

                    <!-- Filled Start -->
                    <section class="scroll-section" id="filled">
                        <h2 class="small-title">Filled</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3 filled custom-control-container">
                                    <i data-cs-icon="loaf"></i>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheckFilled"/>
                                        <label class="form-check-label" for="customCheckFilled">Check this custom
                                            checkbox</label>
                                    </div>
                                </div>
                                <div class="mb-3 filled custom-control-container">
                                    <i data-cs-icon="loaf"></i>
                                    <div class="form-check">
                                        <input type="radio" id="customRadioFilled" name="customRadio"
                                               class="form-check-input"/>
                                        <label class="form-check-label" for="customRadioFilled">Toggle this custom
                                            radio</label>
                                    </div>
                                </div>
                                <div class="filled custom-control-container">
                                    <i data-cs-icon="loaf"></i>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="customSwitchFilled"/>
                                        <label class="form-check-label" for="customSwitchFilled">Toggle this switch
                                            element</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Filled End -->
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
                        <a class="nav-link" href="#customCheckbox">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Checkbox</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#customRadio">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Custom Radio</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#switches">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Switches</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#buttons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#taskListItems">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Task List Items</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#boxedChoices">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Boxed Choices</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#borderedChoices">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Bordered Choices</span>
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
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

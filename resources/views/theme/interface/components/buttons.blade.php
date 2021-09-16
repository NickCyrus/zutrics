@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Buttons';
    $description = 'Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.';
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

                    <!-- Colors Start -->
                    <section class="scroll-section" id="colors">
                        <h2 class="small-title">Colors</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary mb-1">Primary</button>
                                <button type="button" class="btn btn-secondary mb-1">Secondary</button>
                                <button type="button" class="btn btn-tertiary mb-1">Tertiary</button>
                                <button type="button" class="btn btn-quaternary mb-1">Quaternary</button>
                                <button type="button" class="btn btn-success mb-1">Success</button>
                                <button type="button" class="btn btn-danger mb-1">Danger</button>
                                <button type="button" class="btn btn-warning mb-1">Warning</button>
                                <button type="button" class="btn btn-info mb-1">Info</button>
                                <button type="button" class="btn btn-light mb-1">Light</button>
                                <button type="button" class="btn btn-dark mb-1">Dark</button>
                                <button type="button" class="btn btn-alternate mb-1">Alternate</button>
                                <button type="button" class="btn btn-muted mb-1">Muted</button>
                                <button type="button" class="btn btn-body mb-1">Body</button>
                                <button type="button" class="btn btn-foreground hover-outline mb-1">Foreground</button>
                                <button type="button" class="btn btn-foreground-alternate mb-1">Foreground Alt</button>
                                <button type="button" class="btn btn-background hover-outline mb-1">Background</button>
                                <button type="button" class="btn btn-background-alternate mb-1">Background Alt</button>
                                <button type="button" class="btn btn-link mb-1">Button Link</button>
                                <a href="#" class="btn btn-link mb-1">Anchor Link</a>
                            </div>
                        </div>
                    </section>
                    <!-- Colors End -->

                    <!-- Button Tags Start -->
                    <section class="scroll-section" id="buttonTags">
                        <h2 class="small-title">Button Tags</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <a class="btn btn-primary mb-1" href="#" role="button">Link</a>
                                <button class="btn btn-primary mb-1" type="submit">Button</button>
                                <input class="btn btn-primary mb-1" type="button" value="Input"/>
                                <input class="btn btn-primary mb-1" type="submit" value="Submit"/>
                                <input class="btn btn-primary mb-1" type="reset" value="Reset"/>
                            </div>
                        </div>
                    </section>
                    <!-- Button Tags End -->

                    <!-- Outline Buttons Start -->
                    <section class="scroll-section" id="outlineButtons">
                        <h2 class="small-title">Outline Buttons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary mb-1">Primary</button>
                                <button type="button" class="btn btn-outline-secondary mb-1">Secondary</button>
                                <button type="button" class="btn btn-outline-tertiary mb-1">Tertiary</button>
                                <button type="button" class="btn btn-outline-quaternary mb-1">Quaternary</button>
                                <button type="button" class="btn btn-outline-success mb-1">Success</button>
                                <button type="button" class="btn btn-outline-danger mb-1">Danger</button>
                                <button type="button" class="btn btn-outline-warning mb-1">Warning</button>
                                <button type="button" class="btn btn-outline-info mb-1">Info</button>
                                <button type="button" class="btn btn-outline-light mb-1">Light</button>
                                <button type="button" class="btn btn-outline-dark mb-1">Dark</button>

                                <button type="button" class="btn btn-outline-body mb-1">Body</button>
                                <button type="button" class="btn btn-outline-alternate mb-1">Alternate</button>
                                <button type="button" class="btn btn-outline-muted mb-1">Muted</button>
                            </div>
                        </div>
                    </section>
                    <!-- Outline Buttons End -->

                    <!-- CS Line Icons Start -->
                    <section class="scroll-section" id="csLineIcons">
                        <h2 class="small-title">CS Line Icons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate">Left</h6>
                                <button class="btn btn-icon btn-icon-start btn-primary mb-1" type="button">
                                    <i data-cs-icon="check"></i>
                                    <span>Check</span>
                                </button>
                                <button class="btn btn-icon btn-icon-start btn-secondary mb-1" type="button">
                                    <i data-cs-icon="share"></i>
                                    <span>Share</span>
                                </button>
                                <button class="btn btn-icon btn-icon-start btn-tertiary mb-1" type="button">
                                    <i data-cs-icon="play"></i>
                                    <span>Play</span>
                                </button>
                                <button class="btn btn-icon btn-icon-start btn-quaternary mb-1" type="button">
                                    <i data-cs-icon="login"></i>
                                    <span>Login</span>
                                </button>
                                <button class="btn btn-icon btn-icon-start btn-outline-primary mb-1" type="button">
                                    <i data-cs-icon="sync-horizontal"></i>
                                    <span>Sync</span>
                                </button>
                                <button class="btn btn-icon btn-icon-start btn-outline-secondary mb-1" type="button">
                                    <i data-cs-icon="gear"></i>
                                    <span>Options</span>
                                </button>
                                <button class="btn btn-icon btn-icon-start btn-outline-tertiary mb-1" type="button">
                                    <i data-cs-icon="user"></i>
                                    <span>User</span>
                                </button>
                                <button class="btn btn-icon btn-icon-start btn-outline-quaternary mb-1" type="button">
                                    <i data-cs-icon="arrow-double-top"></i>
                                    <span>Go Up</span>
                                </button>
                                <div class="clearfix mb-4"></div>
                                <h6 class="mb-3 text-alternate">Right</h6>
                                <button class="btn btn-icon btn-icon-end btn-primary mb-1" type="button">
                                    <span>Delete</span>
                                    <i data-cs-icon="bin"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-secondary mb-1" type="button">
                                    <span>Right</span>
                                    <i data-cs-icon="arrow-right"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-tertiary mb-1" type="button">
                                    <span>Send</span>
                                    <i data-cs-icon="send"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-quaternary mb-1" type="button">
                                    <span>More</span>
                                    <i data-cs-icon="more-horizontal"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-outline-primary mb-1" type="button">
                                    <span>Demo</span>
                                    <i data-cs-icon="arrow-bottom-right"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-outline-secondary mb-1" type="button">
                                    <span>Download</span>
                                    <i data-cs-icon="download"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-outline-tertiary mb-1" type="button">
                                    <span>Search</span>
                                    <i data-cs-icon="search"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-outline-quaternary mb-1" type="button">
                                    <span>Work</span>
                                    <i data-cs-icon="suitcase"></i>
                                </button>
                                <div class="clearfix mb-4"></div>
                                <h6 class="mb-3 text-alternate">Sizes</h6>
                                <button class="btn btn-xl btn-icon btn-icon-end btn-primary mb-1" type="button">
                                    <span>X Large</span>
                                    <i data-cs-icon="arrow-bottom-left"></i>
                                </button>
                                <button class="btn btn-xl btn-icon btn-icon-start btn-primary mb-1" type="button">
                                    <i data-cs-icon="arrow-bottom-left"></i>
                                    <span>X Large</span>
                                </button>
                                <button class="btn btn-lg btn-icon btn-icon-end btn-primary mb-1" type="button">
                                    <span>Large</span>
                                    <i data-cs-icon="arrow-bottom-left"></i>
                                </button>
                                <button class="btn btn-lg btn-icon btn-icon-start btn-primary mb-1" type="button">
                                    <i data-cs-icon="arrow-bottom-left"></i>
                                    <span>Large</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-primary mb-1" type="button">
                                    <span>Small</span>
                                    <i data-cs-icon="arrow-bottom-left"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-start btn-primary mb-1" type="button">
                                    <i data-cs-icon="arrow-bottom-left"></i>
                                    <span>Small</span>
                                </button>
                                <div class="clearfix mb-4"></div>
                                <h6 class="mb-3 text-alternate">Icon Only</h6>
                                <div class="mb-3">
                                    <button class="btn btn-icon btn-icon-only btn-primary mb-1" type="button">
                                        <i data-cs-icon="chevron-left"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-secondary mb-1" type="button">
                                        <i data-cs-icon="chevron-right"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-tertiary mb-1" type="button">
                                        <i data-cs-icon="link"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-quaternary mb-1" type="button">
                                        <i data-cs-icon="mic"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-success mb-1" type="button">
                                        <i data-cs-icon="attachment"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-danger mb-1" type="button">
                                        <i data-cs-icon="sync-horizontal"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-warning mb-1" type="button">
                                        <i data-cs-icon="sync-horizontal"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-info mb-1" type="button">
                                        <i data-cs-icon="like"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-light mb-1" type="button">
                                        <i data-cs-icon="unlike"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-dark mb-1" type="button">
                                        <i data-cs-icon="wifi"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-primary mb-1" type="button">
                                        <i data-cs-icon="facebook"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-secondary mb-1" type="button">
                                        <i data-cs-icon="plus"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-tertiary mb-1" type="button">
                                        <i data-cs-icon="gear"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-quaternary mb-1"
                                            type="button">
                                        <i data-cs-icon="power"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-success mb-1" type="button">
                                        <i data-cs-icon="calendar"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-danger mb-1" type="button">
                                        <i data-cs-icon="flash"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-warning mb-1" type="button">
                                        <i data-cs-icon="trend-up"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-info mb-1" type="button">
                                        <i data-cs-icon="save"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-light mb-1" type="button">
                                        <i data-cs-icon="phone"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-outline-dark mb-1" type="button">
                                        <i data-cs-icon="mobile"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-foreground hover-outline mb-1"
                                            type="button">
                                        <i data-cs-icon="more-vertical"></i>
                                    </button>
                                    <button class="btn btn-icon btn-icon-only btn-background hover-outline mb-1"
                                            type="button">
                                        <i data-cs-icon="more-horizontal"></i>
                                    </button>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-primary mb-1" type="button">
                                        <i data-cs-icon="chevron-left"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-secondary mb-1" type="button">
                                        <i data-cs-icon="chevron-right"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-tertiary mb-1" type="button">
                                        <i data-cs-icon="link"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-quaternary mb-1" type="button">
                                        <i data-cs-icon="mic"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-success mb-1" type="button">
                                        <i data-cs-icon="attachment"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-danger mb-1" type="button">
                                        <i data-cs-icon="sync-horizontal"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-warning mb-1" type="button">
                                        <i data-cs-icon="sync-horizontal"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-info mb-1" type="button">
                                        <i data-cs-icon="like"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-light mb-1" type="button">
                                        <i data-cs-icon="unlike"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-dark mb-1" type="button">
                                        <i data-cs-icon="wifi"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary mb-1"
                                            type="button">
                                        <i data-cs-icon="facebook"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary mb-1"
                                            type="button">
                                        <i data-cs-icon="plus"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-tertiary mb-1"
                                            type="button">
                                        <i data-cs-icon="gear"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-quaternary mb-1"
                                            type="button">
                                        <i data-cs-icon="power"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-success mb-1"
                                            type="button">
                                        <i data-cs-icon="calendar"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-danger mb-1"
                                            type="button">
                                        <i data-cs-icon="flash"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-warning mb-1"
                                            type="button">
                                        <i data-cs-icon="trend-up"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-info mb-1"
                                            type="button">
                                        <i data-cs-icon="save"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-light mb-1"
                                            type="button">
                                        <i data-cs-icon="phone"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-outline-dark mb-1"
                                            type="button">
                                        <i data-cs-icon="mobile"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-foreground hover-outline mb-1"
                                            type="button">
                                        <i data-cs-icon="more-vertical"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                                            type="button">
                                        <i data-cs-icon="more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- CS Line Icons End -->

                    <!-- Sizes Start -->
                    <section class="scroll-section" id="sizes">
                        <h2 class="small-title">Sizes</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate">Xlarge</h6>
                                <button type="button" class="btn btn-primary btn-xl mb-1">Xlarge button</button>
                                <button type="button" class="btn btn-secondary btn-xl mb-1">Xlarge button</button>
                                <div class="clearfix mb-4"></div>

                                <h6 class="mb-3 text-alternate">Large</h6>
                                <button type="button" class="btn btn-primary btn-lg mb-1">Large button</button>
                                <button type="button" class="btn btn-secondary btn-lg mb-1">Large button</button>
                                <div class="clearfix mb-4"></div>

                                <h6 class="mb-3 text-alternate">Small</h6>
                                <button type="button" class="btn btn-primary btn-sm mb-1">Small button</button>
                                <button type="button" class="btn btn-secondary btn-sm mb-1">Small button</button>
                                <div class="clearfix mb-4"></div>
                            </div>
                        </div>
                    </section>
                    <!-- Sizes End -->

                    <!-- Block Buttons Start -->
                    <section class="scroll-section" id="blockButtons">
                        <h2 class="small-title">Block Buttons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="d-grid gap-2 mb-3">
                                    <button class="btn btn-primary" type="button">Button</button>
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                                <div class="d-grid gap-2 d-md-block mb-3">
                                    <button class="btn btn-primary" type="button">Button</button>
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                                    <button class="btn btn-primary" type="button">Button</button>
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary me-md-2" type="button">Button</button>
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Block Buttons End -->

                    <!-- States Start -->
                    <section class="scroll-section" id="states">
                        <h2 class="small-title">States</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="mb-3 text-alternate">Active State</h6>
                                <a href="#" class="btn btn-primary btn-lg active mb-1" role="button"
                                   aria-pressed="true">Active Primary link</a>
                                <a href="#" class="btn btn-primary btn-lg active mb-1" role="button"
                                   aria-pressed="true">Active Link</a>
                                <div class="clearfix mb-4"></div>

                                <h6 class="mb-3 text-alternate">Disabled State</h6>
                                <button type="button" class="btn btn-lg btn-primary mb-1" disabled>Disabled Primary
                                    button
                                </button>
                                <button type="button" class="btn btn-primary btn-lg mb-1" disabled>Disabled Button
                                </button>
                                <div class="clearfix mb-4"></div>

                                <h6 class="mb-3 text-alternate">Disabled Link</h6>
                                <a href="#" class="btn btn-primary btn-lg disabled mb-1" tabindex="-1" role="button"
                                   aria-disabled="true">Disabled Primary link</a>
                                <a href="#" class="btn btn-primary btn-lg disabled mb-1" tabindex="-1" role="button"
                                   aria-disabled="true">Disabled Link</a>
                            </div>
                        </div>
                    </section>
                    <!-- States End -->

                    <!-- Checkbox and Radio Buttons Start -->
                    <section class="scroll-section" id="checkboxRadioButtons">
                        <h2 class="small-title">Checkbox and Radio Buttons</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="button">Toggle
                                    button
                                </button>
                                <button type="button" class="btn btn-primary mb-1 active" data-bs-toggle="button"
                                        aria-pressed="true">Active toggle button
                                </button>
                                <button type="button" class="btn btn-primary mb-1" disabled data-bs-toggle="button">
                                    Disabled toggle button
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Checkbox and Radio Buttons End -->

                    <!-- Gradient Start -->
                    <section class="scroll-section" id="gradient">
                        <h2 class="small-title">Gradient</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button type="button" class="btn btn-lg btn-gradient-primary">Primary</button>
                                <button type="button" class="btn btn-lg btn-gradient-secondary">Secondary</button>
                            </div>
                        </div>
                    </section>
                    <!-- Gradient End -->

                    <!-- Button Tags Start -->
                    <section class="scroll-section" id="pseudoEffects">
                        <h2 class="small-title">Pseudo Effects</h2>
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary mb-1 hover-scale-up" type="submit">Hover Scale Up
                                </button>
                                <button class="btn btn-primary mb-1 hover-scale-down" type="submit">Hover Scale Down
                                </button>
                                <button class="btn btn-primary mb-1 active-scale-up" type="submit">Active Scale Up
                                </button>
                                <button class="btn btn-primary mb-1 active-scale-down" type="submit">Active Scale Down
                                </button>
                                <button class="btn btn-primary mb-1 hover-scale-up active-scale-down" type="submit">
                                    Combined
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Button Tags End -->
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
                        <a class="nav-link" href="#colors">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Colors</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#buttonTags">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Button Tags</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#outlineButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Outline Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#csLineIcons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>CS Line Icons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#sizes">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sizes</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#blockButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Block Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#states">
                            <i data-cs-icon="chevron-right"></i>
                            <span>States</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#checkboxRadioButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Checkbox & Radio</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#gradient">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Gradient</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#pseudoEffects">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Pseudo Effects</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Faq';
    $description = 'Faq Page';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Miscellaneous"=>"Miscellaneous"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <!-- Title Start -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-container">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>
        <!-- Title End -->

        <div class="row">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-8 col-xxl-9 mb-5">
                <div id="accordionCards">
                    <div class="mb-n2">
                        <div class="card d-flex mb-2">
                            <div
                                class="d-flex flex-grow-1"
                                role="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOneCards"
                                aria-expanded="true"
                                aria-controls="collapseOneCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Cupcake Lollipop Biscuit</div>
                                </div>
                            </div>
                            <div id="collapseOneCards" class="collapse show" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p><strong>Moon Tempor</strong></p>
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                        squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                        craft beer farm-to-table, raw denim aesthetic synth
                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                    <br/>
                                    <p><strong>Accusamus Labore</strong></p>
                                    <p>
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                                        vegan excepteur butcher vice lomo. Leggings occaecat
                                        craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.
                                        <br/>
                                        <br/>
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore
                                        sustainable VHS. Ad vegan excepteur butcher vice lomo. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you
                                        probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                    <p class="mb-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                        squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                        craft beer farm-to-table, raw denim aesthetic synth
                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex mb-2">
                            <div
                                class="d-flex flex-grow-1"
                                role="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwoCards"
                                aria-expanded="true"
                                aria-controls="collapseTwoCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Roll Marshmallow</div>
                                </div>
                            </div>
                            <div id="collapseTwoCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p><strong>Moon Tempor</strong></p>
                                    <p class="mb-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                        squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                        craft beer farm-to-table, raw denim aesthetic synth
                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex mb-2">
                            <div
                                class="d-flex flex-grow-1"
                                role="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThreeCards"
                                aria-expanded="true"
                                aria-controls="collapseThreeCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Pudding Soufflé Macaroon Carrot
                                        Cake
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThreeCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p><strong>Moon Tempor</strong></p>
                                    <p class="mb-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                        squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                        craft beer farm-to-table, raw denim aesthetic synth
                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex mb-2">
                            <div
                                class="d-flex flex-grow-1"
                                role="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFourCards"
                                aria-expanded="true"
                                aria-controls="collapseFourCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Sesame Snaps Cheesecake Muffin</div>
                                </div>
                            </div>
                            <div id="collapseFourCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                        squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                        craft beer farm-to-table, raw denim aesthetic synth
                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex mb-2">
                            <div
                                class="d-flex flex-grow-1"
                                role="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFiveCards"
                                aria-expanded="true"
                                aria-controls="collapseFiveCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Candy Cupcake Ice Cream Gummies
                                        Dessert Muffin
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFiveCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                        squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                        craft beer farm-to-table, raw denim aesthetic synth
                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex mb-2">
                            <div
                                class="d-flex flex-grow-1"
                                role="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseSixCards"
                                aria-expanded="true"
                                aria-controls="collapseSixCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Powder Halvah Dessert Ice Cream
                                    </div>
                                </div>
                            </div>
                            <div id="collapseSixCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                        squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                        craft beer farm-to-table, raw denim aesthetic synth
                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <div class="card mb-2">
                    <div class="card-body row g-0">
                        <div class="col-12">
                            <div class="cta-3">Need more details?</div>
                            <div class="mb-3 cta-3 text-primary">Read the docs!</div>
                            <div class="text-muted mb-4">Cheesecake chocolate carrot cake pie lollipop lemon toffee
                                lollipop. Oat cake pie cake cotton.
                            </div>
                            <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link sw-15">
                                <i data-cs-icon="file-empty"></i>
                                <span>Docs</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body row g-0">
                        <div class="col-12">
                            <div class="cta-3">Have a specific issue?</div>
                            <div class="mb-3 cta-3 text-primary">Check the forums!</div>
                            <div class="text-muted mb-4">Cheesecake chocolate carrot cake pie lollipop lemon toffee
                                lollipop. Oat cake pie cake cotton.
                            </div>
                            <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link sw-15">
                                <i data-cs-icon="diagram-2"></i>
                                <span>Forums</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body row g-0">
                        <div class="col-12">
                            <div class="cta-3">Looking for support?</div>
                            <div class="mb-3 cta-3 text-primary">Submit a Ticket!</div>
                            <div class="text-muted mb-4">Cheesecake chocolate carrot cake pie lollipop lemon toffee
                                lollipop. Oat cake pie cake cotton.
                            </div>
                            <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link sw-15">
                                <i data-cs-icon="help"></i>
                                <span>Support</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection

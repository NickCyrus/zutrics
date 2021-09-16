@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Pricing';
    $description = 'Pricing Page';
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
        <!-- Plans Start -->
        <h2 class="small-title">Choose a Plan</h2>
        <div class="mb-5">
            <div class="row row-cols-1 row-cols-lg-3 g-2">
                <div class="col">
                    <div class="card h-100 hover-scale-up">
                        <div class="card-body pb-0">
                            <div class="d-flex flex-column align-items-center mb-4">
                                <div
                                    class="bg-gradient-2 sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i class="text-white" data-cs-icon="building-small"></i>
                                </div>
                                <div class="cta-4 text-primary mb-1">Team</div>
                                <div class="text-muted sh-3 line-through">$ 10.50</div>
                                <div class="display-4">$ 3.50</div>
                                <div class="text-small text-muted mb-1">User/Month</div>
                            </div>
                            <p class="text-alternate mb-4">
                                Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame snaps
                                lollipop macaroon. Icing tiramisu oat cake pudding danish
                                gummies.
                            </p>
                        </div>
                        <div class="card-footer pt-0 border-0">
                            <div class="mb-4">
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="user"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Single user</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="help"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Forum support</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="clipboard"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Access to library</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="database"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">1 GB disk space</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#"
                                   class="btn btn-icon btn-icon-start btn-foreground hover-outline stretched-link">
                                    <i data-cs-icon="chevron-right"></i>
                                    <span>Purchase</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-scale-up">
                        <div class="card-body pb-0">
                            <div class="d-flex flex-column align-items-center mb-4">
                                <div
                                    class="bg-gradient-2 sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i class="text-white" data-cs-icon="building"></i>
                                </div>
                                <div class="cta-4 text-primary mb-3">Company</div>
                                <div class="text-muted sh-3"></div>
                                <div class="display-4">$ 12.75</div>
                                <div class="text-small text-muted mb-1">User/Month</div>
                            </div>
                            <p class="text-alternate mb-4">
                                Danish brownie chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop
                                cheesecake gummi bears cheesecake.
                            </p>
                        </div>
                        <div class="card-footer pt-0 border-0">
                            <div class="mb-4">
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="user"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Up to 50 users</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="support"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Direct support</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="clipboard"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Access to library</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="database"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">50 GB disk space</div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a href="#"
                                   class="btn btn-icon btn-icon-start btn-foreground hover-outline stretched-link">
                                    <i data-cs-icon="chevron-right"></i>
                                    <span>Purchase</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-scale-up">
                        <div class="card-body pb-0">
                            <div class="d-flex flex-column align-items-center mb-4">
                                <div
                                    class="bg-gradient-2 sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i class="text-white" data-cs-icon="building-large"></i>
                                </div>
                                <div class="cta-4 text-primary mb-3">Enterprise</div>
                                <div class="text-muted sh-3"></div>
                                <div class="display-4">$ 15.00</div>
                                <div class="text-small text-muted mb-1">User/Month</div>
                            </div>
                            <p class="text-alternate mb-4 sh-9">Apple pie macaroon sesame snaps cotton candy jelly
                                pudding lollipop caramels marshmallow.</p>
                        </div>
                        <div class="card-footer pt-0 border-0">
                            <div class="mb-4">
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="user"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Unlimited users</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="support"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Direct support</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="clipboard"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Access to library & hot fixes</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-cs-icon="database"
                                               data-cs-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Unlimited disk space</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#"
                                   class="btn btn-icon btn-icon-start btn-foreground hover-outline stretched-link">
                                    <i data-cs-icon="chevron-right"></i>
                                    <span>Purchase</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Plans End -->

        <!-- Faq Start -->
        <h2 class="small-title">Faq</h2>
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
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                            <br/>
                            <p><strong>Accusamus Labore</strong></p>
                            <p>
                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                excepteur butcher vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                of them accusamus labore sustainable VHS.
                                <br/>
                                <br/>
                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore
                                sustainable VHS. Ad vegan excepteur butcher vice lomo. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee
                                nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                anderson cred nesciunt sapiente ea proident. Ad vegan
                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of
                                them accusamus labore sustainable VHS.
                            </p>
                            <p class="mb-0">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
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
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
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
                            <div class="btn btn-link list-item-heading p-0">Pudding Soufflé Macaroon Carrot Cake</div>
                        </div>
                    </div>
                    <div id="collapseThreeCards" class="collapse" data-bs-parent="#accordionCards">
                        <div class="card-body accordion-content pt-0">
                            <p><strong>Moon Tempor</strong></p>
                            <p class="mb-0">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
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
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
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
                            <div class="btn btn-link list-item-heading p-0">Candy Cupcake Ice Cream Gummies Dessert
                                Muffin
                            </div>
                        </div>
                    </div>
                    <div id="collapseFiveCards" class="collapse" data-bs-parent="#accordionCards">
                        <div class="card-body accordion-content pt-0">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
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
                            <div class="btn btn-link list-item-heading p-0">Powder Halvah Dessert Ice Cream</div>
                        </div>
                    </div>
                    <div id="collapseSixCards" class="collapse" data-bs-parent="#accordionCards">
                        <div class="card-body accordion-content pt-0">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq End -->
    </div>
@endsection

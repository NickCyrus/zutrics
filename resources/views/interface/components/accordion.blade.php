@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Accordion';
    $description = 'Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.';
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

                    <!-- Default Start -->
                    <section class="scroll-section" id="default">
                        <h2 class="small-title">Default</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong>
                                                It is hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes
                                                control the overall appearance, as well as the showing and hiding via
                                                CSS transitions. You can modify any of this with custom CSS
                                                or overriding our default variables. It's also worth noting that just
                                                about any HTML can go within the
                                                <code>.accordion-body</code>
                                                , though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong>
                                                It is hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes
                                                control the overall appearance, as well as the showing and hiding via
                                                CSS transitions. You can modify any of this with custom CSS
                                                or overriding our default variables. It's also worth noting that just
                                                about any HTML can go within the
                                                <code>.accordion-body</code>
                                                , though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                             aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong>
                                                It is hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes
                                                control the overall appearance, as well as the showing and hiding via
                                                CSS transitions. You can modify any of this with custom CSS
                                                or overriding our default variables. It's also worth noting that just
                                                about any HTML can go within the
                                                <code>.accordion-body</code>
                                                , though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Flush Start -->
                    <section class="scroll-section" id="flush">
                        <h2 class="small-title">Flush</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </div>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate
                                                the
                                                <code>.accordion-flush</code>
                                                class. This is the first item's accordion body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </div>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate
                                                the
                                                <code>.accordion-flush</code>
                                                class. This is the second item's accordion body. Let's imagine this
                                                being filled with some actual content.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </div>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingThree"
                                             data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate
                                                the
                                                <code>.accordion-flush</code>
                                                class. This is the third item's accordion body. Nothing more exciting
                                                happening here in terms of content, but just filling up the
                                                space to make it look, at least at first glance, a bit more
                                                representative of how this would look in a real-world application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Flush End -->

                    <!-- Accordion Cards Start -->
                    <section class="scroll-section" id="accordionCards">
                        <h2 class="small-title">Accordion Cards</h2>
                        <div class="mb-n2" id="accordionCardsExample">
                            <div class="card d-flex mb-2">
                                <div class="d-flex flex-grow-1" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseOneCards" aria-expanded="true"
                                     aria-controls="collapseOneCards">
                                    <div class="card-body py-4">
                                        <div class="btn btn-link list-item-heading p-0">Cupcake Lollipop Biscuit</div>
                                    </div>
                                </div>
                                <div id="collapseOneCards" class="collapse show"
                                     data-bs-parent="#accordionCardsExample">
                                    <div class="card-body accordion-content pt-0">
                                        <p><strong>Moon Tempor</strong></p>
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non
                                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                            it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </p>
                                        <br/>
                                        <p><strong>Accusamus Labore</strong></p>
                                        <p>
                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                            coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                            proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                            <br/>
                                            <br/>
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS. Ad vegan excepteur butcher vice lomo. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin
                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                            beer labore wes anderson cred nesciunt sapiente ea
                                            proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you
                                            probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                        <p class="mb-0">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non
                                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                            it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card d-flex mb-2">
                                <div class="d-flex flex-grow-1" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseTwoCards" aria-expanded="true"
                                     aria-controls="collapseTwoCards">
                                    <div class="card-body py-4">
                                        <div class="btn btn-link list-item-heading p-0">Roll Marshmallow</div>
                                    </div>
                                </div>
                                <div id="collapseTwoCards" class="collapse" data-bs-parent="#accordionCardsExample">
                                    <div class="card-body accordion-content pt-0">
                                        <p><strong>Moon Tempor</strong></p>
                                        <p class="mb-0">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non
                                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                            it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card d-flex mb-2">
                                <div class="d-flex flex-grow-1" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseThreeCards" aria-expanded="true"
                                     aria-controls="collapseThreeCards">
                                    <div class="card-body py-4">
                                        <div class="btn btn-link list-item-heading p-0">Pudding Soufflé Macaroon Carrot
                                            Cake
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseThreeCards" class="collapse" data-bs-parent="#accordionCardsExample">
                                    <div class="card-body accordion-content pt-0">
                                        <p><strong>Moon Tempor</strong></p>
                                        <p class="mb-0">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non
                                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                            it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card d-flex mb-2">
                                <div class="d-flex flex-grow-1" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseFourCards" aria-expanded="true"
                                     aria-controls="collapseFourCards">
                                    <div class="card-body py-4">
                                        <div class="btn btn-link list-item-heading p-0">Sesame Snaps Cheesecake Muffin
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseFourCards" class="collapse" data-bs-parent="#accordionCardsExample">
                                    <div class="card-body accordion-content pt-0">
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non
                                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                            it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card d-flex mb-2">
                                <div class="d-flex flex-grow-1" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseFiveCards" aria-expanded="true"
                                     aria-controls="collapseFiveCards">
                                    <div class="card-body py-4">
                                        <div class="btn btn-link list-item-heading p-0">Candy Cupcake Ice Cream Gummies
                                            Dessert Muffin
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseFiveCards" class="collapse" data-bs-parent="#accordionCardsExample">
                                    <div class="card-body accordion-content pt-0">
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non
                                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                            it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card d-flex mb-2">
                                <div class="d-flex flex-grow-1" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseSixCards" aria-expanded="true"
                                     aria-controls="collapseSixCards">
                                    <div class="card-body py-4">
                                        <div class="btn btn-link list-item-heading p-0">Powder Halvah Dessert Ice
                                            Cream
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseSixCards" class="collapse" data-bs-parent="#accordionCardsExample">
                                    <div class="card-body accordion-content pt-0">
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non
                                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                            it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Accordion Cards End -->
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
                        <a class="nav-link" href="#default">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Default</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#flush">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Flush</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#accordionCards">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Accordion Cards</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

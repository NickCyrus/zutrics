@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Blog List';
    $description = 'Blog List';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Blog"=>"Blog"]
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
            <!-- List Start -->
            <div class="col-12 col-xl-8 col-xxl-9 mb-5">
                <div class="card mb-5">
                    <a href="/Pages/Blog/Detail">
                        <img src="{{ asset('/img/product/large/michetta.jpg') }}" class="card-img-top sh-35"
                             alt="card image"/>
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="/Pages/Blog/Detail">Basic Introduction to Bread Making</a>
                        </h4>
                        <p class="text-alternate clamp-line mb-0" data-line="2">
                            Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears. Tootsie
                            roll chocolate bar dragée bonbon cheesecake
                            icing. Danish wafer donut cookie caramels gummies topping.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl" alt="thumb"/>
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Olli Hawkins</a>
                                        <div class="text-muted text-small">Development Lead</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">421</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-cs-icon="message" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <a href="/Pages/Blog/Detail">
                        <img src="{{ asset('/img/product/large/rugbraud.jpg') }}" class="card-img-top sh-35"
                             alt="card image"/>
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="/Pages/Blog/Detail">14 Facts About Sugar Products</a>
                        </h4>
                        <p class="text-alternate clamp-line mb-0" data-line="2">
                            Chocolate cake biscuit donut cotton candy soufflé cake macaroon. Halvah chocolate cotton
                            candy sweet roll jelly-o candy danish dragée. Apple
                            pie cotton candy tiramisu biscuit cake muffin tootsie roll bear claw cake. Cupcake cake
                            fruitcake. Powder chocolate bar soufflé gummi bears
                            topping donut.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                             class="img-fluid rounded-xl" alt="thumb"/>
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Lisa Jackson</a>
                                        <div class="text-muted text-small">Design Lead</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">256</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-cs-icon="message" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">14</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <a href="/Pages/Blog/Detail">
                        <img src="{{ asset('/img/product/large/cornbread.jpg') }}" class="card-img-top sh-35"
                             alt="card image"/>
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="/Pages/Blog/Detail">10 Secrets Every Southern Baker Knows</a>
                        </h4>
                        <p class="text-alternate clamp-line mb-0" data-line="2">
                            Caramels tart danish jelly lemon drops cotton candy muffin. Icing fruitcake bear claw
                            fruitcake tart ice cream chocolate bar sweet roll.
                            Cupcake gummi bears fruitcake. Fruitcake cake liquorice fruitcake caramels marshmallow
                            lollipop. Chocolate gummies cake sweet. Bonbon donut
                            muffin. Biscuit donut powder sugar plum pastry.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl" alt="thumb"/>
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Olli Hawkins</a>
                                        <div class="text-muted text-small">Development Lead</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">163</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-cs-icon="message" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <a href="/Pages/Blog/Detail">
                        <img src="{{ asset('/img/product/large/zopf.jpg') }}" class="card-img-top sh-35"
                             alt="card image"/>
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="/Pages/Blog/Detail">Recipes for Sweet and Healty Treats</a>
                        </h4>
                        <p class="text-alternate clamp-line mb-0" data-line="2">
                            Oat cake soufflé gummi bears donut sweet. Gummies chocolate liquorice chocolate cake jelly-o
                            cake. Toffee cupcake gummi bears gummies dragée
                            danish chocolate bar. Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum jelly
                            donut. Soufflé cupcake sesame snaps oat cake.
                            Liquorice jelly powder fruitcake oat cake.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl" alt="thumb"/>
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Olli Hawkins</a>
                                        <div class="text-muted text-small">Development Lead</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">25</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-cs-icon="message" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <a href="/Pages/Blog/Detail">
                        <img src="{{ asset('/img/product/large/pain-de-campagne.jpg') }}" class="card-img-top sh-35"
                             alt="card image"/>
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="/Pages/Blog/Detail">Better Ways to Mix Dough for the Molds</a>
                        </h4>
                        <p class="text-alternate clamp-line mb-0" data-line="2">
                            Carrot cake jelly-o lemon drops toffee tootsie roll. Brownie topping toffee apple pie apple
                            pie. Wafer pudding chocolate bar pastry bear
                            claw tart carrot cake lemon drops icing. Gingerbread toffee topping. Tootsie roll cotton
                            candy muffin cheesecake liquorice sweet. Sugar plum
                            tart tart marshmallow chocolate wafer apple pie candy canes. Chocolate cake biscuit donut
                            cotton candy soufflé cake macaroon.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                             class="img-fluid rounded-xl" alt="thumb"/>
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Zayn Hartley</a>
                                        <div class="text-muted text-small">UX Designer</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">18</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-cs-icon="message" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <a href="/Pages/Blog/Detail">
                        <img src="{{ asset('/img/product/large/steirer-brot.jpg') }}" class="card-img-top sh-35"
                             alt="card image"/>
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="/Pages/Blog/Detail">Carrot Cake Gingerbread</a>
                        </h4>
                        <p class="text-alternate clamp-line mb-0" data-line="2">
                            Dragée dessert gummies liquorice halvah chocolate. Danish oat cake pudding. Caramels
                            lollipop soufflé chocolate bar halvah. Liquorice
                            marzipan bear claw. Tiramisu sweet dragée chocolate sugar plum pie. Gingerbread caramels
                            topping gummi bears halvah dessert cake.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                             class="img-fluid rounded-xl" alt="thumb"/>
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Joisse Kaycee</a>
                                        <div class="text-muted text-small">Accounting</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">84</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-cs-icon="message" class="text-primary me-1" data-cs-size="15"></i>
                                        <span class="align-middle">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-xl btn-outline-primary sw-30">Load More</button>
                    </div>
                </div>
            </div>
            <!-- List End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <div class="row">
                    <!-- Mailing List Start -->
                    <div class="col-12">
                        <div class="card mb-5">
                            <div class="card-body row g-0">
                                <div class="col-12">
                                    <div class="cta-3">Ready to make bread?</div>
                                    <div class="mb-3 cta-3 text-primary">Join our email list!</div>
                                    <div class="text-muted mb-3">Cheesecake chocolate carrot cake pie lollipop lemon
                                        drops.
                                    </div>
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="text-muted mb-2">
                                            <input type="email" class="form-control" placeholder="E-mail"/>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-icon btn-icon-start btn-primary">
                                        <i data-cs-icon="chevron-right"></i>
                                        <span>Join</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mailing List End -->

                    <!-- Must Read Start -->
                    <div class="col-12">
                        <h2 class="small-title">Must Read</h2>
                        <div class="mb-5">
                            <div class="row mb-n2">
                                <div class="col-12 col-md-6 col-xl-12 mb-2">
                                    <div class="card sh-11 sh-sm-14">
                                        <div class="row g-0 h-100">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/horizontal/horizontal-1.jpg') }}"
                                                     alt="user" class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                            </div>
                                            <div class="col position-static">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <a href="/Pages/Blog/Detail" class="stretched-link body-link">
                                                            <div class="clamp-line" data-line="2">A Complete Guide to
                                                                Mix Dough for the Molds
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12 mb-2">
                                    <div class="card sh-11 sh-sm-14">
                                        <div class="row g-0 h-100">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/horizontal/horizontal-2.jpg') }}"
                                                     alt="user" class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                            </div>
                                            <div class="col position-static">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <a href="/Pages/Blog/Detail" class="stretched-link body-link">
                                                            <div class="clamp-line" data-line="2">Apple Cake Recipe for
                                                                Starters
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12 mb-2">
                                    <div class="card sh-11 sh-sm-14">
                                        <div class="row g-0 h-100">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/horizontal/horizontal-3.jpg') }}"
                                                     alt="user" class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                            </div>
                                            <div class="col position-static">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <a href="/Pages/Blog/Detail" class="stretched-link body-link">
                                                            <div class="clamp-line" data-line="2">Basic Introduction to
                                                                Bread Making
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12 mb-2">
                                    <div class="card sh-11 sh-sm-14">
                                        <div class="row g-0 h-100">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/horizontal/horizontal-4.jpg') }}"
                                                     alt="user" class="card-img card-img-horizontal sw-10 sw-sm-14"/>
                                            </div>
                                            <div class="col position-static">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <a href="/Pages/Blog/Detail" class="stretched-link body-link">
                                                            <div class="clamp-line" data-line="2">Easy and Efficient
                                                                Tricks for Baking Crispy Breads
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Must Read End -->

                    <!-- Categories Start -->
                    <div class="col-12 col-sm-6 col-xl-12">
                        <h2 class="small-title">Categories</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row g-0">
                                    <div class="col-12 col-sm-6 mb-n2">
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Anpan</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Arboud</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Arepa</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Baba</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Bagel</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Chapati</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Bammy</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Kalach</a>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-n2">
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Kulcha</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Matzo</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Mohnflesserl</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Pan Dulce</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Pane Ticinese</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Pita</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Rieska</a>
                                        <a href="/Pages/Blog/List" class="body-link d-block mb-2">Zopf</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Categories End -->

                    <!-- Tags Start -->
                    <div class="col-12 col-sm-6 col-xl-12">
                        <h2 class="small-title">Tags</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Food (12)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Baking (3)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Sweet (1)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Molding (3)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Pastry (5)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Healthy (7)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Rye (3)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Simple (3)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Cake (2)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Recipe (6)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Bread (8)</span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1"
                                   href="/Pages/Blog/List">
                                    <span>Wheat (2)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
        <!-- Right Side End -->
    </div>
@endsection

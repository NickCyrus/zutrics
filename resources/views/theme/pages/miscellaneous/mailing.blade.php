@php
    $html_tag_data = [];
    $title = 'Mailing';
    $description = 'Mailing Page';
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
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>

                <!-- Title End -->
            </div>
        </div>
        <div class="card mb-5">
            <div class="card-body">
                <p class="mb-2">
                    Mailing templates use inline styling and table layout to be displayed well at various service
                    providers. To prevent the template inheriting some
                    styles from the project stylesheets, we included it as an iframe. You may use below button to view
                    standalone version.
                </p>
                <a class="btn btn-primary" target="_blank" href="{{ url('/Pages/Miscellaneous/MailingStandalone') }}">Standalone
                    Version</a>
            </div>
        </div>
        <!-- Title and Top Buttons End -->
        <div class="d-flex flex-column align-items-center">
            <!-- Basic Start -->
            <div class="pb-7" style="max-width: 600px; margin-bottom: 100px">
                <div class="card mb-5">
                    <div class="card-body">
                        <img src="{{ asset('/img/logo/logo-blue-light.svg') }}" class="sw-16 mb-7" alt="logo"/>
                        <h6 class="mb-3 heading">Carrot Cake Gingerbread</h6>
                        <div>
                            <p>
                                Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin liquorice chupa
                                chups soufflé bonbon. Liquorice gummi bears cake
                                donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream gummies dessert
                                muffin chocolate jelly. Danish brownie chocolate bar
                                lollipop cookie tootsie roll candy canes. Jujubes lollipop cheesecake gummi bears
                                cheesecake. Cake jujubes soufflé.
                            </p>
                            <p>
                                Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing
                                macaroon bear claw jelly toffee. Chocolate cake
                                marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie macaroon
                                sesame snaps cotton candy jelly
                                <u>pudding lollipop caramels</u>
                                marshmallow.
                            </p>
                            <h6 class="mb-3 mt-5 heading">Sesame Snaps Lollipop Macaroon</h6>
                            <ul class="list-unstyled">
                                <li>Croissant</li>
                                <li>Sesame snaps</li>
                                <li>Ice cream</li>
                                <li>Candy canes</li>
                                <li>Lemon drops</li>
                            </ul>
                            <h6 class="mb-3 mt-5 heading">Muffin Sweet Roll Apple Pie</h6>
                            <p>
                                Carrot cake gummi bears wafer sesame snaps soufflé cheesecake cheesecake cake. Sweet
                                roll apple pie tiramisu bonbon sugar plum muffin
                                sesame snaps chocolate. Lollipop sweet roll sesame snaps powder. Wafer halvah chocolate
                                soufflé icing.
                            </p>
                            <h6 class="mb-3 mt-5 heading">Muffin Sweet Roll Apple Pie</h6>
                            <p>
                                Cotton candy cupcake ice cream gummies dessert muffin chocolate jelly. Danish brownie
                                chocolate bar roll candy canes. Jujubes cheesecake
                                gummi bears cheesecake.
                            </p>
                            <div class="text-center mt-5">
                                <button class="btn btn-primary btn-lg">Validate</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-small text-muted text-center">
                    If you don't want to receive emails, please
                    <a href="#">unsubscribe</a>
                    .
                </div>
            </div>
            <!-- Basic End -->

            <!-- Small List Start -->
            <div class="pb-7" style="max-width: 600px; margin-bottom: 100px">
                <div style="max-width: 600px">
                    <div>
                        <img src="{{ asset('/img/logo/logo-blue-light.svg') }}" class="sw-16 mb-5" alt="logo"/>
                    </div>
                    <div class="mb-5">
                        <p class="text-alternate">
                            Dessert gummies soufflé toffee cake. Sesame snaps marzipan sesame snaps gummies oat cake
                            sesame snaps. Cheesecake bonbon chocolate bar.
                            Marshmallow toffee cotton candy. Tart sugar plum candy canes oat cake. Chupa chups cookie
                            icing tart tiramisu chocolate cake.
                        </p>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-auto sh-sm-17">
                            <div class="col-12 col-sm-auto">
                                <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" alt="product image 1"
                                     class="card-img card-img-horizontal-sm sh-sm-17 sw-sm-19"/>
                            </div>
                            <div class="col-12 col-sm">
                                <div class="card-body h-100">
                                    <div class="row g-0 h-100 align-content-start">
                                        <a href="#" class="col-12 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3">
                                            <div class="lh-1 mb-3 heading">Ruisreikäleipä</div>
                                            <div class="text-medium text-alternate mb-1">
                                                Toffee icing cupcake halvah tart. Marshmallow oat cake lemon drops
                                                chocolate bonbon powder.
                                            </div>
                                            <div class="text-small text-muted">23.10.2020</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-auto sh-sm-17">
                            <div class="col-12 col-sm-auto position-relative">
                                <span class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2">SALE</span>
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}" alt="product image 2"
                                     class="card-img card-img-horizontal-sm sh-25 sh-sm-17 sw-sm-19"/>
                            </div>
                            <div class="col-12 col-sm">
                                <div class="card-body h-100">
                                    <div class="row g-0 h-100 align-content-start">
                                        <a href="#" class="col-12 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3">
                                            <div class="lh-1 mb-3 heading">Boule</div>
                                            <div class="text-medium text-alternate mb-1">
                                                Macaroon muffin apple pie tiramisu. Topping brownie pastry. Tootsie roll
                                                tootsie roll.
                                            </div>
                                            <div class="text-small text-muted">21.11.2020</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-auto sh-sm-17">
                            <div class="col-12 col-sm-auto">
                                <img src="{{ asset('/img/product/small/michetta.jpg') }}" alt="product image 3"
                                     class="card-img card-img-horizontal-sm sh-25 sh-sm-17 sw-sm-19"/>
                            </div>
                            <div class="col-12 col-sm">
                                <div class="card-body h-100">
                                    <div class="row g-0 h-100 align-content-start">
                                        <a href="#" class="col-12 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3">
                                            <div class="lh-1 mb-3 heading">Spelt Bread</div>
                                            <div class="text-medium text-alternate mb-1">
                                                Sweet roll soufflé candy jelly wafer cake drops. Pastry chocolate
                                                jujubes dessert.
                                            </div>
                                            <div class="text-small text-muted">16.10.2020</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-auto sh-sm-17">
                            <div class="col-12 col-sm-auto">
                                <img src="{{ asset('/img/product/small/cornbread.jpg') }}" alt="product image 4"
                                     class="card-img card-img-horizontal-sm sh-25 sh-sm-17 sw-sm-19"/>
                            </div>
                            <div class="col-12 col-sm">
                                <div class="card-body h-100">
                                    <div class="row g-0 h-100 align-content-start">
                                        <a href="#" class="col-12 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3">
                                            <div class="lh-1 mb-3 heading">Cholermüs</div>
                                            <div class="text-medium text-alternate mb-1">
                                                Drops chocolate bonbon powder drops chocolate. Danish tiramisu roll
                                                dessert soufflé.
                                            </div>
                                            <div class="text-small text-muted">09.10.2020</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-small text-muted text-center">
                        If you don't want to receive emails, please
                        <a href="#">unsubscribe</a>
                        .
                    </div>
                </div>
            </div>
            <!-- Small List End -->

            <!-- Large List Start -->
            <div style="max-width: 600px">
                <div style="max-width: 600px">
                    <div class="">
                        <img src="{{ asset('/img/logo/logo-blue-light.svg') }}" alt="logo" class="sw-16 mb-5"/>
                    </div>
                    <div class="mb-5">
                        <p class="text-alternate">
                            Powder chocolate bar soufflé gummi bears jujubes brownie marshmallow apple pie donut ice
                            cream jelly-o jelly-o gummi bears. Tootsie roll
                            chocolate bar dragée bonbon cheesecake icing. Danish wafer donut cookie caramels gummies
                            topping.
                        </p>
                    </div>
                    <div class="card mb-3">
                        <a href="#">
                            <img src="{{ asset('/img/product/large/michetta.jpg') }}" class="card-img-top sh-25"
                                 alt="card image"/>
                        </a>
                        <div class="card-body">
                            <h5 class="mb-3">
                                <a href="#">Basic Introduction to Bread Making</a>
                            </h5>
                            <p class="text-alternate mb-0">
                                Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears.
                                Tootsie roll chocolate bar dragée bonbon cheesecake
                                icing. Danish wafer donut cookie caramels gummies topping.
                            </p>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <a href="#">
                            <img src="{{ asset('/img/product/large/rugbraud.jpg') }}" class="card-img-top sh-25"
                                 alt="card image"/>
                        </a>
                        <div class="card-body">
                            <h5 class="mb-3">
                                <a href="#">14 Facts About Sugar Products</a>
                            </h5>
                            <p class="text-alternate mb-0">
                                Chocolate cake biscuit donut cotton candy soufflé cake macaroon. Halvah chocolate cotton
                                candy sweet roll jelly-o candy danish dragée.
                                Apple pie cotton candy tiramisu biscuit cake muffin tootsie roll bear claw cake. Cupcake
                                cake fruitcake.
                            </p>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <a href="#">
                            <img src="{{ asset('/img/product/large/cornbread.jpg') }}" class="card-img-top sh-25"
                                 alt="card image"/>
                        </a>
                        <div class="card-body">
                            <h5 class="mb-3">
                                <a href="#">10 Secrets Every Southern Baker Knows</a>
                            </h5>
                            <p class="text-alternate mb-0">
                                Caramels tart danish jelly lemon drops cotton candy muffin. Icing fruitcake bear claw
                                fruitcake tart ice cream chocolate bar sweet roll.
                                Cupcake gummi bears fruitcake. Fruitcake cake liquorice fruitcake caramels marshmallow
                                lollipop.
                            </p>
                        </div>
                    </div>
                    <div class="text-small text-muted text-center">
                        If you don't want to receive emails, please
                        <a href="#">unsubscribe</a>
                        .
                    </div>
                </div>
            </div>
            <!-- Large List End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Scrollbar';
    $description= 'A javascript scrollbar plugin which hides native scrollbars, provides custom styleable overlay scrollbars. Also, webkit scrollbar overrides.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins"]
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

                    <!-- Vertical Start -->
                    <section class="scroll-section" id="vertical">
                        <h2 class="small-title">Vertical</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-body scroll-out">
                                        <div class="scroll sh-35">
                                            <p>
                                                Croissant croissant donut marshmallow ice cream apple pie caramels
                                                wafer. Dragée oat cake cheesecake liquorice bonbon cheesecake.
                                                Sesame snaps muffin marzipan caramels liquorice cake sugar plum candy.
                                                Muffin marzipan marzipan marshmallow chocolate bar. Carrot
                                                cake toffee jelly biscuit candy cotton candy dessert wafer. Bear claw
                                                tiramisu bonbon dragée biscuit tootsie roll macaroon
                                                marshmallow cotton candy. Tiramisu donut dessert apple pie cheesecake
                                                croissant sweet tart. Ice cream gingerbread marzipan donut.
                                                Donut caramels biscuit candy candy pie. Powder cookie cookie. Chocolate
                                                chocolate bar cheesecake dessert cheesecake chocolate
                                                cake. Jelly cupcake apple pie topping tiramisu ice cream.
                                            </p>
                                            <p>
                                                Pudding jelly powder halvah. Croissant wafer brownie lollipop candy
                                                cookie croissant. Jelly beans sweet biscuit chupa chups halvah
                                                cookie soufflé biscuit. Jujubes carrot cake powder jelly beans. Gummi
                                                bears chupa chups lollipop cotton candy candy canes.
                                            </p>
                                            <p>
                                                Sweet roll apple pie lemon drops halvah macaroon tiramisu topping. Lemon
                                                drops cake bear claw icing topping. Muffin jelly beans
                                                cupcake cake. Tiramisu brownie cookie pie caramels. Cupcake icing
                                                toffee. Donut oat cake candy tootsie roll. Danish sweet
                                                chocolate cake muffin. Jujubes jelly beans sugar plum biscuit pie cake.
                                                Muffin cupcake toffee sweet roll cookie. Topping tart
                                                cotton candy caramels toffee croissant chocolate cake cookie toffee.
                                                Croissant carrot cake apple pie marshmallow gummi bears
                                                macaroon chupa chups cheesecake. Jelly-o oat cake tootsie roll.
                                            </p>
                                            <p>
                                                Tiramisu brownie cookie pie caramels. Cupcake icing toffee. Donut oat
                                                cake candy tootsie roll. Danish sweet chocolate cake muffin.
                                                Jelly beans sweet biscuit chupa chups halvah cookie soufflé biscuit.
                                                Jujubes carrot cake powder jelly beans.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Vertical End -->

                    <!-- Horizontal Start -->
                    <section class="scroll-section" id="horizontal">
                        <h2 class="small-title">Horizontal</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="scroll-horizontal">
                                            <div class="sw-50">
                                                <p class="text-nowrap">
                                                    Croissant croissant donut marshmallow ice cream apple pie caramels
                                                    wafer. Dragée oat cake cheesecake liquorice bonbon
                                                    cheesecake. Sesame snaps muffin marzipan caramels liquorice cake
                                                    sugar plum candy.
                                                </p>
                                                <p class="text-nowrap">
                                                    Muffin marzipan marzipan marshmallow chocolate bar. Carrot cake
                                                    toffee jelly biscuit candy cotton candy dessert wafer. Bear claw
                                                    tiramisu bonbon dragée biscuit tootsie roll macaroon marshmallow
                                                    cotton candy. Tiramisu donut dessert apple pie cheesecake
                                                    croissant sweet tart. Ice cream gingerbread marzipan donut.
                                                </p>
                                                <p class="text-nowrap">
                                                    Donut caramels biscuit candy candy pie. Powder cookie cookie.
                                                    Chocolate chocolate bar cheesecake dessert cheesecake chocolate
                                                    cake. Jelly cupcake apple pie topping tiramisu ice cream.
                                                </p>
                                                <p class="text-nowrap">
                                                    Pudding jelly powder halvah. Croissant wafer brownie lollipop candy
                                                    cookie croissant. Jelly beans sweet biscuit chupa chups
                                                    halvah cookie soufflé biscuit. Jujubes carrot cake powder jelly
                                                    beans. Gummi bears chupa chups lollipop cotton candy candy
                                                    canes.
                                                </p>
                                                <p class="text-nowrap">
                                                    Sweet roll apple pie lemon drops halvah macaroon tiramisu topping.
                                                    Lemon drops cake bear claw icing topping. Muffin jelly beans
                                                    cupcake cake. Tiramisu brownie cookie pie caramels. Cupcake icing
                                                    toffee. Donut oat cake candy tootsie roll. Danish sweet
                                                    chocolate cake muffin. Jujubes jelly beans sugar plum biscuit pie
                                                    cake.
                                                </p>
                                                <p class="text-nowrap">
                                                    Muffin cupcake toffee sweet roll cookie. Topping tart cotton candy
                                                    caramels toffee croissant chocolate cake cookie toffee.
                                                    Croissant carrot cake apple pie marshmallow gummi bears macaroon
                                                    chupa chups cheesecake. Jelly-o oat cake tootsie roll.
                                                </p>
                                                <p class="text-nowrap">
                                                    Tiramisu brownie cookie pie caramels. Cupcake icing toffee. Donut
                                                    oat cake candy tootsie roll. Danish sweet chocolate cake
                                                    muffin. Jelly beans sweet biscuit chupa chups halvah cookie soufflé
                                                    biscuit. Jujubes carrot cake powder jelly beans.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Horizontal End -->

                    <!-- Vertical Visible Start -->
                    <section class="scroll-section" id="verticalVisible">
                        <h2 class="small-title">Vertical Visible</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-body scroll-out">
                                        <div class="scroll-track-visible sh-35">
                                            <p>
                                                Croissant croissant donut marshmallow ice cream apple pie caramels
                                                wafer. Dragée oat cake cheesecake liquorice bonbon cheesecake.
                                                Sesame snaps muffin marzipan caramels liquorice cake sugar plum candy.
                                                Muffin marzipan marzipan marshmallow chocolate bar. Carrot
                                                cake toffee jelly biscuit candy cotton candy dessert wafer. Bear claw
                                                tiramisu bonbon dragée biscuit tootsie roll macaroon
                                                marshmallow cotton candy. Tiramisu donut dessert apple pie cheesecake
                                                croissant sweet tart. Ice cream gingerbread marzipan donut.
                                                Donut caramels biscuit candy candy pie. Powder cookie cookie. Chocolate
                                                chocolate bar cheesecake dessert cheesecake chocolate
                                                cake. Jelly cupcake apple pie topping tiramisu ice cream.
                                            </p>
                                            <p>
                                                Pudding jelly powder halvah. Croissant wafer brownie lollipop candy
                                                cookie croissant. Jelly beans sweet biscuit chupa chups halvah
                                                cookie soufflé biscuit. Jujubes carrot cake powder jelly beans. Gummi
                                                bears chupa chups lollipop cotton candy candy canes.
                                            </p>
                                            <p>
                                                Sweet roll apple pie lemon drops halvah macaroon tiramisu topping. Lemon
                                                drops cake bear claw icing topping. Muffin jelly beans
                                                cupcake cake. Tiramisu brownie cookie pie caramels. Cupcake icing
                                                toffee. Donut oat cake candy tootsie roll. Danish sweet
                                                chocolate cake muffin. Jujubes jelly beans sugar plum biscuit pie cake.
                                                Muffin cupcake toffee sweet roll cookie. Topping tart
                                                cotton candy caramels toffee croissant chocolate cake cookie toffee.
                                                Croissant carrot cake apple pie marshmallow gummi bears
                                                macaroon chupa chups cheesecake. Jelly-o oat cake tootsie roll.
                                            </p>
                                            <p>
                                                Tiramisu brownie cookie pie caramels. Cupcake icing toffee. Donut oat
                                                cake candy tootsie roll. Danish sweet chocolate cake muffin.
                                                Jelly beans sweet biscuit chupa chups halvah cookie soufflé biscuit.
                                                Jujubes carrot cake powder jelly beans.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Vertical Visible End -->

                    <!-- Horizontal Visible Start -->
                    <section class="scroll-section" id="horizontalVisible">
                        <h2 class="small-title">Horizontal Visible</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="scroll-horizontal-track-visible">
                                            <div class="sw-50">
                                                <p class="text-nowrap">
                                                    Croissant croissant donut marshmallow ice cream apple pie caramels
                                                    wafer. Dragée oat cake cheesecake liquorice bonbon
                                                    cheesecake. Sesame snaps muffin marzipan caramels liquorice cake
                                                    sugar plum candy.
                                                </p>
                                                <p class="text-nowrap">
                                                    Muffin marzipan marzipan marshmallow chocolate bar. Carrot cake
                                                    toffee jelly biscuit candy cotton candy dessert wafer. Bear claw
                                                    tiramisu bonbon dragée biscuit tootsie roll macaroon marshmallow
                                                    cotton candy. Tiramisu donut dessert apple pie cheesecake
                                                    croissant sweet tart. Ice cream gingerbread marzipan donut.
                                                </p>
                                                <p class="text-nowrap">
                                                    Donut caramels biscuit candy candy pie. Powder cookie cookie.
                                                    Chocolate chocolate bar cheesecake dessert cheesecake chocolate
                                                    cake. Jelly cupcake apple pie topping tiramisu ice cream.
                                                </p>
                                                <p class="text-nowrap">
                                                    Pudding jelly powder halvah. Croissant wafer brownie lollipop candy
                                                    cookie croissant. Jelly beans sweet biscuit chupa chups
                                                    halvah cookie soufflé biscuit. Jujubes carrot cake powder jelly
                                                    beans. Gummi bears chupa chups lollipop cotton candy candy
                                                    canes.
                                                </p>
                                                <p class="text-nowrap">
                                                    Sweet roll apple pie lemon drops halvah macaroon tiramisu topping.
                                                    Lemon drops cake bear claw icing topping. Muffin jelly beans
                                                    cupcake cake. Tiramisu brownie cookie pie caramels. Cupcake icing
                                                    toffee. Donut oat cake candy tootsie roll. Danish sweet
                                                    chocolate cake muffin. Jujubes jelly beans sugar plum biscuit pie
                                                    cake.
                                                </p>
                                                <p class="text-nowrap">
                                                    Muffin cupcake toffee sweet roll cookie. Topping tart cotton candy
                                                    caramels toffee croissant chocolate cake cookie toffee.
                                                    Croissant carrot cake apple pie marshmallow gummi bears macaroon
                                                    chupa chups cheesecake. Jelly-o oat cake tootsie roll.
                                                </p>
                                                <p class="text-nowrap">
                                                    Tiramisu brownie cookie pie caramels. Cupcake icing toffee. Donut
                                                    oat cake candy tootsie roll. Danish sweet chocolate cake
                                                    muffin. Jelly beans sweet biscuit chupa chups halvah cookie soufflé
                                                    biscuit. Jujubes carrot cake powder jelly beans.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Horizontal Visible End -->

                    <!-- Webkit Vertical Start -->
                    <section class="scroll-section" id="webkitVertical">
                        <h2 class="small-title">Webkit Vertical</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-body pe-3">
                                        <div class="override-native overflow-auto sh-35 pe-3">
                                            <p>
                                                Croissant croissant donut marshmallow ice cream apple pie caramels
                                                wafer. Dragée oat cake cheesecake liquorice bonbon cheesecake.
                                                Sesame snaps muffin marzipan caramels liquorice cake sugar plum candy.
                                                Muffin marzipan marzipan marshmallow chocolate bar. Carrot
                                                cake toffee jelly biscuit candy cotton candy dessert wafer. Bear claw
                                                tiramisu bonbon dragée biscuit tootsie roll macaroon
                                                marshmallow cotton candy. Tiramisu donut dessert apple pie cheesecake
                                                croissant sweet tart. Ice cream gingerbread marzipan donut.
                                                Donut caramels biscuit candy candy pie. Powder cookie cookie. Chocolate
                                                chocolate bar cheesecake dessert cheesecake chocolate
                                                cake. Jelly cupcake apple pie topping tiramisu ice cream.
                                            </p>
                                            <p>
                                                Pudding jelly powder halvah. Croissant wafer brownie lollipop candy
                                                cookie croissant. Jelly beans sweet biscuit chupa chups halvah
                                                cookie soufflé biscuit. Jujubes carrot cake powder jelly beans. Gummi
                                                bears chupa chups lollipop cotton candy candy canes.
                                            </p>
                                            <p>
                                                Sweet roll apple pie lemon drops halvah macaroon tiramisu topping. Lemon
                                                drops cake bear claw icing topping. Muffin jelly beans
                                                cupcake cake. Tiramisu brownie cookie pie caramels. Cupcake icing
                                                toffee. Donut oat cake candy tootsie roll. Danish sweet
                                                chocolate cake muffin. Jujubes jelly beans sugar plum biscuit pie cake.
                                                Muffin cupcake toffee sweet roll cookie. Topping tart
                                                cotton candy caramels toffee croissant chocolate cake cookie toffee.
                                                Croissant carrot cake apple pie marshmallow gummi bears
                                                macaroon chupa chups cheesecake. Jelly-o oat cake tootsie roll.
                                            </p>
                                            <p>
                                                Tiramisu brownie cookie pie caramels. Cupcake icing toffee. Donut oat
                                                cake candy tootsie roll. Danish sweet chocolate cake muffin.
                                                Jelly beans sweet biscuit chupa chups halvah cookie soufflé biscuit.
                                                Jujubes carrot cake powder jelly beans.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Webkit Vertical End -->

                    <!-- Webkit Horizontal Start -->
                    <section class="scroll-section" id="webkitHorizontal">
                        <h2 class="small-title">Webkit Horizontal</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="override-native overflow-auto">
                                            <div class="sw-50">
                                                <p class="text-nowrap">
                                                    Croissant croissant donut marshmallow ice cream apple pie caramels
                                                    wafer. Dragée oat cake cheesecake liquorice bonbon
                                                    cheesecake. Sesame snaps muffin marzipan caramels liquorice cake
                                                    sugar plum candy.
                                                </p>
                                                <p class="text-nowrap">
                                                    Muffin marzipan marzipan marshmallow chocolate bar. Carrot cake
                                                    toffee jelly biscuit candy cotton candy dessert wafer. Bear claw
                                                    tiramisu bonbon dragée biscuit tootsie roll macaroon marshmallow
                                                    cotton candy. Tiramisu donut dessert apple pie cheesecake
                                                    croissant sweet tart. Ice cream gingerbread marzipan donut.
                                                </p>
                                                <p class="text-nowrap">
                                                    Donut caramels biscuit candy candy pie. Powder cookie cookie.
                                                    Chocolate chocolate bar cheesecake dessert cheesecake chocolate
                                                    cake. Jelly cupcake apple pie topping tiramisu ice cream.
                                                </p>
                                                <p class="text-nowrap">
                                                    Pudding jelly powder halvah. Croissant wafer brownie lollipop candy
                                                    cookie croissant. Jelly beans sweet biscuit chupa chups
                                                    halvah cookie soufflé biscuit. Jujubes carrot cake powder jelly
                                                    beans. Gummi bears chupa chups lollipop cotton candy candy
                                                    canes.
                                                </p>
                                                <p class="text-nowrap">
                                                    Sweet roll apple pie lemon drops halvah macaroon tiramisu topping.
                                                    Lemon drops cake bear claw icing topping. Muffin jelly beans
                                                    cupcake cake. Tiramisu brownie cookie pie caramels. Cupcake icing
                                                    toffee. Donut oat cake candy tootsie roll. Danish sweet
                                                    chocolate cake muffin. Jujubes jelly beans sugar plum biscuit pie
                                                    cake.
                                                </p>
                                                <p class="text-nowrap">
                                                    Muffin cupcake toffee sweet roll cookie. Topping tart cotton candy
                                                    caramels toffee croissant chocolate cake cookie toffee.
                                                    Croissant carrot cake apple pie marshmallow gummi bears macaroon
                                                    chupa chups cheesecake. Jelly-o oat cake tootsie roll.
                                                </p>
                                                <p class="text-nowrap">
                                                    Tiramisu brownie cookie pie caramels. Cupcake icing toffee. Donut
                                                    oat cake candy tootsie roll. Danish sweet chocolate cake
                                                    muffin. Jelly beans sweet biscuit chupa chups halvah cookie soufflé
                                                    biscuit. Jujubes carrot cake powder jelly beans.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Webkit Horizontal End -->

                    <!-- Scroll by Content Start -->
                    <section class="scroll-section" id="scrollByContent">
                        <h2 class="small-title">Scroll by Content</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4 mb-5">
                                <h6 class="mb-3 text-alternate">4 Items</h6>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="4" data-autoHide="leave">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Barmbrack</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Boule</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Crisp Bread</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Melonpan</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Rieska</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4 mb-5">
                                <h6 class="mb-3 text-alternate">3 Items</h6>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="3" data-autoHide="leave">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Barmbrack</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Boule</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Crisp Bread</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Melonpan</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Rieska</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4 mb-5">
                                <h6 class="mb-3 text-alternate">2 Items</h6>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="2" data-autoHide="leave">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Barmbrack</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Boule</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Crisp Bread</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Melonpan</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Rieska</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-4 mb-5">
                                <h6 class="mb-3 text-alternate">1 Item</h6>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="1" data-autoHide="leave">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Barmbrack</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Boule</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Crisp Bread</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Melonpan</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-9">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Rieska</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Scroll by Content End -->
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
                        <a class="nav-link" href="#vertical">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Vertical</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#horizontal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#verticalVisible">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Vertical Visible</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#horizontalVisible">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal Visible</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#webkitVertical">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Webkit Vertical</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#webkitHorizontal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Webkit Horizontal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#scrollByContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Scroll by Content</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Modal';
    $description= 'Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.';
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
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Launch demo modal
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelDefault">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Default End -->

                    <!-- Close Button Out Start -->
                    <section class="scroll-section" id="closeButtonOut">
                        <h2 class="small-title">Close Button Out</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#closeButtonOutExample">
                                    Launch demo modal
                                </button>
                                <!-- Modal -->
                                <div class="modal fade modal-close-out" id="closeButtonOutExample" tabindex="-1"
                                     role="dialog" aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelCloseOut">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Close Button Out End -->

                    <!-- Right Modal Start -->
                    <section class="scroll-section" id="rightModal">
                        <h2 class="small-title">Right Modal</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#rightModalExample">Standard
                                </button>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#largeRightModalExample">Large
                                </button>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#rightModalScrollExample">Scroll
                                </button>
                                <!-- Modal -->
                                <div class="modal modal-right fade" id="rightModalExample" tabindex="-1" role="dialog"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal modal-right large fade" id="largeRightModalExample" tabindex="-1"
                                     role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade modal-right scroll-out-negative" id="rightModalScrollExample"
                                     tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable full">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="scroll-track-visible">
                                                    <p>
                                                        Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy
                                                        apple pie sugar plum icing chocolate cake lollipop jujubes bear
                                                        claw. Pastry sweet roll carrot cake cake macaroon gingerbread
                                                        cookie. Lemon drops brownie candy cookie candy pie sweet roll
                                                        biscuit marzipan. Chocolate bar candy canes macaroon liquorice
                                                        danish biscuit biscuit. Tiramisu toffee brownie sweet roll
                                                        sesame snaps halvah. Icing carrot cake cupcake gummi bears
                                                        danish. Sesame snaps muffin macaroon tiramisu ice cream jelly-o
                                                        pudding marzipan tootsie roll. Muffin candy icing tootsie roll
                                                        wafer powder danish cheesecake macaroon. Sweet marshmallow oat
                                                        cake marshmallow ice cream carrot cake. Bonbon powder carrot
                                                        cake marzipan jelly beans pie cotton candy cotton candy. Gummies
                                                        donut caramels chocolate bar. Powder soufflé brownie jelly beans
                                                        gingerbread candy.
                                                    </p>
                                                    <p>
                                                        Apple pie gummies marshmallow wafer. Cookie macaroon croissant
                                                        tart topping jelly pie sesame snaps jelly. Chocolate tootsie
                                                        roll marshmallow tootsie roll gummi bears jelly beans lollipop
                                                        macaroon gummi bears. Ice cream gingerbread tart cheesecake.
                                                        Brownie jelly beans cookie liquorice candy bear claw powder
                                                        muffin sweet roll. Carrot cake gingerbread pudding chocolate
                                                        cake
                                                        cake chocolate bar sesame snaps wafer. Pie jelly beans tart
                                                        donut chupa chups caramels sesame snaps wafer gummies. Cake
                                                        marshmallow cupcake donut. Marshmallow cookie gummies chocolate
                                                        cake dragée topping cheesecake halvah carrot cake. Cupcake
                                                        bear claw carrot cake candy canes bonbon croissant biscuit
                                                        liquorice fruitcake. Jelly liquorice gummies. Biscuit croissant
                                                        croissant liquorice. Gummi bears pie powder fruitcake caramels
                                                        brownie danish pastry pudding. Caramels sugar plum cookie
                                                        cotton candy tootsie roll jelly pudding.
                                                    </p>
                                                    <p>
                                                        Tiramisu brownie tart chupa chups icing chupa chups. Gummi bears
                                                        fruitcake carrot cake chocolate bonbon. Sesame snaps brownie
                                                        gummi bears tootsie roll caramels dragée. Powder cake gummies
                                                        jelly beans toffee carrot cake bonbon powder muffin. Marshmallow
                                                        jelly beans cake donut cotton candy chocolate bar biscuit
                                                        macaroon marzipan. Cake cupcake gummies. Gingerbread bonbon
                                                        wafer.
                                                        Pastry sweet cookie danish lollipop sweet toffee topping bear
                                                        claw. Apple pie dessert cake dessert. Tiramisu pie sugar plum
                                                        gingerbread cupcake brownie candy canes gummies jelly. Bonbon
                                                        chocolate cake lollipop lollipop jelly beans apple pie halvah
                                                        sweet roll. Macaroon jujubes powder cheesecake sesame snaps
                                                        fruitcake marzipan muffin.
                                                    </p>
                                                    <p>
                                                        Powder icing cotton candy gingerbread cake chocolate bar muffin.
                                                        Fruitcake bear claw cake chupa chups. Gingerbread dessert
                                                        chocolate cake tiramisu macaroon. Gingerbread sweet roll sesame
                                                        snaps donut danish carrot cake. Muffin chocolate bar jujubes
                                                        ice cream jujubes. Dessert tiramisu chocolate bar biscuit.
                                                        Brownie ice cream marshmallow topping. Icing liquorice oat cake
                                                        caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie
                                                        roll chocolate bar. Jujubes candy jelly-o topping lemon drops.
                                                        Cupcake gingerbread cookie cookie lemon drops tootsie roll
                                                        lollipop. Carrot cake oat cake jelly-o gummies oat cake cake
                                                        biscuit carrot cake tart.
                                                    </p>
                                                    <p>
                                                        Donut chupa chups cake. Chupa chups cake cheesecake dragée
                                                        fruitcake. Fruitcake tart donut biscuit. Soufflé brownie carrot
                                                        cake pastry powder. Powder donut dragée toffee. Chocolate cake
                                                        chocolate soufflé gummi bears jelly beans ice cream pastry.
                                                        Fruitcake brownie cupcake oat cake danish wafer candy cake.
                                                        Fruitcake chocolate chocolate cake. Marzipan wafer macaroon
                                                        cookie
                                                        candy canes fruitcake. Lemon drops sesame snaps cotton candy
                                                        marshmallow lemon drops fruitcake dragée brownie. Jelly beans
                                                        gingerbread sweet roll bonbon. Fruitcake tiramisu tart apple pie
                                                        pastry. Sweet roll candy canes pastry.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Right Modal End -->

                    <!-- Left Modal Start -->
                    <section class="scroll-section" id="leftModal">
                        <h2 class="small-title">Left Modal</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#leftModalExample">Standard
                                </button>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#largeLeftModalExample">Large
                                </button>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#leftModalScrollExample">Scroll
                                </button>
                                <!-- Modal -->
                                <div class="modal modal-left fade" id="leftModalExample" tabindex="-1" role="dialog"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelLeft">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal modal-left large fade" id="largeLeftModalExample" tabindex="-1"
                                     role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelLeftLarge">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade modal-left scroll-out-negative" id="leftModalScrollExample"
                                     tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable full">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="scroll-track-visible">
                                                    <p>
                                                        Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy
                                                        apple pie sugar plum icing chocolate cake lollipop jujubes bear
                                                        claw. Pastry sweet roll carrot cake cake macaroon gingerbread
                                                        cookie. Lemon drops brownie candy cookie candy pie sweet roll
                                                        biscuit marzipan. Chocolate bar candy canes macaroon liquorice
                                                        danish biscuit biscuit. Tiramisu toffee brownie sweet roll
                                                        sesame snaps halvah. Icing carrot cake cupcake gummi bears
                                                        danish. Sesame snaps muffin macaroon tiramisu ice cream jelly-o
                                                        pudding marzipan tootsie roll. Muffin candy icing tootsie roll
                                                        wafer powder danish cheesecake macaroon. Sweet marshmallow oat
                                                        cake marshmallow ice cream carrot cake. Bonbon powder carrot
                                                        cake marzipan jelly beans pie cotton candy cotton candy. Gummies
                                                        donut caramels chocolate bar. Powder soufflé brownie jelly beans
                                                        gingerbread candy.
                                                    </p>
                                                    <p>
                                                        Apple pie gummies marshmallow wafer. Cookie macaroon croissant
                                                        tart topping jelly pie sesame snaps jelly. Chocolate tootsie
                                                        roll marshmallow tootsie roll gummi bears jelly beans lollipop
                                                        macaroon gummi bears. Ice cream gingerbread tart cheesecake.
                                                        Brownie jelly beans cookie liquorice candy bear claw powder
                                                        muffin sweet roll. Carrot cake gingerbread pudding chocolate
                                                        cake
                                                        cake chocolate bar sesame snaps wafer. Pie jelly beans tart
                                                        donut chupa chups caramels sesame snaps wafer gummies. Cake
                                                        marshmallow cupcake donut. Marshmallow cookie gummies chocolate
                                                        cake dragée topping cheesecake halvah carrot cake. Cupcake
                                                        bear claw carrot cake candy canes bonbon croissant biscuit
                                                        liquorice fruitcake. Jelly liquorice gummies. Biscuit croissant
                                                        croissant liquorice. Gummi bears pie powder fruitcake caramels
                                                        brownie danish pastry pudding. Caramels sugar plum cookie
                                                        cotton candy tootsie roll jelly pudding.
                                                    </p>
                                                    <p>
                                                        Tiramisu brownie tart chupa chups icing chupa chups. Gummi bears
                                                        fruitcake carrot cake chocolate bonbon. Sesame snaps brownie
                                                        gummi bears tootsie roll caramels dragée. Powder cake gummies
                                                        jelly beans toffee carrot cake bonbon powder muffin. Marshmallow
                                                        jelly beans cake donut cotton candy chocolate bar biscuit
                                                        macaroon marzipan. Cake cupcake gummies. Gingerbread bonbon
                                                        wafer.
                                                        Pastry sweet cookie danish lollipop sweet toffee topping bear
                                                        claw. Apple pie dessert cake dessert. Tiramisu pie sugar plum
                                                        gingerbread cupcake brownie candy canes gummies jelly. Bonbon
                                                        chocolate cake lollipop lollipop jelly beans apple pie halvah
                                                        sweet roll. Macaroon jujubes powder cheesecake sesame snaps
                                                        fruitcake marzipan muffin.
                                                    </p>
                                                    <p>
                                                        Powder icing cotton candy gingerbread cake chocolate bar muffin.
                                                        Fruitcake bear claw cake chupa chups. Gingerbread dessert
                                                        chocolate cake tiramisu macaroon. Gingerbread sweet roll sesame
                                                        snaps donut danish carrot cake. Muffin chocolate bar jujubes
                                                        ice cream jujubes. Dessert tiramisu chocolate bar biscuit.
                                                        Brownie ice cream marshmallow topping. Icing liquorice oat cake
                                                        caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie
                                                        roll chocolate bar. Jujubes candy jelly-o topping lemon drops.
                                                        Cupcake gingerbread cookie cookie lemon drops tootsie roll
                                                        lollipop. Carrot cake oat cake jelly-o gummies oat cake cake
                                                        biscuit carrot cake tart.
                                                    </p>
                                                    <p>
                                                        Donut chupa chups cake. Chupa chups cake cheesecake dragée
                                                        fruitcake. Fruitcake tart donut biscuit. Soufflé brownie carrot
                                                        cake pastry powder. Powder donut dragée toffee. Chocolate cake
                                                        chocolate soufflé gummi bears jelly beans ice cream pastry.
                                                        Fruitcake brownie cupcake oat cake danish wafer candy cake.
                                                        Fruitcake chocolate chocolate cake. Marzipan wafer macaroon
                                                        cookie
                                                        candy canes fruitcake. Lemon drops sesame snaps cotton candy
                                                        marshmallow lemon drops fruitcake dragée brownie. Jelly beans
                                                        gingerbread sweet roll bonbon. Fruitcake tiramisu tart apple pie
                                                        pastry. Sweet roll candy canes pastry.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Left Modal End -->

                    <!-- Sizes Start -->
                    <section class="scroll-section" id="sizes">
                        <h2 class="small-title">Sizes</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Xxlarge Trigger -->
                                <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#semiFullExample">Semi Full
                                </button>
                                <!-- Xlarge Trigger -->
                                <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#xlExample">Xlarge
                                </button>
                                <!-- Large Trigger -->
                                <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#lExample">Large
                                </button>
                                <!-- Normal Trigger -->
                                <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#nExample">Normal
                                </button>
                                <!-- Small Trigger -->
                                <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#smExample">Small
                                </button>
                                <div class="mb-1"></div>
                                <!-- Full Screen Triggers -->
                                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreen">Full screen
                                </button>
                                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenSm">
                                    Full screen below sm
                                </button>
                                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenMd">
                                    Full screen below md
                                </button>
                                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenLg">
                                    Full screen below lg
                                </button>
                                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenXl">
                                    Full screen below xl
                                </button>
                                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenXxl">
                                    Full screen below xxl
                                </button>
                                <!-- Modal  Launch Xxlarge-->
                                <div class="modal fade" id="semiFullExample" tabindex="-1" role="dialog"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-semi-full modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal  Launch Xlarge-->
                                <div class="modal fade" id="xlExample" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal  Launch Large-->
                                <div class="modal fade" id="lExample" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal  Launch Normal-->
                                <div class="modal fade" id="nExample" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal  Launch Small-->
                                <div class="modal fade" id="smExample" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Full Screen Launch Examples -->
                                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
                                     aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen
                                                    modal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
                                     aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Full
                                                    screen below sm</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
                                     aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-md-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Full
                                                    screen below md</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
                                     aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4" id="exampleModalFullscreenLgLabel">Full
                                                    screen below lg</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
                                     aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-xl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4" id="exampleModalFullscreenXlLabel">Full
                                                    screen below xl</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
                                     aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-xxl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4" id="exampleModalFullscreenXxlLabel">Full
                                                    screen below xxl</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Sizes End -->

                    <!-- Static Backdrop Start -->
                    <section class="scroll-section" id="staticBackdrop">
                        <h2 class="small-title">Static Backdrop</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropExample">
                                    Launch static backdrop modal
                                </button>
                                <!-- Modal  Launch static backdrop modal-->
                                <div class="modal fade" id="staticBackdropExample" data-bs-backdrop="static"
                                     data-bs-keyboard="false" tabindex="-1" role="dialog"
                                     aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Static Backdrop End -->

                    <!-- Overlay Scroll Start -->
                    <section class="scroll-section" id="overlayScroll">
                        <h2 class="small-title">Overlay Scroll</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#overlayScrollLong">
                                    Overlay scroll long
                                </button>
                                <div class="clearfix mb-1"></div>
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#overlayScrollShort">
                                    Overlay scroll short
                                </button>

                                <!-- Overlay Scroll Long Modal -->
                                <div class="modal fade scroll-out" id="overlayScrollLong" tabindex="-1" role="dialog"
                                     aria-labelledby="overlayScrollLongLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable long modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="overlayScrollLongLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="scroll-track-visible">
                                                    <p>
                                                        Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy
                                                        apple pie sugar plum icing chocolate cake lollipop jujubes bear
                                                        claw. Pastry sweet roll carrot cake cake macaroon gingerbread
                                                        cookie. Lemon drops brownie candy cookie candy pie sweet roll
                                                        biscuit marzipan. Chocolate bar candy canes macaroon liquorice
                                                        danish biscuit biscuit. Tiramisu toffee brownie sweet roll
                                                        sesame snaps halvah. Icing carrot cake cupcake gummi bears
                                                        danish. Sesame snaps muffin macaroon tiramisu ice cream jelly-o
                                                        pudding marzipan tootsie roll. Muffin candy icing tootsie roll
                                                        wafer powder danish cheesecake macaroon. Sweet marshmallow oat
                                                        cake marshmallow ice cream carrot cake. Bonbon powder carrot
                                                        cake marzipan jelly beans pie cotton candy cotton candy. Gummies
                                                        donut caramels chocolate bar. Powder soufflé brownie jelly beans
                                                        gingerbread candy.
                                                    </p>
                                                    <p>
                                                        Apple pie gummies marshmallow wafer. Cookie macaroon croissant
                                                        tart topping jelly pie sesame snaps jelly. Chocolate tootsie
                                                        roll marshmallow tootsie roll gummi bears jelly beans lollipop
                                                        macaroon gummi bears. Ice cream gingerbread tart cheesecake.
                                                        Brownie jelly beans cookie liquorice candy bear claw powder
                                                        muffin sweet roll. Carrot cake gingerbread pudding chocolate
                                                        cake
                                                        cake chocolate bar sesame snaps wafer. Pie jelly beans tart
                                                        donut chupa chups caramels sesame snaps wafer gummies. Cake
                                                        marshmallow cupcake donut. Marshmallow cookie gummies chocolate
                                                        cake dragée topping cheesecake halvah carrot cake. Cupcake
                                                        bear claw carrot cake candy canes bonbon croissant biscuit
                                                        liquorice fruitcake. Jelly liquorice gummies. Biscuit croissant
                                                        croissant liquorice. Gummi bears pie powder fruitcake caramels
                                                        brownie danish pastry pudding. Caramels sugar plum cookie
                                                        cotton candy tootsie roll jelly pudding.
                                                    </p>
                                                    <p>
                                                        Tiramisu brownie tart chupa chups icing chupa chups. Gummi bears
                                                        fruitcake carrot cake chocolate bonbon. Sesame snaps brownie
                                                        gummi bears tootsie roll caramels dragée. Powder cake gummies
                                                        jelly beans toffee carrot cake bonbon powder muffin. Marshmallow
                                                        jelly beans cake donut cotton candy chocolate bar biscuit
                                                        macaroon marzipan. Cake cupcake gummies. Gingerbread bonbon
                                                        wafer.
                                                        Pastry sweet cookie danish lollipop sweet toffee topping bear
                                                        claw. Apple pie dessert cake dessert. Tiramisu pie sugar plum
                                                        gingerbread cupcake brownie candy canes gummies jelly. Bonbon
                                                        chocolate cake lollipop lollipop jelly beans apple pie halvah
                                                        sweet roll. Macaroon jujubes powder cheesecake sesame snaps
                                                        fruitcake marzipan muffin.
                                                    </p>
                                                    <p>
                                                        Powder icing cotton candy gingerbread cake chocolate bar muffin.
                                                        Fruitcake bear claw cake chupa chups. Gingerbread dessert
                                                        chocolate cake tiramisu macaroon. Gingerbread sweet roll sesame
                                                        snaps donut danish carrot cake. Muffin chocolate bar jujubes
                                                        ice cream jujubes. Dessert tiramisu chocolate bar biscuit.
                                                        Brownie ice cream marshmallow topping. Icing liquorice oat cake
                                                        caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie
                                                        roll chocolate bar. Jujubes candy jelly-o topping lemon drops.
                                                        Cupcake gingerbread cookie cookie lemon drops tootsie roll
                                                        lollipop. Carrot cake oat cake jelly-o gummies oat cake cake
                                                        biscuit carrot cake tart.
                                                    </p>
                                                    <p>
                                                        Donut chupa chups cake. Chupa chups cake cheesecake dragée
                                                        fruitcake. Fruitcake tart donut biscuit. Soufflé brownie carrot
                                                        cake pastry powder. Powder donut dragée toffee. Chocolate cake
                                                        chocolate soufflé gummi bears jelly beans ice cream pastry.
                                                        Fruitcake brownie cupcake oat cake danish wafer candy cake.
                                                        Fruitcake chocolate chocolate cake. Marzipan wafer macaroon
                                                        cookie
                                                        candy canes fruitcake. Lemon drops sesame snaps cotton candy
                                                        marshmallow lemon drops fruitcake dragée brownie. Jelly beans
                                                        gingerbread sweet roll bonbon. Fruitcake tiramisu tart apple pie
                                                        pastry. Sweet roll candy canes pastry.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Overlay Scroll Short Modal -->
                                <div class="modal fade scroll-out" id="overlayScrollShort" tabindex="-1" role="dialog"
                                     aria-labelledby="overlayScrollShortLabel" aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-lg modal-dialog-scrollable short modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="overlayScrollShortLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="scroll-track-visible">
                                                    <p>
                                                        Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy
                                                        apple pie sugar plum icing chocolate cake lollipop jujubes bear
                                                        claw. Pastry sweet roll carrot cake cake macaroon gingerbread
                                                        cookie. Lemon drops brownie candy cookie candy pie sweet roll
                                                        biscuit marzipan. Chocolate bar candy canes macaroon liquorice
                                                        danish biscuit biscuit. Tiramisu toffee brownie sweet roll
                                                        sesame snaps halvah. Icing carrot cake cupcake gummi bears
                                                        danish. Sesame snaps muffin macaroon tiramisu ice cream jelly-o
                                                        pudding marzipan tootsie roll. Muffin candy icing tootsie roll
                                                        wafer powder danish cheesecake macaroon. Sweet marshmallow oat
                                                        cake marshmallow ice cream carrot cake. Bonbon powder carrot
                                                        cake marzipan jelly beans pie cotton candy cotton candy. Gummies
                                                        donut caramels chocolate bar. Powder soufflé brownie jelly beans
                                                        gingerbread candy.
                                                    </p>
                                                    <p>
                                                        Apple pie gummies marshmallow wafer. Cookie macaroon croissant
                                                        tart topping jelly pie sesame snaps jelly. Chocolate tootsie
                                                        roll marshmallow tootsie roll gummi bears jelly beans lollipop
                                                        macaroon gummi bears. Ice cream gingerbread tart cheesecake.
                                                        Brownie jelly beans cookie liquorice candy bear claw powder
                                                        muffin sweet roll. Carrot cake gingerbread pudding chocolate
                                                        cake
                                                        cake chocolate bar sesame snaps wafer. Pie jelly beans tart
                                                        donut chupa chups caramels sesame snaps wafer gummies. Cake
                                                        marshmallow cupcake donut. Marshmallow cookie gummies chocolate
                                                        cake dragée topping cheesecake halvah carrot cake. Cupcake
                                                        bear claw carrot cake candy canes bonbon croissant biscuit
                                                        liquorice fruitcake. Jelly liquorice gummies. Biscuit croissant
                                                        croissant liquorice. Gummi bears pie powder fruitcake caramels
                                                        brownie danish pastry pudding. Caramels sugar plum cookie
                                                        cotton candy tootsie roll jelly pudding.
                                                    </p>
                                                    <p>
                                                        Tiramisu brownie tart chupa chups icing chupa chups. Gummi bears
                                                        fruitcake carrot cake chocolate bonbon. Sesame snaps brownie
                                                        gummi bears tootsie roll caramels dragée. Powder cake gummies
                                                        jelly beans toffee carrot cake bonbon powder muffin. Marshmallow
                                                        jelly beans cake donut cotton candy chocolate bar biscuit
                                                        macaroon marzipan. Cake cupcake gummies. Gingerbread bonbon
                                                        wafer.
                                                        Pastry sweet cookie danish lollipop sweet toffee topping bear
                                                        claw. Apple pie dessert cake dessert. Tiramisu pie sugar plum
                                                        gingerbread cupcake brownie candy canes gummies jelly. Bonbon
                                                        chocolate cake lollipop lollipop jelly beans apple pie halvah
                                                        sweet roll. Macaroon jujubes powder cheesecake sesame snaps
                                                        fruitcake marzipan muffin.
                                                    </p>
                                                    <p>
                                                        Powder icing cotton candy gingerbread cake chocolate bar muffin.
                                                        Fruitcake bear claw cake chupa chups. Gingerbread dessert
                                                        chocolate cake tiramisu macaroon. Gingerbread sweet roll sesame
                                                        snaps donut danish carrot cake. Muffin chocolate bar jujubes
                                                        ice cream jujubes. Dessert tiramisu chocolate bar biscuit.
                                                        Brownie ice cream marshmallow topping. Icing liquorice oat cake
                                                        caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie
                                                        roll chocolate bar. Jujubes candy jelly-o topping lemon drops.
                                                        Cupcake gingerbread cookie cookie lemon drops tootsie roll
                                                        lollipop. Carrot cake oat cake jelly-o gummies oat cake cake
                                                        biscuit carrot cake tart.
                                                    </p>
                                                    <p>
                                                        Donut chupa chups cake. Chupa chups cake cheesecake dragée
                                                        fruitcake. Fruitcake tart donut biscuit. Soufflé brownie carrot
                                                        cake pastry powder. Powder donut dragée toffee. Chocolate cake
                                                        chocolate soufflé gummi bears jelly beans ice cream pastry.
                                                        Fruitcake brownie cupcake oat cake danish wafer candy cake.
                                                        Fruitcake chocolate chocolate cake. Marzipan wafer macaroon
                                                        cookie
                                                        candy canes fruitcake. Lemon drops sesame snaps cotton candy
                                                        marshmallow lemon drops fruitcake dragée brownie. Jelly beans
                                                        gingerbread sweet roll bonbon. Fruitcake tira
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Overlay Scroll End -->

                    <!-- Scrolling Long Content Start -->
                    <section class="scroll-section" id="scrollingLongContent">
                        <h2 class="small-title">Scrolling Long Content</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#scrollingModal">
                                    Scrolling long content
                                </button>
                                <div class="clearfix mb-1"></div>
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#scrollingModalBody">
                                    Scrolling body
                                </button>

                                <!-- Modal Scrolling long content-->
                                <div class="modal fade" id="scrollingModal" tabindex="-1" role="dialog"
                                     aria-labelledby="scrollingModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollingModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple
                                                    pie sugar plum icing chocolate cake lollipop jujubes bear
                                                    claw. Pastry sweet roll carrot cake cake macaroon gingerbread
                                                    cookie. Lemon drops brownie candy cookie candy pie sweet roll
                                                    biscuit marzipan. Chocolate bar candy canes macaroon liquorice
                                                    danish biscuit biscuit. Tiramisu toffee brownie sweet roll sesame
                                                    snaps halvah. Icing carrot cake cupcake gummi bears danish. Sesame
                                                    snaps muffin macaroon tiramisu ice cream jelly-o pudding
                                                    marzipan tootsie roll. Muffin candy icing tootsie roll wafer powder
                                                    danish cheesecake macaroon. Sweet marshmallow oat cake
                                                    marshmallow ice cream carrot cake. Bonbon powder carrot cake
                                                    marzipan jelly beans pie cotton candy cotton candy. Gummies donut
                                                    caramels chocolate bar. Powder soufflé brownie jelly beans
                                                    gingerbread candy.
                                                </p>
                                                <p>
                                                    Apple pie gummies marshmallow wafer. Cookie macaroon croissant tart
                                                    topping jelly pie sesame snaps jelly. Chocolate tootsie roll
                                                    marshmallow tootsie roll gummi bears jelly beans lollipop macaroon
                                                    gummi bears. Ice cream gingerbread tart cheesecake. Brownie
                                                    jelly beans cookie liquorice candy bear claw powder muffin sweet
                                                    roll. Carrot cake gingerbread pudding chocolate cake cake
                                                    chocolate bar sesame snaps wafer. Pie jelly beans tart donut chupa
                                                    chups caramels sesame snaps wafer gummies. Cake marshmallow
                                                    cupcake donut. Marshmallow cookie gummies chocolate cake dragée
                                                    topping cheesecake halvah carrot cake. Cupcake bear claw carrot
                                                    cake candy canes bonbon croissant biscuit liquorice fruitcake. Jelly
                                                    liquorice gummies. Biscuit croissant croissant liquorice.
                                                    Gummi bears pie powder fruitcake caramels brownie danish pastry
                                                    pudding. Caramels sugar plum cookie cotton candy tootsie roll
                                                    jelly pudding.
                                                </p>
                                                <p>
                                                    Tiramisu brownie tart chupa chups icing chupa chups. Gummi bears
                                                    fruitcake carrot cake chocolate bonbon. Sesame snaps brownie
                                                    gummi bears tootsie roll caramels dragée. Powder cake gummies jelly
                                                    beans toffee carrot cake bonbon powder muffin. Marshmallow
                                                    jelly beans cake donut cotton candy chocolate bar biscuit macaroon
                                                    marzipan. Cake cupcake gummies. Gingerbread bonbon wafer.
                                                    Pastry sweet cookie danish lollipop sweet toffee topping bear claw.
                                                    Apple pie dessert cake dessert. Tiramisu pie sugar plum
                                                    gingerbread cupcake brownie candy canes gummies jelly. Bonbon
                                                    chocolate cake lollipop lollipop jelly beans apple pie halvah
                                                    sweet roll. Macaroon jujubes powder cheesecake sesame snaps
                                                    fruitcake marzipan muffin.
                                                </p>
                                                <p>
                                                    Powder icing cotton candy gingerbread cake chocolate bar muffin.
                                                    Fruitcake bear claw cake chupa chups. Gingerbread dessert
                                                    chocolate cake tiramisu macaroon. Gingerbread sweet roll sesame
                                                    snaps donut danish carrot cake. Muffin chocolate bar jujubes ice
                                                    cream jujubes. Dessert tiramisu chocolate bar biscuit. Brownie ice
                                                    cream marshmallow topping. Icing liquorice oat cake caramels.
                                                    Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate
                                                    bar. Jujubes candy jelly-o topping lemon drops. Cupcake
                                                    gingerbread cookie cookie lemon drops tootsie roll lollipop. Carrot
                                                    cake oat cake jelly-o gummies oat cake cake biscuit carrot
                                                    cake tart.
                                                </p>
                                                <p>
                                                    Donut chupa chups cake. Chupa chups cake cheesecake dragée
                                                    fruitcake. Fruitcake tart donut biscuit. Soufflé brownie carrot cake
                                                    pastry powder. Powder donut dragée toffee. Chocolate cake chocolate
                                                    soufflé gummi bears jelly beans ice cream pastry. Fruitcake
                                                    brownie cupcake oat cake danish wafer candy cake. Fruitcake
                                                    chocolate chocolate cake. Marzipan wafer macaroon cookie candy canes
                                                    fruitcake. Lemon drops sesame snaps cotton candy marshmallow lemon
                                                    drops fruitcake dragée brownie. Jelly beans gingerbread sweet
                                                    roll bonbon. Fruitcake tira
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Scrolling body -->
                                <div class="modal fade" id="scrollingModalBody" tabindex="-1" role="dialog"
                                     aria-labelledby="scrollingModalBodyLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollingModalBodyLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple
                                                    pie sugar plum icing chocolate cake lollipop jujubes bear
                                                    claw. Pastry sweet roll carrot cake cake macaroon gingerbread
                                                    cookie. Lemon drops brownie candy cookie candy pie sweet roll
                                                    biscuit marzipan. Chocolate bar candy canes macaroon liquorice
                                                    danish biscuit biscuit. Tiramisu toffee brownie sweet roll sesame
                                                    snaps halvah. Icing carrot cake cupcake gummi bears danish. Sesame
                                                    snaps muffin macaroon tiramisu ice cream jelly-o pudding
                                                    marzipan tootsie roll. Muffin candy icing tootsie roll wafer powder
                                                    danish cheesecake macaroon. Sweet marshmallow oat cake
                                                    marshmallow ice cream carrot cake. Bonbon powder carrot cake
                                                    marzipan jelly beans pie cotton candy cotton candy. Gummies donut
                                                    caramels chocolate bar. Powder soufflé brownie jelly beans
                                                    gingerbread candy.
                                                </p>
                                                <p>
                                                    Apple pie gummies marshmallow wafer. Cookie macaroon croissant tart
                                                    topping jelly pie sesame snaps jelly. Chocolate tootsie roll
                                                    marshmallow tootsie roll gummi bears jelly beans lollipop macaroon
                                                    gummi bears. Ice cream gingerbread tart cheesecake. Brownie
                                                    jelly beans cookie liquorice candy bear claw powder muffin sweet
                                                    roll. Carrot cake gingerbread pudding chocolate cake cake
                                                    chocolate bar sesame snaps wafer. Pie jelly beans tart donut chupa
                                                    chups caramels sesame snaps wafer gummies. Cake marshmallow
                                                    cupcake donut. Marshmallow cookie gummies chocolate cake dragée
                                                    topping cheesecake halvah carrot cake. Cupcake bear claw carrot
                                                    cake candy canes bonbon croissant biscuit liquorice fruitcake. Jelly
                                                    liquorice gummies. Biscuit croissant croissant liquorice.
                                                    Gummi bears pie powder fruitcake caramels brownie danish pastry
                                                    pudding. Caramels sugar plum cookie cotton candy tootsie roll
                                                    jelly pudding.
                                                </p>
                                                <p>
                                                    Tiramisu brownie tart chupa chups icing chupa chups. Gummi bears
                                                    fruitcake carrot cake chocolate bonbon. Sesame snaps brownie
                                                    gummi bears tootsie roll caramels dragée. Powder cake gummies jelly
                                                    beans toffee carrot cake bonbon powder muffin. Marshmallow
                                                    jelly beans cake donut cotton candy chocolate bar biscuit macaroon
                                                    marzipan. Cake cupcake gummies. Gingerbread bonbon wafer.
                                                    Pastry sweet cookie danish lollipop sweet toffee topping bear claw.
                                                    Apple pie dessert cake dessert. Tiramisu pie sugar plum
                                                    gingerbread cupcake brownie candy canes gummies jelly. Bonbon
                                                    chocolate cake lollipop lollipop jelly beans apple pie halvah
                                                    sweet roll. Macaroon jujubes powder cheesecake sesame snaps
                                                    fruitcake marzipan muffin.
                                                </p>
                                                <p>
                                                    Powder icing cotton candy gingerbread cake chocolate bar muffin.
                                                    Fruitcake bear claw cake chupa chups. Gingerbread dessert
                                                    chocolate cake tiramisu macaroon. Gingerbread sweet roll sesame
                                                    snaps donut danish carrot cake. Muffin chocolate bar jujubes ice
                                                    cream jujubes. Dessert tiramisu chocolate bar biscuit. Brownie ice
                                                    cream marshmallow topping. Icing liquorice oat cake caramels.
                                                    Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate
                                                    bar. Jujubes candy jelly-o topping lemon drops. Cupcake
                                                    gingerbread cookie cookie lemon drops tootsie roll lollipop. Carrot
                                                    cake oat cake jelly-o gummies oat cake cake biscuit carrot
                                                    cake tart.
                                                </p>
                                                <p>
                                                    Donut chupa chups cake. Chupa chups cake cheesecake dragée
                                                    fruitcake. Fruitcake tart donut biscuit. Soufflé brownie carrot cake
                                                    pastry powder. Powder donut dragée toffee. Chocolate cake chocolate
                                                    soufflé gummi bears jelly beans ice cream pastry. Fruitcake
                                                    brownie cupcake oat cake danish wafer candy cake. Fruitcake
                                                    chocolate chocolate cake. Marzipan wafer macaroon cookie candy canes
                                                    fruitcake. Lemon drops sesame snaps cotton candy marshmallow lemon
                                                    drops fruitcake dragée brownie. Jelly beans gingerbread sweet
                                                    roll bonbon. Fruitcake tira
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Scrolling Long Content End -->

                    <!-- Vertically Centered Start -->
                    <section class="scroll-section" id="verticallyCentered">
                        <h2 class="small-title">Vertically Centered</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Button trigger Vertically centered modal -->
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#verticallyCenteredExample">
                                    Vertically centered modal
                                </button>
                                <div class="clearfix mb-1"></div>

                                <!-- Button trigger centered scrollable modal-->
                                <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal"
                                        data-bs-target="#verticallyCenteredScrollable">
                                    Vertically centered scrollable modal
                                </button>

                                <!-- Vertically centered modal-->
                                <div class="modal fade modal-close-out" id="verticallyCenteredExample" tabindex="-1"
                                     role="dialog" aria-labelledby="verticallyCenteredLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="verticallyCenteredLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                    porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Vertically centered scrollable modal-->
                                <div class="modal fade" id="verticallyCenteredScrollable" tabindex="-1" role="dialog"
                                     aria-labelledby="verticallyCenteredScrollableLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="verticallyCenteredScrollableLabel">Modal
                                                    title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple
                                                    pie sugar plum icing chocolate cake lollipop jujubes bear
                                                    claw. Pastry sweet roll carrot cake cake macaroon gingerbread
                                                    cookie. Lemon drops brownie candy cookie candy pie sweet roll
                                                    biscuit marzipan. Chocolate bar candy canes macaroon liquorice
                                                    danish biscuit biscuit. Tiramisu toffee brownie sweet roll sesame
                                                    snaps halvah. Icing carrot cake cupcake gummi bears danish. Sesame
                                                    snaps muffin macaroon tiramisu ice cream jelly-o pudding
                                                    marzipan tootsie roll. Muffin candy icing tootsie roll wafer powder
                                                    danish cheesecake macaroon. Sweet marshmallow oat cake
                                                    marshmallow ice cream carrot cake. Bonbon powder carrot cake
                                                    marzipan jelly beans pie cotton candy cotton candy. Gummies donut
                                                    caramels chocolate bar. Powder soufflé brownie jelly beans
                                                    gingerbread candy.
                                                </p>
                                                <p>
                                                    Apple pie gummies marshmallow wafer. Cookie macaroon croissant tart
                                                    topping jelly pie sesame snaps jelly. Chocolate tootsie roll
                                                    marshmallow tootsie roll gummi bears jelly beans lollipop macaroon
                                                    gummi bears. Ice cream gingerbread tart cheesecake. Brownie
                                                    jelly beans cookie liquorice candy bear claw powder muffin sweet
                                                    roll. Carrot cake gingerbread pudding chocolate cake cake
                                                    chocolate bar sesame snaps wafer. Pie jelly beans tart donut chupa
                                                    chups caramels sesame snaps wafer gummies. Cake marshmallow
                                                    cupcake donut. Marshmallow cookie gummies chocolate cake dragée
                                                    topping cheesecake halvah carrot cake. Cupcake bear claw carrot
                                                    cake candy canes bonbon croissant biscuit liquorice fruitcake. Jelly
                                                    liquorice gummies. Biscuit croissant croissant liquorice.
                                                    Gummi bears pie powder fruitcake caramels brownie danish pastry
                                                    pudding. Caramels sugar plum cookie cotton candy tootsie roll
                                                    jelly pudding.
                                                </p>
                                                <p>
                                                    Tiramisu brownie tart chupa chups icing chupa chups. Gummi bears
                                                    fruitcake carrot cake chocolate bonbon. Sesame snaps brownie
                                                    gummi bears tootsie roll caramels dragée. Powder cake gummies jelly
                                                    beans toffee carrot cake bonbon powder muffin. Marshmallow
                                                    jelly beans cake donut cotton candy chocolate bar biscuit macaroon
                                                    marzipan. Cake cupcake gummies. Gingerbread bonbon wafer.
                                                    Pastry sweet cookie danish lollipop sweet toffee topping bear claw.
                                                    Apple pie dessert cake dessert. Tiramisu pie sugar plum
                                                    gingerbread cupcake brownie candy canes gummies jelly. Bonbon
                                                    chocolate cake lollipop lollipop jelly beans apple pie halvah
                                                    sweet roll. Macaroon jujubes powder cheesecake sesame snaps
                                                    fruitcake marzipan muffin.
                                                </p>
                                                <p>
                                                    Powder icing cotton candy gingerbread cake chocolate bar muffin.
                                                    Fruitcake bear claw cake chupa chups. Gingerbread dessert
                                                    chocolate cake tiramisu macaroon. Gingerbread sweet roll sesame
                                                    snaps donut danish carrot cake. Muffin chocolate bar jujubes ice
                                                    cream jujubes. Dessert tiramisu chocolate bar biscuit. Brownie ice
                                                    cream marshmallow topping. Icing liquorice oat cake caramels.
                                                    Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate
                                                    bar. Jujubes candy jelly-o topping lemon drops. Cupcake
                                                    gingerbread cookie cookie lemon drops tootsie roll lollipop. Carrot
                                                    cake oat cake jelly-o gummies oat cake cake biscuit carrot
                                                    cake tart.
                                                </p>
                                                <p>
                                                    Donut chupa chups cake. Chupa chups cake cheesecake dragée
                                                    fruitcake. Fruitcake tart donut biscuit. Soufflé brownie carrot cake
                                                    pastry powder. Powder donut dragée toffee. Chocolate cake chocolate
                                                    soufflé gummi bears jelly beans ice cream pastry. Fruitcake
                                                    brownie cupcake oat cake danish wafer candy cake. Fruitcake
                                                    chocolate chocolate cake. Marzipan wafer macaroon cookie candy canes
                                                    fruitcake. Lemon drops sesame snaps cotton candy marshmallow lemon
                                                    drops fruitcake dragée brownie. Jelly beans gingerbread sweet
                                                    roll bonbon. Fruitcake tira
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Vertically Centered End -->

                    <!-- Tooltips and Popovers Start -->
                    <section class="scroll-section" id="tooltipsAndPopovers">
                        <h2 class="small-title">Tooltips and Popovers</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#tooltipAndPopoversModal">
                                    Launch tooltip and popover modal
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="tooltipAndPopoversModal" tabindex="-1" role="dialog"
                                     aria-labelledby="tooltipAndPopoversModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tooltipAndPopoversModalLabel">Modal
                                                    title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Popover in a modal</h5>
                                                <button type="button" class="btn btn-secondary popover-test"
                                                        data-bs-toggle="popover" title="Popover title"
                                                        data-bs-content="Popover body content is set in this attribute.">
                                                    Button
                                                </button>
                                                <hr/>
                                                <h5>Tooltips in a modal</h5>
                                                <p>
                                                    <a href="#" class="tooltip-test" title="Tooltip this link"
                                                       data-bs-toggle="tooltip">This link</a>
                                                    and
                                                    <a href="#" class="tooltip-test" title="Tooltip that link"
                                                       data-bs-toggle="tooltip">that link</a>
                                                    have tooltips on hover.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Tooltips and Popovers End -->

                    <!-- Using the Grid Start -->
                    <section class="scroll-section" id="usingTheGrid">
                        <h2 class="small-title">Using the Grid</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Button Trigger -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#gridModal">Launch grid modal
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="gridModal" tabindex="-1" role="dialog"
                                     aria-labelledby="gridModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="gridModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-4 border">.col-md-4</div>
                                                        <div class="col-md-4 ms-auto border">.col-md-4 .ms-auto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 ms-auto border">.col-md-3 .ms-auto</div>
                                                        <div class="col-md-2 ms-auto border">.col-md-2 .ms-auto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ms-auto border">.col-md-6 .ms-auto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-9 border">
                                                            Level 1: .col-sm-9
                                                            <div class="row">
                                                                <div class="col-8 col-sm-6 border">Level 2: .col-8
                                                                    .col-sm-6
                                                                </div>
                                                                <div class="col-4 col-sm-6 border">Level 2: .col-4
                                                                    .col-sm-6
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Using the Grid End -->
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
                        <a class="nav-link" href="#closeButtonOut">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Close Button Out</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#rightModal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Right Modal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#leftModal">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Left Modal</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#sizes">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Sizes</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#staticBackdrop">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Static Backdrop</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#overlayScroll">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Overlay Scroll</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#scrollingLongContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Scrolling Long Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#verticallyCentered">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Vertically Centered</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#tooltipsAndPopovers">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Tooltips and Popovers</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#usingTheGrid">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Using the Grid</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

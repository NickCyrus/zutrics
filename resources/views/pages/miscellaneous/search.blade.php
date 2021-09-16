@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Search';
    $description = 'Search Page';
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

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                    <!-- Add New Button Start -->
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                        <i data-cs-icon="filter"></i>
                        <span>Filter Results</span>
                    </button>
                    <!-- Add New Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            <div class="col-sm-12 col-md-5 col-lg-6 col-xxl-4 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search Table" value="sourdough breads"/>
                    <span class="search-magnifier-icon">
          <i data-cs-icon="search"></i>
        </span>
                    <span class="search-delete-icon d-none">
          <i data-cs-icon="close"></i>
        </span>
                </div>
            </div>
            <!-- Search End -->

            <div class="col-sm-12 col-md-7 col-lg-6 col-xxl-8 text-end mb-1">
                <div class="d-inline-block">
                    <!-- Print Button Start -->
                    <button
                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-delay="0"
                        title="Print"
                        type="button"
                    >
                        <i data-cs-icon="print"></i>
                    </button>
                    <!-- Print Button End -->

                    <!-- Length Start -->
                    <div class="dropdown-as-select d-inline-block ms-1" data-childSelector="span">
                        <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-bs-offset="0,3">
            <span
                class="btn btn-foreground-alternate dropdown-toggle"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                data-bs-delay="0"
                title="Item Count"
            >
              10 Items
            </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <a class="dropdown-item" href="#">5 Items</a>
                            <a class="dropdown-item active" href="#">10 Items</a>
                            <a class="dropdown-item" href="#">20 Items</a>
                        </div>
                    </div>
                    <!-- Length End -->
                </div>
            </div>
        </div>
        <!-- Controls End -->

        <!-- Results Start -->
        <div class="mb-5">
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">A Complete Guide to Mix Dough for the
                        Molds</a>
                    <div class="text-muted mb-1">Home > Pages > Miscellaneous > Search</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Lemon drops cupcake croissant liquorice donut cookie cake. Gingerbread biscuit bear claw
                        marzipan tiramisu topping.
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">Plain Baguette</a>
                    <div class="text-muted mb-1">Home > Pages > Miscellaneous > Pricing</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing macaroon bear
                        claw jelly toffee. Chocolate cake marshmallow
                        muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie macaroon sesame snaps cotton
                        candy jelly pudding lollipop caramels
                        marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread chocolate cake tootsie
                        roll. Oat cake jujubes jelly-o jelly chupa chups
                        lollipop jelly wafer soufflé.
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">Basic Introduction to Bread
                        Making</a>
                    <div class="text-muted mb-1">Home > Blocks > Stats</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Toffee icing cupcake halvah tart. Marshmallow oat cake lemon drops chocolate bonbon powder lemon
                        drops chocolate. Danish tootsie roll dessert
                        soufflé. Cupcake chocolate cake cake jelly beans lemon drops danish bear claw carrot cake
                        soufflé. Marshmallow jujubes tiramisu apple pie
                        carrot cake danish candy. Croissant croissant chocolate bar. Jelly macaroon apple pie croissant
                        marshmallow pastry cheesecake.
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">Sandwitch Bread with Sesame Seeds</a>
                    <div class="text-muted mb-1">Home > Blocks > Thumbnails</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Cupcake sweet roll donut. Sesame snaps lollipop macaroon. Icing tiramisu oat cake chocolate cake
                        marzipan pudding danish gummies. Dragée
                        liquorice jelly beans jelly jelly sesame snaps brownie. Cheesecake chocolate cake sweet roll
                        cupcake dragée croissant muffin. Lemon drops
                        cupcake croissant liquorice donut cookie cake. Gingerbread biscuit bear claw marzipan tiramisu
                        topping.
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">Pain de Campagne</a>
                    <div class="text-muted mb-1">Home > Pages > Miscellaneous > Search</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Toffee icing cupcake halvah tart. Marshmallow oat cake lemon drops chocolate bonbon powder lemon
                        drops chocolate. Danish tootsie roll dessert
                        soufflé. Cupcake chocolate cake cake jelly beans lemon drops danish bear claw carrot cake
                        soufflé. Marshmallow jujubes tiramisu apple pie
                        carrot cake danish candy. Croissant croissant chocolate bar. Jelly macaroon apple pie croissant
                        marshmallow pastry cheesecake.
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">Apple Cake Recipe for Starters</a>
                    <div class="text-muted mb-1">Home > Blocks > Details</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Carrot cake gummi bears wafer sesame snaps soufflé cheesecake cheesecake cake. Sweet roll apple
                        pie tiramisu bonbon sugar plum muffin sesame
                        snaps chocolate. Lollipop sweet roll gingerbread halvah sesame snaps powder. Wafer halvah
                        chocolate soufflé icing. Cotton candy danish
                        lollipop jelly-o candy caramels.
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">Basic Introduction to Bread
                        Making</a>
                    <div class="text-muted mb-1">Home > Pages > Ecommerce > ProductFilters</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Toffee icing cupcake halvah tart. Marshmallow oat cake lemon drops chocolate bonbon powder lemon
                        drops chocolate. Danish tootsie roll dessert
                        soufflé. Cupcake chocolate cake cake jelly beans lemon drops danish bear claw carrot cake
                        soufflé. Marshmallow jujubes tiramisu apple pie
                        carrot cake danish candy. Croissant croissant chocolate bar. Jelly macaroon apple pie croissant
                        marshmallow pastry cheesecake.
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">Pain de Campagne</a>
                    <div class="text-muted mb-1">Home > Interface > Forms > Controls > Autocomplete</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Liquorice gummi bears cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream
                        gummies dessert muffin chocolate jelly. Danish
                        brownie chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop cheesecake
                        gummi bears cheesecake. Cake jujubes soufflé.
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">Steirer Brot</a>
                    <div class="text-muted mb-1">Home > Pages > Miscellaneous > Faq</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Toffee icing cupcake halvah tart. Marshmallow oat cake lemon drops chocolate bonbon powder lemon
                        drops chocolate. Danish tootsie roll dessert
                        soufflé. Cupcake chocolate cake cake jelly beans lemon drops danish bear claw carrot cake
                        soufflé. Marshmallow jujubes tiramisu apple pie
                        carrot cake danish candy. Croissant croissant chocolate bar. Jelly macaroon apple pie croissant
                        marshmallow pastry cheesecake.
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body h-100">
                    <a href="#" class="mb-2 heading stretched-link d-inline-block">Guernsey Gache</a>
                    <div class="text-muted mb-1">Home > Pages > Blog > Detail</div>
                    <div class="text-alternate clamp-line" data-line="2">
                        Powder halvah dessert ice cream. Carrot cake gingerbread chocolate cake tootsie roll. Oat cake
                        jujubes jelly-o jelly chupa chups lollipop
                        jelly wafer soufflé.
                    </div>
                </div>
            </div>
        </div>
        <!-- Results End -->

        <!-- Pagination Start -->
        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link shadow" href="#" tabindex="-1" aria-disabled="true">
                            <i data-cs-icon="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link shadow" href="#">1</a></li>
                    <li class="page-item"><a class="page-link shadow" href="#">2</a></li>
                    <li class="page-item"><a class="page-link shadow" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link shadow" href="#">
                            <i data-cs-icon="chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Pagination End -->
    </div>
@endsection

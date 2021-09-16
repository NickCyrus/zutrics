@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Steps';
    $description = 'Interface elements for timelines and steps.';
    $breadcrumbs = ["/"=>"Home","/Blocks"=>"Blocks"]
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

                    <!-- Dots Start -->
                    <section class="scroll-section" id="dots">
                        <h2 class="small-title">Dots</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-5">
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-2 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex h-100"></div>
                                        <div
                                            class="bg-foreground sw-2 sh-2 rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2">
                                            <div
                                                class="bg-gradient-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                        </div>
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body row g-0">
                                                <div class="col-auto">
                                                    <div class="d-inline-block d-flex">
                                                        <div class="bg-gradient-primary sw-5 sh-5 rounded-xl">
                                                            <div
                                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                                <i data-cs-icon="cupcake"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a href="#" class="heading stretched-link">Sesame Snaps
                                                                    Cheesecake</a>
                                                            </div>
                                                            <div class="text-alternate">12.12.2020</div>
                                                            <div class="text-muted mt-1">Tart chocolate gummi bears
                                                                liquorice fruitcake halvah sweet roll marzipan.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-2 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                        <div
                                            class="bg-foreground sw-2 sh-2 rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2 position-relative">
                                            <div
                                                class="bg-gradient-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                        </div>
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body row g-0">
                                                <div class="col-auto">
                                                    <div class="d-inline-block d-flex">
                                                        <div class="bg-gradient-primary sw-5 sh-5 rounded-xl">
                                                            <div
                                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                                <i data-cs-icon="loaf"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a href="#" class="heading stretched-link">Jelly Candy
                                                                    Canes</a>
                                                            </div>
                                                            <div class="text-alternate">14.12.2020</div>
                                                            <div class="text-muted mt-1">
                                                                Cheesecake chocolate carrot cake pie lollipop lemon
                                                                drops toffee lollipop. Lemon drops brownie topping bear
                                                                claw chocolate
                                                                bar tootsie roll cake macaroon icing. Oat cake
                                                                gingerbread cake. Tart powder sweet roll toffee
                                                                chocolate bar.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-2 d-flex flex-column justify-content-center align-items-center me-4">
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                        <div
                                            class="bg-foreground sw-2 sh-2 rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2 position-relative">
                                            <div
                                                class="bg-gradient-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                        </div>
                                        <div class="w-100 d-flex h-100"></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body row g-0">
                                                <div class="col-auto">
                                                    <div class="d-inline-block d-flex">
                                                        <div class="bg-gradient-primary sw-5 sh-5 rounded-xl">
                                                            <div
                                                                class="text-white d-flex justify-content-center align-items-center h-100">
                                                                <i data-cs-icon="pepper"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a href="#" class="heading stretched-link">Apple Pie</a>
                                                            </div>
                                                            <div class="text-alternate">16.12.2020</div>
                                                            <div class="text-muted mt-1">Cheesecake chocolate carrot
                                                                cake pie lollipop lemon drops toffee lollipop.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-5">
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-2 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex sh-6"></div>
                                        <div
                                            class="bg-foreground sw-2 sh-2 rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                            <div
                                                class="bg-gradient-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                        </div>
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body row g-0">
                                                <div class="col-auto">
                                                    <div class="d-inline-block d-flex">
                                                        <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                                            <div
                                                                class="text-white d-flex justify-content-center align-items-center h-100 text-small text-center lh-1">
                                                                14
                                                                <br/>
                                                                SEP
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a href="#" class="heading stretched-link">Pastry Powder
                                                                    Brownie</a>
                                                            </div>
                                                            <div class="text-alternate">22.11.2020</div>
                                                            <div class="text-muted mt-1">Cheesecake chocolate carrot
                                                                cake pie lollipop lemon drops toffee lollipop.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-2 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex sh-6 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                        <div
                                            class="bg-foreground sw-2 sh-2 rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center position-relative">
                                            <div
                                                class="bg-gradient-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                        </div>
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body row g-0">
                                                <div class="col-auto">
                                                    <div class="d-inline-block d-flex">
                                                        <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                                            <div
                                                                class="text-white d-flex justify-content-center align-items-center h-100 text-small text-center lh-1">
                                                                15
                                                                <br/>
                                                                SEP
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a href="#" class="heading stretched-link">Cupcake
                                                                    Marzipan Liquorice</a>
                                                            </div>
                                                            <div class="text-alternate">25.11.2020</div>
                                                            <div class="text-muted mt-1">
                                                                Tart chocolate gummi bears liquorice fruitcake halvah
                                                                sweet roll marzipan. Lemon drops brownie topping bear
                                                                claw chocolate
                                                                bar tootsie roll cake macaroon icing. Oat cake
                                                                gingerbread cake. Tart powder sweet roll toffee
                                                                chocolate bar.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-2 d-flex flex-column justify-content-center align-items-center me-4">
                                        <div class="w-100 d-flex sh-6 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                        <div
                                            class="bg-foreground sw-2 sh-2 rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center position-relative">
                                            <div
                                                class="bg-gradient-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                        </div>
                                        <div class="w-100 d-flex h-100"></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body row g-0">
                                                <div class="col-auto">
                                                    <div class="d-inline-block d-flex">
                                                        <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                                            <div
                                                                class="text-white d-flex justify-content-center align-items-center h-100 text-small text-center lh-1">
                                                                16
                                                                <br/>
                                                                SEP
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a href="#" class="heading stretched-link">Gingerbread
                                                                    Jelly Beans</a>
                                                            </div>
                                                            <div class="text-alternate">29.11.2020</div>
                                                            <div class="text-muted mt-1">Cheesecake chocolate carrot
                                                                cake pie lollipop lemon drops toffee lollipop.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Dots End -->

                    <!-- Icon & Text Start -->
                    <section class="scroll-section" id="iconAndText">
                        <h2 class="small-title">Icon & Text</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-5">
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex h-100"></div>
                                        <div
                                            class="bg-foreground sw-7 sh-7 rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2">
                                            <div class="bg-gradient-primary sw-5 sh-5 rounded-xl">
                                                <div
                                                    class="text-white d-flex justify-content-center align-items-center h-100">
                                                    <i data-cs-icon="cupcake"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body d-flex flex-column justify-content-start">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="heading stretched-link">Bonbon Topping Donut
                                                        Marshmallow</a>
                                                    <div class="text-alternate">08.11.2020</div>
                                                    <div class="text-muted mt-1">Cheesecake chocolate carrot cake pie
                                                        lollipop lemon drops toffee lollipop.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                        <div
                                            class="bg-foreground sw-7 sh-7 rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2 position-relative">
                                            <div class="bg-gradient-primary sw-5 sh-5 rounded-xl">
                                                <div
                                                    class="text-white d-flex justify-content-center align-items-center h-100">
                                                    <i data-cs-icon="pepper"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body d-flex flex-column justify-content-start">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="heading stretched-link">Lollipop Canes Cookie</a>
                                                    <div class="text-alternate">30.11.2020</div>
                                                    <div class="text-muted mt-1">
                                                        Tart chocolate gummi bears liquorice fruitcake halvah sweet roll
                                                        marzipan. Lemon drops brownie topping bear claw chocolate bar
                                                        tootsie roll cake macaroon icing. Oat cake gingerbread cake.
                                                        Tart powder sweet roll toffee chocolate bar.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                        <div
                                            class="bg-foreground sw-7 sh-7 rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2 position-relative">
                                            <div class="bg-gradient-primary sw-5 sh-5 rounded-xl">
                                                <div
                                                    class="text-white d-flex justify-content-center align-items-center h-100">
                                                    <i data-cs-icon="loaf"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 d-flex h-100"></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body d-flex flex-column justify-content-start">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="heading stretched-link">Roll Cake Macaroon
                                                        Icing</a>
                                                    <div class="text-alternate">14.11.2020</div>
                                                    <div class="text-muted mt-1">Cheesecake chocolate carrot cake pie
                                                        lollipop lemon drops toffee lollipop.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-5">
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex h-0"></div>
                                        <div
                                            class="bg-foreground sw-7 sh-7 rounded-lg shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                            <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                                <div
                                                    class="text-white d-flex justify-content-center align-items-center h-100 text-small text-center lh-1">
                                                    01
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body d-flex flex-column justify-content-start">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="heading stretched-link">Tart Danish Candy Apple
                                                        Pie</a>
                                                    <div class="text-alternate">12.11.2020</div>
                                                    <div class="text-muted mt-1">Cheesecake chocolate carrot cake pie
                                                        lollipop lemon drops toffee lollipop.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex h-0 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                        <div
                                            class="bg-foreground sw-7 sh-7 rounded-lg shadow d-flex flex-shrink-0 justify-content-center align-items-center position-relative">
                                            <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                                <div
                                                    class="text-white d-flex justify-content-center align-items-center h-100 text-small text-center lh-1">
                                                    02
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body d-flex flex-column justify-content-start">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="heading stretched-link">Lemon Drops Chocolate</a>
                                                    <div class="text-alternate">19.11.2020</div>
                                                    <div class="text-muted mt-1">Cheesecake chocolate carrot cake pie
                                                        lollipop lemon drops toffee lollipop.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div
                                        class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                        <div class="w-100 d-flex h-0 justify-content-center position-relative">
                                            <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                        </div>
                                        <div
                                            class="bg-foreground sw-7 sh-7 rounded-lg shadow d-flex flex-shrink-0 justify-content-center align-items-center position-relative">
                                            <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                                <div
                                                    class="text-white d-flex justify-content-center align-items-center h-100 text-small text-center lh-1">
                                                    03
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 d-flex h-100"></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="card h-100">
                                            <div class="card-body d-flex flex-column justify-content-start">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="heading stretched-link">Chocolate Apple Pie
                                                        Powder</a>
                                                    <div class="text-alternate">14.11.2020</div>
                                                    <div class="text-muted mt-1">
                                                        Tart chocolate gummi bears liquorice fruitcake halvah sweet roll
                                                        marzipan. Lemon drops brownie topping bear claw chocolate bar
                                                        tootsie roll cake macaroon icing. Oat cake gingerbread cake.
                                                        Tart powder sweet roll toffee chocolate bar.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Icon & Text End -->

                    <!-- Boxed Start -->
                    <section class="scroll-section" id="boxed">
                        <h2 class="small-title">Boxed</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div
                                                class="col-auto sw-5 d-flex flex-column justify-content-center align-items-center position-relative">
                                                <div class="w-100 d-flex h-0"></div>
                                                <div
                                                    class="sw-5 sh-5 rounded-xl d-flex flex-shrink-0 justify-content-center align-items-center">
                                                    <div class="bg-gradient-primary sw-5 sh-5 rounded-xl">
                                                        <div
                                                            class="text-white d-flex justify-content-center align-items-center h-100">
                                                            <i data-cs-icon="cupcake"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-100 d-flex h-100 justify-content-center position-relative">
                                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                </div>
                                            </div>
                                            <div class="col mb-4 ps-4">
                                                <div class="h-100">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <a href="#" class="heading stretched-link pt-1">Powder
                                                                Sesame Snaps Cupcake</a>
                                                            <div class="text-alternate">06.11.2020</div>
                                                            <div class="text-muted mt-1">
                                                                Jujubes tootsie roll liquorice cake jelly beans pudding
                                                                gummi bears chocolate cake donut. Jelly-o sugar plum
                                                                fruitcake
                                                                bonbon bear claw cake cookie chocolate bar. Tiramisu
                                                                soufflé apple pie.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div
                                                class="col-auto sw-5 d-flex flex-column justify-content-center align-items-center position-relative">
                                                <div class="w-100 d-flex h-0"></div>
                                                <div
                                                    class="sw-5 sh-5 rounded-xl d-flex flex-shrink-0 justify-content-center align-items-center">
                                                    <div class="bg-gradient-primary sw-5 sh-5 rounded-xl">
                                                        <div
                                                            class="text-white d-flex justify-content-center align-items-center h-100">
                                                            <i data-cs-icon="pepper"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-100 d-flex h-100 justify-content-center position-relative">
                                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                </div>
                                            </div>
                                            <div class="col mb-4 ps-4">
                                                <div class="h-100">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <a href="#" class="heading stretched-link pt-1">Jujubes
                                                                Wafer Topping Biscuit</a>
                                                            <div class="text-alternate">25.11.2020</div>
                                                            <div class="text-muted mt-1">
                                                                Jelly-o wafer sesame snaps candy canes. Danish dragée
                                                                toffee bonbon. Jelly-o marshmallow cake oat cake
                                                                caramels jujubes.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div
                                                class="col-auto sw-5 d-flex flex-column justify-content-center align-items-center position-relative">
                                                <div class="w-100 d-flex h-0"></div>
                                                <div
                                                    class="sw-5 sh-5 rounded-xl d-flex flex-shrink-0 justify-content-center align-items-center">
                                                    <div class="bg-gradient-primary sw-5 sh-5 rounded-xl">
                                                        <div
                                                            class="text-white d-flex justify-content-center align-items-center h-100">
                                                            <i data-cs-icon="loaf"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                                            </div>
                                            <div class="col ps-4">
                                                <div class="h-100">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <a href="#" class="heading stretched-link pt-1">Jelly Beans
                                                                Lemon Danish</a>
                                                            <div class="text-alternate">29.11.2020</div>
                                                            <div class="text-muted mt-1">
                                                                Cake fruitcake oat cake. Muffin jelly bonbon croissant.
                                                                Bonbon topping donut marshmallow carrot cake muffin.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div
                                                class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                                <div class="w-100 d-flex sh-1"></div>
                                                <div
                                                    class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                                    <div
                                                        class="bg-gradient-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                                </div>
                                                <div
                                                    class="w-100 d-flex h-100 justify-content-center position-relative">
                                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                </div>
                                            </div>
                                            <div class="col mb-4">
                                                <div class="h-100">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <a href="#" class="heading stretched-link">Candy Cake Gummi
                                                                Bears</a>
                                                            <div class="text-alternate">21.11.2020</div>
                                                            <div class="text-muted mt-1">
                                                                Jujubes tootsie roll liquorice cake jelly beans pudding
                                                                gummi bears chocolate cake donut. Jelly-o sugar plum
                                                                fruitcake
                                                                bonbon bear claw cake cookie chocolate bar. Tiramisu
                                                                soufflé apple pie.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div
                                                class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                </div>
                                                <div
                                                    class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                                    <div
                                                        class="bg-gradient-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                                </div>
                                                <div
                                                    class="w-100 d-flex h-100 justify-content-center position-relative">
                                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                </div>
                                            </div>
                                            <div class="col mb-4">
                                                <div class="h-100">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <a href="#" class="heading stretched-link">Donut Biscuit
                                                                Chocolate Cake</a>
                                                            <div class="text-alternate">03.12.2020</div>
                                                            <div class="text-muted mt-1">
                                                                Jelly-o wafer sesame snaps candy canes. Danish dragée
                                                                toffee bonbon. Jelly-o marshmallow cake oat cake
                                                                caramels jujubes.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div
                                                class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                </div>
                                                <div
                                                    class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                                    <div
                                                        class="bg-gradient-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                                </div>
                                                <div
                                                    class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                                            </div>
                                            <div class="col">
                                                <div class="h-100">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <div class="d-flex flex-column">
                                                            <a href="#" class="heading stretched-link pt-0">Danish
                                                                Tootsie Roll Dessert</a>
                                                            <div class="text-alternate">09.12.2020</div>
                                                            <div class="text-muted mt-1">
                                                                Chocolate apple pie powder tart chupa chups bonbon.
                                                                Donut biscuit chocolate cake pie topping.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Boxed End -->

                    <!-- Two Rows Start -->
                    <section class="scroll-section" id="twoRows">
                        <h2 class="small-title">Two Rows</h2>
                        <div class="row g-0">
                            <div
                                class="col mb-2 justify-content-end align-items-center text-semi-large text-muted d-none d-md-flex">
                                19.11.2020
                            </div>
                            <div
                                class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4 ms-0 ms-md-4">
                                <div class="w-100 d-flex h-100"></div>
                                <div
                                    class="bg-foreground sw-7 sh-7 rounded-lg shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2 position-relative">
                                    <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                        <div class="text-white d-flex justify-content-center align-items-center h-100">
                                            01
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-2">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link">Wafer Topping Bonbon Cotton
                                                Candy</a>
                                            <div class="text-alternate d-md-none mb-2">19.11.2020</div>
                                            <div class="text-muted">
                                                Wafer topping bonbon cotton candy sesame snaps. Jelly beans gummi bears
                                                cheesecake. Jelly-o wafer sesame snaps candy canes. Danish
                                                dragée toffee bonbon. Jelly-o marshmallow cake oat cake caramels
                                                jujubes. Jujubes tiramisu ice cream.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div
                                class="col mb-2 justify-content-start align-items-center text-semi-large text-muted d-none d-md-flex order-md-3">
                                20.11.2020
                            </div>
                            <div
                                class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4 ms-0 ms-md-4 order-md-2">
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div
                                    class="bg-foreground sw-7 sh-7 rounded-lg shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2 position-relative">
                                    <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                        <div class="text-white d-flex justify-content-center align-items-center h-100">
                                            02
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-2 order-md-1">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column text-md-end">
                                            <a href="#" class="heading stretched-link">Tart Powder Sweet Roll Toffee</a>
                                            <div class="text-alternate d-md-none mb-2">20.11.2020</div>
                                            <div class="text-muted">Cheesecake chocolate carrot cake pie lollipop lemon
                                                drops toffee lollipop.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div
                                class="col mb-2 justify-content-end align-items-center text-semi-large text-muted d-none d-md-flex">
                                24.11.2020
                            </div>
                            <div
                                class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4 ms-0 ms-md-4">
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div
                                    class="bg-foreground sw-7 sh-7 rounded-lg shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2 position-relative">
                                    <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                        <div class="text-white d-flex justify-content-center align-items-center h-100">
                                            03
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-2">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link">Powder Sesame Snaps Cupcake
                                                Powder</a>
                                            <div class="text-alternate d-md-none mb-2">24.11.2020</div>
                                            <div class="text-muted">
                                                Wafer topping bonbon cotton candy sesame snaps. Jelly beans gummi bears
                                                cheesecake. Jelly-o wafer sesame snaps candy canes. Danish
                                                dragée toffee bonbon. Jelly-o marshmallow cake oat cake caramels
                                                jujubes. Jujubes tiramisu ice cream.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div
                                class="col mb-2 justify-content-start align-items-center text-semi-large text-muted d-none d-md-flex order-md-3">
                                25.11.2020
                            </div>
                            <div
                                class="col-auto sw-7 d-flex flex-column justify-content-center align-items-center position-relative me-4 ms-0 ms-md-4 order-md-2">
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div
                                    class="bg-foreground sw-7 sh-7 rounded-lg shadow d-flex flex-shrink-0 justify-content-center align-items-center mt-n2 position-relative">
                                    <div class="bg-gradient-primary sw-5 sh-5 rounded-md">
                                        <div class="text-white d-flex justify-content-center align-items-center h-100">
                                            04
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                            </div>
                            <div class="col mb-2 order-md-1">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column text-md-end">
                                            <a href="#" class="heading stretched-link">Dough for the Molds</a>
                                            <div class="text-alternate d-md-none mb-2">25.11.2020</div>
                                            <div class="text-muted">
                                                Lemon drops brownie topping bear claw chocolate bar tootsie roll cake
                                                macaroon icing. Oat cake gingerbread cake. Tart powder sweet
                                                roll toffee chocolate bar. Bonbon sugar plum wafer.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Two Rows End -->
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
                        <a class="nav-link" href="#dots">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Dots</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#iconAndText">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Icon & Text</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#boxed">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Boxed</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#twoRows">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Two Rows</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'List';
    $description = 'Lists with and without scrollbars that contains icons, images and texts without breakpoint specific classes.';
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
    <script src="{{ asset('/js/vendor/progressbar.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/blocks.list.js') }}"></script>
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

                    <div class="row">
                        <!-- Basic Items Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="basicItems">
                                <div class="d-flex justify-content-between">
                                    <h2 class="small-title">Basic Items</h2>
                                    <button
                                        class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-haspopup="true">
                                        <i data-cs-icon="more-horizontal" data-cs-size="15"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                                        <a class="dropdown-item" href="#">Reload</a>
                                        <a class="dropdown-item" href="#">Stats</a>
                                        <a class="dropdown-item" href="#">Details</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="4">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Barmbrack</div>
                                                            <div class="text-small text-muted text-truncate">Icing
                                                                liquorice oat roll chocolate cake bar marzipan marzipan
                                                                carrot.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11 h-100"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Boule</div>
                                                            <div class="text-small text-muted text-truncate">
                                                                Tootsie candy jelly roll chocolate bar cheesecake bonbon
                                                                jelly beans sugar plum gingerbread cake wafer gummi.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Crisp Bread</div>
                                                            <div class="text-small text-muted text-truncate">
                                                                Jujubes cream toffee candy jelly chups jujubes muffin
                                                                chupa chups carrot cake chupa.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Melonpan</div>
                                                            <div class="text-small text-muted text-truncate">Cookie
                                                                cream toffee cream chocolate.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Rieska</div>
                                                            <div class="text-small text-muted text-truncate">Liquorice
                                                                bar chocolate bar pastry oat cake cream.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Basic Items End -->

                        <!-- Additional Info Start -->
                        <div class="col-xl-6 mb-5 h-100-card">
                            <section class="scroll-section" id="additionalInfo">
                                <div class="d-flex justify-content-between">
                                    <h2 class="small-title">Additional Info</h2>
                                    <div class="dropdown-as-select">
                                        <button class="btn btn-sm pe-0 btn-link align-top mt-n1" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                            Week
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                                            <div class="nav flex-column" role="tablist">
                                                <a class="active" data-bs-toggle="tab" href="#additionalInfoWeek"
                                                   aria-selected="true" role="tab">Week</a>
                                                <a class="" data-bs-toggle="tab" href="#additionalInfoMonth"
                                                   aria-selected="false" role="tab">Month</a>
                                                <a class="" data-bs-toggle="tab" href="#additionalInfoYear"
                                                   aria-selected="false" role="tab">Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="additionalInfoWeek">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Peg Bread</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">1.244</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">511</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Rieska</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">1.710</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">349</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Samoon</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">1.083</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">225</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Tunnbröd</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">937</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">124</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="additionalInfoMonth">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Samoon</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">2.083</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">425</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Tunnbröd</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">4.937</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">524</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Peg Bread</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">5.244</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">1.207</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Rieska</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">6.710</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">849</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="additionalInfoYear">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Tunnbröd</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">9.307</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">1.024</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Samoon</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">10.353</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">2.087</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Peg Bread</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">15.422</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">6390</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <div class="mb-1">Rieska</div>
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <div class="text-muted text-small">STOCK</div>
                                                                <div class="text-alternate">19.310</div>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <div class="text-muted text-small">SALES</div>
                                                                <div class="text-alternate">2.245</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Additional Info End -->

                        <!-- Horizontal Thumbs Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="horizontalThumbs">
                                <h2 class="small-title">Horizontal Thumbs</h2>
                                <div class="card">
                                    <div class="card-body mb-n2 scroll-out">
                                        <div class="scroll-by-count" data-count="5" data-childSelector="a"
                                             data-subtractMargin="false">
                                            <a href="#" class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-9" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Kommissbrot</div>
                                                            <div class="text-small text-muted text-truncate">Macaroon
                                                                biscuit sesame plum gummi bears jujubes.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-9" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Panettone</div>
                                                            <div class="text-small text-muted text-truncate">Carrot cake
                                                                pie chocolate gummi bears jujubes.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-9" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Yeast Karavai</div>
                                                            <div class="text-small text-muted text-truncate">Cookie
                                                                jelly beans gummi bears jujubes.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-9" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Rúgbrauð</div>
                                                            <div class="text-small text-muted text-truncate">Dragée
                                                                jelly tootsie bears jujubes bar candy canes powder
                                                                sugar.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-9" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Brioche</div>
                                                            <div class="text-small text-muted text-truncate">Chocolate
                                                                bar ice cream jujubes brownie oat cake soufflé candy.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-9" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Lye Roll</div>
                                                            <div class="text-small text-muted text-truncate">
                                                                Chupa chups candy bears jujubes liquorice candy canes
                                                                tiramisu jelly-o.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-6 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-9" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Bauernbrot</div>
                                                            <div class="text-small text-muted text-truncate">Chocolate
                                                                cake bears jujubes tootsie roll gingerbread cheesecake.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Horizontal Thumbs End -->

                        <!-- Square Thumbs Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="squareThumbs">
                                <h2 class="small-title">Square Thumbs</h2>
                                <div class="card h-100-card">
                                    <div class="card-body mb-n2">
                                        <a href="#" class="row g-0 sh-6 mb-2">
                                            <div class="col-auto h-100">
                                                <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                                     class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div>Soda Bread</div>
                                                        <div class="text-small text-muted text-truncate">
                                                            Chocolate bar marzipan marzipan carrot cake gingerbread
                                                            pastry ice cream. Ice cream danish sugar plum biscuit
                                                            pudding powder
                                                            soufflé donut macaroon.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                     class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div>Barmbrack</div>
                                                        <div class="text-small text-muted text-truncate">Bear claw sweet
                                                            liquorice jujubes. Muffin gingerbread bear claw.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                                     class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div>Toast Bread</div>
                                                        <div class="text-small text-muted text-truncate">
                                                            Cake lemon drops sesame snaps caramels bonbon sugar plum
                                                            cheesecake macaroon.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                     class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div>Baguette</div>
                                                        <div class="text-small text-muted text-truncate">Chupa chups
                                                            candy canes.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/product/small/baguette.jpg') }}"
                                                     class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div>Bazlama</div>
                                                        <div class="text-small text-muted text-truncate">Cookie tootsie
                                                            roll candy canes jelly.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Square Thumbs End -->

                        <!-- Vertical Thumbs Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="verticalThumbs">
                                <h2 class="small-title">Vertical Thumbs</h2>
                                <div class="card">
                                    <div class="card-body mb-n2 scroll-out">
                                        <div class="scroll-by-count" data-count="4" data-childSelector="a"
                                             data-subtractMargin="false">
                                            <a href="#" class="row g-0 sh-9 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Cheesymite Scroll</div>
                                                            <div class="text-small text-muted">Candy canes candy canes
                                                                oat cake gummi bears.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-9 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Guernsey Gâche</div>
                                                            <div class="text-small text-muted">Apple pie gummies dragée
                                                                jelly muffin lemon drops cupcake powder chupa chups.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-9 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Brioche</div>
                                                            <div class="text-small text-muted">
                                                                Carrot cake lollipop croissant ice cream sweet roll
                                                                jelly-o. Macaroon jelly marzipan. Cheesecake powder
                                                                cheesecake halvah.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-9 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Panettone</div>
                                                            <div class="text-small text-muted">Jelly beans halvah wafer
                                                                cake.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-9 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Saffron Bun</div>
                                                            <div class="text-small text-muted">Tiramisu cake jelly beans
                                                                candy gummies pie tart fruitcake tart candy.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-9 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/toast-bread.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Rúgbrauð</div>
                                                            <div class="text-small text-muted">Caramels cake gingerbread
                                                                jelly beans brownie.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="row g-0 sh-9 mb-2">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}"
                                                         class="card-img rounded-md h-100 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div>Guernsey Gâche</div>
                                                            <div class="text-small text-muted">Sugar plum gummi bears
                                                                jujubes.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Vertical Thumbs End -->

                        <!-- Links Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="links">
                                <h2 class="small-title">Links</h2>
                                <div class="card h-100-card">
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-12 col-sm-4">
                                                <a href="#" class="d-block mb-2">Anpan</a>
                                                <a href="#" class="d-block mb-2">Arboud</a>
                                                <a href="#" class="d-block mb-2">Arepa</a>
                                                <a href="#" class="d-block mb-2">Baba</a>
                                                <a href="#" class="d-block mb-2">Bagel</a>
                                                <a href="#" class="d-block mb-2">Baguette</a>
                                                <a href="#" class="d-block mb-2">Bammy</a>
                                                <a href="#" class="d-block mb-2">Bannock</a>
                                                <a href="#" class="d-block mb-2">Barbari bread</a>
                                                <a href="#" class="d-block mb-2">Barm cake</a>
                                                <a href="#" class="d-block mb-2">Bazlama</a>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <a href="#" class="d-block mb-2">Bazlama</a>
                                                <a href="#" class="d-block mb-2">Bialy</a>
                                                <a href="#" class="d-block mb-2">Biscotti</a>
                                                <a href="#" class="d-block mb-2">Blaa</a>
                                                <a href="#" class="d-block mb-2">Borlengo</a>
                                                <a href="#" class="d-block mb-2">Carrot bread</a>
                                                <a href="#" class="d-block mb-2">Chapati</a>
                                                <a href="#" class="d-block mb-2">Cholermüs</a>
                                                <a href="#" class="d-block mb-2">Eggette</a>
                                                <a href="#" class="d-block mb-2">Fougasse</a>
                                                <a href="#" class="d-block mb-2">Kalach</a>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <a href="#" class="d-block mb-2">Kulcha</a>
                                                <a href="#" class="d-block mb-2">Lángos</a>
                                                <a href="#" class="d-block mb-2">Matzo</a>
                                                <a href="#" class="d-block mb-2">Mohnflesserl</a>
                                                <a href="#" class="d-block mb-2">Pan Dulce</a>
                                                <a href="#" class="d-block mb-2">Pane Ticinese</a>
                                                <a href="#" class="d-block mb-2">Pita</a>
                                                <a href="#" class="d-block mb-2">Pistolet</a>
                                                <a href="#" class="d-block mb-2">Rieska</a>
                                                <a href="#" class="d-block mb-2">Taftan</a>
                                                <a href="#" class="d-block mb-2">Zopf</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Links End -->

                        <!-- Users Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="users">
                                <h2 class="small-title">Users</h2>
                                <div class="card">
                                    <div class="card-body mb-n2">
                                        <div class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Blaine Cottrell</div>
                                                        <div class="text-small text-muted">Project Manager</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm ms-1">Follow
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Cherish Kerr</div>
                                                        <div class="text-small text-muted">Development Lead</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm ms-1">Follow
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Kirby Peters</div>
                                                        <div class="text-small text-muted">Accounting</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm ms-1">Follow
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/profile/profile-4.jpg') }}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Olli Hawkins</div>
                                                        <div class="text-small text-muted">Client Relations Lead</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm ms-1">Follow
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-6 mb-2">
                                            <div class="col-auto">
                                                <img src="{{ asset('/img/profile/profile-5.jpg') }}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Zayn Hartley</div>
                                                        <div class="text-small text-muted">Customer Engagement Lead
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm ms-1">Follow
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Users End -->

                        <!-- User Buttons -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="userButtons">
                                <h2 class="small-title">User Buttons</h2>
                                <div class="card h-100-card">
                                    <div class="card-body mb-n2 border-last-none h-100">
                                        <div class="border-bottom border-separator-light mb-2 pb-2">
                                            <div class="row g-0 sh-6">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div>Joisse Kaycee</div>
                                                            <div class="text-small text-muted">UX Designer</div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button class="btn btn-outline-secondary btn-sm ms-1"
                                                                    type="button">Edit
                                                            </button>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                                type="button">
                                                                <i data-cs-icon="more-vertical"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-bottom border-separator-light mb-2 pb-2">
                                            <div class="row g-0 sh-6">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-7.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div>Zayn Hartley</div>
                                                            <div class="text-small text-muted">Frontend Developer</div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button class="btn btn-outline-secondary btn-sm ms-1"
                                                                    type="button">Edit
                                                            </button>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                                type="button">
                                                                <i data-cs-icon="more-vertical"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-bottom border-separator-light mb-2 pb-2">
                                            <div class="row g-0 sh-6">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-8.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div>Esperanza Lodge</div>
                                                            <div class="text-small text-muted">Project Manager</div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button class="btn btn-outline-secondary btn-sm ms-1"
                                                                    type="button">Edit
                                                            </button>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                                type="button">
                                                                <i data-cs-icon="more-vertical"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2 pb-2 border-bottom border-separator-light">
                                            <div class="row g-0 sh-6">
                                                <div class="col-auto">
                                                    <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                                         class="card-img rounded-xl sh-6 sw-6" alt="thumb"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div>Kathryn Mengel</div>
                                                            <div class="text-small text-muted">Executive Team Leader
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button class="btn btn-outline-secondary btn-sm ms-1"
                                                                    type="button">Edit
                                                            </button>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1"
                                                                type="button">
                                                                <i data-cs-icon="more-vertical"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- User Buttons End -->

                        <!-- Activity Logs Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="activityLogs">
                                <h2 class="small-title">Activity Logs</h2>
                                <div class="card">
                                    <div class="card-body mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="circle" class="text-primary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">New user
                                                            registiration
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                    <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="circle" class="text-primary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">3 new product added
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                    <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="square" class="text-secondary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">
                                                            Product out of stock:
                                                            <a href="#"
                                                               class="alternate-link underline-link">Breadstick</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                    <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="square" class="text-secondary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">Category page returned
                                                            an error
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                    <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="circle" class="text-primary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">14 products added
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                    <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">
                                                            New sale:
                                                            <a href="#" class="alternate-link underline-link">Steirer
                                                                Brot</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                    <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">
                                                            New sale:
                                                            <a href="#" class="alternate-link underline-link">Soda
                                                                Bread</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                    <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="triangle" class="text-warning align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">Recived a support
                                                            ticket
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                    <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Activity Logs End -->

                        <!-- Time Logs Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="timeLogs">
                                <h2 class="small-title">Time Logs</h2>
                                <div class="card">
                                    <div class="card-body mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-6 d-inline-block d-flex justify-content-start align-items-center h-100 me-2">
                                                    <div class="text-muted mt-n1 lh-1-25">12:43</div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="sw-2 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="circle" class="text-primary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">New user
                                                            registiration
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-6 d-inline-block d-flex justify-content-start align-items-center h-100 me-2">
                                                    <div class="text-muted mt-n1 lh-1-25">12:43</div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="sw-2 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="circle" class="text-primary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">3 new product added
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-6 d-inline-block d-flex justify-content-start align-items-center h-100 me-2">
                                                    <div class="text-muted mt-n1 lh-1-25">12:43</div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="sw-2 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="square" class="text-secondary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">
                                                            Product out of stock:
                                                            <a href="#"
                                                               class="alternate-link underline-link">Breadstick</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-6 d-inline-block d-flex justify-content-start align-items-center h-100 me-2">
                                                    <div class="text-muted mt-n1 lh-1-25">12:43</div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="sw-2 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="square" class="text-secondary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">Category page returned
                                                            an error
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-6 d-inline-block d-flex justify-content-start align-items-center h-100 me-2">
                                                    <div class="text-muted mt-n1 lh-1-25">12:43</div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="sw-2 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="circle" class="text-primary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">14 products added
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-6 d-inline-block d-flex justify-content-start align-items-center h-100 me-2">
                                                    <div class="text-muted mt-n1 lh-1-25">12:43</div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="sw-2 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">
                                                            New sale:
                                                            <a href="#" class="alternate-link underline-link">Steirer
                                                                Brot</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-6 d-inline-block d-flex justify-content-start align-items-center h-100 me-2">
                                                    <div class="text-muted mt-n1 lh-1-25">12:43</div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="sw-2 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="triangle" class="text-warning align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">Recived a support
                                                            ticket
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sw-6 d-inline-block d-flex justify-content-start align-items-center h-100 me-2">
                                                    <div class="text-muted mt-n1 lh-1-25">12:43</div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="sw-2 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="sh-3">
                                                        <i data-cs-icon="triangle" class="text-warning align-top"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25">Recived a comment
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Time Logs End -->

                        <!-- Icons Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="iconsList">
                                <h2 class="small-title">Icons</h2>
                                <div class="card h-100-card">
                                    <div class="card-body mb-n2">
                                        <div class="row g-0 sh-5 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sh-5 d-inline-block d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="cupcake" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Melonpan</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="badge bg-outline-secondary">200 gr</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-5 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sh-5 d-inline-block d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="pepper" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Cholermüs</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="badge bg-outline-secondary">100 gr</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-5 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sh-5 d-inline-block d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="radish" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Himbasha</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="badge bg-outline-secondary">1 lt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-5 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sh-5 d-inline-block d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="pear" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Mohnflesserl</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="badge bg-outline-secondary">2 kg</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-5 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sh-5 d-inline-block d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="loaf" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Panbrioche</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="badge bg-outline-secondary">1 kg</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 sh-5 mb-2">
                                            <div class="col-auto">
                                                <div
                                                    class="sh-5 d-inline-block d-flex justify-content-center align-items-center">
                                                    <i data-cs-icon="banana" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>Himbasha</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="badge bg-outline-secondary">1 lt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Icons End -->

                        <!-- Icons Apart Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="iconsApart">
                                <h2 class="small-title">Icons Apart</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count" data-count="4">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto">
                                                    <div
                                                        class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                                                        <i data-cs-icon="cupcake" class="text-primary"></i>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-alternate">Paratha</div>
                                                            <div class="text-small text-muted">Snaps muffin macaroon.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto">
                                                    <div
                                                        class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                                                        <i data-cs-icon="pepper" class="text-primary"></i>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-alternate">Piadina</div>
                                                            <div class="text-small text-muted">Brownie ice cream
                                                                marshmallow topping.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto">
                                                    <div
                                                        class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                                                        <i data-cs-icon="radish" class="text-primary"></i>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-alternate">Rice Bread</div>
                                                            <div class="text-small text-muted">Sugar plum gummi bears
                                                                jujubes.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto">
                                                    <div
                                                        class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                                                        <i data-cs-icon="pear" class="text-primary"></i>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-alternate">Saj Bread</div>
                                                            <div class="text-small text-muted">Jujubes candy jelly-o
                                                                topping.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto">
                                                    <div
                                                        class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                                                        <i data-cs-icon="loaf" class="text-primary"></i>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-alternate">Saj Bread</div>
                                                            <div class="text-small text-muted">Jujubes candy jelly-o
                                                                topping.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Icons Apart End -->

                        <!-- Tasks Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="tasks">
                                <h2 class="small-title">Tasks</h2>
                                <div class="card h-xl-100-card sh-40">
                                    <div class="card-body mb-n2 scroll-out h-100">
                                        <div class="scroll h-100">
                                            <div class="mb-2">
                                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input" checked/>
                                                    <span class="form-check-label d-block">
                                                    <span>Create Wireframes</span>
                                                    <span class="text-muted d-block text-small mt-0">Today 09:00</span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input" checked/>
                                                    <span class="form-check-label d-block">
                                                    <span>Meeting with the team</span>
                                                    <span class="text-muted d-block text-small mt-0">Today 13:00</span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label d-block">
                                                    <span>Business lunch with clients</span>
                                                    <span class="text-muted d-block text-small mt-0">Today 14:00</span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label d-block">
                                                    <span>Training with the team</span>
                                                    <span class="text-muted d-block text-small mt-0">Today 15:00</span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label d-block">
                                                    <span>Account meeting</span>
                                                    <span class="text-muted d-block text-small mt-0">Today 17:00</span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label d-block">
                                                    <span>Gym</span>
                                                    <span class="text-muted d-block text-small mt-0">Today 17:30</span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label d-block">
                                                    <span>Dinner with the family</span>
                                                    <span class="text-muted d-block text-small mt-0">Today 19:30</span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label d-block">
                                                    <span>Gym</span>
                                                    <span class="text-muted d-block text-small mt-0">Today 17:30</span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-check w-100 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label d-block">
                                                    <span>Dinner with the family</span>
                                                    <span class="text-muted d-block text-small mt-0">Today 19:30</span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Tasks End -->

                        <!-- Tasks Apart Start -->
                        <div class="col-xl-6 mb-5">
                            <section class="scroll-section" id="tasksApart">
                                <h2 class="small-title">Tasks Apart</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count mb-n2" data-count="4">
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <label
                                                    class="form-check custom-icon mb-0 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input" checked/>
                                                    <span class="form-check-label">
                                                    <span class="content">
                                                        <span class="heading mb-1 lh-1-25">Create Wireframes</span>
                                                        <span class="d-block text-small text-muted">10:30</span>
                                                    </span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <label
                                                    class="form-check custom-icon mb-0 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input" checked/>
                                                    <span class="form-check-label">
                                                    <span class="content">
                                                        <span
                                                            class="heading mb-1 lh-1-25">Business lunch with clients</span>
                                                        <span class="d-block text-small text-muted">12:30</span>
                                                    </span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <label
                                                    class="form-check custom-icon mb-0 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label">
                                                    <span class="content">
                                                        <span class="heading mb-1 lh-1-25">Training with the team</span>
                                                        <span class="d-block text-small text-muted">15:30</span>
                                                    </span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <label
                                                    class="form-check custom-icon mb-0 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label">
                                                    <span class="content">
                                                        <span class="heading mb-1 lh-1-25">Gym</span>
                                                        <span class="d-block text-small text-muted">17:00</span>
                                                    </span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <label
                                                    class="form-check custom-icon mb-0 checked-line-through checked-opacity-75">
                                                    <input type="checkbox" class="form-check-input"/>
                                                    <span class="form-check-label">
                                                    <span class="content">
                                                        <span class="heading mb-1 lh-1-25">Dinner with the boys</span>
                                                        <span class="d-block text-small text-muted">19:00</span>
                                                    </span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Tasks Apart End -->

                        <!-- Progress Linear Start -->
                        <div class="col-xl-6 mb-5 mb-xl-0">
                            <section class="scroll-section" id="progressLinear">
                                <h2 class="small-title">Progress Linear</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count mb-n2" data-count="4">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">Basler
                                                            Brot
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-9 sw-md-15 sh-3">
                                                                <div role="progressbar"
                                                                     class="progress-bar-line position-relative text-muted"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="80" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="1"
                                                                     data-trail-width="1" data-duration="800"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">Lye
                                                            Roll
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-9 sw-md-15 sh-3">
                                                                <div role="progressbar"
                                                                     class="progress-bar-line position-relative text-muted"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="60" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="1"
                                                                     data-trail-width="1" data-duration="800"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">Saffron
                                                            Bun
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-9 sw-md-15 sh-3">
                                                                <div role="progressbar"
                                                                     class="progress-bar-line position-relative text-muted"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="90" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="1"
                                                                     data-trail-width="1" data-duration="800"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            Rúgbrauð
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-9 sw-md-15 sh-3">
                                                                <div role="progressbar"
                                                                     class="progress-bar-line position-relative text-muted"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="72" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="1"
                                                                     data-trail-width="1" data-duration="800"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">Brioche
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-9 sw-md-15 sh-3">
                                                                <div role="progressbar"
                                                                     class="progress-bar-line position-relative text-muted"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="40" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="1"
                                                                     data-trail-width="1" data-duration="800"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Progress Linear End -->

                        <!-- Progress Circular Start -->
                        <div class="col-xl-6">
                            <section class="scroll-section" id="progressCircular">
                                <h2 class="small-title">Progress Circular</h2>
                                <div class="scroll-out">
                                    <div class="scroll-by-count mb-n2" data-count="4">
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                                         class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">Soda
                                                            Bread
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-5 sh-5">
                                                                <div role="progressbar"
                                                                     class="progress-bar-circle position-relative text-muted text-small"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="80" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="4"
                                                                     data-trail-width="1" data-duration="0"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/barmbrack.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            Buccellato di Lucca
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-5 sh-5">
                                                                <div role="progressbar"
                                                                     class="progress-bar-circle position-relative text-muted text-small"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="60" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="4"
                                                                     data-trail-width="1" data-duration="0"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/panettone.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            Cheesymite Scroll
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-5 sh-5">
                                                                <div role="progressbar"
                                                                     class="progress-bar-circle position-relative text-muted text-small"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="90" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="4"
                                                                     data-trail-width="1" data-duration="0"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/zopf.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">Guernsey
                                                            Gâche
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-5 sh-5">
                                                                <div role="progressbar"
                                                                     class="progress-bar-circle position-relative text-muted text-small"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="72" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="4"
                                                                     data-trail-width="1" data-duration="0"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col-auto h-100">
                                                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                                         alt="user" class="card-img card-img-horizontal sw-11"/>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                                        <div class="d-flex flex-column justify-content-center">Bolillo
                                                        </div>
                                                        <div class="d-flex flex-row ms-3">
                                                            <div class="sw-5 sh-5">
                                                                <div role="progressbar"
                                                                     class="progress-bar-circle position-relative text-muted text-small"
                                                                     data-trail-color="" aria-valuemax="100"
                                                                     aria-valuenow="40" data-show-percent="true"
                                                                     data-hide-all-text="false" data-stroke-width="4"
                                                                     data-trail-width="1" data-duration="0"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Progress Circular End -->
                    </div>
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
                        <a class="nav-link" href="#basicItems">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic Items</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#additionalInfo">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Additional Info</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#horizontalThumbs">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Horizontal Thumbs</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#squareThumbs">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Square Thumbs</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#verticalThumbs">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Vertical Thumbs</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#links">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Links</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#users">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#userButtons">
                            <i data-cs-icon="chevron-right"></i>
                            <span>User Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#activityLogs">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Activity Logs</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#timeLogs">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Time Logs</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#iconsList">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Icons</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#iconsApart">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Icons Apart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#tasks">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Tasks</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#tasksApart">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Tasks Apart</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#progressLinear">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Progress Linear</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#progressCircular">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Progress Circular</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

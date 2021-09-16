@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Boxed Datatables Variations';
    $description= 'Datatable responsive boxed variations with search.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins","/Interface/Plugins/Datatables"=>"Datatables"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/datatables.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/datatables.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/datatable.extend.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatable.boxedvariations.js') }}"></script>
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

                    <!-- Scrollbar Start -->
                    <section class="scroll-section" id="scrollbar">
                        <h2 class="small-title">Scrollbar</h2>
                        <div class="card mb-5">
                            <div class="card-body scroll-out">
                                <div class="scroll-track-visible sh-45">
                                    <!-- Scrollbar Controls Start -->
                                    <div class="row">
                                        <div class="col-12 col-sm-5 col-lg-3 col-xxl-2 mb-1">
                                            <div
                                                class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 border border-separator bg-foreground search-sm">
                                                <input class="form-control form-control-sm datatable-search"
                                                       placeholder="Search" data-datatable="#datatableScroll"/>
                                                <span class="search-magnifier-icon">
                        <i data-cs-icon="search"></i>
                      </span>
                                                <span class="search-delete-icon d-none">
                        <i data-cs-icon="close"></i>
                      </span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-7 col-lg-9 col-xxl-10 text-end mb-1">
                                            <div class="d-inline-block">
                                                <button
                                                    class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print"
                                                    type="button" data-datatable="#datatableScroll">
                                                    <i data-cs-icon="print"></i>
                                                </button>
                                                <div class="d-inline-block datatable-export"
                                                     data-datatable="#datatableScroll">
                                                    <button
                                                        class="btn btn-icon btn-icon-only btn-outline-muted btn-sm dropdown"
                                                        data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                                        <i data-cs-icon="download"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <button class="dropdown-item export-copy" type="button">Copy
                                                        </button>
                                                        <button class="dropdown-item export-excel" type="button">Excel
                                                        </button>
                                                        <button class="dropdown-item export-cvs" type="button">Cvs
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Scrollbar Controls End -->

                                    <!-- Scrollbar Table Start -->
                                    <table class="data-table data-table-scrollable responsive nowrap"
                                           data-order='[[ 0, "desc" ]]' id="datatableScroll">
                                        <thead>
                                        <tr>
                                            <th class="text-muted text-small text-uppercase">Name</th>
                                            <th class="text-muted text-small text-uppercase">Sales</th>
                                            <th class="text-muted text-small text-uppercase">Stock</th>
                                            <th class="text-muted text-small text-uppercase">Category</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Pita</td>
                                            <td class="text-alternate">1452</td>
                                            <td class="text-alternate">62</td>
                                            <td class="text-alternate">Whole Wheat</td>
                                        </tr>
                                        <tr>
                                            <td>Pane Ticinese</td>
                                            <td class="text-alternate">1414</td>
                                            <td class="text-alternate">85</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Pandoro</td>
                                            <td class="text-alternate">1401</td>
                                            <td class="text-alternate">21</td>
                                            <td class="text-alternate">Whole Wheat</td>
                                        </tr>
                                        <tr>
                                            <td>Naan</td>
                                            <td class="text-alternate">1387</td>
                                            <td class="text-alternate">114</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Michetta</td>
                                            <td class="text-alternate">1356</td>
                                            <td class="text-alternate">27</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Damper</td>
                                            <td class="text-alternate">1323</td>
                                            <td class="text-alternate">57</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Cozonac</td>
                                            <td class="text-alternate">1301</td>
                                            <td class="text-alternate">11</td>
                                            <td class="text-alternate">Sourdough</td>
                                        </tr>
                                        <tr>
                                            <td>Spelt Bread</td>
                                            <td class="text-alternate">1287</td>
                                            <td class="text-alternate">94</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Zopf</td>
                                            <td class="text-alternate">1261</td>
                                            <td class="text-alternate">37</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Arepa</td>
                                            <td class="text-alternate">1245</td>
                                            <td class="text-alternate">65</td>
                                            <td class="text-alternate">Whole Wheat</td>
                                        </tr>
                                        <tr>
                                            <td>Barmbrack</td>
                                            <td class="text-alternate">1218</td>
                                            <td class="text-alternate">19</td>
                                            <td class="text-alternate">Whole Wheat</td>
                                        </tr>
                                        <tr>
                                            <td>Bublik</td>
                                            <td class="text-alternate">1200</td>
                                            <td class="text-alternate">45</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Chapati</td>
                                            <td class="text-alternate">1192</td>
                                            <td class="text-alternate">22</td>
                                            <td class="text-alternate">Sourdough</td>
                                        </tr>
                                        <tr>
                                            <td>Eggette</td>
                                            <td class="text-alternate">1176</td>
                                            <td class="text-alternate">48</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Hallulla</td>
                                            <td class="text-alternate">1154</td>
                                            <td class="text-alternate">13</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Kifli</td>
                                            <td class="text-alternate">1150</td>
                                            <td class="text-alternate">4</td>
                                            <td class="text-alternate">Whole Wheat</td>
                                        </tr>
                                        <tr>
                                            <td>Lángos</td>
                                            <td class="text-alternate">1108</td>
                                            <td class="text-alternate">87</td>
                                            <td class="text-alternate">Whole Wheat</td>
                                        </tr>
                                        <tr>
                                            <td>Lefse</td>
                                            <td class="text-alternate">1068</td>
                                            <td class="text-alternate">43</td>
                                            <td class="text-alternate">Whole Wheat</td>
                                        </tr>
                                        <tr>
                                            <td>Matzo</td>
                                            <td class="text-alternate">1050</td>
                                            <td class="text-alternate">41</td>
                                            <td class="text-alternate">Sourdough</td>
                                        </tr>
                                        <tr>
                                            <td>Mollete</td>
                                            <td class="text-alternate">1024</td>
                                            <td class="text-alternate">12</td>
                                            <td class="text-alternate">Sourdough</td>
                                        </tr>
                                        <tr>
                                            <td>Qistibi</td>
                                            <td class="text-alternate">998</td>
                                            <td class="text-alternate">24</td>
                                            <td class="text-alternate">Whole Wheat</td>
                                        </tr>
                                        <tr>
                                            <td>Proja</td>
                                            <td class="text-alternate">981</td>
                                            <td class="text-alternate">17</td>
                                            <td class="text-alternate">Sourdough</td>
                                        </tr>
                                        <tr>
                                            <td>Rice Bread</td>
                                            <td class="text-alternate">976</td>
                                            <td class="text-alternate">26</td>
                                            <td class="text-alternate">Multigrain</td>
                                        </tr>
                                        <tr>
                                            <td>Röggelchen</td>
                                            <td class="text-alternate">961</td>
                                            <td class="text-alternate">106</td>
                                            <td class="text-alternate">Sourdough</td>
                                        </tr>
                                        <tr>
                                            <td>Scone</td>
                                            <td class="text-alternate">948</td>
                                            <td class="text-alternate">37</td>
                                            <td class="text-alternate">Sourdough</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- Scrollbar Table End -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Scrollbar End -->

                    <!-- Pagination Start -->
                    <section class="scroll-section" id="pagination">
                        <h2 class="small-title">Pagination</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Pagination Controls Start -->
                                <div class="row">
                                    <div class="col-12 col-sm-5 col-lg-3 col-xxl-2 mb-1">
                                        <div
                                            class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 border border-separator bg-foreground search-sm">
                                            <input class="form-control form-control-sm datatable-search"
                                                   placeholder="Search" data-datatable="#datatablePagination"/>
                                            <span class="search-magnifier-icon">
                      <i data-cs-icon="search"></i>
                    </span>
                                            <span class="search-delete-icon d-none">
                      <i data-cs-icon="close"></i>
                    </span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-7 col-lg-9 col-xxl-10 text-end mb-1">
                                        <div class="d-inline-block">
                                            <button
                                                class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print"
                                                type="button" data-datatable="#datatablePagination">
                                                <i data-cs-icon="print"></i>
                                            </button>

                                            <div class="d-inline-block datatable-export"
                                                 data-datatable="#datatablePagination">
                                                <button
                                                    class="btn btn-icon btn-icon-only btn-outline-muted btn-sm dropdown"
                                                    data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                                    <i data-cs-icon="download"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <button class="dropdown-item export-copy" type="button">Copy
                                                    </button>
                                                    <button class="dropdown-item export-excel" type="button">Excel
                                                    </button>
                                                    <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                                </div>
                                            </div>
                                            <div class="dropdown-as-select d-inline-block datatable-length"
                                                 data-datatable="#datatablePagination">
                                                <button class="btn btn-outline-muted btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-offset="0,3">
                                                    10 Items
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">5 Items</a>
                                                    <a class="dropdown-item active" href="#">10 Items</a>
                                                    <a class="dropdown-item" href="#">20 Items</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pagination Controls End -->

                                <!-- Pagination Table Start -->
                                <table class="data-table data-table-pagination data-table-standard responsive nowrap"
                                       id="datatablePagination" data-order='[[ 0, "desc" ]]'>
                                    <thead>
                                    <tr>
                                        <th class="text-muted text-small text-uppercase">Name</th>
                                        <th class="text-muted text-small text-uppercase">Sales</th>
                                        <th class="text-muted text-small text-uppercase">Stock</th>
                                        <th class="text-muted text-small text-uppercase">Category</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Pita</td>
                                        <td class="text-alternate">1452</td>
                                        <td class="text-alternate">62</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Pane Ticinese</td>
                                        <td class="text-alternate">1414</td>
                                        <td class="text-alternate">85</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Pandoro</td>
                                        <td class="text-alternate">1401</td>
                                        <td class="text-alternate">21</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Naan</td>
                                        <td class="text-alternate">1387</td>
                                        <td class="text-alternate">114</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Michetta</td>
                                        <td class="text-alternate">1356</td>
                                        <td class="text-alternate">27</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Damper</td>
                                        <td class="text-alternate">1323</td>
                                        <td class="text-alternate">57</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Cozonac</td>
                                        <td class="text-alternate">1301</td>
                                        <td class="text-alternate">11</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    <tr>
                                        <td>Spelt Bread</td>
                                        <td class="text-alternate">1287</td>
                                        <td class="text-alternate">94</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Zopf</td>
                                        <td class="text-alternate">1261</td>
                                        <td class="text-alternate">37</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Arepa</td>
                                        <td class="text-alternate">1245</td>
                                        <td class="text-alternate">65</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Barmbrack</td>
                                        <td class="text-alternate">1218</td>
                                        <td class="text-alternate">19</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Bublik</td>
                                        <td class="text-alternate">1200</td>
                                        <td class="text-alternate">45</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Chapati</td>
                                        <td class="text-alternate">1192</td>
                                        <td class="text-alternate">22</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    <tr>
                                        <td>Eggette</td>
                                        <td class="text-alternate">1176</td>
                                        <td class="text-alternate">48</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Hallulla</td>
                                        <td class="text-alternate">1154</td>
                                        <td class="text-alternate">13</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Kifli</td>
                                        <td class="text-alternate">1150</td>
                                        <td class="text-alternate">4</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Lángos</td>
                                        <td class="text-alternate">1108</td>
                                        <td class="text-alternate">87</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Lefse</td>
                                        <td class="text-alternate">1068</td>
                                        <td class="text-alternate">43</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Matzo</td>
                                        <td class="text-alternate">1050</td>
                                        <td class="text-alternate">41</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    <tr>
                                        <td>Mollete</td>
                                        <td class="text-alternate">1024</td>
                                        <td class="text-alternate">12</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- Pagination Table End -->
                            </div>
                        </div>
                    </section>
                    <!-- Pagination End -->

                    <!-- Hover Start -->
                    <section class="scroll-section" id="hover">
                        <h2 class="small-title">Hover</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Hover Controls Start -->
                                <div class="row">
                                    <div class="col-12 col-sm-5 col-lg-3 col-xxl-2 mb-1">
                                        <div
                                            class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 border border-separator bg-foreground search-sm">
                                            <input class="form-control form-control-sm datatable-search"
                                                   placeholder="Search" data-datatable="#datatableHover"/>
                                            <span class="search-magnifier-icon">
                      <i data-cs-icon="search"></i>
                    </span>
                                            <span class="search-delete-icon d-none">
                      <i data-cs-icon="close"></i>
                    </span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-7 col-lg-9 col-xxl-10 text-end mb-1">
                                        <div class="d-inline-block">
                                            <button
                                                class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print"
                                                type="button" data-datatable="#datatableHover">
                                                <i data-cs-icon="print"></i>
                                            </button>

                                            <div class="d-inline-block datatable-export"
                                                 data-datatable="#datatableHover">
                                                <button
                                                    class="btn btn-icon btn-icon-only btn-outline-muted btn-sm dropdown"
                                                    data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                                    <i data-cs-icon="download"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <button class="dropdown-item export-copy" type="button">Copy
                                                    </button>
                                                    <button class="dropdown-item export-excel" type="button">Excel
                                                    </button>
                                                    <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                                </div>
                                            </div>
                                            <div class="dropdown-as-select d-inline-block datatable-length"
                                                 data-datatable="#datatableHover">
                                                <button class="btn btn-outline-muted btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-offset="0,3">
                                                    10 Items
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">5 Items</a>
                                                    <a class="dropdown-item active" href="#">10 Items</a>
                                                    <a class="dropdown-item" href="#">20 Items</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hover Controls End -->

                                <!-- Hover Table Start -->
                                <table
                                    class="data-table data-table-pagination data-table-standard responsive nowrap hover"
                                    id="datatableHover" data-order='[[ 0, "desc" ]]'>
                                    <thead>
                                    <tr>
                                        <th class="text-muted text-small text-uppercase">Name</th>
                                        <th class="text-muted text-small text-uppercase">Sales</th>
                                        <th class="text-muted text-small text-uppercase">Stock</th>
                                        <th class="text-muted text-small text-uppercase">Category</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Pita</td>
                                        <td class="text-alternate">1452</td>
                                        <td class="text-alternate">62</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Pane Ticinese</td>
                                        <td class="text-alternate">1414</td>
                                        <td class="text-alternate">85</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Pandoro</td>
                                        <td class="text-alternate">1401</td>
                                        <td class="text-alternate">21</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Naan</td>
                                        <td class="text-alternate">1387</td>
                                        <td class="text-alternate">114</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Michetta</td>
                                        <td class="text-alternate">1356</td>
                                        <td class="text-alternate">27</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Damper</td>
                                        <td class="text-alternate">1323</td>
                                        <td class="text-alternate">57</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Cozonac</td>
                                        <td class="text-alternate">1301</td>
                                        <td class="text-alternate">11</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    <tr>
                                        <td>Spelt Bread</td>
                                        <td class="text-alternate">1287</td>
                                        <td class="text-alternate">94</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Zopf</td>
                                        <td class="text-alternate">1261</td>
                                        <td class="text-alternate">37</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Arepa</td>
                                        <td class="text-alternate">1245</td>
                                        <td class="text-alternate">65</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Barmbrack</td>
                                        <td class="text-alternate">1218</td>
                                        <td class="text-alternate">19</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Bublik</td>
                                        <td class="text-alternate">1200</td>
                                        <td class="text-alternate">45</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Chapati</td>
                                        <td class="text-alternate">1192</td>
                                        <td class="text-alternate">22</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    <tr>
                                        <td>Eggette</td>
                                        <td class="text-alternate">1176</td>
                                        <td class="text-alternate">48</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Hallulla</td>
                                        <td class="text-alternate">1154</td>
                                        <td class="text-alternate">13</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Kifli</td>
                                        <td class="text-alternate">1150</td>
                                        <td class="text-alternate">4</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Lángos</td>
                                        <td class="text-alternate">1108</td>
                                        <td class="text-alternate">87</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Lefse</td>
                                        <td class="text-alternate">1068</td>
                                        <td class="text-alternate">43</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Matzo</td>
                                        <td class="text-alternate">1050</td>
                                        <td class="text-alternate">41</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    <tr>
                                        <td>Mollete</td>
                                        <td class="text-alternate">1024</td>
                                        <td class="text-alternate">12</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- Hover Table End -->
                            </div>
                        </div>
                    </section>
                    <!-- Hover End -->

                    <!-- Stripe Start -->
                    <section class="scroll-section" id="stripe">
                        <h2 class="small-title">Stripe</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Stripe Controls Start -->
                                <div class="row">
                                    <div class="col-12 col-sm-5 col-lg-3 col-xxl-2 mb-1">
                                        <div
                                            class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 border border-separator bg-foreground search-sm">
                                            <input class="form-control form-control-sm datatable-search"
                                                   placeholder="Search" data-datatable="#datatableStripe"/>
                                            <span class="search-magnifier-icon">
                      <i data-cs-icon="search"></i>
                    </span>
                                            <span class="search-delete-icon d-none">
                      <i data-cs-icon="close"></i>
                    </span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-7 col-lg-9 col-xxl-10 text-end mb-1">
                                        <div class="d-inline-block">
                                            <button
                                                class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print"
                                                type="button" data-datatable="#datatableStripe">
                                                <i data-cs-icon="print"></i>
                                            </button>

                                            <div class="d-inline-block datatable-export"
                                                 data-datatable="#datatableStripe">
                                                <button
                                                    class="btn btn-icon btn-icon-only btn-outline-muted btn-sm dropdown"
                                                    data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                                    <i data-cs-icon="download"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <button class="dropdown-item export-copy" type="button">Copy
                                                    </button>
                                                    <button class="dropdown-item export-excel" type="button">Excel
                                                    </button>
                                                    <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                                </div>
                                            </div>
                                            <div class="dropdown-as-select d-inline-block datatable-length"
                                                 data-datatable="#datatableStripe">
                                                <button class="btn btn-outline-muted btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-offset="0,3">
                                                    10 Items
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">5 Items</a>
                                                    <a class="dropdown-item active" href="#">10 Items</a>
                                                    <a class="dropdown-item" href="#">20 Items</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Stripe Controls End -->

                                <!-- Stripe Table Start -->
                                <table
                                    class="data-table data-table-pagination data-table-standard responsive nowrap stripe"
                                    id="datatableStripe" data-order='[[ 0, "desc" ]]'>
                                    <thead>
                                    <tr>
                                        <th class="text-muted text-small text-uppercase">Name</th>
                                        <th class="text-muted text-small text-uppercase">Sales</th>
                                        <th class="text-muted text-small text-uppercase">Stock</th>
                                        <th class="text-muted text-small text-uppercase">Category</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Pita</td>
                                        <td class="text-alternate">1452</td>
                                        <td class="text-alternate">62</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Pane Ticinese</td>
                                        <td class="text-alternate">1414</td>
                                        <td class="text-alternate">85</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Pandoro</td>
                                        <td class="text-alternate">1401</td>
                                        <td class="text-alternate">21</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Naan</td>
                                        <td class="text-alternate">1387</td>
                                        <td class="text-alternate">114</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Michetta</td>
                                        <td class="text-alternate">1356</td>
                                        <td class="text-alternate">27</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Damper</td>
                                        <td class="text-alternate">1323</td>
                                        <td class="text-alternate">57</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Cozonac</td>
                                        <td class="text-alternate">1301</td>
                                        <td class="text-alternate">11</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    <tr>
                                        <td>Spelt Bread</td>
                                        <td class="text-alternate">1287</td>
                                        <td class="text-alternate">94</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Zopf</td>
                                        <td class="text-alternate">1261</td>
                                        <td class="text-alternate">37</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Arepa</td>
                                        <td class="text-alternate">1245</td>
                                        <td class="text-alternate">65</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Barmbrack</td>
                                        <td class="text-alternate">1218</td>
                                        <td class="text-alternate">19</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Bublik</td>
                                        <td class="text-alternate">1200</td>
                                        <td class="text-alternate">45</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Chapati</td>
                                        <td class="text-alternate">1192</td>
                                        <td class="text-alternate">22</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    <tr>
                                        <td>Eggette</td>
                                        <td class="text-alternate">1176</td>
                                        <td class="text-alternate">48</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Hallulla</td>
                                        <td class="text-alternate">1154</td>
                                        <td class="text-alternate">13</td>
                                        <td class="text-alternate">Multigrain</td>
                                    </tr>
                                    <tr>
                                        <td>Kifli</td>
                                        <td class="text-alternate">1150</td>
                                        <td class="text-alternate">4</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Lángos</td>
                                        <td class="text-alternate">1108</td>
                                        <td class="text-alternate">87</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Lefse</td>
                                        <td class="text-alternate">1068</td>
                                        <td class="text-alternate">43</td>
                                        <td class="text-alternate">Whole Wheat</td>
                                    </tr>
                                    <tr>
                                        <td>Matzo</td>
                                        <td class="text-alternate">1050</td>
                                        <td class="text-alternate">41</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    <tr>
                                        <td>Mollete</td>
                                        <td class="text-alternate">1024</td>
                                        <td class="text-alternate">12</td>
                                        <td class="text-alternate">Sourdough</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- Stripe Table End -->
                            </div>
                        </div>
                    </section>
                    <!-- Stripe End -->
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
                        <a class="nav-link" href="#scrollbar">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Scrollbar</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#pagination">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Pagination</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#hover">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Hover</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#stripe">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Stripe</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection

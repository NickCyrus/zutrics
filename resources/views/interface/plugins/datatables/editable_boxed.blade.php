@php
    $html_tag_data = [];
    $title = 'Editable Boxed Datatables';
    $description= 'A table enhancing plug-in for the jQuery Javascript library, adding sorting, paging and filtering abilities to plain HTML tables with minimal effort.';
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
    <script src="{{ asset('/js/vendor/bootstrap-submenu.js') }}"></script>
    <script src="{{ asset('/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/mousetrap.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/datatable.extend.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatable.editableboxed.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
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
                            <button type="button"
                                    class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto add-datatable">
                                <i data-cs-icon="plus"></i>
                                <span>Add New</span>
                            </button>
                            <!-- Add New Button End -->

                            <!-- Check Button Start -->
                            <div class="btn-group ms-1 check-all-container">
                                <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2"
                                     id="datatableCheckAllButton">
                <span class="form-check float-end">
                  <input type="checkbox" class="form-check-input" id="datatableCheckAll"/>
                </span>
                                </div>
                                <button type="button"
                                        class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                        data-bs-offset="0,3" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-submenu></button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown dropstart dropdown-submenu">
                                        <button
                                            class="dropdown-item dropdown-toggle tag-datatable caret-absolute disabled"
                                            type="button">Tag
                                        </button>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item tag-done" type="button">Done</button>
                                            <button class="dropdown-item tag-new" type="button">New</button>
                                            <button class="dropdown-item tag-sale" type="button">Sale</button>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item disabled delete-datatable" type="button">Delete
                                    </button>
                                </div>
                            </div>
                            <!-- Check Button End -->
                        </div>
                        <!-- Top Buttons End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->

                <!-- Content Start -->
                <div class="data-table-boxed">
                    <!-- Controls Start -->
                    <div class="row mb-2">
                        <!-- Search Start -->
                        <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                            <div
                                class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                                <input class="form-control datatable-search" placeholder="Search"
                                       data-datatable="#datatableBoxed"/>
                                <span class="search-magnifier-icon">
                <i data-cs-icon="search"></i>
              </span>
                                <span class="search-delete-icon d-none">
                <i data-cs-icon="close"></i>
              </span>
                            </div>
                        </div>
                        <!-- Search End -->

                        <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                            <div class="d-inline-block me-0 me-sm-3 float-start float-md-none">
                                <!-- Add Button Start -->
                                <button class="btn btn-icon btn-icon-only btn-foreground-alternate shadow add-datatable"
                                        data-bs-delay="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add"
                                        type="button">
                                    <i data-cs-icon="plus"></i>
                                </button>
                                <!-- Add Button End -->

                                <!-- Edit Button Start -->
                                <button
                                    class="btn btn-icon btn-icon-only btn-foreground-alternate shadow edit-datatable disabled"
                                    data-bs-delay="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                    type="button">
                                    <i data-cs-icon="edit"></i>
                                </button>
                                <!-- Edit Button End -->

                                <!-- Delete Button Start -->
                                <button
                                    class="btn btn-icon btn-icon-only btn-foreground-alternate shadow disabled delete-datatable"
                                    data-bs-delay="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                    type="button">
                                    <i data-cs-icon="bin"></i>
                                </button>
                                <!-- Delete Button End -->
                            </div>
                            <div class="d-inline-block">
                                <!-- Print Button Start -->
                                <button
                                    class="btn btn-icon btn-icon-only btn-foreground-alternate shadow datatable-print"
                                    data-bs-delay="0" data-datatable="#datatableBoxed" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Print" type="button">
                                    <i data-cs-icon="print"></i>
                                </button>
                                <!-- Print Button End -->

                                <!-- Export Dropdown Start -->
                                <div class="d-inline-block datatable-export" data-datatable="#datatableBoxed">
                                    <button class="btn p-0" data-bs-toggle="dropdown" type="button"
                                            data-bs-offset="0,3">
                  <span class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown" data-bs-delay="0"
                        data-bs-placement="top" data-bs-toggle="tooltip" title="Export">
                    <i data-cs-icon="download"></i>
                  </span>
                                    </button>
                                    <div class="dropdown-menu shadow dropdown-menu-end">
                                        <button class="dropdown-item export-copy" type="button">Copy</button>
                                        <button class="dropdown-item export-excel" type="button">Excel</button>
                                        <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                    </div>
                                </div>
                                <!-- Export Dropdown End -->

                                <!-- Length Start -->
                                <div class="dropdown-as-select d-inline-block datatable-length"
                                     data-datatable="#datatableBoxed" data-childSelector="span">
                                    <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
                  <span class="btn btn-foreground-alternate dropdown-toggle" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-delay="0" title="Item Count">
                    15 Items
                  </span>
                                    </button>
                                    <div class="dropdown-menu shadow dropdown-menu-end">
                                        <a class="dropdown-item" href="#">10 Items</a>
                                        <a class="dropdown-item active" href="#">15 Items</a>
                                        <a class="dropdown-item" href="#">20 Items</a>
                                    </div>
                                </div>
                                <!-- Length End -->
                            </div>
                        </div>
                    </div>
                    <!-- Controls End -->

                    <!-- Table Start -->
                    <div>
                        <table id="datatableBoxed" class="data-table nowrap hover">
                            <thead>
                            <tr>
                                <th class="text-muted text-small text-uppercase">Name</th>
                                <th class="text-muted text-small text-uppercase">Sales</th>
                                <th class="text-muted text-small text-uppercase">Stock</th>
                                <th class="text-muted text-small text-uppercase">Category</th>
                                <th class="text-muted text-small text-uppercase">Tag</th>
                                <th class="empty all">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Basler Brot</td>
                                <td>213</td>
                                <td>15</td>
                                <td>Sourdough</td>
                                <td>New</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Kommissbrot</td>
                                <td>2321</td>
                                <td>154</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lye Roll</td>
                                <td>973</td>
                                <td>39</td>
                                <td>Sourdough</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Arepa</td>
                                <td>213</td>
                                <td>15</td>
                                <td>Sourdough</td>
                                <td>New</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Panettone</td>
                                <td>563</td>
                                <td>72</td>
                                <td>Sourdough</td>
                                <td>Done</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Saffron Bun</td>
                                <td>98</td>
                                <td>7</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Ruisreikäleipä</td>
                                <td>459</td>
                                <td>90</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Bagel</td>
                                <td>433</td>
                                <td>37</td>
                                <td>Multigrain</td>
                                <td>Done</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Rúgbrauð</td>
                                <td>802</td>
                                <td>234</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Yeast Karavai</td>
                                <td>345</td>
                                <td>22</td>
                                <td>Multigrain</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Brioche</td>
                                <td>334</td>
                                <td>45</td>
                                <td>Sourdough</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pullman Loaf</td>
                                <td>456</td>
                                <td>23</td>
                                <td>Multigrain</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Bammy</td>
                                <td>1321</td>
                                <td>554</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Challah</td>
                                <td>473</td>
                                <td>29</td>
                                <td>Sourdough</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Soda Bread</td>
                                <td>1152</td>
                                <td>84</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Barmbrack</td>
                                <td>854</td>
                                <td>13</td>
                                <td>Sourdough</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Dorayaki</td>
                                <td>459</td>
                                <td>90</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Buccellato di Lucca</td>
                                <td>1298</td>
                                <td>212</td>
                                <td>Multigrain</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Toast Bread</td>
                                <td>2156</td>
                                <td>732</td>
                                <td>Multigrain</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Cheesymite Scroll</td>
                                <td>452</td>
                                <td>24</td>
                                <td>Sourdough</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Baguette</td>
                                <td>456</td>
                                <td>33</td>
                                <td>Sourdough</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Guernsey Gâche</td>
                                <td>1958</td>
                                <td>221</td>
                                <td>Multigrain</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Bazlama</td>
                                <td>858</td>
                                <td>34</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Bolillo</td>
                                <td>333</td>
                                <td>24</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Chapati</td>
                                <td>513</td>
                                <td>72</td>
                                <td>Sourdough</td>
                                <td>Done</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Eggette</td>
                                <td>802</td>
                                <td>234</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Bauernbrot</td>
                                <td>633</td>
                                <td>97</td>
                                <td>Multigrain</td>
                                <td>Done</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Flatbread</td>
                                <td>945</td>
                                <td>12</td>
                                <td>Multigrain</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Hallulla</td>
                                <td>534</td>
                                <td>65</td>
                                <td>Sourdough</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Cozonac</td>
                                <td>98</td>
                                <td>7</td>
                                <td>Whole Wheat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table End -->
                </div>
                <!-- Content End -->

                <!-- Add Edit Modal Start -->
                <div class="modal modal-right fade" id="addEditModal" tabindex="-1" role="dialog"
                     aria-labelledby="modalTitle" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle">Add New</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="Name" type="text" class="form-control"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Sales</label>
                                        <input name="Sales" type="number" class="form-control"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Stock</label>
                                        <input name="Stock" type="number" class="form-control"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <div class="form-check">
                                            <input type="radio" id="category1" name="Category" value="Whole Wheat"
                                                   class="form-check-input"/>
                                            <label class="form-check-label" for="category1">Whole Wheat</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="category2" name="Category" value="Sourdough"
                                                   class="form-check-input"/>
                                            <label class="form-check-label" for="category2">Sourdough</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="category3" name="Category" value="Multigrain"
                                                   class="form-check-input"/>
                                            <label class="form-check-label" for="category3">Multigrain</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tag</label>
                                        <div class="form-check">
                                            <input type="radio" id="tag1" name="Tag" value="New"
                                                   class="form-check-input"/>
                                            <label class="form-check-label" for="tag1">New</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="tag2" name="Tag" value="Sale"
                                                   class="form-check-input"/>
                                            <label class="form-check-label" for="tag2">Sale</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="tag3" name="Tag" value="Done"
                                                   class="form-check-input"/>
                                            <label class="form-check-label" for="tag3">Done</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel
                                </button>
                                <button type="button" class="btn btn-primary" id="addEditConfirmButton">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Edit Modal End -->
            </div>
        </div>
    </div>
@endsection

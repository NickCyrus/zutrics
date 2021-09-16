@php
    $html_tag_data = [];
    $title =  'Contacts';
    $description =  'User directory application that built with the help of List.js. Can be searched, paged and sorted.';
    $breadcrumbs = ["/"=>"Home","/Apps"=>"Apps"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/quill.bubble.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/singleimageupload.js') }}"></script>
    <script src="{{ asset('/js/vendor/list.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/checkall.js') }}"></script>
    <script src="{{ asset('/js/apps/contacts.js') }}"></script>
@endsection

@section('content')
    <div class="container" id="contacts">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
                <div class="col-auto mb-2 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                        @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                    </div>
                </div>
                <div class="w-100 d-md-none"></div>
                <div class="col-12 col-sm-6 col-md d-flex align-items-start justify-content-end order-3 order-sm-2">
                    <div class="w-100 w-lg-auto search-input-container border border-separator">
                        <input class="form-control search" type="text" autocomplete="off" placeholder="Search"/>
                        <span class="search-magnifier-icon">
                    <i data-cs-icon="search"></i>
                  </span>
                    </div>
                </div>
                <div
                    class="col-12 col-sm-6 col-md-auto d-flex align-items-start justify-content-end mb-2 mb-sm-0 order-sm-3">
                    <button type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto"
                            id="newContactButton">
                        <i data-cs-icon="plus"></i>
                        <span>Add Contact</span>
                    </button>
                    <div class="dropdown d-inline-block d-lg-none">
                        <button
                            type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-only ms-1"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i data-cs-icon="sort"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end custom-sort">
                            <a class="dropdown-item sort" data-sort="name" href="#">Name</a>
                            <a class="dropdown-item sort" data-sort="email" href="#">Email</a>
                            <a class="dropdown-item sort" data-sort="phone" href="#">Phone</a>
                            <a class="dropdown-item sort" data-sort="group" href="#">Group</a>
                        </div>
                    </div>
                    <div class="btn-group ms-1 check-all-container-checkbox-click">
                        <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2"
                             data-target="#checkboxTable">
                    <span class="form-check float-end">
                      <input type="checkbox" class="form-check-input" id="checkAll"/>
                    </span>
                        </div>
                        <button
                            type="button"
                            class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-offset="0,3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        ></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item" id="deleteChecked" type="button">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row g-0">
            <div class="col">
                <!-- List Items Start -->
                <div id="checkboxTable">
                    <div class="mb-4 mb-lg-3 bg-transparent no-shadow d-none d-lg-block">
                        <div class="row g-0">
                            <div class="col-auto sw-11 d-none d-lg-flex"></div>
                            <div class="col">
                                <div class="ps-0 ps-5 pe-4 pt-0 pb-0 h-100">
                                    <div class="row g-0 h-100 align-content-center custom-sort">
                                        <div class="col-3 col-lg-4 d-flex flex-column mb-lg-0 pe-3 d-flex">
                                            <div class="text-muted text-small cursor-pointer sort" data-sort="name">
                                                NAME
                                            </div>
                                        </div>
                                        <div class="col-3 col-lg-3 d-flex flex-column pe-1 justify-content-center">
                                            <div class="text-muted text-small cursor-pointer sort" data-sort="email">
                                                EMAIL
                                            </div>
                                        </div>
                                        <div class="col-3 col-lg-3 d-flex flex-column pe-1 justify-content-center">
                                            <div class="text-muted text-small cursor-pointer sort" data-sort="phone">
                                                PHONE
                                            </div>
                                        </div>
                                        <div class="col-3 col-lg-1 d-flex flex-column pe-1 justify-content-center">
                                            <div class="text-muted text-small cursor-pointer sort" data-sort="group">
                                                GROUP
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Items Container Start -->
                    <div class="list mb-5"></div>
                    <!-- Items Container Start -->

                    <!-- Items Pagination Start -->
                    <div class="w-100 d-flex justify-content-center">
                        <div class="pagination"></div>
                    </div>
                    <!-- Items Pagination End -->

                    <!-- Template for the contact items start -->
                    <div class="d-none">
                        <div class="card mb-2" id="contactItemTemplate">
                            <div class="d-none id"></div>
                            <div class="row g-0 h-100 sh-lg-9 position-relative">
                                <a href="#" class="col-auto position-relative view-click">
                                    <img
                                        src="{{ asset('/img/profile/profile-11.jpg') }}"
                                        alt="user"
                                        class="card-img card-img-horizontal sw-11 h-100 h-100 sh-lg-9 thumb"
                                        id="contactThumb"
                                    />
                                </a>
                                <div class="col py-3 py-sm-3">
                                    <div class="card-body ps-5 pe-4 pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <a href="#"
                                               class="col-11 col-lg-4 d-flex flex-column mb-lg-0 mb-3 mb-lg-0 pe-3 d-flex order-1 view-click">
                                                <div class="name" id="contactName"></div>
                                                <div class="text-small text-muted text-truncate position"
                                                     id="contactPosition"></div>
                                            </a>
                                            <div
                                                class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                                <div class="lh-1 text-alternate email" id="contactEmail"></div>
                                            </div>
                                            <div
                                                class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                                <div class="lh-1 text-alternate phone" id="contactPhone"></div>
                                            </div>
                                            <div
                                                class="col-12 col-lg-1 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5">
                                                <span class="badge bg-outline-primary group" id="contactGroup"></span>
                                            </div>
                                            <div
                                                class="col-1 col-lg-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last">
                                                <label class="form-check mt-2">
                                                    <input type="checkbox" class="form-check-input pe-none"/>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Template for the contact items end -->
                    </div>
                    <!-- List Items End -->
                </div>
            </div>

            <!-- New&Edit Contact Start -->
            <div class="modal modal-right fade" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <button type="button" class="btn-close position-absolute e-2 t-2 z-index-1"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body d-flex flex-column">
                            <div class="mb-3 mx-auto position-relative" id="imageUpload">
                                <img
                                    src="{{ asset('/img/profile/profile-11.jpg') }}"
                                    alt="user"
                                    class="rounded-xl border border-separator-light border-4 sw-11 sh-11"
                                    id="contactThumbModal"
                                />
                                <button
                                    class="btn btn-sm btn-icon btn-icon-only btn-separator-light position-absolute rounded-xl s-0 b-0"
                                    type="button">
                                    <i data-cs-icon="upload" class="text-alternate"></i>
                                </button>
                                <input class="file-upload d-none" type="file" accept="image/*"
                                       id="contactThumbInputModal"/>
                            </div>
                            <div class="mb-3 filled w-100 d-flex flex-column">
                                <i data-cs-icon="user"></i>
                                <input class="form-control" placeholder="Name" id="contactNameModal"/>
                            </div>
                            <div class="mb-3 filled w-100 d-flex flex-column">
                                <i data-cs-icon="suitcase"></i>
                                <input class="form-control" placeholder="Position" id="contactPositionModal"/>
                            </div>
                            <div class="mb-3 filled w-100 d-flex flex-column">
                                <i data-cs-icon="email"></i>
                                <input class="form-control" placeholder="Email" id="contactEmailModal"/>
                            </div>
                            <div class="mb-3 filled w-100 d-flex flex-column">
                                <i data-cs-icon="phone"></i>
                                <input class="form-control" placeholder="Phone" id="contactPhoneModal"/>
                            </div>
                            <div class="mb-3 filled w-100">
                                <i data-cs-icon="diagram-1"></i>
                                <select class="select-single-no-search-filled" data-placeholder="Group"
                                        id="contactGroupModal">
                                    <option label="&nbsp;"></option>
                                    <option value="Work">Work</option>
                                    <option value="Personal">Personal</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button
                                class="btn btn-icon btn-icon-only btn-outline-primary"
                                type="button"
                                data-delay='{"show":"500", "hide":"0"}'
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                id="deleteContact"
                            >
                                <i data-cs-icon="bin"></i>
                            </button>
                            <button class="btn btn-icon btn-icon-end btn-primary" type="button" id="saveContact">
                                <span>Save</span>
                                <i data-cs-icon="check"></i>
                            </button>
                            <button class="btn btn-icon btn-icon-end btn-primary" type="button" id="addContact">
                                <span>Add</span>
                                <i data-cs-icon="plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New&Edit Contact End -->

            <!-- Delete Confirm Modal Start -->
            <div class="modal fade modal-close-out" id="deleteConfirmModal" tabindex="-1" role="dialog"
                 aria-labelledby="deleteConfirmModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="verticallyCenteredLabel">Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span id="deleteConfirmDetail" class="fw-bold"></span>
                            <span>will be deleted. Are you sure?</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                            <button type="button" id="deleteConfirmButton" class="btn btn-outline-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete Confirm Modal End -->
        </div>
    </div>
@endsection

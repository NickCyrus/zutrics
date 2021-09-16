@php
    $html_tag_data = [];
    $title =  'Tasks';
    $description = 'Todo application that has create, edit and delete capabilities. Also has a Fuse.js search implementation.';
    $breadcrumbs = ["/"=>"Home","/Apps"=>"Apps"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/movecontent.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/fuse.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/checkall.js') }}"></script>
    <script src="{{ asset('/js/apps/tasks.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
                <div class="col-auto mb-2 mb-md-0 me-auto">
                    <div class="w-auto sw-md-25">
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title  }}</h1>
                        @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                    </div>
                </div>
                <div class="col-auto d-flex d-lg-none align-items-start mb-2 mb-md-0 order-md-1">
                    <button type="button" class="btn btn-primary btn-icon btn-icon-only ms-1" id="tasksMenuButton">
                        <i data-cs-icon="menu-left"></i>
                    </button>
                </div>
                <div class="col-12 col-md d-flex align-items-start justify-content-end justify-content-lg-start">
                    <div class="me-lg-auto w-100 w-md-auto search-input-container border border-separator">
                        <input class="form-control search" type="text" autocomplete="off" placeholder="Search"
                               id="taskSearch"/>
                        <span class="search-magnifier-icon">
                        <i data-cs-icon="search"></i>
                    </span>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-1"
                            id="newTaskButton">
                        <i data-cs-icon="plus"></i>
                        <span>New Task</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row g-0">
            <div class="col-auto d-none d-lg-flex">
                <div class="nav flex-column sw-25 mt-n2" id="tasksMenuColumn">
                    <!-- Content of this will be moved from #tasksMenuMoveContent div based on the responsive breakpoint.  -->
                </div>
            </div>

            <div class="col">
                <!-- List Items Start -->
                <div class="row g-2 row-cols-1 row-cols-lg-2 row-cols-xl-3" id="tasksContainer">
                    <!-- Task Item Card Template Start -->
                    <template id="taskItemTemplate">
                        <div class="col task-item">
                            <div class="card h-100">
                                <div class="card-body position-relative">
                                    <button type="button"
                                            class="btn btn-foreground hover-outline btn-icon btn-icon-only btn-sm position-absolute e-0 t-0 me-card mt-card z-index-1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-cs-icon="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end task-buttons">
                                        <a class="dropdown-item edit-task d-none" href="#">Edit</a>
                                        <a class="dropdown-item delete-task d-none" href="#">Delete</a>
                                        <a class="dropdown-item undo-delete-task d-none" href="#">Undo Delete</a>
                                        <a class="dropdown-item delete-permanently-task d-none" href="#">Delete
                                            Permanently</a>
                                    </div>
                                    <div class="h-100">
                                        <label
                                            class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 h-100">
                                            <input type="checkbox" class="form-check-input check-input"/>
                                            <span class="form-check-label h-100 text-decoration-none">
                                            <span
                                                class="content h-100 text-decoration-none d-flex flex-column justify-content-between">
                                                <span class="mb-3 h5 pe-7 lh-1-5 title"></span>
                                                <span class="text-alternate mb-4 flex-grow-1 detail"></span>
                                                <div class="tags"></div>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                    <!-- Task Item Card Template End -->

                    <!-- Tag Item Template Start -->
                    <template id="taskTagTemplate">
                        <span class="badge opacity-75 text-decoration-none me-1"></span>
                    </template>
                    <!-- Tag Item Template End -->

                    <!-- No Task Template Start -->
                    <template id="noTasksFound">
                        <div class="col-12 small-gutter-col mb-2 flex-grow-1 mw-100">
                            <div class="h-100">
                                <div class="text-center">
                                    <i class="cs-warning-hexagon text-primary"></i>
                                    <p class="mb-0">No tasks found!</p>
                                </div>
                            </div>
                        </div>
                    </template>
                    <!-- No Task Template End -->
                </div>
                <!-- List Items End -->
            </div>
        </div>

        <!-- Menu Content Start -->
        <div class="modal modal-right fade" id="tasksMenuModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tasks</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Content of below will be moved to #tasksMenuColumn or back in here based on the data-move-breakpoint attribute below -->
                        <!-- Content will be here if the screen size is smaller than lg -->
                        <div id="tasksMenuMoveContent" data-move-target="#tasksMenuColumn" data-move-breakpoint="lg">
                            <div class="menu-items">
                                <a class="nav-link px-0 task-menu-item" href="#" data-menuid="1"
                                   data-show='{"deleted": false, "status":"All", "tags": "All"}'>
                                    <i data-cs-icon="inbox" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block mt-1 align-middle">All</span>
                                </a>
                                <a class="nav-link px-0 task-menu-item" href="#" data-menuid="2"
                                   data-show='{"deleted": false, "status": "Active", "tags": "All"}'>
                                    <i data-cs-icon="trend-up" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block mt-1 align-middle">Active</span>
                                </a>
                                <a class="nav-link px-0 task-menu-item" href="#" data-menuid="3"
                                   data-show='{"deleted": false, "status": "Done", "tags": "All"}'>
                                    <i data-cs-icon="trend-down" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block mt-1 align-middle">Done</span>
                                </a>
                                <a class="nav-link px-0 dropdown-toggle" href="#menuTagButtons"
                                   data-bs-toggle="collapse" aria-expanded="true">
                                    <i data-cs-icon="tag" data-cs-size="17" class="me-2"></i>
                                    <span class="d-inline-block align-middle">Tags</span>
                                </a>
                                <div class="collapse show" id="menuTagButtons">
                                    <a class="nav-link px-0 task-menu-item" href="#" data-menuid="4"
                                       data-show='{"deleted": false, "status": "All", "tags":"Project"}'>
                                        <i class="align-middle me-2 sw-2 d-inline-block"></i>
                                        <i data-cs-icon="circle" data-cs-size="17" class="me-2 text-primary"></i>
                                        <span class="d-inline-block mt-1 align-middle">Project</span>
                                    </a>
                                    <a class="nav-link px-0 py-2 task-menu-item" href="#" data-menuid="5"
                                       data-show='{"deleted": false, "status": "All", "tags":"Personal"}'>
                                        <i class="align-middle me-2 sw-2 d-inline-block"></i>
                                        <i data-cs-icon="circle" data-cs-size="17" class="me-2 text-warning"></i>
                                        <span class="d-inline-block mt-1 align-middle">Personal</span>
                                    </a>
                                    <a class="nav-link px-0 py-2 task-menu-item" href="#" data-menuid="6"
                                       data-show='{"deleted": false, "status": "All", "tags":"Urgent"}'>
                                        <i class="align-middle me-2 sw-2 d-inline-block"></i>
                                        <i data-cs-icon="circle" data-cs-size="17" class="me-2 text-danger"></i>
                                        <span class="d-inline-block mt-1 align-middle">Urgent</span>
                                    </a>
                                    <a class="nav-link px-0 py-2 task-menu-item" href="#" data-menuid="7"
                                       data-show='{"deleted": false, "status": "All", "tags":"Lists"}'>
                                        <i class="align-middle me-2 sw-2 d-inline-block"></i>
                                        <i data-cs-icon="circle" data-cs-size="17" class="me-2 text-success"></i>
                                        <span class="d-inline-block mt-1 align-middle">Lists</span>
                                    </a>
                                </div>
                                <a class="nav-link px-0 border-separator-light task-menu-item" href="#" data-menuid="8"
                                   data-show='{"deleted": true, "status":"All", "tags": "All"}'>
                                    <i data-cs-icon="bin"></i>
                                    <span class="align-middle">Trash</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Content End -->

        <!-- New Task / Edit Task Start -->
        <div class="modal modal-right fade" id="newTaskModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="taskModalTitle">New Task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column">
                        <div class="mb-3 filled w-100 d-flex flex-column">
                            <i data-cs-icon="edit-square"></i>
                            <input class="form-control" placeholder="Title" id="newTaskTitle"/>
                        </div>
                        <div class="mb-3 filled">
                            <textarea placeholder="Detail" class="form-control" rows="4" id="newTaskDetail"></textarea>
                            <i data-cs-icon="notebook-1"></i>
                        </div>
                        <div class="mb-3 filled w-100">
                            <i data-cs-icon="bookmark"></i>
                            <select data-placeholder="Tags" multiple="multiple" id="newTaskTags">
                                <option label="&nbsp;"></option>
                                <option data-class="border-primary" data-selection-color="text-primary" value="Project">
                                    Project
                                </option>
                                <option data-class="border-warning" data-selection-color="text-warning"
                                        value="Personal">Personal
                                </option>
                                <option data-class="border-danger" data-selection-color="text-danger" value="Urgent">
                                    Urgent
                                </option>
                                <option data-class="border-success" data-selection-color="text-success" value="Lists">
                                    Lists
                                </option>
                            </select>
                        </div>
                        <div class="mb-3 filled mb-0 w-100">
                            <i data-cs-icon="activity"></i>
                            <select class="select-single-no-search-filled" data-placeholder="Status" id="newTaskStatus">
                                <option label="&nbsp;"></option>
                                <option value="Active">Active</option>
                                <option value="Done">Done</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button class="btn btn-icon btn-icon-end btn-primary d-none" type="button"
                                id="newTaskAddButton">
                            <span>Add</span>
                            <i data-cs-icon="plus"></i>
                        </button>
                        <button class="btn btn-icon btn-icon-end btn-primary d-none" type="button" id="saveTaskButton">
                            <span>Save</span>
                            <i data-cs-icon="check"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Task / Edit Task End -->
    </div>
@endsection

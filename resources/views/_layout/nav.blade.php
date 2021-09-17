<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="logo position-relative">
        <a href="/">
            <!-- Logo can be added directly -->
        <!-- <img src="{{ asset('/img/logo/logo-white.svg') }}" alt="logo" /> -->
            <!-- Or added via css to provide different ones for different color themes -->
            <div class="img"></div>
        </a>
    </div>
    <!-- Logo End -->
    <!-- Language Switch Start -->
    <div class="language-switch-container">
        <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">EN
        </button>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">DE</a>
            <a href="#" class="dropdown-item active">EN</a>
            <a href="#" class="dropdown-item">ES</a>
        </div>
    </div>
    <!-- Language Switch End -->
    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('/img/profile/profile-9.jpg') }}"/>
            <div class="name">Lisa Jackson</div>
        </a>
        <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">ACCOUNT</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">User Info</a>
                        </li>
                        <li>
                            <a href="#">Preferences</a>
                        </li>
                        <li>
                            <a href="#">Calendar</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Security</a>
                        </li>
                        <li>
                            <a href="#">Billing</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-2 pt-2">
                    <div class="text-extra-small text-primary">APPLICATION</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Themes</a>
                        </li>
                        <li>
                            <a href="#">Language</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Devices</a>
                        </li>
                        <li>
                            <a href="#">Storage</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                    <div class="separator-light"></div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Help</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i data-cs-icon="file-text" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Docs</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- User Menu End -->
    <!-- Icons Menu Start -->
    <ul class="list-unstyled list-inline text-center menu-icons">
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-cs-icon="search" data-cs-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="pinButton" class="pin-button">
                <i data-cs-icon="lock-on" class="unpin" data-cs-size="18"></i>
                <i data-cs-icon="lock-off" class="pin" data-cs-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="colorButton">
                <i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
                <i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true"
               aria-expanded="false" class="notification-button">
                <div class="position-relative d-inline-flex">
                    <i data-cs-icon="bell" data-cs-size="18"></i>
                    <span class="position-absolute notification-dot rounded-xl"></span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                <div class="scroll">
                    <ul class="list-unstyled border-last-none">
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="{{ asset('/img/profile/profile-1.jpg') }}"
                                 class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..."/>
                            <div class="align-self-center">
                                <a href="#">Joisse Kaycee just sent a new comment!</a>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="{{ asset('/img/profile/profile-2.jpg') }}"
                                 class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..."/>
                            <div class="align-self-center">
                                <a href="#">New order received! It is total $147,20.</a>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="{{ asset('/img/profile/profile-3.jpg') }}"
                                 class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..."/>
                            <div class="align-self-center">
                                <a href="#">3 items just added to wish list by a user!</a>
                            </div>
                        </li>
                        <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="{{ asset('/img/profile/profile-6.jpg') }}"
                                 class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..."/>
                            <div class="align-self-center">
                                <a href="#">Kirby Peters just sent a new message!</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    <!-- Icons Menu End -->
    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">
            <li>
                <a href="#dashboards" data-href="#">
                    <i data-cs-icon="home" class="icon" data-cs-size="18"></i>
                    <span class="label">Dashboards</span>
                </a>
                <ul id="dashboards">
                    <li>
                        <a href="#">
                            <span class="label">Default</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Visual</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Analytic</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#apps" data-href="/Apps">
                    <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                    <span class="label">Apps</span>
                </a>
                <ul id="apps">
                    <li>
                        <a href="#">
                            <span class="label">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Contacts</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Mailbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Tasks</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pages" data-href="/Pages">
                    <i data-cs-icon="notebook-1" class="icon" data-cs-size="18"></i>
                    <span class="label">Pages</span>
                </a>
                <ul id="pages">
                    <li>
                        <a href="#authentication" data-href="/Pages/Authentication">
                            <span class="label">Authentication</span>
                        </a>
                        <ul id="authentication">
                            <li>
                                <a href="#">
                                    <span class="label">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Forgot Password</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Reset Password</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#blog" data-href="#">
                            <span class="label">Blog</span>
                        </a>
                        <ul id="blog">
                            <li>
                                <a href="#">
                                    <span class="label">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Grid</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">List</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Detail</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#miscellaneous" data-href="/Pages/Miscellaneous">
                            <span class="label">Miscellaneous</span>
                        </a>
                        <ul id="miscellaneous">
                            <li>
                                <a href="#">
                                    <span class="label">Faq</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Knowledge Base</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Error</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Coming Soon</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Pricing</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Search</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Mailing</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Empty</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#portfolio" data-href="#">
                            <span class="label">Portfolio</span>
                        </a>
                        <ul id="portfolio">
                            <li>
                                <a href="#">
                                    <span class="label">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Detail</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#profile" data-href="#">
                            <span class="label">Profile</span>
                        </a>
                        <ul id="profile">
                            <li>
                                <a href="#">
                                    <span class="label">Standard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#blocks" data-href="#">
                    <i data-cs-icon="grid-5" class="icon" data-cs-size="18"></i>
                    <span class="label">Blocks</span>
                </a>
                <ul id="blocks">
                    <li>
                        <a href="#">
                            <span class="label">Images</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">List</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Tabular Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Thumbnails</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Cta</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Stats</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Steps</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Details</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mega">
                <a href="#interface" data-href="/Interface">
                    <i data-cs-icon="pocket-knife" class="icon" data-cs-size="18"></i>
                    <span class="label">Interface</span>
                </a>
                <ul id="interface">
                    <li>
                        <a href="#interfaceComponents" data-href="/Interface/Components">
                            <span class="label">Components</span>
                        </a>
                        <ul id="interfaceComponents">
                            <li>
                                <a href="#">
                                    <span class="label">Accordion</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Alerts</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Badge</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Breadcrumb</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Button Group</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Card</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Close Button</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Collapse</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Dropdowns</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">List Group</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Modal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Navs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Offcanvas</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Pagination</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Popovers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Progress</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Spinners</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Toasts</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Tooltips</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#interfaceForms" data-href="/Interface/Forms">
                            <span class="label">Forms</span>
                        </a>
                        <ul id="interfaceForms">
                            <li>
                                <a href="#">
                                    <span class="label">Layouts</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Wizard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Input Group</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Input Mask</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Generic Forms</span>
                                </a>
                            </li>
                            <li>
                                <a href="#formControls" data-href="#">
                                    <span class="label">Controls</span>
                                </a>
                                <ul id="formControls">
                                    <li>
                                        <a href="#">
                                            <span class="label">Autocomplete</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Checkbox-Radio</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Date Picker</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Dropzone</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Editor</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Input Spinner</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Rating</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Select2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Slider</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Tags</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Time Picker</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#interfacePlugins" data-href="/Interface/Plugins">
                            <span class="label">Plugins</span>
                        </a>
                        <ul id="interfacePlugins">
                            <li>
                                <a href="#">
                                    <span class="label">Carousel</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Clamp</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Context Menu</span>
                                </a>
                            </li>
                            <li>
                                <a href="#pluginsDatatables" data-href="#">
                                    <span class="label">Datatables</span>
                                </a>
                                <ul id="pluginsDatatables">
                                    <li>
                                        <a href="#">
                                            <span class="label">Editable Rows</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Editable Boxed</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Ajax Data</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Server Side</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Boxed Variations</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Lightbox</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">List</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Maps</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Notify</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Players</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Progress</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Scrollbar</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Shortcuts</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Sortable</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#interfaceContent" data-href="/Interface/Content">
                            <span class="label">Content</span>
                        </a>
                        <ul id="interfaceContent">
                            <li>
                                <a href="#icons" data-href="#">
                                    <span class="label">Icons</span>
                                </a>
                                <ul id="icons">
                                    <li>
                                        <a href="#">
                                            <span class="label">CS Line Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">CS Interface Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Bootstrap Icons</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Images</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label">Typography</span>
                                </a>
                            </li>
                            <li>
                                <a href="#menuVarieties" data-href="/Interface/Content/Menu">
                                    <span class="label">Menu</span>
                                </a>
                                <ul id="menuVarieties">
                                    <li>
                                        <a href="#">
                                            <span class="label">Horizontal</span>
                                        </a>
                                    </li>
                                    <li></li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Vertical</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Vertical Hidden</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Vertical No Hidden</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Mobile Only</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label">Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Menu End -->
    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Scrollspy Mobile Button Start -->
        <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
            <i data-cs-icon="menu-dropdown"></i>
        </a>
        <!-- Scrollspy Mobile Button End -->
        <!-- Scrollspy Mobile Dropdown Start -->
        <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
        <!-- Scrollspy Mobile Dropdown End -->
        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-cs-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->
</div>
<div class="nav-shadow"></div>

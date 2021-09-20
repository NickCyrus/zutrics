
@php
   use App\Http\Controllers\LoginAdmin;
   use App\Http\Controllers\MenuleftController;

   $infoUser = LoginAdmin::getInfoLogin();
   
@endphp

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
     
    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('/images/logo-zutrics-logo.png') }}"/>
            <div class="name">{{$infoUser->name}}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">Mi cuenta</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="/profile">Mi cuenta</a>
                        </li>
                        <li>
                            <a href="/logout" class="confirmacion" data-title="¿Ralmente desea cerrar sesión?">
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
     
    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">

            <li>
                <a href="#dashboards" data-href="/Dashboards">
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
                        <a href="#>
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

<?php
    use App\Http\Controllers\UserController
?>
<li>
    <div class="dropdown drp-user">
        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="icon feather icon-settings"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right profile-notification">
            <div class="pro-head">
                <!-- <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" class="img-radius" alt="User-Profile-Image"> !-->
                <span>Hola, <b>{{UserController::infoUser('name')}}</b></span>
                <a href="{{ url('logout')}}" class="dud-logout confirmacion" data-title="Desea cerrar sesión?" title="Logout">
                    <i class="feather icon-log-out"></i>
                </a>
            </div>
            <ul class="pro-body">
                <li><a href="{{ url('profile') }}" class="dropdown-item"><i class="feather icon-user"></i> Perfil</a></li>
                <li><a href="{{ url('logout') }}" class="dropdown-item confirmacion" data-title="Desea cerrar sesión?"><i class="feather icon-lock"></i> Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
</li>

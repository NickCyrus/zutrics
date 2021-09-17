@php
    $title = 'Login';
    $description = 'Login';
    $html_tag_data = array('placement'=>"vertical",
                           'behaviour'=>"pinned",
                           'layout'=>"fluid",
                           'radius'=>"rounded",
                           'color'=>"light-blue",
                           'navcolor'=>"default",
                           'show'=>"true",
                           'footer'=>"false"

      );

@endphp
@extends('layout_full',[
'title'=>$title,
'description'=>$description,
'html_tag_data'=>$html_tag_data
])
@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
@endsection

@section('js_page')

@endsection

@section('content_left')
    <div class="min-h-100 d-flex align-items-center">
        <div class="w-100 w-lg-75 w-xxl-50">
            <div>
                <div class="mb-5">
                    <h1 class="display-3 text-white">Zutrics</h1>
                </div>
                <p class="h6 text-white lh-1-5 mb-5">
                    Una plataforma de salud digital en función de la autogestión y prevención de factores de riesgo y sus complicaciones.
                </p>
                <div class="mb-5">
                    <a class="btn btn-lg btn-outline-white" href="https://www.zutrics.com/" target="_blank">Visitanos</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content_right')


    <div
        class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
            <div class="sh-11">
                <a href="{{ url('/') }}">
                    <div class="logo-default login"></div>
                </a>
            </div>
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Bienvenid@s,</h2>

            </div>
            <div class="mb-5">
                <p class="h6">Por favor digita tus datos de acceso.</p>

            </div>
            <div>
                <form id="loginForm" method="POST" class="tooltip-end-bottom">
                    @csrf
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-cs-icon="email"></i>
                        <input class="form-control" placeholder="Email" name="userName" id="userName" required />
                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-cs-icon="lock-off"></i>
                        <input class="form-control pe-7" name="passName" id="passName" type="password" placeholder="Password" required/>
                        <a class="text-small position-absolute t-3 e-3"
                           href="{{ url('forgotpassword') }}">¿Olvide la contraseña?</a>
                    </div>

                    @if (session('errorLogin'))
                            {{ _html( array('e'=>'div',
                                            'atts'=>array("class"=>"alert alert-danger"),
                                            'text'=>"<i class='fa fa-info'></i> ".session('errorLogin') )) }}
                    @endif

                    <button type="submit" class="btn btn-lg btn-primary">Acceder</button>
                </form>
            </div>
        </div>
    </div>

@endsection

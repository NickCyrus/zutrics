@php
    $html_tag_data = [];
    $title = 'Selecionar Tema';
    $description = 'Selecionar Tema';
    $breadcrumbs = ["#"=>"Home", "/#"=>"Pages", "#/Pages/Miscellaneous"=>"Miscellaneous"]
@endphp

@extends('layoutdemo',['html_tag_data'=>$html_tag_data,'title'=>$title,'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection


@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <h2>Bienvenid@ es hora de configurar la apariencia de la App.</h2>
        <div class="card mb-5 mt-5">
            <div class="card-body h-100">
                <h3>Esto es una <b>DEMO</b> de previsualización de la distribución de la App.</h3>
                <p>Juega con el editor de temas para lográn la apariencia deseada.</p>

                <div class="text-center">
                    <button class="btn btn-primary" id="btnStartTheme" data-bs-toggle="modal" data-bs-target="#settings">Comensar</button>
                    <form id="loginForm" method="POST" class="tooltip-end-bottom" action="savetheme">
                        @csrf
                        <button class="btn btn-success hide "  id="btnSaveTheme" >Guardar cambios</button>
                    </form>       

                </div>
            </div>
        </div>
        <!-- Content End -->
    </div>
@endsection


@section('js_page')
    <script>

        $(function(){

            $('a').click(function(){
                $('#btnStartTheme').hide();
                $('#btnSaveTheme').show();
                var data = $(this).data();

                if ( $('#themeOption'+data.parent).length){
                    $('#themeOption'+data.parent).val(data.value);
                }else{
                    $('#loginForm').append('<input type="hidden" class="themeOption" id="themeOption'+data.parent+'" name="'+data.parent+'" value="'+data.value+'" />');
                }

            })

        })

    </script>
@endsection

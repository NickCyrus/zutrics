@extends('layout')

@section('title','Dashboard')


@section('content')

        <div class="card">

                @include('part.card-header',["infoApp"=>$infoApp])

                <div class="card-body">
                    <form action="{{ url($infoApp->urlapp) }}/buscador" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('part.search')
                    </form>

                    <table class="table table-slim table-hover">
                            <thead>

                                    <th>ID_EMP</th>
                                    <th>DESCRIPCION</th>
                                    <th>NIT</th>
                                    <th>F_VALIDEZ</th>
                                    <th>COD_EMP_REL</th>
                                    <th>Teléfono</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $modules as $module)
                                    <tr>
                                        <td>{{$module->ID_EMP}}</td>
                                        <td>{{$module->DESCRIPCION}}</td>
                                        <td>{{$module->NIT}}</td>
                                        <td>{{_fechaInput($module->F_VALIDEZ)}}</td>
                                        <td>{{$module->COD_EMP_REL}}</td>
                                        <td>
                                            @include('part.btnsimpleactions', ["keyid"=>$module->ID_EMP ,"permisos"=>$permisos , "infoApp"=>$infoApp])
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                    @include('part.paginate', ["modules"=>$modules])
            </div>
        </div>

@endsection


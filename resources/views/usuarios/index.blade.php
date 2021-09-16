@extends('layout')

@section('title',$infoApp->nameapp)

@section('content')

        <div class="card">
                <div class="card-header">
                    <h5><i class="{{$infoApp->iconapp}}"></i> {{$infoApp->nameapp}}</h3></h5>
                    @if ($permisos->anew)
                    <div class="pull-right">
                            <a class="btn btn-sm btn-primary" href="{{ url($infoApp->urlapp.'/create' ) }}">Nuevo</a>
                    </div>
                @endif
                </div>
                <div class="card-body">

                <table class="table table-slim table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Perfil</th>
                                <th>Empresa</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $modules as $module)
                                <tr>
                                    <td>{{$module->id}}</td>
                                    <td>{{$module->name}}</td>
                                    <td>{{$module->email}}</td>
                                    <td>{{$module->profname}}</td>
                                    <td>{{$module->empresas}}</td>
                                    <td>
                                        @php
                                            $edit   = true;
                                            $delete = true;
                                            if ($module->id == 1) $delete = false;
                                        @endphp
                                        @include('part.btnaction', ["permisos"=>$permisos , "edit"=>$edit, "delete"=>$delete , "logs"=>true , "infoApp"=>$infoApp])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
                @include('part.paginate', ["modules"=>$modules])
            </div>
        </div>

@endsection



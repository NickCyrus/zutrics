@extends('layout')

@section('title','Zonas Especiales')


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

                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>EMPRESA</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $modules as $module)
                                <tr>
                                    <td>{{$module->ID_ZE}}</td>
                                    <td>{{($module->NOMBRE_ZE)}}</td>
                                    <td>{{($module->DESCRIPCION)}}</td>

                                    <td>
                                        <div class="row">
                                            <div class="col">

                                            @if ($permisos->aedit)
                                                <a class="btn btn-sm btn-primary m-0" href="{{ url($infoApp->urlapp.'/'.$module->ID_ZE.'/edit' ) }}">Editar</a>
                                            @endif
                                            @if ($permisos->adelete)
                                                <form action="{{ url($infoApp->urlapp.'/'.$module->ID_ZE ) }}" method="post" class="d-inline">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-sm btn-danger m-0 confirmacion" data-title="Desea borrar este usuario ?">Borrar</button>
                                                </form>
                                            @endif

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>

@endsection


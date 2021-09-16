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
                                <th>ZONA ESPECIAL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $modules as $module)
                                <tr>
                                    <td>{{$module->ID_TRAFO}}</td>
                                    <td>{{($module->NOMBRE_TRAFO)}}</td>
                                    <td>{{($module->NOMBRE_ZE)}}</td>

                                    <td>
                                        <div class="row">
                                            <div class="col">
                                              @if ($permisos->aedit)
                                                <a class="btn btn-sm btn-primary m-0" href="{{ url('trafos/'.$module->ID_TRAFO.'/edit' ) }}">Editar</a>
                                                @endif
                                                @if ($permisos->adelete)
                                                <form action="{{ url('trafos/'.$module->ID_TRAFO ) }}" method="post" class="d-inline">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-sm btn-danger m-0 confirmacion" data-title="Desea borrar este trafo ?">Borrar</button>
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


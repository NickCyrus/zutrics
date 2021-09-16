@extends('layout')

@section('title', $infoApp->nameapp )

@section('content')

        <div class="card">
                @include('part.card-header',['infoApp'=>$infoApp])
                <div class="card-body">
                <table class="table table-slim table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Perfil</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $modules as $module)
                                <tr>
                                    <td>{{$module->id}}</td>
                                    <td>{{$module->profname}}</td>
                                    <td>
                                        <div class="row">
                                            @include('part.btnsimpleactions',['permisos'=>$permisos, "module"=>$module])
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
                @include('part.paginate',['modules'=>$modules])
            </div>
        </div>

@endsection


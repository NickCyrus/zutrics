@extends('layout',[
    'title'=>'Modulos',
    'description'=>''
])

@section('content')

        <div class="card">
                @include('part.card-header',['infoApp'=>$infoApp])
                <!-- END CARD !-->
                <div class="card-body">
                    <table class="table table-slim table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Modulo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $modules as $module)
                                    <tr>
                                        <td>{{$module->id}}</td>
                                        <td><i class="@if ($module->iconapp) {{$module->iconapp}} @endif"></i> {{$module->nameapp}}</td>
                                        <td>
                                            @include('part.btnsimpleactions',['permisos'=>$permisos, "module"=>$module])
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                    @include('part.paginate',['modules'=>$modules])
                </div>
                <!-- END CARD !-->
        </div>
@endsection


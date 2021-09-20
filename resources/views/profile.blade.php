

@extends('layout')

@section('title','Profile')

@section('content')

        <div class="card">
                <div class="card-header">
                    <h5 class="fz-20">
                        <i class="feather icon-user"></i> Perfil de usuario
                    </h5>
                </div>
                <div class="card-block p-3">
                    <div class="row">
                        @if (isset($Response))
                            <div class="col-md-12 mb-3">
                                <div class="alert alert-success"> <i class="fa fa-check"></i> Guardado correctamente.</div>
                            </div>
                        @endif
                        <div class="col-md-6 mb-3">
                                <h5 class="bold">Información</h5>
                                <form autocomplete="off" action="{{ url('profile') }}" id="form-profile" method="post" enctype="multipart/form-data">
                                        @csrf
                                <table class="table">
                                        <tr>
                                        <td>Nombre</td>
                                        <td class="data">: {{ $User->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td class="data">: {{ $User->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Última conexión</td>
                                            <td class="data">: {{ _fecha($User->updated_at) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Cambiar password</td>
                                            <td class="data">
                                                <input type="password" class="form-control" id="pass1" name="pass1" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Confirmar password</td>
                                            <td class="data">
                                                <input type="password" class="form-control" id="pass2" name="pass2" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="">
                                                <button class="btn btn-primary">Guardar</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="fz-20 bold">
                                            <i class="feather icon-user"></i> Logs de actividad reciente
                                        </h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table">
                                                    <thead>
                                                        <tr class="cap">
                                                            <th>IP</th>
                                                            <th>Fecha</th>
                                                            <th>Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($logact))
                                                            @if (count($logact) >= 1)
                                                                @foreach ( $logact as  $row)
                                                                    <tr>
                                                                        <td>{{$row->ipaccess}}</td>
                                                                        <td>{{_fecha($row->created_at)}}</td>
                                                                        <td>{{$row->comment}}</td>
                                                                    </tr>
                                                                @endforeach
                                                            @endif
                                                        @endif
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="fz-20 bold">
                                        <i class="feather icon-user"></i> Logs de acceso
                                    </h5>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">

                                <table class="table">
                                        <thead>
                                            <tr class="cap">
                                                <th>IP</th>
                                                <th>Dispositivo</th>
                                                <th>Fecha</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($records))
                                                @if (count($records) >= 1)
                                                    @foreach ( $records as  $row)
                                                        <tr>
                                                            <td>{{$row->ipaccess}}</td>
                                                            <td>{{$row->agent}}</td>
                                                            <td>{{_fecha($row->created_at)}}</td>
                                                            <td>{{$row->event}}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            @endif
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                         </div>
                    </div>
                </div>

        </div>

@endsection

@section('addFooter')

    <script>
        $(function(){

                $('#form-profile').submit(function(e){

                    var pass1  = $('#pass1').val();
                    var pass2  = $('#pass2').val();

                    if (pass1){

                        if (pass1 && !pass2){
                            $('#pass2').focus();
                            e.preventDefault();
                        }else if (pass1 != pass2){
                            fn.alert('Las contraseñas no coinciden');
                            e.preventDefault()
                        }else if (pass1.length < 6){
                            fn.alert('Las contraseñas debe tener mínimo 6 caracteres');
                            e.preventDefault()
                        }
                    }else{
                        fn.alert('Lo sentimos no hay nada para actualizar.');
                        e.preventDefault()
                    }
                })

        })
    </script>

@endsection

@extends('layout')

@section('title', $infoApp->nameapp)


@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="fz-20 bold">
            <i class="feather icon-user"></i> Logs de actividades recientes de usuarios
        </h5>
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table">
                    <thead>
                        <tr class="cap">
                            <th>IP</th>
                            <th>Fecha</th>
                            <th>Usuario</th>
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
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->comment}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endif
                    </tbody>
            </table>

            <div class="row col-md-12">
                <div class="m-auto">
                    {{ $logact->links() }}
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

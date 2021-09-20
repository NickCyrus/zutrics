@php
    $idItem = (isset($keyid)) ? $keyid : $module->id
@endphp
<div class="row">
    <div class="col">
    @if ($permisos->aedit)
        <a class="btn btn-sm btn-primary m-0" href="{{ URL::to("{$infoApp->urlapp}/{$idItem}/edit")}}">Editar</a>
    @endif

    @if ($permisos->adelete)
        <form action="{{ URL::to("{$infoApp->urlapp}/{$idItem}")}}" method="post" class="d-inline">
                @csrf
                {{ method_field('DELETE') }}
                <button class="btn btn-sm btn-danger m-0 confirmacion" data-title="Desea borrar este modulo ?">Borrar</button>
        </form>
    @endif
    </div>
</div>

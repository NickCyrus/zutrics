<div class="col-md-12">
    <a href="/{{$infoApp->urlapp}}" class="btn btn-sm btn-danger">Cancelar</a>
    <button type="submit" onClick="@if(isset($onClick)){{$onClick}}@endif" class="btn btn-sm btn-primary">Guardar</button>
</div>

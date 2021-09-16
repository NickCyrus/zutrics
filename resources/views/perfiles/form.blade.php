<div class="row">
    <div class="card col-md-12">
        <div class="card-header">
            <h5><i class="{{$infoApp->iconapp}}"></i> {{$infoApp->nameapp}}</h3></h5>
        </div>
        <div class="card-body">
            <div class="row">

                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Nombre del perfil</label>
                            <div class="input-group">
                                 <input type="text" class="form-control" id="profname" name="profname" value="{{old('profname',$modules->profname)}}"  placeholder="Nombre del perfil" autofocus required>
                                 @error('profname')
                                     <div class="p-1 error-field">{{$message}}</div>
                                 @enderror
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                            <table class="table table-hover">
                                    <tr class="cap">
                                        <td>Módulo</td>
                                        <td class="text-center"> Habilitado</td>
                                        <td class="text-center"> Crear</td>
                                        <td class="text-center"> Editar</td>
                                        <td class="text-center"> Eliminar</td>
                                    </tr>

                                    @if (isset($modolosapp))
                                        @foreach ($modolosapp as $modulos )
                                            <tr>
                                                <td>{{$modulos->nameapp}}</td>
                                                <td><input @if(isset($permod) && $permod[$modulos->id]['aview']) checked @endif class="form-control" type="checkbox" name="actionView[{{$modulos->id}}]" value="1" /></td>
                                                <td><input @if(isset($permod) && $permod[$modulos->id]['anew']) checked @endif class="form-control" type="checkbox" name="actionNew[{{$modulos->id}}]" value="1" /></td>
                                                <td><input @if(isset($permod) && $permod[$modulos->id]['aedit']) checked @endif class="form-control" type="checkbox" name="actionEdit[{{$modulos->id}}]" value="1" /></td>
                                                <td><input @if(isset($permod) && $permod[$modulos->id]['adelete']) checked @endif class="form-control" type="checkbox" name="actionDele[{{$modulos->id}}]" value="1" /></td>
                                            </tr>
                                        @endforeach
                                    @endif
                            </table>
                            <div class="alert alert-warning"> Para poder acceder a los modulos debe estar marcado el check "Habilitado" </div>
                    </div>
                    @include('part.btn-submit',["infoApp"=>$infoApp , "onClick"=>"return validarPerfil('#profname')"])


                </div>
        </div>
    </div>
</div>
@section('addFooter')
    <script>
        function validarPerfil(input){

            fn.ajax({
                        beforeSend : function(){
                            fn.wait('Por favor espere');
                        },
                        @if(isset($modules->id))
                            url : '{{URL::to($infoApp->urlapp)}}/exist/'+$(input).val()+'/{{$modules->id}}',
                        @else
                             url : '{{URL::to($infoApp->urlapp)}}/exist/'+$(input).val(),
                        @endif
                        success : function(resp){
                            if (resp.rs === 1){
                                fn.closeModal()
                                fn.alert("Lo sentimos el perfil <b>"+$(input).val()+"</b> ya está en uso.");
                            }else{
                                fn.closeModal()
                                $(input).parents('form').submit();
                            }
                        }
            })

            return false;
        }
    </script>
@endsection

<?php

    use App\Http\Controllers\ToolsController;
    use App\Http\Controllers\PerfilesController;
    use App\Http\Controllers\EmpresasController;

?>
<div class="row">
    <div class="card col-md-12">
        <div class="card-header">
            <h5><i class="{{$infoApp->iconapp}}"></i> {{$infoApp->nameapp}}</h3></h5>
        </div>
        <div class="card-body">

            <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name',$modules->name)}}"  placeholder="Nombre" autofocus required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email',$modules->email)}}"  placeholder="Email" required>
                         @error('email')
                                  <div class="p-1 error-field">{{$message}}</div>
                         @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Perfil</label>
                        {{PerfilesController::selectPerfilesFrom($modules->profid)}}
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" value=""  {{isset($isnew) ? 'required' : ''}}   placeholder="Contraseña">
                        @error('password')
                            <div class="p-1 error-field">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Confirmar contraseña</label>
                        <input type="password" class="form-control" id="password2" name="password2" value="" {{isset($isnew) ? 'required' : ''}}  placeholder="Confirmar contraseña">
                    </div>
                    @include('part.btn-submit',["infoApp"=>$infoApp])


                </div>
        </div>
    </div>
</div>

@section('addFooter')
    <script>

        $(function(){

                $('#f{{$infoApp->urlapp}}').submit(function(e){

                    var self =  $(this);
                    var input = '#email';

                    e.preventDefault();

                    @if (isset($isnew))
                        if (!$('#password').val()  ){
                            fn.alert("Por favor indique una contraseña");
                            return false;
                        }
                    @endif

                    if ($('#password').val()){
                        if ($('#password').val() != $('#password2').val() ){
                            fn.alert("Las contraseñas no coinciden");
                            return false;
                        }
                    }

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
                                    fn.alert("Lo sentimos el email <b>"+$(input).val()+"</b> ya está en uso.");
                                }else{
                                    fn.closeModal()
                                    self.unbind()
                                    self.submit();
                                }
                            }
                    })

                })
        })

    </script>
@endsection


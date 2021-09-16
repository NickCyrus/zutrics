<?php
    use App\Http\Controllers\EmpresasController;

?>

<div class="row">
    <div class="card col-md-12">
        <div class="card-header">
            <h5><i class="{{$infoApp->iconapp}}"></i> {{$infoApp->nameapp}}</h3></h5>
        </div>
        <div class="card-body">
            <div class="row">
                    <div class="col-md-6">

                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">ID_EMP</label>
                            </div>
                            <div class="col-sm-9">
                                @if (isset($modules->ID_EMP))
                                    {{EmpresasController::selectEmpresas($modules->ID_EMP)}}
                                @else
                                    {{EmpresasController::selectEmpresas()}}
                                @endif
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">NOMBRE_ZE</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="NOMBRE_ZE"  value="@if (isset($modules->NOMBRE_ZE)){{$modules->NOMBRE_ZE}}@endif" class="form-control" required>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">TIP_ZE</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="TIP_ZE"  value="@if (isset($modules->TIP_ZE)){{$modules->TIP_ZE}}@endif" class="form-control" required>
                            </div>
                        </div>



                    </div>
                    <div class="col-sm-6">






                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">F_VALID</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="date" name="F_VALID"  value="@if (isset($modules->F_VALID)){{$modules->F_VALID}}@endif" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <label class="col-form-label">IND_VALIDEZ_UNIV</label>
                                        <input type="number" name="IND_VALIDEZ_UNIV"  value="@if (isset($modules->IND_VALIDEZ_UNIV)){{$modules->IND_VALIDEZ_UNIV}}@endif" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <label class="col-form-label">IND_VALIDEZ_LIQ</label>
                                        <input type="number" name="IND_VALIDEZ_LIQ"  value="@if (isset($modules->IND_VALIDEZ_LIQ)){{$modules->IND_VALIDEZ_LIQ}}@endif" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <label class="col-form-label">IND_VALIDA_DBDO</label>
                                        <input type="number" name="IND_VALIDA_DBDO"  value="@if (isset($modules->IND_VALIDA_DBDO)){{$modules->IND_VALIDA_DBDO}}@endif" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="col-md-12">
                        <a href="/zonasespeciales" class="btn btn-sm btn-danger">Cancelar</a>
                        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                    </div>


                </div>
        </div>
    </div>
</div>

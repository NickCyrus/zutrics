<?php
    use App\Http\Controllers\zonasespecialesController;

?>

<div class="row">
    <div class="card col-md-12">
        <div class="card-header">
            <h5>TRAFOS</h5>
        </div>
        <div class="card-body">
            <div class="row">
                    <div class="col-md-6">

                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">ID_ZE</label>
                            </div>
                            <div class="col-sm-9">
                                @if (isset($modules->ID_ZE))
                                    {{zonasespecialesController::selectZe($modules->ID_ZE)}}
                                @else
                                     {{zonasespecialesController::selectZe()}}
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">NOMBRE_TRAFO</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="NOMBRE_TRAFO"  value="@if (isset($modules->NOMBRE_TRAFO)){{$modules->NOMBRE_TRAFO}}@endif" class="form-control" required>
                            </div>
                        </div>

                    </div>



                    </div>


                    <div class="col-md-12">
                        <a href="/trafos" class="btn btn-sm btn-danger">Cancelar</a>
                        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                    </div>


                </div>
        </div>
    </div>
</div>

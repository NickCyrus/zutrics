<div class="row">
    <div class="card col-md-12">
        @include('part.card-header',["infoApp"=>$infoApp])
        <div class="card-body">
            <div class="row">

                    <div class="col-md-6">

                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">DESCRIPCION</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="DESCRIPCION" value="{{old('DESCRIPCION',$modules->DESCRIPCION)}}" required >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">NIT</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="NIT"  value="{{old('NIT',$modules->NIT)}}" class="form-control" required>
                                @error('NIT')
                                    <div class="p-1 error-field">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">F_VALIDEZ</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="date" name="F_VALIDEZ"  value="{{old('F_VALIDEZ',$modules->F_VALIDEZ)}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="col-form-label">COD_EMP_REL</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="COD_EMP_REL"  value="{{old('COD_EMP_REL',$modules->COD_EMP_REL)}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
              </div>
                    @include('part.btn-submit',["infoApp"=>$infoApp])

                </div>
        </div>
    </div>
</div>

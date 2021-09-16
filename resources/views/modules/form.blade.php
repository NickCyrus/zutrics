<div class="row">
    <div class="card col-md-12">
        @include('part.card-header',['infoApp'=>$infoApp])
        <div class="card-body">

            <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Nombre del modulo</label>
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <input type="hidden" name="iconapp" id="iconapp" value="@if (isset($modules->iconapp)) {{$modules->iconapp}} @else feather icon-home  @endif"  />
                                    <input type="hidden" name="orderapp" value="@if (isset($modules->orderapp)) {{$modules->orderapp}} @endif" />
                                    <span class="input-group-text hand" id="iconapp_Icon" onclick="openSelectIcons('iconapp')"><i class="@if (isset($modules->iconapp)) {{$modules->iconapp}} @else feather icon-home  @endif"></i></span>
                                </div>
                                <input type="text" class="form-control" id="nameapp" name="nameapp" value="{{old('nameapp',$modules->nameapp)}}"  placeholder="Nombre del modulo" autofocus required>
                                @error('nameapp')
                                     <div class="p-1 error-field">{{$message}}</div>
                                @enderror
                            </div>
                            <br />

                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Url modulo</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text hand"><i class="simple-line sline-icon-link"></i></span>
                                </div>
                                <input type="text" class="form-control" id="urlapp" name="urlapp" value="{{old('urlapp',$modules->urlapp)}}"  placeholder="URL modulo" required>
                                @error('urlapp')
                                     <div class="p-1 error-field">{{$message}}</div>
                                @enderror
                            </div>
                            <br />

                    </div>
                    @include('part.btn-submit',["infoApp"=>$infoApp])
                </div>
        </div>
    </div>
</div>

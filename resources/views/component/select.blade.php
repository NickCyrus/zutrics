<select @if (isset($multiple) && $multiple ){{'multiple'}} @endif name="@if (isset($name)){{$name}}@endif"
id="@if (isset($name)){{$name}}@endif" class="form-control form-select @if (isset($class)) {{$class}}@endif"
onchange="@if (isset($onchange)){{$onchange}}@endif" @if (isset($dataattr)){{$dataattr}}@endif
@if (isset($required) && $required == true) required @endif   >

    @if (isset($items))
    @if (isset($multiple) && !$multiple) <option value="">@if (isset($textselect)) ? {{$textselect}} : {{'Seleccionar'}}@endif</option>@endif
        @foreach ($items as $item)


                @if( isset($item->value) && isset($selected) && is_array($selected) && in_array($item->value,$selected) )

                    <option selected value="{{$item->value}}">{{$item->label}}</option>
                @elseif( isset($item->value) && isset($selected) && $item->value == $selected)
                    <option selected value="{{$item->value}}">{{$item->label}}</option>
                @else
                    <option value="{{$item->value}}">{{$item->label}}</option>
                @endif
        @endforeach
    @endif
</select>

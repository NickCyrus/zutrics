@if (isset($items))
    @if (count($items) >= 1)
        @foreach ( $items as  $item)
            <li class="nav-item  {{ request()->is($item->urlapp.'*') ? ' pcoded-trigger' : ''}}">
                <a href="{{ url($item->urlapp) }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="{{$item->iconapp}}"></i></span>
                             <span class="label">{{$item->nameapp}}</span>
                </a>
            </li>
        @endforeach
    @endif
@endif


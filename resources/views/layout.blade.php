@php
    use App\Http\Controllers\ThemeController;
    /*
    data-url-prefix="/"
    data-footer="true"
    data-placement="horizontal"
    data-behaviour="pinned"
    data-layout="fluid"
    data-radius="rounded"
    data-color="light-blue"
    data-navcolor="default"
    data-show="true"
    ata-dimension="desktop"
    */
    $html_tag_data = array('placement'=>"vertical",
                           'behaviour'=>"pinned",
                           'layout'=>"fluid",
                           'radius'=>"rounded",
                           'color'=>"light-blue",
                           'navcolor'=>"default",
                           'show'=>"true",
                           'footer'=>"true",
                           'url-prefix'=>"/",
                           'dimension'=>"desktop"
                            );
@endphp
<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true"
      @isset($html_tag_data) @foreach ($html_tag_data as $key=> $value)
      data-{{$key}}='{{$value}}'
    @endforeach
    @endisset
>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Dashboard | {{$title}}</title>
    <meta name="description" content="{{$description}}"/>
    @include('_layout.head')
</head>

<body>
<div id="root">
    <div id="nav" class="nav-container d-flex" @isset($custom_nav_data) @foreach ($custom_nav_data as $key=> $value)
    data-{{$key}}="{{$value}}"
        @endforeach
        @endisset
    >
        @include('_layout.nav')
    </div>
    <main>
        @yield('content')
    </main>
    @include('_layout.footer')
</div>
<!-- include('_layout.modal_settings') !-->
@include('_layout.modal_search')
@include('_layout.scripts')
</body>

</html>

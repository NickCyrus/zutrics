@extends('layout')

@section('title',$infoApp->nameapp)


@section('content')
    <form action="{{ url($infoApp->urlapp) }}" id="f{{$infoApp->urlapp}}" method="post" enctype="multipart/form-data">
        @csrf
        @include($infoApp->urlapp.'.form')
    </form>
@endsection


@extends('layout')

@section('title','Dashboard')


@section('content')
    <form action="{{ route($infoApp->urlapp.'.update' , $modules->id) }}" id="f{{$infoApp->urlapp}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include($infoApp->urlapp.'.form')
    </form>

@endsection

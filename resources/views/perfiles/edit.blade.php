@extends('layout')

@section('title',$infoApp->nameapp)


@section('content')

    <form action="{{ route($infoApp->urlapp.'.update' , $modules->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include($infoApp->urlapp.'.form')
    </form>

@endsection

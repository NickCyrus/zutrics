@extends('layout')

@section('title',$infoApp->nameapp)


@section('content')
    <form action="{{ route('modules.update' , $modules->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('modules.form')
    </form>

@endsection

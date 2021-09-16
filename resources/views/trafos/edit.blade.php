@extends('layout')

@section('title','Trafos')


@section('content')

    <h3><i class="feather icon-codepen"></i> TRAFOS </h3>

    <form action="{{ route('trafos.update' , $modules->ID_TRAFO) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('trafos.form')
    </form>

@endsection

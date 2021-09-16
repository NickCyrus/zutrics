@extends('layout')

@section('title','Dashboard')


@section('content')

    <h3><i class="feather icon-codepen"></i> ZONAS ESPECIALES </h3>

    <form action="{{ route('zonasespeciales.update' , $modules->ID_ZE) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('zonasespeciales.form')
    </form>

@endsection

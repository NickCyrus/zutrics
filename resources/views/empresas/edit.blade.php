@extends('layout')

@section('title','Dashboard')

@section('content')
    <form action="{{ route('empresas.update' , $modules->ID_EMP) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('empresas.form')
    </form>

@endsection

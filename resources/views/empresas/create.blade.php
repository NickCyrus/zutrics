@extends('layout')

@section('title','Dashboard')

@section('content')
    <form action="{{ url('empresas') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('empresas.form')
    </form>
@endsection


@extends('layout')

@section('title', $infoApp->nameapp )

@section('content')
    @if(isset($error))
        <div class="alert alert-danger">{{$error}}</div>
    @endif
    <form action="{{ url($infoApp->urlapp) }}" id="f{{$infoApp->urlapp}}" method="post" enctype="multipart/form-data">
        @csrf
        @include($infoApp->urlapp.'.form')
    </form>
@endsection


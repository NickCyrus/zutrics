@php
    use App\Http\Controllers\UserController
@endphp

@extends('layout')

@section('title','Dashboard')


@section('content')

        <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h1>{{$nameApp->value}}</h1>
                        <h2>Bienvenid@  {{UserController::infoUser('name')}}</h2>

                    </div>
                </div>
        </div>

@endsection

@extends('layout-login')

@section('title', 'Login')

@section('content')
    <div class="auth-wrapper">
        <div class="auth-content">
            
            <div class="card">
                <form method="POST" id="form-login">
                    @csrf
                    <div class="card-body text-center">

                        <div class="my-3" >
                            <img src="images/logo-azul.png" class="img-fluid" alt="{{$nameApp->value }}" />
                        </div>

                        <div class="input-group mb-3">
                            <input type="email" name="userName" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" name="passName"  class="form-control" placeholder="password" required>
                        </div>
                        @if (session('errorLogin'))
                            {{ _html( array('e'=>'div',
                                            'atts'=>array("class"=>"alert alert-danger"),
                                            'text'=>"<i class='fa fa-info'></i> ".session('errorLogin') )) }}
                        @endif
                        
                        <button class="btn btn-primary shadow-2 mb-4">Acceder</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('addFooter')
    
@endsection
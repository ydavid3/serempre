@extends('welcome') 
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" id="loginForm">
                <span class="login100-form-logo">
                    <img src="images/logo.PNG" class="img-login rounded-circle">
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    Iniciar sesión
                </span>

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="Usuario" id="username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Contraseña" id="password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" id="btnLogin">
                        Ingresar
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
 
@section('js')
<script src="{{ asset('js/login/login.js')}}"></script>
@endsection
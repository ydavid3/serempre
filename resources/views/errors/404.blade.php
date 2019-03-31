@extends('welcome') 
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
                <span class="login100-form-logo">
						<img src="{{ url('images/logo.PNG')}}" class="img-login rounded-circle">
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
                        404 <br>
                        <h6>Página no encontrada</h6>
                    </span>
            </form>
        </div>
    </div>
</div>
@endsection
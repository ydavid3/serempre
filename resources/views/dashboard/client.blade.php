@extends('welcome') 
@extends('main.navbar') 
@extends('main.footer') 
@section('content')

<div class="container">
    <hr>
    <div class="card">
        <div class="card-header panel-header-sr text-center">
            Registar cliente
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="text" class="form-control" id="inputCod" placeholder="código">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="inputName" placeholder="Nombre">
            </div>
            <div class="form-group">
                <select class="form-control" id="selectDepartment">
						<option value="">Departamento</option>
					</select>
            </div>
            <div class="form-group">
                <select class="form-control" id="selectMunicipality">
						<option value="">Municipio</option>
					</select>
            </div>
            <button id="btnClientSave" class="btn pull-right btn-primary">Guardar</button>
        </div>
    </div>
    <hr>
</div>
@endsection
 
@section('js')
<script src="{{ asset('js/clients/client.js')}}"></script>
@endsection
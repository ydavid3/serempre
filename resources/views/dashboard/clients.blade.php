@extends('welcome') 
@extends('main.navbar') 
@extends('main.footer') 
@section('content')

<div class="container">
    <br>
    <hr>
    <h4 class="text-center text-primary">Clientes</h4>

    <br>

    <div class="form-group">
        <a href="{{url('/view/clients/create')}}" class=" btn text-right btn-outline-success">Crear</a>
    </div>


    <table class="table table-striped" id="clientsTable">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Actualizar</th>
                <th>Usuario</th>
                <th>Eliminar</th>
            </tr>
        </thead>
    </table>

</div>

<!-- Modal update -->
<div class="modal fade" id="updateClientModal" tabindex="-1" role="dialog" aria-labelledby="updateClientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Actualizar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
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
                    <select class="form-control invisible" id="selectMunicipality">
                                        <option value="">Municipio</option>
                                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnClientUpdate">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal generate user-->
<div class="modal fade" id="generateUserModal" tabindex="-1" role="dialog" aria-labelledby="generateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Generar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <center>
                        <img src="{{ url('images/user.PNG') }}" width="100" height="100" class="d-inline-block align-top rounded-circle" alt="">
                    </center>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="username" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Contraseña">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnGenerateUser">Guardar</button>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('js')
<script src="{{ asset('js/clients/client.js')}} "></script>
@endsection
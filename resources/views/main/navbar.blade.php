<nav class="navbar navbar-expand-lg navbar-dark background-color-navbar">
    <a class="navbar-brand" href="{{ url('view/clients')}}">
                <img src="{{asset('images/logo.PNG')}}" width="30" height="30" class="d-inline-block align-top rounded-circle" alt="">
                Serempre
            </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
        aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('view/clients')}}">Clientes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="btnLogout">Cerrar sesión</button>
            </li>
        </ul>
    </div>
</nav>
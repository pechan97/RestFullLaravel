<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Index Cliente</title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/Logueado">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ListaUsuarios">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ListaClientes">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ListaContactos">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ListaReuniones">Reuniones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ListaSoporte">Soporte</a>
          </li>
        </ul>
      </div>
    </nav>
    <br />
    <br />
    <br />
    <br />
 <div class="container">
 	<h1 class="text-center">Clientes</h1>
    <a href="/Clientes">Crear nuevo cliente</a>
    <br />
    <br />
 	<table class="table table-hover table-bordered">
    <tr class="info">
        <th class="active">
           Nombre
        </th>
        <th class="active">
           Cédula Juridica
        </th>
        <th class="active">
            Página Web
        </th>
        <th class="active">
            Dirección
        </th>
        <th class="active">
            Telefono
        </th>
        <th class="active">
            Sector
        </th>
        <th class="active">Edición</th>
        <th class="active">Eliminación</th>
    </tr>
    @foreach ($posts as $post)
        <tr class="info">
            <td>
               {{$post->Nombre}}
            </td>
            <td>
                  {{$post->CedulaJuridica}}
            </td>
            <td>
                  {{$post->PaginaWeb}}
            </td>
            <td>
                  {{$post->Direccion}}
            </td>
            <td>
                  {{$post->Telefono}}
            </td>
            <td>
                  {{$post->Sector}}
            </td>
            <td>
                <a href="/EditarCliente/{{$post->Id}}">Editar</a>
            </td>
            <td>
                <a href="/EliminarCliente/{{$post->Id}}">Eliminar</a>
            </td>
        </tr>
 	@endforeach
 	</table>
 </div>
  <div class="container body-content">
        <hr />
        <footer>
            <p class="centrar">LARAVEL</p>
        </footer>
    </div>
</body>
</html>
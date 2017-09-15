<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>
<script> 
      function solonumeros(e)
{
   var keynum = window.event ? window.event.keyCode : e.which;
   if ((keynum == 8) || (keynum == 46))
        return true;
    return /\d/.test(String.fromCharCode(keynum));
}
      </script> 
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
     <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
         <div class="">
        <h1 class="centrar" >Registro Contactos</h1>
        </div>
        </div>
        <div class="col-lg-4">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <div class="container">
    <div id = caja>
      <form class="" action="/Contactos" method="post">
      {!! csrf_field() !!}
            <div class="form-group">
        <label for="exampleInputPassword1">Cliente</label>
        <select class="btn btn-default dropdown-toggle" name="Cliente">
         @foreach ($posts as $post)
        <option value="{{ $post->Nombre  }}">{{ $post->Nombre  }}</option>
          @endforeach
        </select>
      </div>     
       <div class="form-group">
        <label for="exampleInputName">Nombre</label>
        <input id="nombre" type="text" class="form-control" placeholder="Nombre" name="Nombre">
      </div>
      <div class="form-group">
        <label for="exampleLastName">Apellido</label>
        <input id="apellido" type="text" class="form-control" placeholder="Apellido" name="Apellido">
      </div>
      <div class="form-group">
        <label for="examplePhone">Teléfono</label>
        <input id="telef" type=text size="15" class="form-control" placeholder="Teléfono" name="PhoneNumber" onkeypress="return solonumeros(event);">
      </div>
      <div class="form-group">
        <label for="exampleUser">Email</label>
        <input id="user"  type="text" class="form-control" placeholder="Email" name="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Puesto</label>
        <input id="pass"  type="text" class="form-control" placeholder="Puesto" name="Puesto" >
      </div> 
      <button id="rides" type="submit" class="btn btn-success">
      Registrar
   </button>
    </form>
  </div>
</div> 
        </div>
        <div class="col-lg-4">
        </div>
      </div>
    <div class="container body-content">
        <hr />
        <footer>
            <p class="">LARAVEL</p>
        </footer>
    </div>
</body>
</html>
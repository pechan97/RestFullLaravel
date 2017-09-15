<!DOCTYPE html>
<html>
<head>
	<title>Reuniones</title>
	 <link rel="stylesheet"  href="css/app.css">
   <link rel="stylesheet"  href="css/style.css">
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
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        <div class="">
        <h1 class="centrar" >Edición Reunión</h1>
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
      <form class="" action="/EditarReunion/{{ $posts3->Id}}" method="post">
      {!! csrf_field() !!}
            <div class="form-group">
        <label for="exampleInputPassword1">Cliente</label>
        <select class="btn btn-default dropdown-toggle" name="Cliente">
        <option value="{{ $posts3->Cliente  }}">{{ $posts3->Cliente }}</option>
         @foreach ($posts as $post)
        <option value="{{ $post->Nombre  }}">{{ $post->Nombre }}</option>
         @endforeach
        </select>
      </div>   
       <div class="form-group">
        <label for="exampleInputPassword1">Usuario</label>
        <select class="btn btn-default dropdown-toggle" name="Usuario">
        <option value="{{ $posts3->Usuario  }}">{{ $posts3->Usuario }}</option>
         @foreach ($posts2 as $post2)
        <option value="{{ $post2->Nombre  }}">{{ $post2->Nombre  }}</option>
          @endforeach
        </select>
      </div>   
       <div class="form-group">
        <label for="exampleInputName">Nombre</label>
        <input id="nombre" type="text" class="form-control" value="{{ $posts3->Nombre }}" placeholder="Nombre" name="Nombre">
      </div>
      <div class="form-group">
        <label for="exampleLastName">Fecha</label>
        <input id="apellido" type="datatime" value="{{ $posts3->Fecha }}" class="form-control" name="Fecha">
      </div>
      <div class="form-group">
        <label for="examplePhone">Es virtual</label>
         <select class="btn btn-default dropdown-toggle" name="Virtual">
        <option value="true">Sí</option>
        <option value="false">No</option>
        </select>
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
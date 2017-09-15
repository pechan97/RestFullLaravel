<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
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
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/Logout">Cerrar Session</a>
          </li>
          </ul>
    </nav>
    <br />
    <br />
    <br />
    <br />
     <div class="jumbotron">
    <h1 class="centrar" >Mantenimientos Empresariales</h1>
</div>
<div class="row">
    <div class="col-md-3">
        <h1 class="centrar">Clientes</h1>
        <div  class="item"  id="clientes">
            <a href="/ListaClientes">
                <img src="/Imagenes/clientes2.jpg" alt="" class="tamano">
            </a>
        </div>       
    </div>
    <div class="col-md-3">
        <h1 class="centrar">Contactos</h1>
        <div class="item" id="clientes">
            <a href="/ListaContactos">
                <img src="/Imagenes/contactos.png" alt="" class="tamano">
            </a>
        </div>    
    </div>
    <div class="col-md-3">
        <h1 class="centrar">Reuniones</h1>
        <div class="item" id="clientes">
            <a href="/ListaReuniones"> 
                <img src="/Imagenes/reunion.png" alt="" class="tamano">
            </a>
        </div>    
    </div>
    <div class="col-md-3">
        <h1 class="centrar">Soporte</h1>
        <div class="item" id="clientes">
            <a href="/ListaSoporte"> 
                <img src="/Imagenes/soporte.jpg" alt="" class="tamano">
            </a>
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
<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
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
            <a class="nav-link" href="/Login">Login</a>
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
    <h1 class="centrar" >Login</h1>
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
   <div id = login>
     <form class="" action="/Login" method="post">
     {!! csrf_field() !!}
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input id="usuario" type="text" class="form-control" placeholder="Email" name="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input id="contraseña" type="password" class="form-control" placeholder="Contraseña" name="Password">
      </div>
      <button id="rides" type="submit" class="btn btn-success">
      Login
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
            <p class="centrar">LARAVEL</p>
        </footer>
    </div>
</body>
</html>














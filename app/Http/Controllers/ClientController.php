<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class ClientController extends Controller
{


protected function guardarUsuario($request)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('POST', "http://localhost:60976/api/Account/Register",
[ 'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}
protected function guardarCliente($request)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('POST', "http://localhost:60976/api/Clientes", 
[ 'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}
protected function guardarContactos($request)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('POST', "http://localhost:60976/api/Contactos", 
[ 'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}

protected function guardarReuniones($request)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('POST', "http://localhost:60976/api/Reuniones", 
[ 'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}
protected function guardarSoporte($request)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('POST', "http://localhost:60976/api/SupportTickets", 
[ 'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}
protected function authUser($request)
{
$respuesta = $this->realizarPeticion('POST', "http://localhost:60976/Token",
	  ['headers' => [
      'Content-Type' => 'application/x-www-form-urlencoded'], 
      'form_params' => ['userName'=>$request->Email,
      'password' => $request->Password,
      'grant_type' => 'password'
      ]]);
$datos = json_decode($respuesta);
return $datos;
}
protected function ListaUsuarios()
{
$respuesta = $this->getUsers('Get', "http://localhost:60976/api/Account");
$datos = json_decode($respuesta);
return $datos;
}

protected function ListaClientes()
{
$respuesta = $this->getUsers('Get', "http://localhost:60976/api/Clientes");
$datos = json_decode($respuesta);
return $datos;
}
protected function ListaContactos()
{
	$respuesta = $this->getUsers('Get', "http://localhost:60976/api/Contactos");
$datos = json_decode($respuesta);
return $datos;
}
protected function ListaReuniones()
{
	
$respuesta = $this->getUsers('Get', "http://localhost:60976/api/Reuniones");
$datos = json_decode($respuesta);
return $datos;
}
protected function ListaSoporte()
{
	
$respuesta = $this->getUsers('Get', "http://localhost:60976/api/SupportTickets");
$datos = json_decode($respuesta);
return $datos;
}

protected function VerUsuario($id)
{
	
$respuesta = $this->getUsers('Get', "http://localhost:60976/api/Account/{$id}");
$datos = json_decode($respuesta);
return $datos;
}
protected function VerCliente($id)
{
	
$respuesta = $this->getUsers('Get', "http://localhost:60976/api/Clientes/{$id}");
$datos = json_decode($respuesta);
return $datos;
}

protected function EliminarCliente($id)
{
$respuesta = $this->getUsers('Delete', "http://localhost:60976/api/Clientes/{$id}");
$datos = json_decode($respuesta);
return $datos;
}
protected function EliminarUsuario($id)
{
	$var = Session::get('Token');
		$headers = [
    'Authorization' => 'bearer ' . $var
];
$respuesta = $this->DeleteUser('Delete', "http://localhost:60976/api/Account/{$id}", [ 'headers' => $headers]);
$datos = json_decode($respuesta);
return $datos;
}
protected function EliminarContacto($id)
{
$respuesta = $this->getUsers('Delete', "http://localhost:60976/api/Contactos/{$id}");
$datos = json_decode($respuesta);
return $datos;
}

protected function EliminarReunion($id)
{
$respuesta = $this->getUsers('Delete', "http://localhost:60976/api/Reuniones/{$id}");
$datos = json_decode($respuesta);
return $datos;
}
protected function EliminarSoporte($id)
{
$respuesta = $this->getUsers('Delete', "http://localhost:60976/api/SupportTickets/{$id}");
$datos = json_decode($respuesta);
return $datos;
}

protected function GetUsuario($id)
{

$respuesta = $this->getUsers('Get', "http://localhost:60976/api/Account/{$id}");
$datos = json_decode($respuesta);
return $datos;
}



protected function UpdateUsuario($request,$id)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('Put', "http://localhost:60976/api/Account/{$id}", 
[ 'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}


protected function UpdateCliente($request,$id)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('Put', "http://localhost:60976/api/Clientes/{$id}", 
[ 'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}


protected function UpdateContacto($request,$id)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('Put', "http://localhost:60976/api/Contactos/{$id}", 
[ 'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}
protected function UpdateReunion($request,$id)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('Put', "http://localhost:60976/api/Reuniones/{$id}", 
[  'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}
protected function UpdateSoporte($request,$id)
{
	$headers = [
    'Authorization' => 'bearer ' . $request->session()->get('Token')
];
$respuesta = $this->realizarPeticion('Put', "http://localhost:60976/api/SupportTickets/{$id}", 
[ 'headers' => $headers,
'form_params' => $request->all()]);
$datos = json_decode($respuesta);
return $datos;
}

protected function GetContacto($id)
{
$respuesta = $this->getUsers('Get', "http://localhost:60976/api/Contactos/{$id}");
$datos = json_decode($respuesta);
return $datos;
}

protected function GetReunion($id)
{

$respuesta = $this->getUsers('Get', "http://localhost:60976/api/Reuniones/{$id}");
$datos = json_decode($respuesta);
return $datos;
}
protected function GetSoporte($id)
{
$respuesta = $this->getUsers('Get', "http://localhost:60976/api/SupportTickets/{$id}");
$datos = json_decode($respuesta);
return $datos;
}

}
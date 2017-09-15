<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/ListaUsuarios', 'LoginController@index');
Route::get('/ListaClientes', 'ClienteController@index');
Route::get('/ListaContactos', 'ContactosController@index2');
Route::get('/ListaReuniones', 'ReunionesController@index2');
Route::get('/ListaSoporte', 'SoporteController@index2');
Route::get('/Logout', 'LoginController@destroy');
Route::get('/EliminarUsuario/{Id}', 'UserController@destroy');
Route::get('/EliminarCliente/{Id}', 'ClienteController@destroy');
Route::get('/EliminarContacto/{Id}', 'ContactosController@destroy');
Route::get('/EliminarReunion/{Id}', 'ReunionesController@destroy');
Route::get('/EliminarSoporte/{Id}', 'SoporteController@destroy');
//Route::get('/Posts/{Id}', 'PostsController@show');
//Route::get('/', 'PostsController@clientes');
Route::post('/Registrar', 'UserController@store');
Route::post('/Login', 'LoginController@store');
Route::post('/Contactos', 'ContactosController@store');
Route::post('/Clientes', 'ClienteController@store');
Route::post('/Reuniones', 'ReunionesController@store');
Route::post('/Soporte', 'SoporteController@store');
Route::post('/EditarUsuario/{Id}', 'UserController@update');
Route::post('/EditarCliente/{Id}', 'ClienteController@update');
Route::post('/EditarContacto/{Id}', 'ContactosController@update');
Route::post('/EditarReunion/{Id}', 'ReunionesController@update');
Route::post('/EditarSoporte/{Id}', 'SoporteController@update');

Route::get('/Login', function(){
	return view('posts.Login');
});

Route::get('/EditarUsuario/{Id}', "UserController@show", function(){
	return view('posts.registroput');
});
Route::get('/EditarCliente/{Id}', "ClienteController@show", function(){
	return view('posts.clientesput');
});
Route::get('/EditarContacto/{Id}', "ContactosController@show", function(){
	return view('posts.clientesput');
});
Route::get('/EditarReunion/{Id}', "ReunionesController@show", function(){
	return view('posts.clientesput');
});
Route::get('/EditarSoporte/{Id}', "SoporteController@show", function(){
	return view('posts.clientesput');
});

Route::get('/Clientes', function(){
	return view('posts.clientespost');
});
Route::get('/Logueado', function(){
	return view('posts.logueado');
});
Route::get('/Reuniones', "ReunionesController@index", function(){
	return view('posts.reunionespost');
});
Route::get('/Contactos', "ContactosController@index", function(){
	return view('posts.contactospost');
});
Route::get('/Soporte', "SoporteController@index", function(){
	return view('posts.contactospost');
});
Route::get('/Registrar', function(){
	return view('posts.Registro');
});

Route::get('/', function(){
	return view('posts.principal');
});
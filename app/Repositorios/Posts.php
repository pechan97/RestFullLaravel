<?php

namespace App\Repositorios;	

class Posts extends GuzzleHttpRequest {


public function getAll()
{
return $this->get('/api/Account');
}
public function Find($id)
{

return $this->get('/api/Account/{$id}');
}
public function getClientes()
{
return $this->get('/api/Clientes');
}
public function PostUser($request)
{
return $this->post('api/Account/Register', $request);
}
}
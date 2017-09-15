<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoporteController extends ClientController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts= $this->ListaClientes();
        $posts2= $this->ListaUsuarios();
        return view('posts.soportepost', compact('posts','posts2'));
    }
    
    public function index2()
    {
        $posts= $this->ListaSoporte();
        return view('posts.soporteindex', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $respuesta = $this->guardarSoporte($request);
        return redirect()->action('SoporteController@index2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts= $this->ListaClientes();
         $posts3= $this->GetSoporte($id);
         $posts2= $this->ListaUsuarios();
        return view('posts.soporteput', compact('posts', 'posts2', 'posts3')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $respuesta = $this->UpdateSoporte($request, $id);
        return redirect()->action('SoporteController@index2'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $this->EliminarSoporte($id);
        return redirect()->action('SoporteController@index2');  
    }
}

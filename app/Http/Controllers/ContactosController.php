<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends ClientController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= $this->ListaClientes();
        return view('posts.contactospost', compact('posts'));
    }
     public function index2()
    {
        $posts= $this->ListaContactos();
        return view('posts.contactosindex', compact('posts'));
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
         $respuesta = $this->guardarContactos($request);
        return redirect()->action('ContactosController@index2');  
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
       $posts2= $this->GetContacto($id);
        return view('posts.contactosput', compact('posts', 'posts2')); 
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
        $respuesta = $this->UpdateContacto($request, $id);
        return redirect()->action('ContactosController@index2');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $this->EliminarContacto($id);
        return redirect()->action('ContactosController@index2');  
    }
}

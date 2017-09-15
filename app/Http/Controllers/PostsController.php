<?php

namespace App\Http\Controllers;
use App\Repositorios\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	protected $posts;

	public function __construct(Posts $posts){
   $this-> posts = $posts;
	}

    public  function index(){
      $posts= $this->posts->getAll();
      return view('posts.index', compact('posts'));
    }


    public  function show($id){
     $post= $this->posts->Find($id);
      return view('posts.show', compact('post'));
    }
    public function clientes()
    {
     $posts= $this->posts->getClientes();
      return view('posts.clientes', compact('posts'));
    }
    public function store(Request $request)
    {

    	dd("llegó");
     $posts= $this->posts->getClientes();
      return view('posts.clientes', compact('posts'));
    }
}

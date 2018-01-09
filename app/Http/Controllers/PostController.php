<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $post = Post::all();
        return view('post.list',compact($post));
    }
    public function listedit($id){
        dd($id);
    }
    public function edit($id){
        dd('aqui');
    }
    public function add(){
        dd('aqui');
    }
    public function delete(){
        dd('aqui');
    }
}

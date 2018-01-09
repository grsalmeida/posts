<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $post = Post::all();
        return view('post.list',['post'=>$post]);
    }
    public function listedit(Request $request){
        $data = array_merge($request->all(),$request->route()->parameters());
        if(isset($data) && !empty($data)){
            $find = Post::find(['id' => $data['id']]);
            if(isset($find) && !empty($find)){
                return view('post.edit',['find'=> $find]);
            }else{
                return redirect('/post/list');
            }
        }
        return redirect('/post/list');
    }
    public function edit(Request $request){
        $data = $request->all();
        if(isset($data) && !empty($data)){
            $edit = Post::where('id', $data['id'])
                ->update(['title' => $data['title'], 'description' => $data['description']]);
            if(!empty($edit)){
                return redirect('/post/list');
            }else{
                return redirect('/post/list');
            }
        }else{
            return redirect('/post/list');
        }
    }
    public function add(Request $request){
        $data = $request->all();
        if(isset($data) && !empty($data)){
            $request->validate([
                 'title' => 'required|string|max:255',
                 'description' => 'required',
             ]);
             $postsAdd = [
                    "title" => $data['title'],
                    "description" => $data['description'],
                    "id_user" => $data['id_user']
             ];
             if(!empty(Post::create($postsAdd))){
                 return redirect('/post/list');
             }else{
                 return view('post.add');
             }
        }else{
            return view('post.add');
        }
    }
    public function delete($id){
        Post::destroy(1);
        return redirect('/post/list');
    }
}

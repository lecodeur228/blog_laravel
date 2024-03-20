<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // recuperer la liste de tous les postes
        $posts = Post::all();
        // dd($posts);
        return view("posts", compact("posts"));
    }
    public function add_post(Request $request){
        // dd($request);
        return view("add_post");
    }
    public function store(PostRequest $request){
        // methode 1
        // $post = new Post();
        // $post->title = "mon 2 post";
        // $post->content = "mon 2 contenur";
        // $post->save();
        //methode 2
       $post = Post::create([
            "title" => $request->input("title"),
            "content" => $request->input("content"),
        ]);

        return redirect()->route("index.post");
    }

    public function posts(){
        $posts = Post::all();

        return $posts;
    }

    public function update_post($id){
        $post = Post::findOrFail($id);
        $post->title = "mon 1 titre modifier";
        $post->save();

        return $post;

    }

    public function delete_post($id){
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts');
    }

    public function find_post(){
        $post = Post::where("title","mon 2 post");
        return $post;
    }

}

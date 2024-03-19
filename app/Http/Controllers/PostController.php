<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view("store");
    }

    public function store(){
        // methode 1
        // $post = new Post();
        // $post->title = "mon 2 post";
        // $post->content = "mon 2 contenur";
        // $post->save();
        //methode 2

       $post = Post::create([
            "title" => "mon 3 titre",
            "content" => "mon 3 contenu",
        ]);

        return $post;
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

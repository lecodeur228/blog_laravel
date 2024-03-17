<?php

namespace App\Http\Controllers\webController;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    function page(){
        return view("post");
    }

    function base(){
        return view('welcome');

    }
    function  index ()
    {
        return [
            "post" => "premier posts",
            "user" => "irin"
        ];
    }

    function post(string $nom){
            return [
                "nom" => $nom
            ];
    }
}

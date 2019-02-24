<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {

       
        $post=new Post;
        $post->name=$request->name;
        $post->email=$request->email;
        $post->password=$request->password;
        $post->tele=$request->phone;
        $post->save();
        //dd($request->all());

       
    }

    public function save(Request $request)
    {
        
        $create=new Create;
        $create->title=$request->title;
        $create->desc=$request->desc;
        $post->save();
    }
}

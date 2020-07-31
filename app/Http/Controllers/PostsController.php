<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'image' => ['required','image'],
            'caption' => 'required'
        ]);

        \App\Post::create($data);
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "tentang",
            "posts" => post::all()
        ]);
    }
    public function show($slug){
        return view('post' , [
            "title" => "single post",
            "post" => post::find($slug)
        ]);
    }
}

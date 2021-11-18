<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('home');
    }

    public function showPost($postId){
        $posts = [
            "12"=>"food Post",
            "13"=>"Car post"
        ];

        return view('home', [
            'post'=>$posts[$postId] ?? 'Post with id: ' . $postIdd
        ], compact('postId'));
    }
}

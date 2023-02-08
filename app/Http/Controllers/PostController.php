<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function index(Post $spot){
        return view('posts/index')->$spot->get();
    }
}

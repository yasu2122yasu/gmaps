<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(Post $spot){
        return view('posts/index')->with(['spots' => $spot->get()]); 
    }
}

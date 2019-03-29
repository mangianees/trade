<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts=Post::all(); 
        return view('pages.index')->with('posts',$posts);
    }
}

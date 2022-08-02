<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost()
    {
       $posts = DB::table('post')->get();
       return view('posts',compact('posts'));
    }
    /// getDataMigrate

    public function getAllModel()
    {
       $posts = DB::table('posts_2')->get();
       return view('posts',compact('posts'));
    }
    public function index() {
      return ['name' => 'pichit', 'email' => 'pichit'];
    }
}

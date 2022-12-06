<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('.home', compact('posts'));
    }

    public function show($id)
    {
        $posts = Posts::where('id', '=', $id)->select('*')->first();
        return view('detail_posts', compact('posts'));
    }
    
}

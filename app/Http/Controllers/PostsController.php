<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {

        $discusses = Post::all();
        return view('posts.index', compact('discusses'));


    }


    public function create()
    {

    }

    public function show($id)
    {
        $discuss = Post::find($id);
        return view('posts.show', compact('discuss'));
    }


    public function store(Request $request)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destory($id)
    {

    }
}

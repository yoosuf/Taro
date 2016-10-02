<?php

namespace App\Http\Controllers;

use App\Discuss;
use Illuminate\Http\Request;

use App\Http\Requests;

class DiscussController extends Controller
{


    public function index()
    {

        $discusses = Discuss::all();
        return view('discuss.index', compact('discusses'));


    }


    public function show($id)
    {
        $discuss = Discuss::find($id);
        return view('discuss.show', compact('discuss'));
    }
}

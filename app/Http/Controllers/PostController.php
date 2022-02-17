<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $data['posts'] = Post::where('user_id',auth()->user()->id)->with('user')->get();
        // return response()->json($data);
    }
}

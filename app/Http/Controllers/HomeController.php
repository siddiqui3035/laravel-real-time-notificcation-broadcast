<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Notifications\PostLikeNotification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $data['posts'] = Post::where('user_id',auth()->user()->id)->with('user')->get();
        $postss = Post::with('user')->get();
        // return view('home', $data);
        return view('home',['posts'=>$postss]);
    }

    public function postLike(Request $request){
        $user = auth()->user();
        $post = Post::whereId($request->post_id)->with('user')->first();

        $author = $post->user;

        $author->notify(new PostLikeNotification($user,$post));

        return response()->json(['success']);
    }
}

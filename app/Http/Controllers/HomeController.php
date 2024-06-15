<?php

namespace App\Http\Controllers;
use App\Models\Post;

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

    public function index()
    {
        $user = auth()->user();

        $followingUserIds = $user->following()->pluck('profiles.user_id');
        
        $posts = Post::whereIn('user_id', $followingUserIds)->with('user')->latest()->paginate(5);

        return view('home', compact('posts'));
    }
}

<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);

        $image = request('image')->store('uploads', 'public');

        $imageResize = Image::make(public_path("storage/{$image}"))->fit(1200, 1200);
        $imageResize->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $image,
        ]);

        return redirect('/');

        dd(request()->all());
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}

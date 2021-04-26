<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', [ 'posts' => $posts ]);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $post = new Post();

        $post->name = request('name');
        $post->body = request('body');

        $post->save();

        return redirect()->route('posts.show', $post->id );
    }

    public function show(Post $post)
    {
        return view('posts.show', [ 'post' => $post ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [ 'post' => $post ]);
    }

    public function update(Request $request, Post $post)
    {
        $post->name = request('name');
        $post->body = request('body');

        $post->save();

        return redirect()->route('posts.show', $post->id );
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('welcome', compact('posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
         $data = request()->validate([
            'slug' => 'required|unique:posts|regex:/^[a-zA-Z0-9-_]+$/',
            'post_title' => 'required|min:5|max:100',
            'short_descr' => 'required|max:255',
            'description' => 'required',
            'published' => ''
        ]);

        Post::create($data);

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = $this->validate(\request(), [
            'slug' => 'required|regex:/^[a-zA-Z0-9-_]+$/',
            'post_title' => 'required|min:5|max:100',
            'short_descr' => 'required|max:255',
            'description' => 'required',
            'published' => ''
        ]);

//        $data = array_merge($data, ['published' => \request()->has('published')]);

        $post->update($data);

        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}

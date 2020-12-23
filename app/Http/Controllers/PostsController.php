<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\FormValidateRequest;
use Illuminate\Validation\Rule;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        return view('welcome', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(FormValidateRequest $request)
    {
        $data = $request->validated();

        Post::create($data);

        return redirect(route('posts.index'));
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(Post $post, FormValidateRequest $request)
    {
        $data = $request->validated();
        isset($data['published'])?: $data['published'] = '0';
        $post->update($data);

        return redirect(route('posts.index'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}

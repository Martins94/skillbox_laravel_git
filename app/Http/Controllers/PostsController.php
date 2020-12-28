<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\FormValidateRequest;
use Illuminate\Validation\Rule;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::with('tags')->latest()->get();

        return view('welcome', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(FormValidateRequest $request)
    {
        $data = $request->validated();
        $data['owner_id'] = auth()->id();

        Post::create($data);

        return redirect(route('posts.index'));
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit', compact('post'));
    }


    public function update(Post $post, FormValidateRequest $request)
    {
        $data = $request->validated();
        isset($data['published'])?: $data['published'] = '0';
        $post->update($data);

        $postTags = $post->tags->keyBy('name');

        $tags = collect(explode(',', request('tags')))->keyBy(function ($item){ return $item;});

        $tagsToAttach = $tags->diffKeys($postTags);
        $tagsToDetach = $postTags->diffKeys($tags);

        foreach ($tagsToAttach as $tag) {
            $tag = Tag::firstOrCreate(['name' => $tag]);
            $post->tags()->attach($tag);
        }

        foreach ($tagsToDetach as $tag) {
            $post->tags()->detach($tag);
        }


        return redirect(route('posts.index'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}

@extends('layout.master')

@section('content')

    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 mt-5 font-italic border-bottom">
            {{ $post->post_title }}
        </h3>
        <p class="blog-post-meta">{{ $post->created_at->format('d.m.Y H:i:s') }}</p>

        <p>{{ $post->description }}</p>
        <p>{{ $post->published ? 'Опубликовано' : 'Не опубликовано'}}</p>
        <hr>
        <a href="{{ route('main') }}">Ко всем статьям</a>
        
    </div><!-- /.blog-main -->
@endsection

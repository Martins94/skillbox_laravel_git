@extends('layout.master')

@section('title', 'Редактировать статью')

@section('content')
    <div class="col-md-8 blog-main mt-5">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Редактирование статьи
        </h3>

        @include('layout.errors')

        <form method="post" action="/posts/{{ $post->slug }}">
            @csrf
            @method('PATCH')
            @include('posts.postForm')
            <div class="mb-3">
                <label for="tag_name" class="form-label">Теги</label>
                <input type="text" class="form-control" id="tag_name" name="tags" value="{{ old('tags', $post->tags->pluck('name')->implode(',')) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="published" name="published" value="1" {{ $post->published ? 'checked' : '' }}>
                <label class="form-check-label" for="published" >Опубликовано</label>
            </div>
            <button type="submit" class="btn btn-primary" >Сохранить статью</button>
        </form>

        <form method="post" action="/posts/{{ $post->slug }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-primary" >Удалить статью</button>
        </form>

    </div>

@endsection

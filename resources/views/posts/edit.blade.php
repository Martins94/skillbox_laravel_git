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
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}">
            </div>
            <div class="mb-3">
                <label for="post_title" class="form-label">Заголовок статьи</label>
                <input type="text" class="form-control" id="post_title" name="post_title" value="{{ $post->post_title }}">
            </div>
            <div class="mb-3">
                <label for="short_descr" class="form-label">Краткое описание статьи</label>
                <input type="text" class="form-control" id="short_descr" name="short_descr" value="{{ $post->short_descr }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Полное описание статьи</label>
                <textarea id="description" name="description" class="form-control" rows="4" cols="50">{{ $post->description }}</textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="published" name="published">
                <label class="form-check-label" for="published" {{ $post->published ? 'checked' : '' }}>Опубликовано</label>
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

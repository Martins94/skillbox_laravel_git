@extends('layout.master')

@section('title', 'Создать статью')

@section('content')
    <div class="col-md-8 blog-main mt-5">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Создать статью
        </h3>

        @include('layout.errors')

        <form method="post" action="{{ route('posts') }}">
            @csrf
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
            </div>
            <div class="mb-3">
                <label for="post_title" class="form-label">Заголовок статьи</label>
                <input type="text" class="form-control" id="post_title" name="post_title" value="{{ old('post_title') }}">
            </div>
            <div class="mb-3">
                <label for="short_descr" class="form-label">Краткое описание статьи</label>
                <input type="text" class="form-control" id="short_descr" name="short_descr" value="{{ old('short_descr') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Полное описание статьи</label>
                <textarea id="description" name="description" class="form-control" rows="4" cols="50">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="published" name="published">
                <label class="form-check-label" for="published">Опубликовано</label>
            </div>
            <button type="submit" class="btn btn-primary" >Отправить статью</button>
        </form>
    </div>

@endsection

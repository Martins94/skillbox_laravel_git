@extends('layout.master')

@section('title', 'Создать статью')

@section('content')
    <div class="col-md-8 blog-main mt-5">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Создать статью
        </h3>

        @include('layout.errors')

        <form method="post" action="{{ route('posts.store') }}">
            @csrf
            @include('posts.postForm')
            <div class="mb-3">
                <label for="tag_name" class="form-label">Теги</label>
                <input type="text" class="form-control" id="tag_name" name="tags" value="{{ old('tags') }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="published" name="published" value="1">
                <label class="form-check-label" for="published" >Опубликовано</label>
            </div>
            <button type="submit" class="btn btn-primary" >Отправить статью</button>
        </form>
    </div>

@endsection

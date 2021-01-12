@extends('layout.master')

@section('title', 'Главная')

@section('content')
            <div class="col-md-8 blog-main mt-5">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Опубликованные статьи
                </h3>
                @foreach($posts as $post)
                    @if($post->published)
                        @include('posts.item')
                    @endif
                @endforeach

            </div><!-- /.blog-main -->
@endsection

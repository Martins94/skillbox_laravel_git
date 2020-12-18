@extends('layout.master')

@section('title', 'Отзывы')

@section('content')

    <div class="col-md-8 blog-main mt-5">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Отзывы
        </h3>
            @include('admin.item')
    </div><!-- /.blog-main -->
@endsection

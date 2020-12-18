@extends('layout.master')

@section('title', 'Контакты')

@section('content')
    <div class="col-md-8 blog-main mt-5">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Оставить отзыв
        </h3>

        @include('layout.errors')

        <form method="post" action="{{ route('feedbacks') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Электронная почта</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Тело отзыва</label>
                <textarea id="message" name="message" class="form-control" rows="4" cols="50"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" >Отправить отзыв</button>
        </form>
    </div>

@endsection

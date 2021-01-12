<div class="blog-post">
    <h2 class="blog-post-title"><a href="{{ route('posts.show', ['post' => $post->slug]) }}">{{ $post->post_title }}</a> </h2>
    <p class="blog-post-meta">{{ $post->created_at->format('d.m.Y H:i:s') }}</p>

    @include('posts.tags', ['tags' => $post->tags])
    <h4>Описание</h4>
    <p>{{ $post->description }}</p>
    <p>{{ $post->published ? 'Опубликовано' : 'Не опубликовано'}}</p>
    <a href="/posts/{{ $post->slug }}/edit">Редактировать</a>
    <hr>
</div>

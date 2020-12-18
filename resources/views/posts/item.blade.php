<div class="blog-post">
    <h2 class="blog-post-title"><a href="{{ route('posts.show', ['post' => $post->slug]) }}">{{ $post->post_title }}</a> </h2>
    <p class="blog-post-meta">{{ $post->created_at->format('d.m.Y H:i:s') }}</p>

    <p>{{ $post->short_descr }}</p>
    <hr>
</div>

@php
    $tags = $tags ?? collect();
@endphp

@if($tags->isNotEmpty())
    <div>
        @foreach($tags as $tag)
            <a class="badge badge-secondary" href="/posts/tags/{{ $tag->getRouteKey() }}" >{{ $tag->name }}</a>
        @endforeach
    </div>
@endif

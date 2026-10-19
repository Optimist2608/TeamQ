@php
    $variants = [null, 'yellow', 'pink'];
@endphp
<article class="post-card post-card--hero" aria-hidden="true">
    <div class="post-card__head">
        <img class="post-card__avatar"
             src="{{ $avatarSrc }}"
             alt="avatar"/>
        <div>
            <b class="post-card__author">{{ $author }}</b>
            <span class="post-card__meta">{{ $game }}</span>
        </div>
    </div>
    <h3 class="post-card__title">{{ $title }}</h3>
    @if(!empty($tags))
        <div class="post-card__tags">
            @foreach($tags as $tag)
                <x-widgets.tag :variant="$variants[$loop->index % 3]">
                    {{ $tag }}
                </x-widgets.tag>
            @endforeach
        </div>
    @endif
</article>

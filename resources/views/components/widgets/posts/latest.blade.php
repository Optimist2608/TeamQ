@php
    $games = array_values(array_unique(array_column($posts, 'game')));
@endphp

<section class="section container" data-reveal>
    <div class="section__head"><h2 class="section__title">Свежие объявления</h2><a class="section__link"
                                                                                   href="post-create.html">Создать своё
            →</a></div>
    <div class="chips" data-filters>
        <button class="chip is-active" type="button" data-filter="all">Все</button>
        @foreach($games as $game)
            <button class="chip" type="button" data-filter="{{ $game }}">{{ $game }}</button>
        @endforeach
    </div>
    <div class="grid grid--posts" data-posts>

        @foreach($posts as $post)
            <x-widgets.posts.cards.index
                :author="$post['author']"
                :game="$post['game']"
                :tags="$post['tags']"
                :title="$post['title']"
                :avatar-src="$post['avatarSrc']"
                :page-link="$post['pageLink']"
            />
        @endforeach

    </div>
</section>

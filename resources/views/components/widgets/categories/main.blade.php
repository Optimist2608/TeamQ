@if(!empty($categories))
    <section class="section container" data-reveal>
        <div class="section__head">
            <h2 class="section__title">Популярные игры</h2>
            <a class="section__link" href="games.html">Весь каталог →</a>
        </div>
        <div class="grid grid--games">
            @foreach($categories as $category)
                <x-widgets.categories.card
                    :page-link="$category['pageLink']"
                    :img-src="$category['imgSrc']"
                    :count="$category['count']"
                    :title="$category['title']"
                />
            @endforeach
        </div>
    </section>
@endif

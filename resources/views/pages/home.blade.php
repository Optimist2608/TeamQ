@extends("layouts.app")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <section class="hero">
            <div class="container hero__inner">
                <div class="hero__content">
                    <span class="sticker sticker--pink">beta 0.0.1 · баги — это фичи</span>
                    <h1 class="hero__title">Найди тиммейтов, <span class="hero__title-mark">которые не ливнут</span> на
                        5-й
                        минуте</h1>
                    <p class="hero__text" data-tagline>Хватит орать в войс «ищу пятого» в 3 часа ночи.</p>
                    <div class="hero__actions">
                        <a class="btn btn--primary btn--lg" href="games.html">Найти команду</a>
                        <button class="btn btn--ghost btn--lg" type="button" data-tagline-btn>Ещё шутку 🎲</button>
                    </div>

                    <x-widgets.stats.main :stats="[
                        ['text' => 'игроков', 'count' => '12480'],
                        ['text' => 'объявлений', 'count' => '3921'],
                        ['text' => '% без токсиков (почти)', 'count' => '98'],
                        ]"/>

                </div>


                <x-widgets.posts.cards.last :author="'xX_PepeCarry_Xx'" :game="'Dota 2'"
                                            :tags="['test1', 'test2', 'test3']"
                                            :title="'Ищу саппорта. Обещаю не винить в поражении (почти)'"
                                            :avatar-src="'http://gamebomb.ru/files/galleries/001/7/7b/433040.jpg'"/>

            </div>
        </section>

        <x-widgets.ticker.main
            :messages="['Press F to pay respects Ah shit, here we go again Ай львы, ай тигры 12 танго Бро тебе надо тренироваться', 'Press F to pay respects Ah shit, here we go again Ай львы, ай тигры 12 танго Бро тебе надо тренироваться','Press F to pay respects Ah shit, here we go again Ай львы, ай тигры 12 танго Бро тебе надо тренироваться']"/>

        <x-widgets.categories.main
            :categories="[['title' => 'Dota 2',
'imgSrc' => 'https://thumb.wikimedia.org/wikipedia/ru/thumb/8/8e/%D0%9E%D0%B1%D0%BB%D0%BE%D0%B6%D0%BA%D0%B0_Dota_2.jpg/330px-%D0%9E%D0%B1%D0%BB%D0%BE%D0%B6%D0%BA%D0%B0_Dota_2.jpg?utm_source=ru.wikipedia.org&utm_campaign=parser&utm_content=thumbnail', 'pageLink' => '#', 'count' => '200' ]]"/>

        <x-widgets.posts.latest :posts="[
    [
        'tags' => ['rpg',
            'open-world'],
        'author' => 'CD Projekt Red',
        'game' => 'The Witcher 3',
        'title' => 'Обзор Ведьмака 3',
        'avatarSrc' => '',
        'pageLink' => '',
    ],
    [
        'tags' => ['shooter',
            'sci-fi'],
        'author' => 'CD Projekt Red',
        'game' => 'Cyberpunk 2077',
        'title' => 'Как изменился Cyberpunk',
        'avatarSrc' => '',
        'pageLink' => '',
    ],
    [
        'tags' => ['rpg',
            'open-world'],
        'author' => 'Иван Петров',
        'game' => 'The Witcher 3',
        'title' => 'Секреты Ведьмака 3',
        'avatarSrc' => '',
        'pageLink' => '',
    ]]"/>
        <section class="section container" data-reveal>
            <h2 class="section__title">Почему TeamQ, а не 50 чатов</h2>
            <div class="grid grid--features">
                <div class="feature"><span class="feature__icon">🔍</span>
                    <h3 class="feature__title">Умные фильтры</h3>
                    <p class="feature__text">Роль, рейтинг, микрофон. Никаких «го в дс, потом решим».</p></div>
                <div class="feature feature--pink"><span class="feature__icon">💬</span>
                    <h3 class="feature__title">Свои чаты</h3>
                    <p class="feature__text">Откликнулся — получил чат. Магия, но без магии.</p></div>
                <div class="feature feature--yellow"><span class="feature__icon">⭐</span>
                    <h3 class="feature__title">Честные отзывы</h3>
                    <p class="feature__text">Токсик? Узнаешь заранее, а не на 20-й минуте.</p></div>
                <div class="feature feature--blue"><span class="feature__icon">🎮</span>
                    <h3 class="feature__title">Профили игроков</h3>
                    <p class="feature__text">Игры, роли, ранги и Discord. Резюме для геймеров.</p></div>
            </div>
        </section>

        <section class="section container" data-reveal>
            <h2 class="section__title">Как это работает</h2>
            <ol class="grid grid--steps">
                <li class="step"><span class="step__num">1</span><span class="step__icon">🎮</span>
                    <h3 class="step__title">Выбери игру</h3>
                    <p class="step__text">Открой каталог и найди свою.</p></li>
                <li class="step"><span class="step__num">2</span><span class="step__icon">🔍</span>
                    <h3 class="step__title">Найди объявление</h3>
                    <p class="step__text">Фильтры по роли, рангу и микрофону.</p></li>
                <li class="step"><span class="step__num">3</span><span class="step__icon">👀</span>
                    <h3 class="step__title">Изучи профиль</h3>
                    <p class="step__text">Отзывы и ранги автора на виду.</p></li>
                <li class="step"><span class="step__num">4</span><span class="step__icon">💬</span>
                    <h3 class="step__title">Откликнись и играй</h3>
                    <p class="step__text">Чат откроется сам. Дальше — gg.</p></li>
            </ol>
        </section>

        {{-- топ --}}
        <section class="section container section--split" data-reveal>

            <x-widgets.leaderboard.main :leaders="[[
    'author' => 'xxxx',
    'avatarSrc' => '',
    'rating' => '4.6'
]]"/>


            <x-widgets.reviews.main :reviews="[
            [
            'avatarSrc' => '',
            'text' => 'Нашёл команду за 4 минуты. Раньше искал 4 часа и находил только токсиков.',
            'author' => 'OctoMain',
            ],
            [
            'avatarSrc' => '/',
            'text' => 'Тиммейт не афкашил ни разу. Я в шоке, лёг подумать.',
            'author' => 'JuiceBoxEnjoyer',
            ],
            [
            'avatarSrc' => '',
            'text' => 'Отзывы реально работают: токсика обошёл стороной. Спасибо, TeamQ!',
            'author' => 'RexOnKeyboard',
            ],
            ]"/>


        </section>
        <section class="section container" data-reveal>
            <h2 class="section__title">Частые вопросы</h2>
            <div class="faq">
                <details class="faq__item">
                    <summary class="faq__question">Это бесплатно?</summary>
                    <p class="faq__answer">Да. Платить придётся только нервами в рейтинговых матчах.</p></details>
                <details class="faq__item">
                    <summary class="faq__question">Что если тиммейт окажется токсиком?</summary>
                    <p class="faq__answer">Оставь честный отзыв. Остальные узнают о нём заранее.</p></details>
                <details class="faq__item">
                    <summary class="faq__question">Нужен ли микрофон?</summary>
                    <p class="faq__answer">Нет. В фильтрах можно выбрать «без микрофона» — молчаливые герои тоже
                        нужны.</p>
                </details>
                <details class="faq__item">
                    <summary class="faq__question">Можно ли создать своё объявление?</summary>
                    <p class="faq__answer">Конечно. Укажи игру, роль, ранг и сколько игроков не хватает.</p></details>
            </div>
        </section>

        <section class="cta container" data-reveal>
            <h2 class="cta__title">Ну чё, го в катку?</h2>
            <p class="cta__text">Регистрация занимает меньше, чем поиск карты в пабге.</p>
            <a class="btn btn--dark btn--lg" href="register.html">Создать аккаунт</a>
        </section>
    </main>

@endsection

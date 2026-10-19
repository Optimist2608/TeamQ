<header class="header" data-header>
    <a class="header__logo" href="index.html"><span class="header__logo-badge">Q</span>Team<span
            class="header__logo-accent">Q</span></a>
    <button class="header__burger" type="button" aria-expanded="false" aria-label="Меню" data-burger>☰</button>
    <nav class="header__nav">
        <a class="header__link header__link--active" href="index.html">
            <img class="header__ico" src="{{ Vite::asset('resources/images/header/home.webp') }}" alt="">
            Главная</a>
        <a class="header__link" href="games.html">
            <img class="header__ico" src="{{ Vite::asset('resources/images/header/games.webp') }}" alt="">
            Игры</a>
        <a class="header__link" href="posts.html">
            <img class="header__ico" src="{{ Vite::asset('resources/images/header/search.webp') }}" alt="">
            Поиск</a>
        <a class="header__link" href="chats.html">
            <img class="header__ico" src="{{ Vite::asset('resources/images/header/chat.webp') }}" alt="">
            Чаты
            <x-widgets.notification :count="'2'"/>

        </a>
    </nav>
        <div class="header__actions">
            <a class="header__user" href="dashboard.html">
                <img class="posts-card__avatar" src="" alt="avatar"/>
                PepeCarry</a>
        </div>
</header>



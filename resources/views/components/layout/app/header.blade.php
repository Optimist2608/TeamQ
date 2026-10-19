<header class="header" data-header>
    <a class="header__logo" href="index.html"><span class="header__logo-badge">Q</span>Team<span
            class="header__logo-accent">Q</span></a>
    <button class="header__burger" type="button" aria-expanded="false" aria-label="Меню" data-burger>☰</button>
    <nav class="header__nav">
        <a class="header__link header__link--active" href="index.html">
            <img class="header__ico" src="{{ Vite::asset('resources/images/header/home.webp') }}">
            Главная</a>
        <a class="header__link" href="games.html">
            <img class="header__ico" src="{{ Vite::asset('resources/images/header/games.webp') }}">
            Игры</a>
        <a class="header__link" href="posts.html">
            <img class="header__ico" src="{{ Vite::asset('resources/images/header/search.webp') }}">
            Поиск</a>
        <a class="header__link" href="chats.html">
            <img class="header__ico" src="{{ Vite::asset('resources/images/header/chat.webp') }}">
            Чаты
            <x-widgets.notification :count="'2'"/>

        </a>
    </nav>
    <div class="header__actions">
        <a class="btn btn--ghost" href="login.html">Войти</a>
        <a class="btn btn--primary" href="register.html">Регистрация</a>
    </div>
</header>


{{--<header class="header" data-header>--}}
{{--    <a class="header__logo" href="../show.blade.php"><span class="header__logo-badge">Q</span>Team<span--}}
{{--            class="header__logo-accent">Q</span></a>--}}
{{--    <button class="header__burger" type="button" aria-expanded="false" aria-label="Меню" data-burger>☰</button>--}}
{{--    <nav class="header__nav">--}}
{{--        <a class="header__link" href="../show.blade.php">🏠 Главная</a>--}}
{{--        <a class="header__link" href="games.blade.php">🎮 Игры</a>--}}
{{--        <a class="header__link" href="profile.blade.php">🔍 Поиск</a>--}}
{{--        <a class="header__link" href="profile.blade.php">💬 Чаты <span class="header__badge">3</span></a>--}}
{{--    </nav>--}}
{{--    <div class="header__actions"><a class="header__user" href="dashboard.html"><span--}}
{{--                class="posts-card__avatar">🐸</span>PepeCarry</a>--}}
{{--    </div>--}}
{{--</header>--}}


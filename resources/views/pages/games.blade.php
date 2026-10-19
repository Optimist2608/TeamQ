@extends("layouts.app")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container page-head">
            <nav class="page-head__crumbs"><a href="home.blade.php">Главная</a> › <span>Игры</span></nav>
            <h1 class="page-head__title">Каталог игр</h1>
            <p class="page-head__text">Выбери игру, для которой ищешь команду. Мы никого не осудим за Dota 2 в три
                ночи.</p>
        </div>
        <div class="container">
            <div class="toolbar"><input class="field__input" style="max-width:420px" type="search"
                                        placeholder="🔎 Найти игру по названию…" data-search-input></div>
            <div class="grid grid--games">
                <a class="game-card" href="posts/index.blade.php" data-search-item data-name="dota 2"><span
                        class="game-card__cover">🧙</span><b class="game-card__name">Dota 2</b><span
                        class="game-card__desc">MOBA 5 на 5. Здесь рождаются мемы и ломаются клавиатуры.</span><span
                        class="game-card__count">128 объявлений</span></a>
                <a class="game-card game-card--pink" href="posts/index.blade.php" data-search-item data-name="cs2"><span
                        class="game-card__cover">🔫</span><b class="game-card__name">CS2</b><span
                        class="game-card__desc">Шутер. Один раунд — тысяча эмоций.</span><span
                        class="game-card__count">94 объявлений</span></a>
                <a class="game-card game-card--yellow" href="posts/index.blade.php" data-search-item
                   data-name="valorant"><span
                        class="game-card__cover">🎯</span><b class="game-card__name">Valorant</b><span
                        class="game-card__desc">Тактический шутер со способностями и вечными спорами про Джетт.</span><span
                        class="game-card__count">76 объявлений</span></a>
                <a class="game-card game-card--blue" href="posts/index.blade.php" data-search-item
                   data-name="minecraft"><span
                        class="game-card__cover">⛏️</span><b class="game-card__name">Minecraft</b><span
                        class="game-card__desc">Строим, копаем и взрываемся от криперов.</span><span
                        class="game-card__count">41 объявлений</span></a>
                <a class="game-card" href="posts/index.blade.php" data-search-item data-name="league of legends"><span
                        class="game-card__cover">⚔️</span><b class="game-card__name">League of Legends</b><span
                        class="game-card__desc">MOBA, где «просто одну катку» не бывает.</span><span
                        class="game-card__count">88 объявлений</span></a>
                <a class="game-card game-card--pink" href="posts/index.blade.php" data-search-item
                   data-name="apex legends"><span
                        class="game-card__cover">🪂</span><b class="game-card__name">Apex Legends</b><span
                        class="game-card__desc">Королевская битва. Пинги важнее слов.</span><span
                        class="game-card__count">52 объявлений</span></a>
                <a class="game-card game-card--yellow" href="posts/index.blade.php" data-search-item
                   data-name="rust"><span
                        class="game-card__cover">🪓</span><b class="game-card__name">Rust</b><span
                        class="game-card__desc">Выживание. Доверяй только своей команде (и то не всем).</span><span
                        class="game-card__count">33 объявлений</span></a>
                <a class="game-card game-card--blue" href="posts/index.blade.php" data-search-item
                   data-name="gta online"><span
                        class="game-card__cover">🚗</span><b class="game-card__name">GTA Online</b><span
                        class="game-card__desc">Открытый мир и очень странные ограбления.</span><span
                        class="game-card__count">27 объявлений</span></a>
                <a class="game-card" href="posts/index.blade.php" data-search-item data-name="fortnite"><span
                        class="game-card__cover">🏗️</span><b
                        class="game-card__name">Fortnite</b><span class="game-card__desc">Строй, танцуй, побеждай. Именно в таком порядке.</span><span
                        class="game-card__count">45 объявлений</span></a>
                <a class="game-card game-card--pink" href="posts/index.blade.php" data-search-item
                   data-name="overwatch 2"><span
                        class="game-card__cover">🛡️</span><b class="game-card__name">Overwatch 2</b><span
                        class="game-card__desc">Командный шутер. Танк нужен всегда.</span><span
                        class="game-card__count">39 объявлений</span></a>
                <a class="game-card game-card--yellow" href="posts/index.blade.php" data-search-item
                   data-name="rocket league"><span
                        class="game-card__cover">🚀</span><b class="game-card__name">Rocket League</b><span
                        class="game-card__desc">Футбол на машинах. Что может пойти не так?</span><span
                        class="game-card__count">22 объявлений</span></a>
                <a class="game-card game-card--blue" href="posts/index.blade.php" data-search-item
                   data-name="dead by daylight"><span
                        class="game-card__cover">🔪</span><b class="game-card__name">Dead by Daylight</b><span
                        class="game-card__desc">Хоррор. Бегай, прячься, не ори в микрофон.</span><span
                        class="game-card__count">18 объявлений</span></a>
            </div>
            <p class="empty-state" data-search-empty hidden>🦗 Ничего не найдено. Даже сверчки ушли в другую игру.</p>
        </div>
    </main>

@endsection

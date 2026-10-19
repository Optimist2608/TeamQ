@extends("layouts.app")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container page-head">
            <nav class="page-head__crumbs"><a href="../home.blade.php">Главная</a> › <a href="../games.blade.php">Игры</a>
                ›
                <span>Dota 2</span></nav>
            <h1 class="page-head__title">Тиммейты для Dota 2</h1>
            <p class="page-head__text">Фильтруй, сортируй и откликайся. Главное — не пикай чужого героя.</p>
            <div class="page-head__actions"><a class="btn btn--primary" href="create.blade.php">Создать
                    объявление</a></div>
        </div>
        <div class="container">
            <div class="toolbar"><b><span data-post-count>8</span> объявлений</b>
                <label class="field" style="margin:0"><select class="field__input" data-post-sort>
                        <option value="new">Сначала новые</option>
                        <option value="old">Сначала старые</option>
                    </select></label></div>
        </div>
        <div class="container layout">
            <form class="panel panel--sticky" data-post-filters>
                <h2 class="panel__title">Фильтры</h2>
                <label class="field"><span class="field__label">Рейтинг</span><select class="field__input"
                                                                                      name="rating">
                        <option value="any">Любой</option>
                        <option value="low">Новичок</option>
                        <option value="mid">Средний</option>
                        <option value="high">Высокий</option>
                        <option value="top">Топ</option>
                    </select></label>
                <label class="field"><span class="field__label">Роль</span><select class="field__input" name="role">
                        <option value="any">Любой</option>
                        <option value="carry">Керри</option>
                        <option value="mid">Мид</option>
                        <option value="off">Оффлейн</option>
                        <option value="support">Саппорт</option>
                    </select></label>
                <label class="field"><span class="field__label">Свободных мест от</span><input class="field__input"
                                                                                               type="number"
                                                                                               name="slots"
                                                                                               min="0" max="5"
                                                                                               value="0"></label>
                <label class="check"><input type="checkbox" name="mic"> Только с микрофоном</label>
                <button class="btn btn--ghost btn--block" type="reset">Сбросить</button>
            </form>
            <section>
                <div class="grid grid--posts" data-post-list>
                    <article class="post-card" data-role="support" data-rating="top" data-mic="1" data-slots="2"
                             data-date="8">
                        <div class="post-card__head"><span class="post-card__avatar">🐸</span>
                            <div><b class="post-card__author">xX_PepeCarry_Xx</b><span class="post-card__meta">Dota 2 · Immortal</span>
                            </div>
                        </div>
                        <h3 class="post-card__title">Ищу саппорта. Обещаю не винить в поражении (почти)</h3>
                        <p class="post-card__text">Играю вечерами по МСК. Нужен тот, кто ставит варды и не ругается.</p>
                        <div class="post-card__tags"><span class="tag">🎤 микрофон</span><span class="tag tag--yellow">Саппорт</span><span
                                class="tag tag--pink">2/5 мест</span></div>
                        <a class="btn btn--primary btn--block" href="show.blade.php">Подробнее</a></article>
                    <article class="post-card" data-role="off" data-rating="high" data-mic="1" data-slots="3"
                             data-date="7">
                        <div class="post-card__head"><span class="post-card__avatar">🍕</span>
                            <div><b class="post-card__author">PizzaPudge</b><span
                                    class="post-card__meta">Dota 2 · Ancient</span></div>
                        </div>
                        <h3 class="post-card__title">Хукаю всех подряд. Нужны те, кто не бежит за мной в лес</h3>
                        <p class="post-card__text">Любимый герой — Пудж. Любимое место — чужой лес.</p>
                        <div class="post-card__tags"><span class="tag">🎤 микрофон</span><span class="tag tag--yellow">Оффлейн</span><span
                                class="tag tag--pink">3/5 мест</span></div>
                        <a class="btn btn--primary btn--block" href="show.blade.php">Подробнее</a></article>
                    <article class="post-card" data-role="mid" data-rating="high" data-mic="0" data-slots="1"
                             data-date="6">
                        <div class="post-card__head"><span class="post-card__avatar">🦉</span>
                            <div><b class="post-card__author">SleepyAWP</b><span
                                    class="post-card__meta">Dota 2 · Divine</span></div>
                        </div>
                        <h3 class="post-card__title">Мид или фид. Выбираю мид, ты выбираешь, чем фидить</h3>
                        <p class="post-card__text">Играю по ночам. Кофе — за мной, ворды — за тобой.</p>
                        <div class="post-card__tags"><span class="tag">без микрофона</span><span
                                class="tag tag--yellow">Мид</span><span class="tag tag--pink">1/5 мест</span></div>
                        <a class="btn btn--primary btn--block" href="show.blade.php">Подробнее</a></article>
                    <article class="post-card" data-role="carry" data-rating="mid" data-mic="1" data-slots="2"
                             data-date="5">
                        <div class="post-card__head"><span class="post-card__avatar">🐙</span>
                            <div><b class="post-card__author">OctoMain</b><span
                                    class="post-card__meta">Dota 2 · Legend</span></div>
                        </div>
                        <h3 class="post-card__title">Ищу керри, который знает, что такое фарм</h3>
                        <p class="post-card__text">Восемь рук, ни одного ластхита. Нужна помощь.</p>
                        <div class="post-card__tags"><span class="tag">🎤 микрофон</span><span
                                class="tag tag--yellow">Керри</span><span class="tag tag--pink">2/5 мест</span></div>
                        <a class="btn btn--primary btn--block" href="show.blade.php">Подробнее</a></article>
                    <article class="post-card" data-role="support" data-rating="low" data-mic="0" data-slots="4"
                             data-date="4">
                        <div class="post-card__head"><span class="post-card__avatar">🧃</span>
                            <div><b class="post-card__author">JuiceBoxEnjoyer</b><span class="post-card__meta">Dota 2 · Crusader</span>
                            </div>
                        </div>
                        <h3 class="post-card__title">Новичок ищет терпеливых наставников (и печеньки)</h3>
                        <p class="post-card__text">Знаю, где кнопка Q. Остальное изучаю в процессе.</p>
                        <div class="post-card__tags"><span class="tag">без микрофона</span><span
                                class="tag tag--yellow">Саппорт</span><span
                                class="tag tag--pink">4/5 мест</span></div>
                        <a class="btn btn--primary btn--block" href="show.blade.php">Подробнее</a></article>
                    <article class="post-card" data-role="off" data-rating="mid" data-mic="1" data-slots="2"
                             data-date="3">
                        <div class="post-card__head"><span class="post-card__avatar">🦖</span>
                            <div><b class="post-card__author">RexOnKeyboard</b><span
                                    class="post-card__meta">Dota 2 · Archon</span></div>
                        </div>
                        <h3 class="post-card__title">Только позитив. Токсиков проверяю сканером</h3>
                        <p class="post-card__text">Играем спокойно, ржём громко, проигрываем красиво.</p>
                        <div class="post-card__tags"><span class="tag">🎤 микрофон</span><span class="tag tag--yellow">Оффлейн</span><span
                                class="tag tag--pink">2/5 мест</span></div>
                        <a class="btn btn--primary btn--block" href="show.blade.php">Подробнее</a></article>
                    <article class="post-card" data-role="mid" data-rating="low" data-mic="0" data-slots="5"
                             data-date="2">
                        <div class="post-card__head"><span class="post-card__avatar">😎</span>
                            <div><b class="post-card__author">NoScope_Babushka</b><span class="post-card__meta">Dota 2 · Herald</span>
                            </div>
                        </div>
                        <h3 class="post-card__title">Учусь играть. Бабушка сказала: надо тренироваться</h3>
                        <p class="post-card__text">Бабушка в команде не участвует, но болеет.</p>
                        <div class="post-card__tags"><span class="tag">без микрофона</span><span
                                class="tag tag--yellow">Мид</span><span class="tag tag--pink">5/5 мест</span></div>
                        <a class="btn btn--primary btn--block" href="show.blade.php">Подробнее</a></article>
                    <article class="post-card" data-role="carry" data-rating="top" data-mic="1" data-slots="1"
                             data-date="1">
                        <div class="post-card__head"><span class="post-card__avatar">🦆</span>
                            <div><b class="post-card__author">QuackAttack</b><span
                                    class="post-card__meta">Dota 2 · Immortal</span></div>
                        </div>
                        <h3 class="post-card__title">Турнирная команда, нужен пятый. Кря</h3>
                        <p class="post-card__text">Тренировки по вторникам и четвергам. Опоздание — штраф
                            печеньками.</p>
                        <div class="post-card__tags"><span class="tag">🎤 микрофон</span><span
                                class="tag tag--yellow">Керри</span><span class="tag tag--pink">1/5 мест</span></div>
                        <a class="btn btn--primary btn--block" href="show.blade.php">Подробнее</a></article>
                </div>
                <p class="empty-state" data-post-empty hidden>🕳️ Пусто. Попробуй смягчить фильтры или создай своё
                    объявление.</p>
            </section>
        </div>
    </main>

@endsection

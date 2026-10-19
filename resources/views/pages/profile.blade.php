@extends("layouts.main")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container page-head">
            <nav class="page-head__crumbs"><a href="../index.blade.php">Главная</a> › <a
                    href="games.blade.php">Игроки</a> › <span>xX_PepeCarry_Xx</span>
            </nav>
            <h1 class="page-head__title">Профиль игрока</h1>
            <p class="page-head__text"></p>
        </div>
        <div class="container stack">
            <section class="panel panel--pink profile-head">
                <span class="avatar-xl">🐸</span>
                <div><h2 class="profile-head__name">xX_PepeCarry_Xx</h2>
                    <p class="profile-head__bio">22 года, МСК. Играю в Dota 2 и иногда в CS2. Люблю хорошие катки,
                        плохие
                        шутки и холодный чай.</p>
                    <div class="profile-head__discord"><span class="tag">Discord</span><b>PepeCarry#1337</b>
                        <button class="btn btn--sm btn--primary" type="button" data-copy="PepeCarry#1337">Скопировать
                        </button>
                    </div>
                </div>
            </section>
            <div class="kpi" style="margin:0">
                <div class="kpi__item"><span class="kpi__num">342</span><span class="kpi__label">совместных игр</span>
                </div>
                <div class="kpi__item"><span class="kpi__num">4.9 ★</span><span class="kpi__label">средняя оценка</span>
                </div>
                <div class="kpi__item"><span class="kpi__num">23</span><span class="kpi__label">отзывов</span></div>
                <div class="kpi__item"><span class="kpi__num">7 мес.</span><span class="kpi__label">на TeamQ</span>
                </div>
            </div>
            <div class="layout layout--main-first" style="padding:0">
                <div class="stack">
                    <section class="panel"><h2 class="panel__title">Любимые игры, роли и рейтинги</h2>
                        <table class="table">
                            <tr>
                                <th>Игра</th>
                                <th>Роль</th>
                                <th>Рейтинг</th>
                            </tr>
                            <tr>
                                <td>🧙 Dota 2</td>
                                <td>Саппорт</td>
                                <td>Immortal</td>
                            </tr>
                            <tr>
                                <td>🔫 CS2</td>
                                <td>Энтри</td>
                                <td>Gold Nova</td>
                            </tr>
                            <tr>
                                <td>⛏️ Minecraft</td>
                                <td>Билдер</td>
                                <td>Хардкор</td>
                            </tr>
                        </table>
                    </section>
                    <section class="panel">
                        <div class="toolbar"><h2 class="panel__title" style="margin:0">Свежие отзывы</h2><a class="link"
                                                                                                            href="ratings.blade.php">Все
                                отзывы →</a></div>
                        <div class="review-card"><span class="post-card__avatar">🐙</span>
                            <div><b>OctoMain</b> <span class="stars">★★★★★</span> <span
                                    class="tag tag--yellow">Dota 2</span></div>
                            <p class="review-card__text">Играли в паре. Ни одного афк и ни одной ссоры. Редкость!</p>
                        </div>
                        <div class="review-card"><span class="post-card__avatar">🧃</span>
                            <div><b>JuiceBoxEnjoyer</b> <span class="stars">★★★★★</span> <span class="tag tag--yellow">Dota 2</span>
                            </div>
                            <p class="review-card__text">Терпеливо объяснял, как не умирать. Спасибо!</p></div>
                        <div class="review-card"><span class="post-card__avatar">🦖</span>
                            <div><b>RexOnKeyboard</b> <span class="stars">★★★★☆</span> <span
                                    class="tag tag--yellow">CS2</span></div>
                            <p class="review-card__text">Хорош, но слишком любит пинговать смоки.</p></div>
                    </section>
                </div>
                <aside class="stack"><h2 class="section__title" style="margin:0">Объявления</h2>
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
                        <a class="btn btn--primary btn--block" href="post.blade.php">Подробнее</a></article>
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
                        <a class="btn btn--primary btn--block" href="post.blade.php">Подробнее</a></article>
                </aside>
            </div>
        </div>
    </main>

@endsection

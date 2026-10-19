@extends("layouts.main")

@section("title", "Поиск тиммейтов для игр")

@section("content")


    <main>
        <div class="container page-head">
            <nav class="page-head__crumbs"><a href="../index.blade.php">Главная</a> › <span>Кабинет</span></nav>
            <h1 class="page-head__title">Привет, PepeCarry 👋</h1>
            <p class="page-head__text">Тут твои объявления, отклики и чаты. Всё под контролем (почти).</p>
            <div class="page-head__actions"><a class="btn btn--primary" href="post-create.blade.php">+ Новое
                    объявление</a><a
                    class="btn btn--ghost" href="settings-profile.blade.php">Редактировать профиль</a></div>
        </div>
        <div class="container layout">
            <aside class="stack">
                <div class="panel panel--pink author-box"><span class="avatar-xl">🐸</span><b>xX_PepeCarry_Xx</b><small>pepe@teamq.gg</small><small>На
                        сайте с марта 2026 · Уровень 12</small><a class="btn btn--ghost btn--block"
                                                                  href="profile.blade.php">Мой
                        профиль</a></div>
                <nav class="panel side-nav"><a class="is-active" href="dashboard.html">Обзор</a><a href="#">Мои
                        объявления</a><a href="#">Мои отклики</a><a href="settings-profile.blade.php">Настройки</a>
                </nav>
            </aside>
            <section>
                <div class="kpi" style="margin-top:0">
                    <div class="kpi__item"><span class="kpi__num">3</span><span
                            class="kpi__label">активных объявления</span></div>
                    <div class="kpi__item"><span class="kpi__num">5</span><span
                            class="kpi__label">отправленных откликов</span></div>
                    <div class="kpi__item"><span class="kpi__num">3</span><span class="kpi__label">непрочитанных</span>
                    </div>
                </div>
                <div class="panel" data-tabs>
                    <div class="chips">
                        <button class="chip is-active" type="button" data-tab="posts">📣 Мои объявления</button>
                        <button class="chip" type="button" data-tab="resp">📨 Мои отклики</button>
                        <button class="chip" type="button" data-tab="chats">💬 Активные чаты</button>
                    </div>
                    <div data-panel="posts">
                        <div class="list-row">
                            <div class="list-row__main">
                                <div class="list-row__title">Ищу саппорта. Обещаю не винить в поражении (почти)</div>
                                <div class="list-row__meta">Dota 2 · 4 отклика</div>
                            </div>
                            <span class="badge">открыто</span><a class="btn btn--sm" href="post.blade.php">Открыть</a>
                        </div>
                        <div class="list-row">
                            <div class="list-row__main">
                                <div class="list-row__title">Беру в пати только тех, кто не пикает Джетт</div>
                                <div class="list-row__meta">Valorant · 1 отклик</div>
                            </div>
                            <span class="badge">открыто</span><a class="btn btn--sm" href="post.blade.php">Открыть</a>
                        </div>
                        <div class="list-row">
                            <div class="list-row__main">
                                <div class="list-row__title">Ищу пятого на вечер</div>
                                <div class="list-row__meta">CS2 · 0 откликов</div>
                            </div>
                            <span class="badge badge--closed">закрыто</span><a class="btn btn--sm"
                                                                               href="post.blade.php">Открыть</a></div>
                    </div>
                    <div data-panel="resp" hidden>
                        <div class="list-row">
                            <div class="list-row__main">
                                <div class="list-row__title">Играю по ночам. Кофе — за мной, смоки — за тобой</div>
                                <div class="list-row__meta">SleepyAWP · CS2</div>
                            </div>
                            <span class="badge">принят</span><a class="btn btn--sm" href="chat.blade.php">В чат</a>
                        </div>
                        <div class="list-row">
                            <div class="list-row__main">
                                <div class="list-row__title">Строим дом. Крипер уже взорвал два</div>
                                <div class="list-row__meta">CreeperEnjoyer · Minecraft</div>
                            </div>
                            <span class="badge badge--wait">ожидает</span></div>
                        <div class="list-row">
                            <div class="list-row__main">
                                <div class="list-row__title">Турнирная команда, нужен пятый</div>
                                <div class="list-row__meta">QuackAttack · Dota 2</div>
                            </div>
                            <span class="badge badge--no">отклонён</span></div>
                    </div>
                    <div data-panel="chats" hidden>
                        <div class="list-row">
                            <div class="list-row__main">
                                <div class="list-row__title">SleepyAWP</div>
                                <div class="list-row__meta">Го в катку? Я уже в лобби</div>
                            </div>
                            <span class="dialog__badge">2</span><a class="btn btn--sm" href="chat.blade.php">Открыть</a>
                        </div>
                        <div class="list-row">
                            <div class="list-row__main">
                                <div class="list-row__title">PizzaPudge</div>
                                <div class="list-row__meta">Хук был намеренный, честно</div>
                            </div>
                            <a class="btn btn--sm" href="chat.blade.php">Открыть</a></div>
                        <div class="list-row">
                            <div class="list-row__main">
                                <div class="list-row__title">OctoMain</div>
                                <div class="list-row__meta">Принял твой отклик 🔥</div>
                            </div>
                            <span class="dialog__badge">1</span><a class="btn btn--sm" href="chat.blade.php">Открыть</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection

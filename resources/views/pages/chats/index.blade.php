@extends("layouts.app")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container page-head">
            <nav class="page-head__crumbs"><a href="../home.blade.php">Главная</a> › <span>Чаты</span></nav>
            <h1 class="page-head__title">Чаты</h1>
            <p class="page-head__text">Договаривайся об игре, пока лобби не заполнилось.</p>
        </div>
        <div class="container">
            <div class="chat-layout">
                <aside class="dialogs"><a class="dialog" href="show.blade.php"><span
                            class="post-card__avatar">🦉</span><span
                            class="dialog__text"><b class="dialog__name">SleepyAWP</b><span class="dialog__last">Го в катку? Я уже в лобби</span></span><span
                            class="dialog__badge">2</span></a><a class="dialog" href="show.blade.php"><span
                            class="post-card__avatar">🍕</span><span class="dialog__text"><b class="dialog__name">PizzaPudge</b><span
                                class="dialog__last">Хук был намеренный, честно</span></span><small>11:40</small></a><a
                        class="dialog"
                        href="show.blade.php"><span
                            class="post-card__avatar">🐙</span><span class="dialog__text"><b class="dialog__name">OctoMain</b><span
                                class="dialog__last">Принял твой отклик 🔥</span></span><span
                            class="dialog__badge">1</span></a><a
                        class="dialog" href="show.blade.php"><span class="post-card__avatar">🦆</span><span
                            class="dialog__text"><b
                                class="dialog__name">QuackAttack</b><span class="dialog__last">Кря.</span></span><small>пн</small></a><a
                        class="dialog" href="show.blade.php"><span class="post-card__avatar">🦖</span><span
                            class="dialog__text"><b
                                class="dialog__name">RexOnKeyboard</b><span
                                class="dialog__last">Отзыв оставил, ты топ</span></span><small>вс</small></a></aside>
                <section class="conversation">
                    <div class="conversation__empty">
                        <div>
                            <div style="font-size:4rem">💬</div>
                            <h2 class="panel__title">Выбери диалог</h2>
                            <p>Или откликнись на объявление, и чат появится сам.</p><a class="btn btn--primary"
                                                                                       href="../games.blade.php">Найти
                                команду</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

@endsection

@extends("layouts.app")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container page-head">
            <nav class="page-head__crumbs"><a href="../home.blade.php">Главная</a> › <a
                    href="index.blade.php">Чаты</a>
                › <span>SleepyAWP</span>
            </nav>
            <h1 class="page-head__title">Чат с SleepyAWP</h1>
            <p class="page-head__text"></p>
        </div>
        <div class="container">
            <div class="chat-layout">
                <aside class="dialogs"><a class="dialog dialog--active" href="chat.html"><span
                            class="post-card__avatar">🦉</span><span class="dialog__text"><b class="dialog__name">SleepyAWP</b><span
                                class="dialog__last">Го в катку? Я уже в лобби</span></span><span class="dialog__badge">2</span></a><a
                        class="dialog" href="chat.html"><span class="post-card__avatar">🍕</span><span
                            class="dialog__text"><b
                                class="dialog__name">PizzaPudge</b><span
                                class="dialog__last">Хук был намеренный, честно</span></span><small>11:40</small></a><a
                        class="dialog"
                        href="chat.html"><span
                            class="post-card__avatar">🐙</span><span class="dialog__text"><b class="dialog__name">OctoMain</b><span
                                class="dialog__last">Принял твой отклик 🔥</span></span><span
                            class="dialog__badge">1</span></a><a
                        class="dialog" href="chat.html"><span class="post-card__avatar">🦆</span><span
                            class="dialog__text"><b
                                class="dialog__name">QuackAttack</b><span class="dialog__last">Кря.</span></span><small>пн</small></a><a
                        class="dialog" href="chat.html"><span class="post-card__avatar">🦖</span><span
                            class="dialog__text"><b
                                class="dialog__name">RexOnKeyboard</b><span
                                class="dialog__last">Отзыв оставил, ты топ</span></span><small>вс</small></a></aside>
                <section class="conversation">
                    <header class="conversation__head"><span class="post-card__avatar">🦉</span>
                        <div><b>SleepyAWP</b><br><small>онлайн · CS2 · Master Guard</small></div>
                        <a class="btn btn--sm" style="margin-left:auto" href="../profile.blade.php">Профиль</a></header>
                    <div class="conversation__post">📌 Объявление: <a class="link" href="../posts/show.blade.php">Играю
                            по ночам.
                            Кофе — за
                            мной, смоки — за тобой</a></div>
                    <div class="conversation__feed" data-chat-feed>
                        <div class="msg"><p class="msg__bubble">Привет! Увидел твой отклик на объявление</p><span
                                class="msg__time">23:58</span></div>
                        <div class="msg msg--own"><p class="msg__bubble">Здарова! Я на ранге Master Guard, микрофон
                                есть</p>
                            <span class="msg__time">23:59</span></div>
                        <div class="msg"><p class="msg__bubble">Отлично. Кофе с тебя, смоки с меня 😄</p><span
                                class="msg__time">00:01</span></div>
                        <div class="msg msg--own"><p class="msg__bubble">Договорились. Во сколько заходим?</p><span
                                class="msg__time">00:02</span></div>
                        <div class="msg"><p class="msg__bubble">Го в катку? Я уже в лобби</p><span
                                class="msg__time">00:04</span></div>
                        <div class="msg msg--own"><p class="msg__bubble">Ща, только чай налью</p><span
                                class="msg__time">00:04</span>
                        </div>
                    </div>
                    <form class="conversation__form" data-chat-form><input class="field__input" type="text"
                                                                           placeholder="Напиши сообщение…"
                                                                           autocomplete="off">
                        <button class="btn btn--primary" type="submit">Отправить</button>
                    </form>
                </section>
            </div>
        </div>
    </main>

@endsection

@extends("layouts.main")

@section("title", "Поиск тиммейтов для игр")

@section("content")

<main>
    <div class="container page-head">
        <nav class="page-head__crumbs"><a href="../index.blade.php">Главная</a> › <a href="posts.blade.php">Dota 2</a> › <span>Объявление</span>
        </nav>
        <h1 class="page-head__title">Ищу саппорта. Обещаю не винить в поражении (почти)</h1>
        <p class="page-head__text"></p>
    </div>
    <div class="container layout layout--main-first">
        <article class="panel">
            <span class="badge">● Открыто</span>
            <p style="margin-top:16px">Играю вечерами по МСК, обычно с 20:00 до глубокой ночи. Нужен саппорт, который
                ставит варды, вовремя стакает лагерь и не пишет «gg wp» на 10-й минуте. Обещаю купить смоки и не
                обвинять никого в поражении (почти). Мне 22, настроение хорошее, кот на подхвате.</p>
            <div class="info-grid">
                <div class="info-grid__item"><span class="info-grid__label">Игра</span><span class="info-grid__value">🧙 Dota 2</span>
                </div>
                <div class="info-grid__item"><span class="info-grid__label">Роль</span><span class="info-grid__value">Саппорт (pos 5)</span>
                </div>
                <div class="info-grid__item"><span class="info-grid__label">Рейтинг</span><span
                    class="info-grid__value">Immortal</span></div>
                <div class="info-grid__item"><span class="info-grid__label">Микрофон</span><span
                    class="info-grid__value">🎤 Обязателен</span></div>
                <div class="info-grid__item"><span class="info-grid__label">Нужно игроков</span><span
                    class="info-grid__value">2 из 5</span></div>
                <div class="info-grid__item"><span class="info-grid__label">Опубликовано</span><span
                    class="info-grid__value">сегодня, 19:42</span></div>
            </div>
            <div class="post-card__tags" style="margin-bottom:22px"><span class="tag">🎤 микрофон</span><span
                class="tag tag--yellow">pos 5</span><span class="tag tag--pink">вечером</span></div>
            <button class="btn btn--primary btn--lg" type="button" data-modal-open="apply-modal">Откликнуться</button>
        </article>
        <aside class="stack">
            <div class="panel panel--pink author-box">
                <div class="profile-head"><span class="avatar-xl"
                                                style="width:72px;height:72px;font-size:2.2rem">🐸</span>
                    <div><b>xX_PepeCarry_Xx</b><br><span class="stars">★★★★★</span> 4.9 <small>(23)</small></div>
                </div>
                <p>Dota 2 · Immortal · на сайте с марта</p>
                <a class="btn btn--ghost btn--block" href="profile.blade.php">Профиль автора</a>
                <a class="btn btn--ghost btn--block" href="ratings.blade.php">Отзывы</a>
            </div>
            <div class="panel"><h2 class="panel__title">Уже откликнулись</h2>
                <div class="profile-head" style="gap:10px"><span class="post-card__avatar">🦉</span><span
                    class="post-card__avatar">🧃</span><span class="post-card__avatar">🦖</span><small>+1</small></div>
            </div>
        </aside>
    </div>
    <dialog class="modal" id="apply-modal">
        <form class="modal__body" method="dialog">
            <h2 class="panel__title">Отклик на объявление</h2>
            <label class="field"><span class="field__label">Пара слов о себе</span><textarea class="field__input"
                                                                                             placeholder="Играю на pos 5, микрофон есть, кот тоже…"></textarea></label>
            <label class="field"><span class="field__label">Твоя роль</span><select class="field__input">
                <option value="carry">Керри</option>
                <option value="mid">Мид</option>
                <option value="off">Оффлейн</option>
                <option value="support" selected>Саппорт</option>
            </select></label>
            <div class="modal__actions">
                <button class="btn btn--ghost" type="button" data-modal-close>Отмена</button>
                <button class="btn btn--primary" value="send">Отправить отклик</button>
            </div>
        </form>
    </dialog>
</main>



@endsection

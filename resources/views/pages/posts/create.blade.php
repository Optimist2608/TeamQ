@extends("layouts.app")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container page-head">
            <nav class="page-head__crumbs"><a href="../home.blade.php">Главная</a> › <a
                    href="../dashboard/dashboard.blade.php">Кабинет</a>
                › <span>Новое объявление</span>
            </nav>
            <h1 class="page-head__title">Создать объявление</h1>
            <p class="page-head__text">Опиши, кого ищешь. Чем честнее — тем меньше афкашников.</p>
        </div>
        <div class="container layout layout--main-first">
            <form class="panel" action="#" method="post">
                <label class="field"><span class="field__label">Игра</span><select class="field__input"
                                                                                   data-preview="game">
                        <option value="dota-2">Dota 2</option>
                        <option value="cs2">CS2</option>
                        <option value="valorant">Valorant</option>
                        <option value="minecraft">Minecraft</option>
                        <option value="lol">League of Legends</option>
                        <option value="apex">Apex Legends</option>
                        <option value="rust">Rust</option>
                        <option value="gta">GTA Online</option>
                        <option value="fortnite">Fortnite</option>
                        <option value="overwatch">Overwatch 2</option>
                        <option value="rocket-league">Rocket League</option>
                        <option value="dbd">Dead by Daylight</option>
                    </select></label>
                <label class="field"><span class="field__label">Название</span><input class="field__input" type="text"
                                                                                      maxlength="80"
                                                                                      placeholder="Например: Ищу саппорта, обещаю не токсичить"
                                                                                      data-preview="title"></label>
                <label class="field"><span class="field__label">Описание</span><textarea class="field__input"
                                                                                         placeholder="Когда играешь, чем занимаешься, что ждёшь от команды…"></textarea></label>
                <div class="field-row">
                    <label class="field"><span class="field__label">Предпочтительная роль</span><select
                            class="field__input"
                            data-preview="role">
                            <option value="carry">Керри</option>
                            <option value="mid">Мид</option>
                            <option value="off">Оффлейн</option>
                            <option value="support">Саппорт</option>
                        </select></label>
                    <label class="field"><span class="field__label">Рейтинг</span><select class="field__input">
                            <option value="low">Новичок</option>
                            <option value="mid" selected>Средний</option>
                            <option value="high">Высокий</option>
                            <option value="top">Топ</option>
                        </select></label>
                </div>
                <div class="field-row">
                    <label class="field"><span class="field__label">Сколько игроков нужно</span><input
                            class="field__input"
                            type="number" min="1"
                            max="9"
                            value="2"></label>
                    <label class="check" style="align-self:center;margin:12px 0 0"><input type="checkbox" checked> Нужен
                        микрофон</label>
                </div>
                <div class="form__actions">
                    <button class="btn btn--primary btn--lg" type="submit">Опубликовать</button>
                    <a class="btn btn--ghost btn--lg" href="../dashboard/dashboard.blade.php">Отмена</a></div>
            </form>
            <aside class="panel panel--sticky"><h2 class="panel__title">Так увидят твоё объявление</h2>
                <article class="post-card" style="box-shadow:none">
                    <div class="post-card__head"><span class="post-card__avatar">🐸</span>
                        <div><b class="post-card__author">xX_PepeCarry_Xx</b><span class="post-card__meta"
                                                                                   data-preview-target="game">Dota 2</span>
                        </div>
                    </div>
                    <h3 class="post-card__title" data-preview-target="title">Заголовок твоего объявления</h3>
                    <div class="post-card__tags"><span class="tag">🎤 микрофон</span><span class="tag tag--yellow"
                                                                                          data-preview-target="role">Керри</span>
                    </div>
                </article>
            </aside>
        </div>
    </main>

@endsection

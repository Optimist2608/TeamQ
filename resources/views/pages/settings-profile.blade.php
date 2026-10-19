@extends("layouts.main")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container page-head">
            <nav class="page-head__crumbs"><a href="../index.blade.php">Главная</a> › <a href="dashboard.blade.php">Кабинет</a>
                › <span>Настройки</span>
            </nav>
            <h1 class="page-head__title">Настройки профиля</h1>
            <p class="page-head__text">Поменяй ник, аватар и пароль. Рейтинг в Dota так просто не поменять.</p>
        </div>
        <div class="container layout">
            <nav class="panel side-nav"><a class="is-active" href="settings-profile.html">Профиль</a><a href="#">Безопасность</a><a
                    href="dashboard.blade.php">← В кабинет</a></nav>
            <div class="stack">
                <form class="panel" action="#" method="post" enctype="multipart/form-data">
                    <h2 class="panel__title">Профиль</h2>
                    <div class="profile-head" style="margin-bottom:20px"><span class="avatar-xl"
                                                                               data-avatar-preview>🐸</span>
                        <div class="field" style="margin:0"><span class="field__label">Аватар</span>
                            <div class="file-input">
                                <input class="file-input__control" id="avatar" type="file" accept="image/*"
                                       data-avatar-input>
                                <label class="btn btn--primary btn--sm file-input__button" for="avatar">📁 Выбрать
                                    файл</label>
                                <span class="file-input__name" data-avatar-name>Файл не выбран</span>
                            </div>
                            <span class="field__hint">JPG, PNG или GIF, до 2 МБ</span></div>
                    </div>
                    <div class="field-row"><label class="field"><span class="field__label">Имя</span><input
                                class="field__input" type="text" value="xX_PepeCarry_Xx"></label>
                        <label class="field"><span class="field__label">Discord-тег</span><input class="field__input"
                                                                                                 type="text"
                                                                                                 value="PepeCarry#1337"></label>
                    </div>
                    <div class="field-row"><label class="field"><span class="field__label">Возраст</span><input
                                class="field__input" type="number" min="12" max="99" value="22"></label>
                        <label class="field"><span class="field__label">Часовой пояс</span><select class="field__input">
                                <option value="2">UTC+2 Калининград</option>
                                <option value="3" selected>UTC+3 Москва</option>
                                <option value="5">UTC+5 Екатеринбург</option>
                                <option value="7">UTC+7 Новосибирск</option>
                                <option value="10">UTC+10 Владивосток</option>
                            </select></label></div>
                    <label class="field"><span class="field__label">О себе</span><textarea class="field__input">22 года, МСК. Играю в Dota 2 и иногда в CS2. Люблю хорошие катки и холодный чай.</textarea></label>
                    <button class="btn btn--primary" type="submit">Сохранить изменения</button>
                </form>
                <form class="panel" action="#" method="post">
                    <h2 class="panel__title">Смена пароля</h2>
                    <label class="field"><span class="field__label">Текущий пароль</span><input class="field__input"
                                                                                                type="password"
                                                                                                autocomplete="current-password"></label>
                    <div class="field-row"><label class="field"><span class="field__label">Новый пароль</span><input
                                class="field__input" type="password" autocomplete="new-password"></label>
                        <label class="field"><span class="field__label">Повтори пароль</span><input class="field__input"
                                                                                                    type="password"
                                                                                                    autocomplete="new-password"></label>
                    </div>
                    <button class="btn btn--primary" type="submit">Обновить пароль</button>
                </form>
            </div>
        </div>
    </main>

@endsection

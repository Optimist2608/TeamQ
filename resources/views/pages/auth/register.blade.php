@extends("layouts.app")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container auth">
            <form class="panel panel--pink auth__card" action="#" method="post">
                <h1 class="page-head__title" style="font-size:2rem">Регистрация</h1>
                <p class="auth__text">Займёт меньше времени, чем поиск карты в пабге.</p>
                <label class="field"><span class="field__label">Ник</span><input class="field__input" type="text"
                                                                                 placeholder="xX_PepeCarry_Xx"></label>
                <label class="field"><span class="field__label">Email</span><input class="field__input" type="email"
                                                                                   placeholder="you@teamq.gg"></label>
                <label class="field"><span class="field__label">Пароль</span><input class="field__input" type="password"
                                                                                    placeholder="Минимум 8 символов"></label>
                <label class="field"><span class="field__label">Повтори пароль</span><input class="field__input"
                                                                                            type="password"
                                                                                            placeholder="Ещё раз"></label>
                <label class="check"><input type="checkbox"> Не токсичю и не афкашу (честное слово)</label>
                <button class="btn btn--primary btn--lg btn--block" type="submit">Создать аккаунт</button>
                <p class="auth__footer">Уже есть аккаунт? <a class="link" href="login.blade.php">Войти</a></p></form>
        </div>
    </main>

@endsection

@extends("layouts.app")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container auth">
            <form class="panel panel--pink auth__card" action="#" method="post">
                <h1 class="page-head__title" style="font-size:2rem">Вход</h1>
                <p class="auth__text">С возвращением, легенда. Лобби уже заждалось.</p>
                <label class="field"><span class="field__label">Email</span><input class="field__input" type="email"
                                                                                   placeholder="you@teamq.gg"></label>
                <label class="field"><span class="field__label">Пароль</span><input class="field__input" type="password"
                                                                                    placeholder="••••••••"></label>
                <div class="toolbar"><label class="check" style="margin:0"><input type="checkbox"> Запомнить
                        меня</label><a
                            class="link" href="#">Забыл пароль?</a></div>
                <button class="btn btn--primary btn--lg btn--block" type="submit">Войти</button>
                <p class="auth__footer">Нет аккаунта? <a class="link" href="register.blade.php">Регистрация</a></p>
            </form>
        </div>
    </main>

@endsection

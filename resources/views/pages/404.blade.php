@extends("layouts.app")

@section("title", "404")

@section("content")

    <main>
        <div class="container error-page">
            <div class="error-page__code">404</div>
            <p class="error-page__text">Страница ливнула из матча. Мы её уже репортнули.</p><a
                    class="btn btn--primary btn--lg" href="home.blade.php">Вернуться на главную</a></div>
    </main>

@endsection

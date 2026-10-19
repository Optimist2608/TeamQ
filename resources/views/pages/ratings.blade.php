@extends("layouts.app")

@section("title", "Поиск тиммейтов для игр")

@section("content")

    <main>
        <div class="container page-head">
            <nav class="page-head__crumbs"><a href="home.blade.php">Главная</a> › <a href="profile.blade.php">xX_PepeCarry_Xx</a>
                ›
                <span>Отзывы</span></nav>
            <h1 class="page-head__title">Отзывы о xX_PepeCarry_Xx</h1>
            <p class="page-head__text"></p>
        </div>
        <div class="container layout layout--main-first">
            <div class="stack">
                <section class="panel panel--pink rating-summary">
                    <div>
                        <div class="rating-summary__score">4.9</div>
                        <div class="stars">★★★★★</div>
                        <small>23 отзыва</small></div>
                    <div class="bars">
                        <div class="bars__row"><span>5★</span><span class="bars__track"><span class="bars__fill"
                                                                                              style="--w:78%"></span></span><span>78%</span>
                        </div>
                        <div class="bars__row"><span>4★</span><span class="bars__track"><span class="bars__fill"
                                                                                              style="--w:15%"></span></span><span>15%</span>
                        </div>
                        <div class="bars__row"><span>3★</span><span class="bars__track"><span class="bars__fill"
                                                                                              style="--w:5%"></span></span><span>5%</span>
                        </div>
                        <div class="bars__row"><span>2★</span><span class="bars__track"><span class="bars__fill"
                                                                                              style="--w:1%"></span></span><span>1%</span>
                        </div>
                        <div class="bars__row"><span>1★</span><span class="bars__track"><span class="bars__fill"
                                                                                              style="--w:1%"></span></span><span>1%</span>
                        </div>
                    </div>
                </section>
                <section class="panel"><h2 class="panel__title">Все отзывы</h2>
                    <div class="review-card"><span class="post-card__avatar">🐙</span>
                        <div><b>OctoMain</b> <span class="stars">★★★★★</span> <span
                                    class="tag tag--yellow">Dota 2</span>
                        </div>
                        <p class="review-card__text">Играли в паре. Ни одного афк и ни одной ссоры. Редкость!</p></div>
                    <div class="review-card"><span class="post-card__avatar">🧃</span>
                        <div><b>JuiceBoxEnjoyer</b> <span class="stars">★★★★★</span> <span
                                    class="tag tag--yellow">Dota 2</span></div>
                        <p class="review-card__text">Терпеливо объяснял, как не умирать. Спасибо!</p></div>
                    <div class="review-card"><span class="post-card__avatar">🦖</span>
                        <div><b>RexOnKeyboard</b> <span class="stars">★★★★☆</span> <span
                                    class="tag tag--yellow">CS2</span>
                        </div>
                        <p class="review-card__text">Хорош, но слишком любит пинговать смоки.</p></div>
                    <div class="review-card"><span class="post-card__avatar">🦉</span>
                        <div><b>SleepyAWP</b> <span class="stars">★★★★★</span> <span
                                    class="tag tag--yellow">Dota 2</span>
                        </div>
                        <p class="review-card__text">Кофе за ним, ворды за ним. Идеальный саппорт.</p></div>
                    <div class="review-card"><span class="post-card__avatar">🍕</span>
                        <div><b>PizzaPudge</b> <span class="stars">★★★★★</span> <span
                                    class="tag tag--yellow">Dota 2</span>
                        </div>
                        <p class="review-card__text">Хукнул меня один раз. Простил.</p></div>
                    <div class="review-card"><span class="post-card__avatar">🦆</span>
                        <div><b>QuackAttack</b> <span class="stars">★★★★☆</span> <span
                                    class="tag tag--yellow">Valorant</span></div>
                        <p class="review-card__text">Кря. (Это значит «отлично»).</p></div>
                </section>
            </div>
            <aside class="panel panel--sticky"><h2 class="panel__title">Оставить отзыв</h2>
                <p class="field__hint" style="margin-bottom:14px">Отзыв можно оставить только после совместной игры
                    через
                    платформу. Мы всё видим 👀</p>
                <form action="#" method="post">
                    <div class="field"><span class="field__label">Оценка</span>
                        <div class="star-input"><input id="s5" type="radio" name="score" value="5"><label
                                    for="s5">★</label><input
                                    id="s4" type="radio" name="score" value="4"><label for="s4">★</label><input id="s3"
                                                                                                                type="radio"
                                                                                                                name="score"
                                                                                                                value="3"><label
                                    for="s3">★</label><input id="s2" type="radio" name="score" value="2"><label
                                    for="s2">★</label><input id="s1" type="radio" name="score" value="1"><label
                                    for="s1">★</label>
                        </div>
                    </div>
                    <label class="field"><span class="field__label">Как сыграли?</span><textarea class="field__input"
                                                                                                 placeholder="Расскажи честно, без токсичности…"></textarea></label>
                    <button class="btn btn--primary btn--block" type="submit">Отправить отзыв</button>
                </form>
            </aside>
        </div>
    </main>

@endsection

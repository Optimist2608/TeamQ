<li class="leaderboard__item">
    <span class="leaderboard__place">{{ $place }}</span>
    <img class="post-card__avatar" alt="avatar" src="{{ $avatarSrc }}"/>
    <span class="leaderboard__name">{{ $author }}</span>
    <span class="leaderboard__rating"> {{ $rating }}
        <img src="{{ Vite::asset('resources/images/rating/star.webp') }}" alt="star"></span>
</li>

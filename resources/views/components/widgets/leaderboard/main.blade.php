 <div>
        <h2 class="section__title">🏆 Зал славы</h2>
        <ul class="leaderboard">

            @foreach($leaders as $leader)
                <x-widgets.leaderboard.item :place="$loop->index + 1"
                                            :author="$leader['author']"
                                            :rating="$leader['rating']"
                                            :avatar-src="$leader['avatarSrc']" />
            @endforeach

        </ul>
    </div>

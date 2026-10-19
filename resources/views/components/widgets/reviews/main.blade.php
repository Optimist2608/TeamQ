@php
    $colors = ['pink', 'yellow', 'blue'];
@endphp

<div>
    <h2 class="section__title">Нам пишут</h2>
    <div class="reviews">

        @foreach($reviews as $review)
            @php
                $colorClass = $colors[$loop->index % count($colors)];
            @endphp

            <x-widgets.reviews.item
                :avatar-src="$review['avatarSrc']"
                :text="$review['text']"
                :author="$review['author']"
                :color="$colorClass"
            />
        @endforeach
    </div>
</div>

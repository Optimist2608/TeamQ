<?php

namespace App\View\Components\Widgets\Posts\Cards;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Last extends Component
{

    public function __construct(
        public array  $tags = [],
        public string $author = "",
        public string $game = "",
        public string $title = "",
        public string $avatarSrc = "",
    )
    {
    }

    public function render(): View
    {
        return view('components.widgets.posts.cards.last');
    }
}

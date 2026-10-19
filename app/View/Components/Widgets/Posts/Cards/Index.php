<?php

namespace App\View\Components\Widgets\Posts\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array  $tags = [],
        public string $author = "",
        public string $game = "",
        public string $title = "",
        public string $avatarSrc = "",
        public string $pageLink = "",
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widgets.posts.cards.index');
    }
}


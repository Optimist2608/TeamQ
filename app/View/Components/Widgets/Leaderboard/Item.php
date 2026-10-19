<?php

namespace App\View\Components\Widgets\Leaderboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $author,
        public string $avatarSrc = '',
        public float $rating,
        public int $place,


    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widgets.leaderboard.item');
    }
}

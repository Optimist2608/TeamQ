<?php

namespace App\View\Components\Widgets\Categories;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public ?int   $count = 0,
        public string $pageLink,
        public string $imgSrc,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widgets.categories.card');
    }
}

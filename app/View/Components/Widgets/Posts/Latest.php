<?php

namespace App\View\Components\Widgets\Posts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Latest extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $posts = [],
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widgets.posts.latest');
    }
}

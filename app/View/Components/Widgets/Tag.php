<?php

namespace App\View\Components\Widgets;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tag extends Component
{
    public function __construct(
        public ?string $variant = null,
        public ?string $text = null,
    )
    {
    }

    public function render(): View
    {
        return view('components.widgets.tag');
    }
}

<?php

namespace App\View\Components\Widgets\Stats;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    public function __construct(
        public array $stats = [],
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.widgets.stats.main');
    }
}

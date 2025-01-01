<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PictureSlider extends Component
{
    public function __construct(
        public $title,
        public $sliders = [],
    )
    {}

    public function render(): View|Closure|string
    {
        return view('components.picture-slider');
    }
}

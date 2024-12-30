<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileMenuHeader extends Component
{
    public function __construct(
        public string $title,
        public string $bgImage = 'assets/images/cover.jpg',
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.profile-menu-header');
    }
}

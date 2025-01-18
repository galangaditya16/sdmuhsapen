<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\AllCategoryTranslite;
use App\Models\AllContentTranslite;

class SideNews extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        try {
            $lang = 'id';
            $currentNews = AllContentTranslite::with('ContentNews','ContentNews.hasCategory')
            ->whereHas('ContentNews')->where('lang',$lang)
            ->orderBy('created_at', 'ASC')
            ->take(4)
            ->get();
            $relatedNews = AllContentTranslite::with('ContentNews','ContentNews.hasCategory')
            ->whereHas('ContentNews')->where('lang',$lang)
            ->orderBy('created_at', 'ASC')
            ->take(4)
            ->get();
            return view('components.side-news', [
                'relatedNews' => $relatedNews,
                'currentNews' => $currentNews,
            ]);
        } catch (\Throwable $th) {
            dd($th);
           abort('404');
        }


    }
}

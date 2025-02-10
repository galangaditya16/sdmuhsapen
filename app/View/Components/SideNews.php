<?php

namespace App\View\Components;

use Closure;
use App\Models\Banner;
use Illuminate\View\Component;
use App\Helpers\SessionHelpers;
use App\Models\AllContentTranslite;
use Illuminate\Contracts\View\View;
use App\Models\AllCategoryTranslite;

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
            $lang = SessionHelpers::get('lang');
            $currentNews = AllContentTranslite::with('ContentNews','ContentNews.hasCategory')
            ->whereHas('ContentNews')->where('lang',$lang)
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();
            $relatedNews = AllContentTranslite::with(['ContentNews','ContentNews.hasCategory'])
            ->whereHas('ContentNews', function($query){
                $query->where('headline','!=',0);
            })
            ->where('lang',$lang)
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();
            $banners = Banner::orderBy('created_at', 'DESC')->take(3)->get();

            return view('components.side-news', [
                'relatedNews' => $relatedNews,
                'currentNews' => $currentNews,
                'banners' => $banners,
                'lang'  => $lang,
            ]);
        } catch (\Throwable $th) {
            dd($th);
           abort('404');
        }
    }
}

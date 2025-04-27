<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\PaginationHelpers;
use App\Models\AllCategoryTranslite;
use App\Models\AllContentTranslite;
use App\Helpers\SessionHelpers;
use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Function to get list of berita to frontend
     *
     * @param array|null $select ['title', 'body']
     * @param array|null $filter ['category' => '3']
     * @param integer $page 1
     * @param integer $limit 10
     * @return array
     */
    public static function getListBerita(
        array $select = ['*'],
        array $filter = null,
        int $page=1,
        int $limit=10
    ) {
        $lang = SessionHelpers::get('lang');
        $getBeritaCollection = News::with(['hasCategory','content' => function($query) use ($lang){
            $query->where('lang', $lang ? $lang : 'id');
        }])->paginate($limit, $select, 'page', $page);

        $listBeritaPaginated = new PaginationHelpers($getBeritaCollection);
        $listBerita = $listBeritaPaginated->formatListPagination();
        $result = [
            'data' => $listBerita['data'],
            'pagination' => $listBerita['pagination']
        ];

        return $result;
    }



    public function listNews(Request $request){
        try {
            $lang = SessionHelpers::get('lang');
            $categorys = AllCategoryTranslite::with('CategoryNews','CategoryNews.transLite')
            ->whereHas('CategoryNews')
            ->where('lang',$lang)
            ->orderBy('created_at','DESC')
            ->get();
            if($request->has('search') && $request->search != null){
                $news = AllContentTranslite::with('ContentNews','ContentNews.hasCategory')
                ->where('lang',$lang)
                ->whereNotNull('id_news')
                ->whereRaw('title ILIKE ?', ['%' . $request->search . '%'])
                ->orderBy('created_at', 'DESC')
                ->paginate(10);
            }else{
                $news = AllContentTranslite::with('ContentNews','ContentNews.hasCategory')
                ->whereNotNull('id_news')
                ->whereHas('ContentNews')->where('lang',$lang)
                ->orderBy('created_at', 'DESC')
                ->paginate(10);

            }
            $newnews = AllContentTranslite::with('ContentNews','ContentNews.hasCategory')
            ->whereHas('ContentNews')->where('lang',$lang)
            ->orderBy('created_at', 'DESC')
            ->take(5)
            ->get();
            return view('frontend.pages.news', compact('categorys','news','lang','newnews'));

        } catch (\Throwable $th) {
            dd($th->getMessage());
            abort(404);
        }
    }

}

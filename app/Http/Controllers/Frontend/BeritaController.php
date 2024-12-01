<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\PaginationHelpers;
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
        $lang = 'id';        
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

}

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
     * @param array|null $sortOrder ['created_at' => 'desc']
     * @param string|null $search 'Andaikan'
     * @return array
     */
    public static function getListBerita(
        array $select = null, 
        array $filter = null,
        int $page=1, 
        int $limit=10, 
        ?array $sortOrder=null, 
        ?string $search=null
    ) {
        $berita = new News();
        $query = $berita->query();
        
        $selectField = ['*'];
        if($select !== null) {
            $selectField = $select;
        }

        if ($filter !== null) {
            foreach ($filter as $fieldFilter=>$filterValue) {
                $query->where($fieldFilter, $filterValue);
            }
        }

        if ($search !== null ) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        if ($sortOrder !== null) {
            $sortKey = array_keys($sortOrder)[0];
            $query->orderBy($sortKey, $sortOrder[$sortKey]);
        } else {
            $query->orderBy('created_at', 'desc');
        }
        
        $getBeritaCollection = $query->paginate($limit, $selectField, 'page', $page); 

        $listBeritaPaginated = new PaginationHelpers($getBeritaCollection);
        $listBerita = $listBeritaPaginated->formatListPagination();        
        $result = [
            'data' => $listBerita['data'], 
            'pagination' => $listBerita['pagination'], 
            'search' => $search ? $search : null
        ];

        return $result;
    }

}

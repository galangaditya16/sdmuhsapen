<?php
namespace App\Http\Helpers;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class PaginationHelpers 
{
    public static LengthAwarePaginator $pagination;

    public function __construct(LengthAwarePaginator $pagination)
    {
        self::$pagination = $pagination;
    }

    /**
     * function for format pagination
     *
     * @return array ['data' => array of items, 'pagination' => array of information pagination]
     */
    public static function formatListPagination(): array
    {   
        $pagination = [            
            'next_page' => self::$pagination->nextPageUrl(),
            'previous_page' => self::$pagination->previousPageUrl(),
            'current_page' => self::$pagination->currentPage(),
            'last_page' => self::$pagination->lastPage(),
            'first_data_index' => self::$pagination->firstItem(),
            'last_data_index' => self::$pagination->lastItem(),
            'total' => self::$pagination->total(),
            'url' => self::$pagination->path(),
            'list_url_page' => self::getPageRange()
        ];

        return ['data' => self::$pagination->items(), 'pagination' => $pagination ];
    }

    /**
     * function for get page range
     *
     * @param integer $start
     * @param integer $end
     * @return array array of range url pagination
     */
    private static function getPageRange()
    {
        $pageRange = [self::$pagination->currentPage()-1, self::$pagination->currentPage()+1];
        
        if($pageRange[1] > self::$pagination->lastPage()) $pageRange[1] = self::$pagination->lastPage();

        if($pageRange[0] === self::$pagination->lastPage()) $pageRange[0] = self::$pagination->lastPage()-2;
        if($pageRange[0] <= 0) $pageRange[0] = 1;

        return self::$pagination->getUrlRange($pageRange[0], $pageRange[1]);
    }
}


?>
<?php
namespace App\Base\Controller;

use App\Base\Utilities\LoadMenu;
use App\Base\Repositories\AppRepository;
use App\Http\Controllers\Controller as ControllersController;
use App\Models\AllCategoryTranslite;
use App\Models\CategoryContent;
use Illuminate\Support\Facades\DB;

Class BaseController extends ControllersController{
    use LoadMenu;
    public function loadData(){
        view()->share('activeMenu',$this->MenuActive());
    }

    protected function makeView($viewname,$data = array()){
        $this->loadData();
		if(!is_array($data)){
			$data = array();
		}
    	return view()->make($viewname, $data);
	}


    public function LoadCategoryContets($lang){
        $data = NULL;
        DB::beginTransaction();
        try {
           $data = AllCategoryTranslite::whereHas('CategoryContent',function ($query){
                $query->whereNotNull('id_category_content');
           })->where('lang',$lang)->get();
           DB::commit();
           return $data;
        } catch (\Throwable $th) {
        DB::rollback();
        return $data;
        }
    }
    public function LoadCategoryNews($lang){
        $data = NULL;
        DB::beginTransaction();
        try {
           $data = AllCategoryTranslite::whereHas('CategoryNews',function ($query){
                $query->whereNotNull('id_category_news');
           })->where('lang',$lang)->get();
           DB::commit();
           return $data;
        } catch (\Throwable $th) {
        DB::rollback();
        return $data;
        }
    }
    public function LoadCategoryProrgams($lang){
        $data = NULL;
        DB::beginTransaction();
        try {
           $data = AllCategoryTranslite::with('CategoryPrograms')
           ->whereHas('CategoryPrograms',function ($query){
                $query->whereNotNull('id_category_programs');
           })->where('lang',$lang)->get();
           DB::commit();
           return $data;
        } catch (\Throwable $th) {
        DB::rollback();
        return $data;
        }
    }
}

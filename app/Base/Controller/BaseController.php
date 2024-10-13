<?php
namespace App\Base\Controller;

use App\Base\Utilities\LoadMenu;
use App\Http\Controllers\Controller as ControllersController;

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
}
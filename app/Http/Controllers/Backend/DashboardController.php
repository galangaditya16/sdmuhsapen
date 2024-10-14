<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Base\Controller\BaseController;

class DashboardController extends BaseController
{
    //
    public function index(){
        return $this->makeView('backend.layout.main');
    }
}

<?php

namespace App\Base\Utilities;
use App\Models\Menu;

trait LoadMenu {

    public function MenuActive(){
        $menus = Menu::whereNull('parent_id')->with('children')->get();
        return $menus;
    }
}

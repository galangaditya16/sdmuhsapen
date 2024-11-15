<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;

class SliderController extends Controller
{   
    public static function getListSlider()
    {
        $getBeritaCollection = new Slider();
        return $getBeritaCollection->all();        
    }
}

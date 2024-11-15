<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwitchLanguange extends Controller
{
    //
    public function index($lang)
    {
        if (in_array($lang, ['en', 'id'])) {
            session()->put('lang', $lang);
            return redirect()->back();
        }
    }
    public function readSession(){
        
    }
}

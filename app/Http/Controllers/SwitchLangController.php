<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class SwitchLangController extends Controller
{
    public function index(Request $request)
    {
        try {
            $lang = $request->lang;
            if (in_array($lang, ['en', 'id'])) {
                session()->put('lang', $lang);
                App::setLocale(session('lang', 'en'));
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            //throw $th;
            \Log::error($th);

        }

    }
}

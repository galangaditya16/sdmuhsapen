<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $beritaTerkini = BeritaController::getListBerita(null, null, 1, 6, null, null);
        
        $result = [
            'berita' => $beritaTerkini['data']
        ];

        return view('frontend.pages.home', $result);
    }

    public function profile() 
    {
        return view('frontend.pages.profile');
    }

}

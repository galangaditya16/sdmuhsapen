<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    //

    public function index(Request $request){
        try {
            $data = Gallery::orderBy('created_at', 'asc')->get();
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

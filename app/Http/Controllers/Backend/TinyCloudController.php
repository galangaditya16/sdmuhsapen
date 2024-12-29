<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TinyCloudController extends Controller
{
    //

    public function news(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->hasFile('file')){
            $code = time().'.'.$request->file->extension();
            $path = public_path('backend/assets/images/texteditor/');
            $request->file->move($path,$code);

            return response()->json(['location' => asset('backend/assets/images/texteditor/' . $code)]);
        }

        return response()->json(['error' => 'File tidak ditemukan.'], 400);
    }

    public function programs(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->hasFile('file')){
            $code = time().'.'.$request->file->extension();
            $path = public_path('backend/assets/images/texteditor/');
            $request->file->move($path,$code);

            return response()->json(['location' => asset('backend/assets/images/texteditor/' . $code)]);
        }

        return response()->json(['error' => 'File tidak ditemukan.'], 400);
    }
    public function content(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->hasFile('file')){
            $code = time().'.'.$request->file->extension();
            $path = public_path('backend/assets/images/texteditor/');
            $request->file->move($path,$code);

            return response()->json(['location' => asset('backend/assets/images/texteditor/' . $code)]);
        }

        return response()->json(['error' => 'File tidak ditemukan.'], 400);
    }
}

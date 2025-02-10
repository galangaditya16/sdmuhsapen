<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Http\Requests\FrontMessageRequest;
use GuzzleHttp\Psr7\Message;

class MessageController extends Controller
{
    //
    public function index(){

    }

    public function sendMessage(FrontMessageRequest $request){
        try {
            $allReq = $request->except(['captcha', '_token']);
            $model = new Messages($allReq);
            $model->save();
            return redirect()->back()->with('success', 'Message Send Success');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Gagal melakukan aksi');
        }
    }
}

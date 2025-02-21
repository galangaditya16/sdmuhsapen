<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontMessageRequest;
use App\Mail\QAMail;
use App\Models\Messages;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //
    public function index(){

    }

    public function sendMessage(FrontMessageRequest $request){
        try {
            $allReq = $request->except(['captcha', '_token']);
            $model = new Messages($allReq);
            Mail::to($request->email)->send(new QAMail($allReq));
            $model->save();
            return redirect()->back()->with('success', 'Message Send Success');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Gagal melakukan aksi');
        }
    }
}

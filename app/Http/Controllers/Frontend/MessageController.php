<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Messages;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use App\Mail\NotifFormQuestion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\FrontMessageRequest;

class MessageController extends Controller
{
    //
    public function index(){

    }

    public function sendMessage(FrontMessageRequest $request){
        try {
            $allReq = $request->except(['g-recaptcha-response', '_token']);
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);
            if (!$response->json('success')) {
                return back()->withErrors(['g-recaptcha-response' => 'Verifikasi CAPTCHA gagal.'])->withInput();
            }
            $model = Messages::create($allReq);
            Mail::to('info@sdmuhsapen-yog.sch.id')->send(new NotifFormQuestion($model));
            return redirect()->back()->with('success', 'Message Send Success');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Gagal melakukan aksi');
        }
    }
}

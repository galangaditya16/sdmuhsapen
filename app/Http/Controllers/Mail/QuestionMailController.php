<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionMailController extends Controller
{
    //
    public function indec(){
        abort(404);
    }

    public function SendQuestion(Request $request){
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

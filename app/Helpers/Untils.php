<?php

namespace App\Helpers;
use app\Models\Contact;


class Untils {

    public static function getWork(){
        try {
            $contact = Contact::latest()->first();
            dd($contact);
            return $contact;
        } catch (\Throwable $th) {
            //throw $th;
            return NULL;
        }
    }

}

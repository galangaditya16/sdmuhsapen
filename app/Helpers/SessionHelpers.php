<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Session;

class SessionHelpers {
    public static function get($key, $default = 'ID')
    {
        if($key == 'lang'){
            return Session($key) ?? 'id';
        }
        return Session::get($key, $default);
    }

    /**
     * Menyimpan data ke dalam session global
     *
     * @param string $key
     * @param mixed $value
     */
    public static function put($key, $value)
    {
        Session::put($key, $value);
    }

    /**
     * Menghapus data dari session global
     *
     * @param string $key
     */
    public static function forget($key)
    {
        Session::forget($key);
    }

    /**
     * Mengecek apakah session memiliki key tertentu
     *
     * @param string $key
     * @return bool
     */
    public static function has($key)
    {
        return Session::has($key);
    }
}

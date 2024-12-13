<?php

namespace App\Helpers;
use Request;
class ViterHelper
{

     public static function viteAssets()
    {

        $manifestPath = public_path('build/manifest.json');
        if (!file_exists($manifestPath)) {
            return [];
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);
        $assets = [];

        foreach ($manifest as $file => $details) {
            if (isset($details['isEntry']) && $details['isEntry']) {
                $assets[] = $file;
            }
        }

        return $assets;
    }
}

<?php

namespace App\Helpers;

class UrlHelper
{
    public static function isUrlActive($currentUrl)
    {
       if($currentUrl === url()->current()) return 'active';
    }

}



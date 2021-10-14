<?php

namespace App\Helpers;

use App\Models\SchoolYear;

class Helper
{
    // create password
    public static function create_password($length)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars), 0, $length);
    }
    // create username
    public static function create_username($fn, $ln)
    {
        return strtolower(substr($fn, 0, 3) . $ln);
    }
    // create roll no.
    public static function create_roll_no()
    {
        return mt_rand(1000, 9999) . mt_rand(1000, 9999);
    }
    // set active year
    public static function activeAY()
    {
        return SchoolYear::where('status', 1)->first();
    }
}

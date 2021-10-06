<?php
namespace App\Http\Helpers;


class PhoneModelHelper {
    const DEFAULT_MODE = false;
    const SESSION_MODE = 'SESSION_PHONE_MODE';

    public static function getModel() {
        return session()->get(self::SESSION_MODE, self::DEFAULT_MODE);
    }

    public static function toggleModel() {
        $mode = session()->get(self::SESSION_MODE, self::DEFAULT_MODE);
        return session()->put(self::SESSION_MODE, !$mode);
    }

}
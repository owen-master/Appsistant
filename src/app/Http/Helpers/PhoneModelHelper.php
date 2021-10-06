<?php
namespace App\Http\Helpers;


class PhoneModelHelper {
    const DEFAULT_MODE = false;
    const SESSION_MODE = 'SESSION_PHONE_MODE';

    public static function toggleModel() {
        $mode = session()->get(self::SESSION_MODE, self::DEFAULT_MODE);
        return session()->put(self::SESSION_MODE, !$mode);
    }

    public static function getIphone() {
        $mode = session()->get(self::SESSION_MODE, self::DEFAULT_MODE);

        if ($mode) {
            return 'style="display: block"';
        } else {
            return 'style="display: none"';
        }
    }

    public static function getAndroid() {
        $mode = session()->get(self::SESSION_MODE, self::DEFAULT_MODE);

        if ($mode) {
            return 'style="display: none"';
        } else {
            return 'style="display: block"';
        }    }

}
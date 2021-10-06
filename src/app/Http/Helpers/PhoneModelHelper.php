<?php
namespace App\Http\Helpers;


class PhoneModelHelper {
    const DEFAULT_MODE = false;
    const SESSION_MODE = 'SESSION_PHONE_MODE';

    public static function getModel() {
        $mode = session()->get(self::SESSION_MODE, self::DEFAULT_MODE);

        return $mode;
    }

    public static function setModel() {
        $mode = session()->get(self::SESSION_MODE, self::DEFAULT_MODE);

        $new_mode = !$mode;

        session()->put(self::SESSION_MODE, $new_mode);
    }

}
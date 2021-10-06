<?php
namespace App\Http\Helpers;


class PhoneModelHelper {

    const SESSION_MODE = 'SESSION_PHONE_MODE';

    const MODEL_IPHONE = 'IPHONE';
    const MODEL_ANDROID = 'ANDROID';

    public static function toggleModel() {

        $mode = session()->get(self::SESSION_MODE, self::MODEL_IPHONE);

        return $mode == self::MODEL_IPHONE ? session()->put(self::SESSION_MODE, self::MODEL_ANDROID) :
            session()->put(self::SESSION_MODE, self::MODEL_IPHONE);
    }

    public static function getModel() {
        return session()->get(self::SESSION_MODE, self::MODEL_IPHONE);
    }
}
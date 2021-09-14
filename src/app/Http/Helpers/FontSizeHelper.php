<?php

namespace App\Http\Helpers;

class FontSizeHelper {

    const DEFAULT_SIZE_SCALE = 0;

    const S_KEY_SIZE_SCALE = 'SESSION_FONT_SIZE_SCALE';

    // returns the title font size in the session or the default
    private static function getScaledFontSize($originalSizeInPixels)
    {
        return ($originalSizeInPixels / 100) * self::getSizeScale();
    }

    // sets the size scale in the session
    public static function setSizeScale($scale)
    {
        return session()->put(self::S_KEY_SIZE_SCALE, $scale);
    }

    // returns the size scale from the session
    public static function getSizeScale()
    {
        return 100 + session()->get(self::S_KEY_SIZE_SCALE, self::DEFAULT_SIZE_SCALE);
    }

    // returns the excluding size scale (-100) from the session
    public static function getExcludingSizeScale()
    {
        return session()->get(self::S_KEY_SIZE_SCALE, self::DEFAULT_SIZE_SCALE);
    }

    // returns the style attribute
    public static function getStyleAttribute($originalSizeInPixels)
    {
        $fontSize = floor(self::getScaledFontSize($originalSizeInPixels));

        return 'style="font-size: ' . $fontSize . 'px"';
    }
}
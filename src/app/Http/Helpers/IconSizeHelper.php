<?php

namespace App\Http\Helpers;

class IconSizeHelper {

    const DEFAULT_SIZE_SCALE = 16;

    const S_KEY_SIZE_SCALE = 'SESSION_ICON_SIZE_SCALE';

    // returns the icon size in the session or the default
    public static function getScaledIconSize($originalSizeInPixels)
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
    public static function getHeightWidthAttributes($originalSizeInPixels)
    {
        $iconSize = floor(self::getScaledIconSize($originalSizeInPixels));

        return 'width=' . $iconSize . ' height=' . $iconSize;
    }
}
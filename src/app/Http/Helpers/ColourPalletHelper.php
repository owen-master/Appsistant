<?php

namespace App\Http\Helpers;

class ColourPalletHelper {

    const DEFAULT_HEADER_COLOUR = '#887bb0';
    const HEADER_COLOUR = 'SESSION_HEADER_COLOUR';

    // sets the header colour
    public static function setHeaderColour($newColour)
    {
        return session()->put(self::HEADER_COLOUR, $newColour);
    }

    // returns the header colour
    public static function getHeaderColour()
    {
        return session()->get(self::HEADER_COLOUR, self::DEFAULT_HEADER_COLOUR);
    }

    // returns the header styling
    public static function getHeaderStyle()
    {
        return 'style="background: ' . self::getHeaderColour() . '; opacity: 80%"';
    }
}
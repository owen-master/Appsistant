<?php

namespace App\Http\Helpers;

class ColourPalletHelper {

    const DEFAULT_HEADER_COLOUR = '#887bb0';
    const HEADER_COLOUR = 'SESSION_HEADER_COLOUR';
    const DEFAULT_FONT_COLOUR = '#000000';
    const FONT_COLOUR = 'SESSION_FONT_COLOUR';

    // sets the header colour
    public static function setHeaderColour($newColour)
    {
        return session()->put(self::HEADER_COLOUR, $newColour);
    }

    // sets the font colour
    public static function setFontColour($newColour)
    {
        return session()->put(self::FONT_COLOUR, $newColour);
    }

    // returns the header colour
    public static function getHeaderColour()
    {
        return session()->get(self::HEADER_COLOUR, self::DEFAULT_HEADER_COLOUR);
    }

    // returns the font colour
    public static function getFontColour()
    {
        return session()->get(self::FONT_COLOUR, self::DEFAULT_FONT_COLOUR);
    }

    // returns the header styling
    public static function getHeaderStyle()
    {
        return 'style="background: ' . self::getHeaderColour() . '; opacity: 80%"';
    }

    // returns the font colour styling
    public static function getFontColourStyle()
    {
        return self::getFontColour();
    }

    public static function getFontColourStyleHeading()
    {
        return 'color: ' . self::getFontColour() . '; filter: invert(100%); padding-top: 0.5em';
    }
}
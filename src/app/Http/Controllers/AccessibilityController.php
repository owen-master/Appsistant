<?php

namespace App\Http\Controllers;

use App\Http\Helpers\ColourPalletHelper;
use App\Http\Helpers\FontSizeHelper;
use App\Http\Helpers\IconSizeHelper;
use Illuminate\Http\Request;

class AccessibilityController extends Controller
{
    public function showSettings()
    {
        return view('accessibility-settings');
    }

    public function updateSettings()
    {

        // get the font scale from post request
        $fontScale = request()->get('font_scale');
        $iconScale = request()->get('icon_scale');
        $headerColour = request()->get('header_colour');
        $fontColour = request()->get('font_colour');

        // update the scales/colours using the appropriate helper methods
        FontSizeHelper::setSizeScale($fontScale);
        IconSizeHelper::setSizeScale($iconScale);
        ColourPalletHelper::setHeaderColour($headerColour);
        ColourPalletHelper::setFontColour($fontColour);

        // redirect the user to the landing page
        return redirect()->route('landing.get');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Helpers\ColourPalletHelper;
use App\Http\Helpers\FontSizeHelper;
use App\Http\Helpers\PhoneModelHelper;

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
        $headerColour = request()->get('header_colour');
        $fontColour = request()->get('font_colour');

        // update the font scale using the helper method
        FontSizeHelper::setSizeScale($fontScale);
        ColourPalletHelper::setHeaderColour($headerColour);
        ColourPalletHelper::setFontColour($fontColour);

        // redirect the user to the landing page
        return redirect()->route('landing.get');
    }

    public function modelChange()
    {
        PhoneModelHelper::toggleModel();
        return redirect(url()->previous());
    }
}

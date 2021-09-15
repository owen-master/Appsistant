<?php

namespace App\Http\Controllers;

use App\Http\Helpers\ColourPalletHelper;
use App\Http\Helpers\FontSizeHelper;
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
        $headerColour = request()->get('header_colour');

        // update the font scale using the helper method
        FontSizeHelper::setSizeScale($fontScale);
        ColourPalletHelper::setHeaderColour($headerColour);

        // redirect the user to the landing page
        return redirect()->route('landing.get');
    }
}

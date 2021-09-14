<?php

namespace App\Http\Controllers;

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

        // update the font scale using the helper method
        FontSizeHelper::setSizeScale($fontScale);

        // redirect the user to the landing page
        return redirect()->route('landing.get');
    }
}

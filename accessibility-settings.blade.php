@extends('base')

@section('title')
    Accessibility Settings
@endsection

@section('content')

<div class="row p-2 pt-4" {!! \App\Http\Helpers\ColourPalletHelper::getHeaderStyle() !!}}>
    <div class="col-2 container-fluid">
        <a href="{{ url()->previous() }}" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
        </a>
    </div>
    <div class="col-8 container-fluid text-center">
        <p class="mb-0" style="{!! \App\Http\Helpers\ColourPalletHelper::getFontColourStyleHeading() !!}"><b>Accessibility Settings</b></p>
    </div>
    <div class="col-2 container-fluid">

    </div>
</div>

<div class="p-2">
    <form method="POST" action="">

        @csrf()
        
        <!-- Font Size Range Input -->
        <label for="input_font_size" class="form-label pb-0 mb-0"><b>Set Font Size</b></label>
        <input type="range" class="form-range" min="0" max="100" step="10" value="{{ \App\Http\Helpers\FontSizeHelper::getExcludingSizeScale() }}" id="input_font_size" name="font_scale"> <!-- slider -->

        <!--read and adjust text font size using javascript fontSize ID -->
        <label for="input_font_size" class="form-label pb-0 mb-0" style="height:40px; text-align:center;" id="fontSize" >&nbsp</label><br>
        
        <!-- Header Colour Input -->
        <label for="input_colour_header" class="form-label pb-0 mb-0"><b>Customise Header Colour</b></label>
        <input type="color" name="header_colour" id="input_colour_header" value="{!! \App\Http\Helpers\ColourPalletHelper::getHeaderColour() !!}" />

        <!-- Font Colour Input-->
        <label for="input_colour_font" class="form-label pb-0 mb-0"><b>Customise Font Colour</b></label>
        <input type="color" name="font_colour" id="input_colour_font" value="{!! \App\Http\Helpers\ColourPalletHelper::getFontColour() !!}" />

        <button type="submit" class="btn btn-lg btn-outline-dark container-fluid align-text-bottom">Save</button>
    </form>
</div>

@endsection

@section('javascript')

    <script type="text/javascript">
        $('#input_font_size').change(function(event) {
            let defaultFontSize = 12; //set default font size
            let newSizeValue = parseInt(defaultFontSize * (parseInt($('#input_font_size').val()) + 100) / 100); //set font size range from 100% to 200% of default size
            let fontSize = '<b style="color:#0D6EFD; font-size:' + newSizeValue + 'px">Text Size</b>'; //set style value to be passed to the label on slider change
            
            document.getElementById("fontSize").innerHTML = fontSize; //pass fontSize value to accessable variable
        });
    </script>

@endsection
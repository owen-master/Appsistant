
<?php
    $setFontSize=\App\Http\Helpers\FontSizeHelper::getStyleAttribute(12); //get font size style from FontSizeHelper.php
?>

@extends('base')

@section('title')
    Course
@endsection

@section('content')

<div class="row p-2 pt-4" {!! \App\Http\Helpers\ColourPalletHelper::getHeaderStyle() !!}}>
    <div class="col-2 container-fluid">
        <a href="{{ url()->previous() }}" class="text-white">
            <svg style="margin-top: 0.5em" xmlns="http://www.w3.org/2000/svg" {{ \App\Http\Helpers\IconSizeHelper::getHeightWidthAttributes(16) }} fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
        </a>
    </div>
    <div class="col-8 container-fluid text-center">
        <p class="mb-0" style="{!! \App\Http\Helpers\ColourPalletHelper::getFontColourStyleHeading() !!}"><b>{{request()['name']}} @if(request()['name'] != 'Help')Tutorial @endif</b></p>
    </div>
    <div class="col-2 container-fluid">

    </div>
</div>

<div class="p-2">
    @if(request()['name'] != 'Help')
        <div style="height: 23.5em; width: 100%; overflow-y: scroll;" tabindex="0">
            <div class="position-relative" style="height: 100%; width: 100%;">
                <div class="position-absolute left-50">

                @if(request()['name'] == 'Camera')
                    <!-- Camera tutorial content goes inside this section! -->
                        <h5>Video Demo</h5>
                        <video width="100%" height="240" controls>
                            <source src="/assets/camera_tutorial.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <!-- Video goes in here -->
                        </div>
                        <h5>Instructions</h5>
                        <div {{ $setFontSize }}>
                            <!-- Short instructions go in here -->
                            <ol>
                                <li class="small text-left">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </li>
                                <li class="small text-left">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </li>
                                <li class="small text-left">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </li>
                                <li class="small text-left">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </li>
                                <li class="small text-left">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </li>
                                <li class="small text-left">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </li>
                            </ol>
                        </div>
                    @else()
                        <div class="text-center">
                            <img src="/assets/under_construction_man.png" height="120x" width="auto">
                            <h2>Coming Soon</h2>

                            <div class="" <?php echo $setFontSize?>> <!-- set font size from Accessibility page slider -->
                                <p> This tutorial is currently under construction... Please come back later </p>
                            </div>
                        </div>
                    @endif()
                </div>
            </div>
        </div>

    @else

        <div class="text-center position-relative" style="height: 100%; width: 100%;">
            <div class="" style="overflow-y: scroll; height: 23.5em;" tabindex="0">
                <h1>Need Help?</h1>

                <div class="" <?php echo $setFontSize?>> <!-- set font size from Accessibility page slider -->
                    <p>Our tutorials are broken into two types. A short video tutorial that can be started and stopped by tapping the screen.</p>
                    <img src="/assets/vidfinger.png" height="auto" width="200px" class="pb-3">
                    <p>We also have a step by step tutorial that can be scrolled by running your finger up or down the screen.</p>
                    <img src="/assets/scrolling.png" height="auto" width="200px" class="pb-3" >
                    <p>To access the Accessibility Settings options, click on the Settings icon.</p>
                    <img src="/assets/settings_icon.png" height="auto" width="200px" class="pb-3">
                    <p>Change font size by dragging the slider to increase or decrease font size to your preference.</p>
                    <img src="/assets/font_size.png" height="auto" width="200px" class="pb-3">
                    <p>Customise header colour by clicking colour bar to choose colour.</p>
                    <img src="/assets/header_color.png" height="auto" width="200px" class="pb-3">
                    <p>Change font colour by clicking the colour bar to change font colour.</p>
                    <img src="/assets/font_color.png" height="auto" width="200px" class="pb-3">
                    <p>Click on Save button to save your customise settings.</p>
                    <img src="/assets/save_button.png" height="auto" width="200px" class="pb-3">
                </div>
            </div>
        </div>

    @endif
</div>

@endsection
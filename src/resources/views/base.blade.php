<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        body {
            background: #c9c6e1;
            color: {!! App\Http\Helpers\ColourPalletHelper::getFontColourStyle() !!};
        }

        .top-menu {
            color: #ffffff;
        }

        .btn:not(.btn-dark) {
            color: {!! App\Http\Helpers\ColourPalletHelper::getFontColourStyle() !!};
            border-color: {!! App\Http\Helpers\ColourPalletHelper::getFontColourStyle() !!};

        }

        .search {
            width: 100%;
            margin-top: 1em;
            margin-bottom: .5em;
            padding: 0.5em;
            border: solid gray 0.1em;
            border-radius: 20px;
        }

        .app-hub {
            background: #2d374880;
        }

        @if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
        .btn-dark:not(.btn-lg) {
            border-radius: 50%;
            padding-bottom: 0.6em;
        }

        .btn-top {
            margin-top: 1em;
        }

        .btn-btm::before {
            position: absolute;
            content: '';
            width: 0.5em;
            height: 0.5em;
            border-radius: 50%;
            background-color: gray;
            bottom: 4em;
        }

        .btm-1::before {
            left: 6em;
            background-color: black;
        }

        .btm-2::before {
            left: 1em;
        }

        .btm-3::before {
            right: 6em;
        }

        .app-hub {
            background: none;
        }

        @endif

        .btn:hover {
            color: #ffffff;
            border-color: dimgrey;
        }


        input {
            width: 100%;
            margin-bottom: 10px;
        }

        .android {
            width: 21.06em;
            height: 35.6em;
            border-radius: 1.2em;
            background-color: grey;
            position: fixed;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .android:before {
            width: 20.61em;
            height: 35.15em;
            border-radius: 1em;
            background-color: black;
            position: fixed;
            display: inline-block;
            content: '';
            top: 0.2em;
            left: 0.2em;
        }

        .android-details {
            content: '';
            width: 5em;
            height: 0.6em;
            border-radius: 20%;
            border: grey solid .2em;
            position: absolute;
            top: 1.613em;
            left: 8.03em;
        }

        .android-left {
            width: .188em;
            height: 2.1250em;
            top: 6.250em;
            left: -.188em;
            position: absolute;
            background: dimgrey;
        }

        .android-home {
            width: 3.25em;
            height: 1.85em;
            border-radius: 45%;
            position: absolute;
            bottom: 1.125em;
            right: 50%;
            -webkit-transform: translateX(50%);
            transform: translateX(50%);
            border: .3em solid dimgrey;
            background-color: black;
        }

        .android-screen {
            width: 19.5em;
            height: 29.938em;
            position: absolute;
            top: 3.75em;
            left: .750em;
            overflow: hidden;
        }

        .android-content {
            position: relative;
            background: #ffffff;
            width: 100%;
            height: 100%;
        }

        .iphone {
            width: 21.06em;
            height: 35.6em;
            border-radius: 1.875em;
            background: black;
            position: fixed;
            display: inline-block;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .iphone_power {
            width: 2.188em;
            height: .188em;
            background: dimgrey;
            position: absolute;
            right: 2.5em;
            top: -.188em;
        }

        .iphone_left {
            width: .188em;
            height: 1.1250em;
            top: 4.250em;
            left: -.188em;
            position: absolute;
            background: dimgrey;
        }

        .iphone_left:before {
            content: '';
            width: .188em;
            height: .875em;
            position: absolute;
            top: 3em;
            background: dimgrey;
        }

        .iphone_left:after {
            content: '';
            width: .188em;
            height: .875em;
            position: absolute;
            top: 5.5em;
            background: dimgrey;
        }

        .iphone_details {
            width: .438em;
            height: .438em;
            border-radius: 100%;
            position: relative;
            top: 1.313em;
            left: 10.503em;
            background: gray;
        }

        .iphone_details:before {
            content: '';
            width: 2.5em;
            height: 0.25em;
            border-radius: .25em;
            position: absolute;
            top: 1em;
            left: -1em;
            background: gray;
        }

        .iphone_screen {
            width: 19.5em;
            height: 27.938em;
            position: absolute;
            top: 3.75em;
            left: .750em;
            overflow: hidden;
        }

        .iphone_content {
            position: relative;
            background: #ffffff;
            width: 100%;
            height: 100%;
        }

        .iphone_home {
            width: 2.25em;
            height: 2.25em;
            border-radius: 100%;
            position: absolute;
            bottom: 1em;
            right: 9em;
            background: gray;
        }

        .iphone_home:before {
            content: '';
            width: .813em;
            height: .813em;
            border: .15em solid dimgrey;
            border-radius: .2em;
            position: absolute;
            top: .7em;
            left: .7em;
        }
    </style>
</head>
<body>

@if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
    <form style="position:absolute; right: 1em; top: 1em;">
        <button type="button" onclick="window.location.href='{{ route('model.get') }}'" name="modelButton" class="btn btn-primary model-button">Change to IOS Phone</button>
    </form>

    <div class="android">
        <div class="android-details"></div>
        <div class="android-left"></div>
        <div class="android-screen">
            <div class="android-content" style="background-color: #eae7e2;">
                <div class="container top-menu" style="position: absolute; z-index: 100; background-color: black; width: 100%; padding-left: 14em">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                        <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
                        <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                        <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-battery-half" viewBox="0 0 16 16">
                        <path d="M2 6h5v4H2V6z"/>
                        <path d="M2 4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2zm10 1a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h10zm4 3a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8z"/>
                    </svg>

                    <small><small><small><small>{{\Illuminate\Support\Carbon::now()->format('h:i')}}</small></small></small></small>
                </div>
                @yield('content')
            </div>
        </div>

        <div style="width: 100%; height: auto; position: absolute; bottom: 1.6em;">
            <div class="container">
                <div class="row py-2">
                    <div class="col-4">
                        <svg style="margin-left: 50%; transform: translateX(-50%)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" class="bi bi-caret-left" viewBox="0 0 16 16">
                            <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                        </svg>
                    </div>
                    <div class="col-4">
                        <svg onclick="location.href='/';" style="margin-left: 50%; transform: translateX(-50%); cursor: pointer" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#000000" class="bi bi-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        </svg>
                    </div>
                    <div class="col-4">
                        <svg style="margin-left: 50%; transform: translateX(-50%)" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" class="bi bi-app" viewBox="0 0 16 16">
                            <path d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="android-home" onclick="location.href='/';" style="cursor: pointer"></div>--}}
    </div>
@else
    <form style="position:absolute; right: 1em; top: 1em;">
        <button type="button" onclick="window.location.href='{{ route('model.get') }}'" name="modelButton" class="btn btn-primary model-button">Change to Android Phone</button>
    </form>

    <div class="iphone">
        <div class="iphone_power"></div>
        <div class="iphone_left"></div>
        <div class="iphone_details"></div>
        <div class="iphone_screen">
            <div class="iphone_content" style="background-color: #eae7e2;">
                {{--Content Here--}}
                <div class="container top-menu" style="position: absolute; z-index: 100">
                    <div class="row">
                        <div class="col text-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#000000"
                                 class="bi bi-bar-chart" viewBox="0 0 16 16">
                                <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                            </svg>

                            <small><small><small><small style="color: black;">Telstra</small></small></small></small>

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" class="bi bi-wifi-2 pb-1" viewBox="0 0 16 16">
                                <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z"/>
                            </svg>
                        </div>
                        <div class="col text-center">
                            <small><small><small><small style="color: black;">{{\Illuminate\Support\Carbon::now()->format('h:i')}}</small></small></small></small>
                        </div>
                        <div class="col text-end ">
                            <small><small><small><small style="color: black;">69%</small></small></small></small>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="000000" class="bi bi-battery-half" viewBox="0 0 16 16">
                                <path d="M2 6h5v4H2V6z"/>
                                <path d="M2 4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2zm10 1a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h10zm4 3a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
        <div class="iphone_home" onclick="location.href='/';" style="cursor: pointer"></div>
    </div>
@endif


</body>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

<!-- JQuery from CDN -->
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>

<!-- Javascript Section -->
@yield('javascript')

</html>
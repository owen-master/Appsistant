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
<div class="iphone">
    <div class="iphone_power"></div>
    <div class="iphone_left"></div>
    <div class="iphone_details"></div>
    <div class="iphone_screen">
        <div class="iphone_content" style="background-color: #eae7e2;">
            {{--Content Here--}}
            <div class="container" style="position: absolute; z-index: 100">
                <div class="row">
                    <div class="col text-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                             class="bi bi-bar-chart" viewBox="0 0 16 16">
                            <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                        </svg>

                        <small><small><small><small>Telstra</small></small></small></small>

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wifi-2 pb-1" viewBox="0 0 16 16">
                            <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z"/>
                        </svg>
                    </div>
                    <div class="col text-center">
                        <small><small><small><small>{{\Illuminate\Support\Carbon::now()->format('h:i')}}</small></small></small></small>
                    </div>
                    <div class="col text-end">
                        <small><small><small><small>69%</small></small></small></small>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-battery-half" viewBox="0 0 16 16">
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
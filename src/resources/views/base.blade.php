<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

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

    .iphone_left:after{
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
        top: .6em;
        left: .57em;
    }
</style>
</head>
<body>
<div class="iphone">
    <div class="iphone_power"></div>
    <div class="iphone_left"></div>
    <div class="iphone_details"></div>
    <div class="iphone_screen">
        <div class="iphone_content">
            {{--Content Here--}}
            @yield('content')
        </div>
    </div>
    <div class="iphone_home" onclick="location.href='/';"></div>
</div>
</body>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>
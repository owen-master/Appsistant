@extends('base')

@section('title')
    Landing
@endsection

@section('content')
    <div class="p-3 pt-4" style="min-height: 100%; background: mintcream;">

        @if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
            <div class="search">
                <svg style="width:0; height:0; position:absolute;" aria-hidden="true" focusable="false">
                    <linearGradient id="google-gradient" x2="1" y2="1">
                        <stop offset="0%" stop-color="#FF0000" />
                        <stop offset="60%" stop-color="#ffe400" />
                        <stop offset="70%" stop-color="#2986cc" />
                    </linearGradient>
                </svg>

                <svg style="margin-left: 0.5em" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="url(#google-gradient)" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                </svg>

                <small style="color: gray; opacity: 0.5; font-size: 0.7em">Search...</small>

                <svg style="float: right; margin-top: .3em; margin-right: .5em" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                    <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
                </svg>

                <svg style="float: right; margin-top: .3em; margin-right: .5em" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>

                <svg style="float: right; margin-top: .3em; margin-right: .5em" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                    <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
                    <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </div>
        @endif

        <div class="container">
            <div class="row my-2">
                <div class="col-4">
                    <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)" onclick="location.href='{{route('splash.get')}}';">
                        <img src="/assets/icon.png" width="16px" height="auto">
                    </button>
                    <small class="d-block text-center mb-2"><small>Appsistant</small></small>
                </div>
                <div class="col-4">
                    @if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
                        <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)">

                            <img style="filter: invert(100%)" src="/assets/android_clock.png" width="16px" height="auto">
                        </button>
                        <small class="d-block text-center mb-2"><small>Clock</small></small>
                        @else
                                <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                    </button>
                    <small class="d-block text-center mb-2"><small>Clock</small></small>
                    @endif
                </div>
                <div class="col-4">
                    @if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
                        <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)">

                            <img style="filter: invert(100%)" src="/assets/android_email.png" width="16px" height="auto">
                        </button>
                        <small class="d-block text-center mb-2"><small>Email</small></small>
                    @else
                    <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                    </button>
                    <small class="d-block text-center mb-2"><small>Email</small></small>
                    @endif
                </div>
                <div class="col-4">
                    @if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
                        <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)">

                            <img style="filter: invert(100%)" src="/assets/android_calendar.png" width="16px" height="auto">
                        </button>
                        <small class="d-block text-center mb-2"><small>Calendar</small></small>
                    @else
                    <button type="button" class="btn btn-dark" style="margin-left: 50%; transform: translateX(-50%)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                    </button>
                    <small class="d-block text-center mb-2"><small>Calendar</small></small>
                    @endif
                </div>
                <div class="col-4">
                    @if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
                        <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)">

                            <img style="filter: invert(100%)" src="/assets/android_gallery.png" width="16px" height="auto">
                        </button>
                        <small class="d-block text-center mb-2"><small>Gallery</small></small>
                    @else
                    <button type="button" class="btn btn-dark" style="margin-left: 50%; transform: translateX(-50%)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                        </svg>
                    </button>
                    <small class="d-block text-center"><small>Gallery</small></small>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>

@if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
    <div class="app-hub" style="width: 100%; height: auto; margin-top: -6.5em">
@else
    <div class="app-hub" style="width: 100%; height: auto; margin-top: -4.5em">
@endif
        <div class="container">
            <div class="row py-2">
                <div class="col-4">
                    @if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
                        <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)">

                            <img style="filter: invert(100%)" src="/assets/android_call.png" width="16px" height="auto">
                        </button>
                        <small class="d-block text-center mb-2"><small>Phone</small></small>
                    @else
                    <button type="button" class="btn btn-dark btn-btm btm-1" style="margin-left: 50%; transform: translateX(-50%)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>                    </button>
                    <small class="d-block text-center"><small>Phone</small></small>
                    @endif
                </div>
                <div class="col-4">
                    @if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
                        <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)">

                            <img style="filter: invert(100%)" src="/assets/android_message.png" width="16px" height="auto">
                        </button>
                        <small class="d-block text-center mb-2"><small>Message</small></small>
                    @else
                    <button type="button" class="btn btn-dark btn-btm btm-2" style="margin-left: 50%; transform: translateX(-50%)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
                        </svg>
                    </button>
                    <small class="d-block text-center"><small>Message</small></small>
                    @endif
                </div>
                <div class="col-4">
                    @if(\App\Http\Helpers\PhoneModelHelper::getModel() == \App\Http\Helpers\PhoneModelHelper::MODEL_ANDROID)
                        <button type="button" class="btn btn-dark btn-top" style="margin-left: 50%; transform: translateX(-50%)">

                            <img style="filter: invert(100%)" src="/assets/android_contacts.png" width="16px" height="auto">
                        </button>
                        <small class="d-block text-center mb-2"><small>Contacts</small></small>
                    @else
                    <button type="button" class="btn btn-dark btn-btm btm-3" style="margin-left: 50%; transform: translateX(-50%)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                        </svg>
                    </button>
                    <small class="d-block text-center"><small>Contacts</small></small>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
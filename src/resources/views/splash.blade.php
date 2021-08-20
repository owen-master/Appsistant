@extends('base')

@section('title')
    Splash
@endsection

@section('content')
    <div class="text-center" style="padding-top: 30%;">
        <img src="/assets/logo.jpg" height="90px" width="90px">
        <h1>Appsistant</h1>
        <small>We got you!</small>
    </div>

    <!-- Redirect to landing page after 3 seconds -->
    <script type="text/javascript">
        setTimeout(function() {
            window.location.href = '{{ route('landing.get') }}';
        }, 3000);
    </script>

@endsection
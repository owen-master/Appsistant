@extends('base')

@section('title')
    Landing
@endsection

@section('content')
    <div class="p-3">
        <a type="button" class="btn btn-lg btn-outline-primary" href="{{ route('splash.get') }}">

            <img src="/assets/logo.jpg" width="30px" height="auto">
            <small class="d-block">Appsistant</small>
        </a>
    </div>

@endsection
@extends('layouts.layout')
@section('content')

    <div id="sb-site">
        @include('partials.chat_slider')
        @include('partials.stadistics_slidebar')

        <div id="loading">
            <div class="svg-icon-loader"><img src="{{asset('assets/images/svg-loaders/bars.svg') }}" width="40" alt=""></div>
        </div>

        @include('partials.default')

    </div>

@endsection

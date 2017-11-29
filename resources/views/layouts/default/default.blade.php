<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    @include('layouts.default.header')
</header>

<main>
    <section id="app">
        @yield('content')
    </section>
</main>

@include('layouts.default.footer')

@component('layouts.default.body_scripts')
    @yield('scripts')
@endcomponent

</body>
</html>

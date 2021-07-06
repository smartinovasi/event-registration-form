<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - {{ config('app.desc') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition @yield('body')-page">
    <div id="app" class="py-4" style="min-height: 100vh; display: flex; flex-direction: column; justify-content: center; width: 100%;">
        @if (App::environment('local') && $errors->any())
            <x-alert.errors class="mx-3 mt-3 mb-0" />
        @endif
        <div>
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>

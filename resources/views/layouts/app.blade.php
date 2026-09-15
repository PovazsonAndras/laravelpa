<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
@include('layouts.navigation')
<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'LaravelApp') }}</title>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    @include('layouts.navigation')
    <main>
        @yield('content')
    </main>
    <footer>
        {{ config('app.name', 'LaravelApp') }} v{{ config('app.version') }} (PHP v{{ PHP_VERSION }})
    </footer>
</body>
</html>

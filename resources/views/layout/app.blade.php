<!DOCTYPE html>
<html lang="en">
<head>
    {{--  ============================= Metas ============================  --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--  ============================= Styles ===========================  --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{--  ================================================================  --}}
    @stack('styles')
    {{--  ================================================================  --}}
    <title>EICM - @yield('title')</title>
</head>
<body>
    <div id="app-front">
        @yield('main-content')
        {{--  ======================================================================  --}}
        <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
        {{-- Other JS Scripts --}}
        @stack('scripts')
        {{--  ======================================================================  --}}
    </div>
</body>
</html>

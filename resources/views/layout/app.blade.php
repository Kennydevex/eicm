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
    @include('layout.partials.styles')
    {{--  ================================================================  --}}
    @stack('styles')   
    {{--  ================================================================  --}}

    <title>EICM - @yield('title')</title>
</head>
<body>
    <div id="app-front">
        @yield('main-content')
        {{--  =============================== Scripts ==============================  --}}
        @include('layout.partials.script')
        {{--  ======================================================================  --}}
        @stack('scripts')
        {{--  ======================================================================  --}}
        
    </div>
</body>
</html>
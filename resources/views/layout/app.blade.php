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
    <link rel="stylesheet" href="{{mix('/css/normalize.css')}}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{--  ================================================================  --}}
    @stack('styles')   
    {{--  ================================================================  --}}

    <title>EICM - @yield('title')</title>
</head>
<body>
    <div id="app-front">
        @yield('main-content')
        {{--  =============================== Scripts ==============================  --}}
<<<<<<< HEAD
        <script src="{{mix('/js/app.js')}}"></script>
=======
        {{--@include('layout.partials.script')--}}
>>>>>>> master
        {{--  ======================================================================  --}}
        @stack('scripts')
        {{--  ======================================================================  --}}
    </div>
</body>
</html>
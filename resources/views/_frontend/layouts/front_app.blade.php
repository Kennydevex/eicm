@extends('layout.app')
{{--  @push('styles')
@endpush  --}}
@section('main-content')
        @include('_frontend.layouts.partials.nav-bar')
        {{-- Esta é a parte principal da aplicação --}}
        <div class="">
            {{-- Aqui é a parte em que cham o corpo da aplicação --}}
            @yield('content')
        </div>
        @include('_frontend.layouts.partials.footer')
@endsection
@push('scripts')
<script>
    $(".dropdown-trigger").dropdown();
</script>
@endpush

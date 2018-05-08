@extends('layout.app')
@push('styles')
@include('_backend.layouts.partials.styles')
@endpush
@section('main-content')
    <header>
        {{-- @include('layouts.partials.frontend.top_header') --}}
        @include('_backend.layouts.partials.nav-bar')
    </header>

{{-- Esta é a parte principal da aplicação --}}
    <main>
        <div class="">
            {{-- Aqui é a parte em que cham o corpo da aplicação --}}
            @yield('content')
        </div>
    </main>

    <footer>
        @include('_backend.layouts.partials.footer')
    </footer>
@endsection

@push('script')
@include('_backend.layouts.partials.scripts')
@endpush
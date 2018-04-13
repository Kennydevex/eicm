@extends('layout.app')
@push('styles')
    
@endpush
@section('body-content')
    <header>
        {{-- @include('layouts.partials.frontend.top_header') --}}
        @include('_frontend.partials.nav-bar')
    </header>

{{-- Esta é a parte principal da aplicação --}}
    <main>
        <div class="">
            {{-- Aqui é a parte em que cham o corpo da aplicação --}}
            @yield('main-content')
        </div>
    </main>

    <footer>
        @include('_frontend.partials.footer')
    </footer>
@endsection

@push('script')
@endpush
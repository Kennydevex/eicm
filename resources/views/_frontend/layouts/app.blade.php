@extends('layout.app')
@section('main-content')
  {{-- ======================================================================= --}}
  @include('_frontend.layouts.partials.nav-bar')
  @include('_frontend.layouts.partials.carousel')
  {{-- ======================================================================= --}}
  @yield('content')
  {{-- ======================================================================= --}}
  @include('_frontend.layouts.partials.footer')
  {{-- ======================================================================= --}}
@endsection

@push('scripts')

  <script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown-trigger").dropdown();
    $(".button-collapse").sideNav();$('.carousel').carousel();
    $('.slider').slider();

  });
  </script>

@endpush

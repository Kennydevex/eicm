@extends('_frontend.layouts.front_app')

@section('content')


@endsection
@push('scripts')
<script>
    $(".dropdown-trigger").dropdown();
</script>
@endpush

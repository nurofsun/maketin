@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    @include('section.income')
    @include('section.student')
@endsection

@section('sidebar')
    @include('section.log')
@endsection

@push('scripts')
    <script src="{{ @asset('js/home.js') }}"></script>
@endpush
